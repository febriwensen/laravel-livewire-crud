<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Attributes\Locked;

class CustomerDelete extends Component
{

    #[Locked]
    public $id;

    #[Locked]
    public $name;

    public $modalCustomerDelete = false;

    #[On('dispatch-customer-table-delete')]
    public function set_customer($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        
        $this->modalCustomerDelete = true;
    }

    public function del()
    {
        $del = Customer::destroy($this->id);

        ($del)
        ? $this->dispatch('notify', title: 'success', message: 'Data berhasil di hapus')
        : $this->dispatch('notify', title: 'failed', message: 'Data gagal di hapus');

        $this->modalCustomerDelete = false;

        $this->dispatch('dispatch-customer-delete-del')->to(CustomerTable::class);
    }

    public function render()
    {
        return view('livewire.customer-delete');
    }
}
