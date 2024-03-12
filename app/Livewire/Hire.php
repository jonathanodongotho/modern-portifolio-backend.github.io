<?php

namespace App\Livewire;

use App\Models\HireUs;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Hire extends Component
{

    #[Validate('required')]
    public $name = '';
    
    public $email = '';

    #[Validate('required')]
    public $contact = '';

    #[Validate('required')]
    public $service = '';

    public function rules() 
    {
        return [
            'email' => 'required|email',
        ];
    }
    
    public function saveHire()
    {

        $this->validate();

        HireUs::create(
            $this->only(['name', 'email', 'contact', 'service'])
        );

        session()->flash('success', 'Your submission has been received, we shall get back to you shortly.');

        $this->reset();
    
    }

    public function render()
    {
        return view('livewire.hire')
        ->extends('layouts.forms');
    }
}
