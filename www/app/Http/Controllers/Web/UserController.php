<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function __construct(
        protected UserService $userService,
    ) {
    }

    public function index()
    {
        $users = $this->userService->getList();

        return view('users.list', [
            'users' => $users,
        ]);
    }
}
