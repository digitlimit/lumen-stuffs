<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Return a collection of users
     *
     * @return UserResource
     */
    public function index()
    {
        return UserResource::collection(User::all());
    }
}
