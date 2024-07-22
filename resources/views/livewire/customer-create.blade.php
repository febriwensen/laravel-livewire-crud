<div>
    <x-button @click="$wire.set('modalCustomerCreate', true)">
        Create Customer
    </x-button>

    <x-dialog-modal wire:model.live="modalCustomerCreate" submit="save">
        <x-slot name="title">
            Form Customer
        </x-slot>
    
        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">
                <!-- Name -->
                <div class="col-span-12">
                    <x-label for="form.name" value="Name" />
                    <x-input wire:model="form.name" for="form.name" type="text" class="w-full mt-1" required autocomplete="form.name" />
                    <x-input-error for="form.name" class="mt-1" />
                </div>

                <!-- Email -->
                <div class="col-span-12">
                    <x-label for="form.email" value="Email" />
                    <x-input wire:model="form.email" for="form.email" type="text" class="w-full mt-1" required autocomplete="form.email" />
                    <x-input-error for="form.email" class="mt-1" />
                </div>

                <!-- Address -->
                <div class="col-span-12">
                    <x-label for="form.address" value="Address" />
                    <x-input wire:model="form.address" for="form.address" type="text" class="w-full mt-1" required autocomplete="form.address" />
                    <x-input-error for="form.address" class="mt-1" />
                </div>
            </div>
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCustomerCreate', false)" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>
    
            <x-button class="ms-3" wire:loading.attr="disabled">
                Simpan
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
