<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('components.layouts.login')]
#[Title('Login Page')]
class LoginController extends Component
{
    public $username ='';
    public $password ='';

    public function render()
    {
        return view('livewire.login-controller');
    }

    public function login(){
        $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['username' => $this->username, 'password' => $this->password])){
            return $this->redirect('/admin', navigate:true);
        }else {
            session()->flash('error', 'Alamat Email atau Password Anda salah!.');
            return $this->redirect('/login', navigate:true);
        }
    }
}
