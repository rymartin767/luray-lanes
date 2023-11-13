<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Newsletter as ModelsNewsletter;

class Newsletter extends Component
{
    #[Rule('unique:newsletters', message: 'This email has already subscribed.')]
    #[Rule('email:rfc,dns,spoof,strict,filter')]
    public $email;

    public function render()
    {
        return view('livewire.newsletter');
    }

    public function formSubmitted()
    {
        $this->validate();

        ModelsNewsletter::create(['email' => $this->email]);

        session()->flash('flash.banner', 'Successfully subscribed!.');
        return $this->redirect('/');
    }
}
