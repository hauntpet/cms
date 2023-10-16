<?php

namespace Haunt\CMS\Commands;

use Haunt\CMS\Extend\Command;
use Haunt\CMS\Facades\Haunt;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'haunt:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Haunt.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (! Haunt::isInstalled()) {
            $this->info($this->textMigratingRequired());
            $this->call('migrate', [
                '--path' => '/vendor/haunt/cms/database/migrations',
            ]);

            $this->info($this->textHauntInstall());
        } else {
            $this->info($this->textHauntInstalled());
        }
    }

    public static function textMigratingRequired(): string
    {
        return 'Migrating the required database tables.';
    }

    public static function textHauntInstall(): string
    {
        return 'Haunt has been installed.';
    }

    public static function textHauntInstalled(): string
    {
        return 'Haunt has already been installed.';
    }
}
