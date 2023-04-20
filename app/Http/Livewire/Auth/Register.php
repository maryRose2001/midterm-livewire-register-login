<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{

    public $name;
    public $email;
    public $password;
    public $password_confirmation;


    public function register() {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);

        $user = User::create([
            'name'   =>     $this->name,
            'email' =>  $this->email,
            'password'  => bcrypt($this->password)
        ]);

        return redirect('/')->with('message', 'You registered your account successfully.');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
