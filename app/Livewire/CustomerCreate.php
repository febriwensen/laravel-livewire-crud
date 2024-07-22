<?php

namespace App\Livewire;

use App\Livewire\Forms\CustomerForm;
use Livewire\Component;

class CustomerCreate extends Component
{

    public CustomerForm $form;

    public $modalCustomerCreate = false;

    public function save()
    {
        $this->validate();

        $simpan = $this->form->store();

        is_null($simpan)
        ? $this->dispatch('notify', title: 'success', message: 'Data berhasil di simpan')
        : $this->dispatch('notify', title: 'failed', message: 'Data gagal di simpan');

        $this->dispatch('dispatch-customer-create-save')->to(CustomerTable::class);
    }

    public function render()
    {
        return view('livewire.customer-create');
    }
}
