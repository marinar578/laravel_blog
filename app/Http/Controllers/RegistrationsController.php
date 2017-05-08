<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationsController extends Controller
{
    public function create()
    {
      return view('registrations.create');
    }

    public function store(RegistrationForm $form)
    {
      $form->persist();

      // session global helper, takes a key and a default (give whatever's stored for message, but here's a default message also)
      // session('message', 'Here is a default message');

      // flash something for just one page load and doesn't store it to the session
      session()->flash('message', 'Thanks so much for signing up!');

      return redirect()->home();
    }
}
