<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bookings;
use Livewire\Attributes\Validate;

class Book extends Component
{

    #[Validate('required')]
    public $name = "";

    public $email = "";

    #[Validate('required')]
    public $contact = "";

    #[Validate('required')]
    public $service = "";

    public function rules() 
    {
        return [
            'email' => 'required|email',
        ];
    }

    public function saveBook() 
    {
        $this->validate();

        Bookings::create(
            $this->only(['name', 'email', 'contact', 'service'])
        );

        session()->flash('success', 'Your submission has been received successfully, we shall get back to you shortly.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.book')
        ->extends('layouts.forms');
    }
}
