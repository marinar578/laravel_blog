<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ];
    }

    public function persist()
    {
      // Create and save the user.
      $user = User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => bcrypt($this->password)
      ]);

      // Sign the user in.
      auth()->login($user);

      // Send welcome email
      \Mail::to($user)->send(new Welcome($user));
    }
}
