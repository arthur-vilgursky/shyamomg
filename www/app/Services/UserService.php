<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserService
{
    public function getList(): LengthAwarePaginator
    {
        return User::query()
            ->with('tenants')
            ->paginate()
        ;
    }
}
