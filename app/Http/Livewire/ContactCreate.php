<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public $phone;

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store(){
        $re = Contact::create([
            'name'=> $this->name,
            'phone' => $this->phone
        ]);

        $this->resetInput();

        $this->emit('contactStored', $re);
    }

    private function resetInput(){
        $this->name = null;
        $this->phone = null;
    }
}
