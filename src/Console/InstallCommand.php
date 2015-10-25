<?php

namespace Oxwox\RadiateInstaller\Console;

use Symfony\Component\Process\Process;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InstallCommand extends Command
{
    /**
     * Configure the command options.
     *
     * @return void
     */
    protected function configure()
    {
        $this->ignoreValidationErrors();

        $this->setName('install')
            ->setDescription('Install Laravel Radiate into the current project.');
    }

    /**
     * Execute the command.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $composer = $this->findComposer();

        $process = new Process($composer . ' require oxwox/radiate', null, null, null, null);

        $process->run(function ($type, $line) use ($output) {
            $output->write($line);
        });

        copy(__DIR__ . '/stubs/app.php', getcwd() . '/config/app.php');

        passthru('php artisan radiate:install');
    }

    /**
     * Get the composer command for the environment.
     *
     * @return string
     */
    private function findComposer()
    {
        if (file_exists(getcwd() . '/composer.phar')) {
            return '"' . PHP_BINARY . '" composer.phar"';
        }

        return 'composer';
    }
}
