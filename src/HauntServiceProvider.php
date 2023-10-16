<?php

namespace Haunt\CMS;

use Haunt\CMS\Services\Haunt;
use Illuminate\Support\ServiceProvider;

class HauntServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->bootCommands();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerHaunt();
    }

    /**
     * Boot the commands.
     *
     * @return self
     */
    private function bootCommands(): self
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Haunt\CMS\Commands\InstallCommand::class,
            ]);
        }

        return $this;
    }

    /**
     * Register the haunt binding.
     *
     * @return self
     */
    private function registerHaunt(): self
    {
        $this->app->bind('haunt', function () {
            $haunt = new Haunt();

            return $haunt;
        });

        return $this;
    }
}
