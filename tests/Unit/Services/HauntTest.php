<?php

use Haunt\CMS\Services\Haunt;

beforeEach(function () {
    $this->class = new Haunt();
});

test('can check if Haunt is installed', function () {
    expect(method_exists($this->class, 'isInstalled'))
        ->toBeTrue()
        ->and($this->class->isInstalled())
        ->toBeTrue();
})->group('service', 'haunt');

test('can get the plugins table name', function () {
    expect(method_exists($this->class, 'pluginsTableName'))
        ->toBeTrue()
        ->and($this->class->pluginsTableName())
        ->toBeString();
})->group('service', 'haunt');
