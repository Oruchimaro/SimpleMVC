<?php


class UserController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        echo $user;
    }

    public function create($username = '', $email = '')
    {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }
}
