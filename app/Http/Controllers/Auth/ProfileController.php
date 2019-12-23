<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(Request $request){
        $user = $request->user();
        return view('auth.profile', compact('user'));
    }

    public function update(Request $request){
        $currentUser = $request->user();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username,'.$currentUser->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$currentUser->id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
}
