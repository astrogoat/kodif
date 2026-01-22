<?php

namespace Astrogoat\Kodif\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class KodifSettings extends AppSettings
{
    public string $site_id;

    public function rules(): array
    {
        return [
            'site_id' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function description(): string
    {
        return 'Interact with Kodif.';
    }

    public function labels(): array
    {
        return [
            'site_id' => 'Site ID',
        ];
    }

    public static function group(): string
    {
        return 'kodif';
    }
}
