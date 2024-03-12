<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment;
use Livewire\Attributes\Validate;

class Appoint extends Component
{

    #[Validate('required')]
    public $name = '';
    
    public $email = '';

    #[Validate('required')]
    public $contact = '';

    #[Validate('required')]
    public $platform = '';

    public function rules() 
    {
        return [
            'email' => 'required|email',
        ];
    }
    
    public function saveAppoint()
    {

        $this->validate();

        Appointment::create(
            $this->only(['name', 'email', 'contact', 'platform'])
        );

        session()->flash('success', 'Your submission has been received successfully, we shall get back to you shortly.');

        $this->reset();
    
    }

    public function render()
    {
        return view('livewire.appoint')
        ->extends('layouts.forms');
    }
}
