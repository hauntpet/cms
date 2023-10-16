<?php

namespace Haunt\CMS\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use function Orchestra\Testbench\artisan;

class TestCase extends BaseTestCase
{
    /**
     * Add the package provider
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Haunt\CMS\HauntServiceProvider::class,
        ];
    }

    /**
     * Define database migrations.
     *
     * @return void
     */
    protected function defineDatabaseMigrations()
    {
        $this->loadMigrationsFrom(realpath(__DIR__.'/../database/migrations'));
        artisan($this, 'migrate');
    }
}
