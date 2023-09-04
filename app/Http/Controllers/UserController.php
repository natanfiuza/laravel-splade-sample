<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('user.show', ['user' => $user]);
    }
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }
    public function __invoke(Request $request)
    {
        $users = User::paginate();
        return view('user.index', ['users' =>
            SpladeTable::for($users)
            ->column('name','Nome')
            ->column('email','E-mail')
            ->column('language_code','Lingua')


    ]);
    }
    public function update(User $user)
    {

    }
}
