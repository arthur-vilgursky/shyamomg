<?php

namespace App\Providers;

use anlutro\LaravelSettings\DatabaseSettingStore;
use App\Services\TenantSettingsService;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class TenantSettingsProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('tenant.settings', function (Container $app) {
            /** @var DatabaseSettingStore $settingsStore */
            $settingsStore = $app->get('setting');
            $service = new TenantSettingsService($settingsStore);

            $settingsStore->setExtraColumns([
                'tenant_id' => $service->getTenantId(),
            ]);

            return $service;
        });
    }
}
