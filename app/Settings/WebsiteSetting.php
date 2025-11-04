<?php

use Spatie\LaravelSettings\Settings;

class WebsiteSetting extends Settings
{
    public string $site_name;

    public ?string $site_logo;

    public ?string $phone;

    public ?string $address;

    public ?string $email;

    public static function group(): string
    {
        return 'website';
    }
}
