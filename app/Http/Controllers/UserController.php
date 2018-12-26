<?php

namespace App\Http\Controllers;


use App\Http\Repositories\UserRepository;

class UserController extends Controller
{
    protected $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    public function show($id)
    {
        $user = $this->users->find($id);
        return view('user.profile',['user'=>$user]);
    }


}