<?php

namespace Rifyne\RadiateLaravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class RadiatePresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('radiate', function ($command) {

            RadiatePreset::install();

            $command->info('Rifyne Radiate scaffolding installed successfully.');
            $command->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
