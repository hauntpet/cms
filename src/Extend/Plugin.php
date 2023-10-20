<?php

namespace Haunt\CMS\Extend;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

abstract class Plugin
{
    /**
     * Run the database migrations.
     *
     * @param  string  $path
     * @return void
     */
    protected function runMigrations(string $path = '/database/migrations'): void
    {
        $path = '/vendor/'.$this->key().Str::start($path, '/');

        Artisan::call('migrate', [
            '--path' => $path,
        ]);
    }

    /**
     * Run the database seeders.
     *
     * @param  string  $class
     * @return void
     */
    protected function runSeeders(string $class): void
    {
        Artisan::call('db:seed', [
            '--class' => $class,
        ]);
    }

    /**
     * The unique key of the package.
     *
     * @return string
     */
    abstract public function key(): string;

    /**
     * Run the plugin.
     *
     * @return bool
     */
    abstract public function run(): bool;

    /**
     * Install the plugin.
     *
     * @return null|string
     */
    abstract public function install(): ?string;

    /**
     * Uninstall the plugin.
     *
     * @return null|string
     */
    abstract public function uninstall(): ?string;
}
