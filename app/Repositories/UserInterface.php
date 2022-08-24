<?php

namespace App\Repositories;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;

interface UserInterface
{
    public function store(StoreUserRequest $request);
    public function show(User $user);
}
