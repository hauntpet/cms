<?php

use Haunt\CMS\Commands\InstallCommand;

test('can run the command', function () {
    $this->artisan('haunt:install')
        ->expectsOutput(InstallCommand::textHauntInstalled());
})->group('command', 'install');
