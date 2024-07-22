<div>
    <x-dialog-modal wire:model.live="modalCustomerDelete">
        <x-slot name="title">
            Form Delete Customer
        </x-slot>
    
        <x-slot name="content">
            <p>Apakah anda ingin menghapus data ID: {{ $id }} dan Name: {{ $name }} ?</p>
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('modalCustomerDelete', false)" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>
    
            <x-danger-button @click="$wire.del()" class="ml-2" wire:loading.attr="disabled">
                Delete
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>
