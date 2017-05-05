<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;

class RegistrationsController extends Controller
{
    public function create()
    {
      return view('registrations.create');
    }

    public function store(RegistrationRequest $request)
    {
      // Create and save the user.
      $user = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password'))
      ]);

      // Sign the user in.
      auth()->login($user);

      // Send welcome email
      \Mail::to($user)->send(new Welcome($user));

      // Redirect home
      return redirect()->home();
    }
}
