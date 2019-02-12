<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Resources\UserResource;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function me(Request $request)
    {
        return new UserResource($request->user());
    }

    public function user(UserRepository $repository)
    {
        $users = $repository->all();

        return view('user.index', ['users' => $users]);
    }
}
