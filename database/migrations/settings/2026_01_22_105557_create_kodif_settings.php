<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('kodif.enabled', false);
        $this->migrator->add('kodif.site_id', '');
    }

    public function down()
    {
        $this->migrator->delete('kodif.enabled');
        $this->migrator->delete('kodif.site_id');
    }
};
