<?php

namespace App\Services;

use anlutro\LaravelSettings\DatabaseSettingStore;
use anlutro\LaravelSettings\SettingStore;

class TenantSettingsService
{
    protected SettingStore $settingsStore;
    protected ?int $tenantId = null;

    public function __construct(
        DatabaseSettingStore $settingsStore,
    ) {
        $this->settingsStore = $settingsStore;
    }

    public function getTenantId(): ?int
    {
        return $this->tenantId;
    }

    public function setTenantId(?int $newValue): void
    {
        $this->tenantId = $newValue;
    }
}
