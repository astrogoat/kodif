<?php

namespace Astrogoat\Kodif;

use Helix\Lego\Apps\AppToken;
use Astrogoat\Kodif\Settings\KodifSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\AppPackageServiceProvider;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Spatie\LaravelPackageTools\Package;

class KodifServiceProvider extends AppPackageServiceProvider
{
    public function registerApp(App $app): App
    {
        return $app
            ->name('kodif')
            ->settings(KodifSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations/settings',
            ])
            ->includeFrontendViews(function (IncludeFrontendViews $views) {
                return $views->addToEnd(['kodif::script']);
            })
            ->tokens([
                AppToken::name('Open Kodif chat widget')
                    ->type(AppToken::TYPE_TEXT)
                    ->key('open-chat-widget')
                    ->value('window.openKodifChat();')
                    ->description('Opens the Kodif chat widget.'),
            ]);
    }

    public function configurePackage(Package $package): void
    {
        $package->name('kodif')->hasConfigFile()->hasViews();
    }
}
