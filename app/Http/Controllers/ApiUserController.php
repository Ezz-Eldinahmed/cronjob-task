<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\ApiResource;
use App\Models\User;
use App\Repositories\UserRepository;

class ApiUserController extends Controller
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store(StoreUserRequest $request)
    {
        return new ApiResource($this->userRepository->store($request));
    }

    public function show(User $user)
    {
        return new ApiResource($this->userRepository->show($user));
    }
}
