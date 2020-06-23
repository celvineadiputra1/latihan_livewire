<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    protected $listeners = [
        'contactStored' => 'handlerStore'
    ];

    public function render()
    {
        return view('livewire.contact-index',[
            'contacts'=> Contact::latest()->get()
        ]);
    }

    public function destory($id){
        $data = Contact::findOrFail($id);
        session()->flash('message', "Contact {$data->name} was deleted");
        $data->delete();
    }

    public function handlerStore($re){
        // dd($re);
        session()->flash('message',"Contact {$re['name']} was stored");
    }
}
