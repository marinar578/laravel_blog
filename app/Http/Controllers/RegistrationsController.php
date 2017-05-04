<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationsController extends Controller
{
    public function create()
    {
      return view('registrations.create');
    }

    public function store()
    {
      // Validate form
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
      ]);

      // Create and save the user.
      $user = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password'))
      ]);

      // Sign the user in.
      auth()->login($user);

      // Redirect home
      return redirect()->home();
    }
}