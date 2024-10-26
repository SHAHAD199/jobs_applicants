<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\Users\{StoreUserRequest, UpdateUserRequest};
use App\Repositries\UserRepo\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $userInfo;
    public function __construct(UserInterface $userInfo)
    {
        $this->userInfo = $userInfo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->userInfo->index($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        return $this->userInfo->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $this->userInfo->show($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        return $this->userInfo->update($user,$request);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        return $this->userInfo->destroy($user);
    }
}
