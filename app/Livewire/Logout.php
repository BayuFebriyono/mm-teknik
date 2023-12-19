<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
        <li class="sidebar-item">
                <a class="sidebar-link" wire:click="logout">
                    <i class="fa-solid fa-door-open"></i> <span class="align-middle">Logout</span>
                </a>
            </li>
        </div>
        HTML;
    }

    public function logout(){
        Auth::logout();

        return $this->redirect('/', navigate:true);
    }
}
