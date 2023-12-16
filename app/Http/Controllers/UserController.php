<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function index() {
        $user = User::with('room.type')->get();
        
        return UserResource::collection($user);
    }
    
    public function show(String $id) {
        $user = User::with('room.type')->where('id', $id)->first();
        
        if ($user !== null) {
            return new UserResource($user);
        } else {
            return "user not found";
        }
    }
    
    public function create(UserCreateRequest $request) {
        $data = $request->validated();
        
        $user = new User($data);
        $user->save();
        
        return new UserResource($user);
    }
    
    public function update(UserUpdateRequest $Request, String $id) {
        $data = $Request->validated();

        $user = User::where('id', $id)->first();

        if ($user !== null) {
            $user->fill($data);
            $user->save();

            return new UserResource($user);
        } else {
            return "user not found";
        }
        
    }
    
    public function delete(String $id) {
        $user = User::where('id', $id)->first();

        if ($user !== null) {
            $user->delete();        
        } else {
            return "user not found";
        }
    }


}
