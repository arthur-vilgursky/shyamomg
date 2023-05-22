<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function __construct(
        protected UserService $userService,
    ) {
    }

    public function index(): JsonResponse
    {
        $users = $this->userService->getList();

        return response()->json($users, JsonResponse::HTTP_OK);
    }
}
