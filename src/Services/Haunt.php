<?php

namespace Haunt\CMS\Services;

use Illuminate\Support\Facades\Schema;

class Haunt
{
    /**
     * Check if Haunt has already been installed.
     *
     * @return bool
     */
    public function isInstalled(): bool
    {
        return Schema::hasTable(self::pluginsTableName());
    }

    /**
     * The name of the plugins table.
     *
     * @return string
     */
    public function pluginsTableName(): string
    {
        return 'plugins';
    }
}
