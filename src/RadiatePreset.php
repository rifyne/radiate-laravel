<?php

namespace Rifyne\RadiateLaravel;

use Illuminate\Support\Arr;
use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;

class RadiatePreset extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::ensureComponentDirectoryExists();
        static::updatePackages();

        static::updateWebpackConfiguration();
        static::updateStyles();
        static::updateJavaScript();
        static::updateTemplates();
        static::removeNodeModules();
        static::updateGitignore();

        static::dotfiles();
    }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge([
            '@babel/preset-env' '^7.2.0',
            'laravel-mix-purgecss' => '^3.0',
            'postcss-nesting' => '^5.0.0',
            'postcss-import' => '^11.1.0',
            'prettier' => '^1.10.2',
            'tailwindcss' => '>=0.6.4',
        ], Arr::except($packages, [
            'bootstrap',
            'bootstrap-sass',
            'jquery',
            'popper.js',
        ]));
    }

    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__.'/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    protected static function updateStyles()
    {
        tap(new Filesystem, function ($files) {
            $files->deleteDirectory(resource_path('sass'));
            $files->delete(public_path('js/app.js'));
            $files->delete(public_path('css/app.css'));

            if (! $files->isDirectory($directory = resource_path('css'))) {
                $files->makeDirectory($directory, 0755, true);
            }
        });

        copy(__DIR__.'/stubs/resources/css/app.css', resource_path('css/app.css'));
    }

    protected static function updateJavaScript()
    {
        copy(__DIR__.'/stubs/app.js', resource_path('js/app.js'));
        copy(__DIR__.'/stubs/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    protected static function updateTemplates()
    {
        tap(new Filesystem, function ($files) {
            $files->delete(resource_path('views/home.blade.php'));
            $files->delete(resource_path('views/welcome.blade.php'));
            $files->copyDirectory(__DIR__.'/stubs/views', resource_path('views'));
        });
    }

    protected static function updateGitignore()
    {
        copy(__DIR__.'/stubs/gitignore-stub', base_path('.gitignore'));
    }

    protected static function dotfiles()
    {
        copy(__DIR__.'/stubs/babelrc-stub', base_path('.babelrc'));
        copy(__DIR__.'/stubs/browserslistrc-stub', base_path('.browserslistrc'));
        copy(__DIR__.'/stubs/prettierignore-stub', base_path('.prettierignore'));
        copy(__DIR__.'/stubs/prettierrc-stub', base_path('.prettierrc'));
    }
}
