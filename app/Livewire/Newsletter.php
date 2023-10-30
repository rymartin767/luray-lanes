<?php

namespace App\Livewire;

use Livewire\Component;

class Newsletter extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.newsletter');
    }

    public function formSubmitted()
    {
        // save email to newsletter db
        session()->flash('flash.banner', 'Successfully subscribed!.');
        return $this->redirect('/');
    }
}
