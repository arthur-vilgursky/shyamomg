<?php

namespace App\Http\Middleware;

use App\Services\TenantSettingsService;
use Illuminate\Http\Request;

class TenantMiddleware
{
    public function __construct(
        protected TenantSettingsService $tenantSettingsService,
    ) {
    }

    public function handle(Request $request, callable $next)
    {
        $tenantId = $request->header('tenant_id');
        $this->tenantSettingsService->setTenantId($tenantId === null ? null : (int)$tenantId);

        return $next($request);
    }
}