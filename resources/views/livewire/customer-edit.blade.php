<div>
    <x-dialog-modal wire:model.live="modalCustomerEdit" submit="edit">
        <x-slot name="title">
            Form Edit Customer
        </x-slot>
    
        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">
                <!-- Name -->
                <div class="col-span-12">
                    <x-label for="form.name" value="Name" />
                    <x-input wire:model="form.name" id="form.name" type="text" class="w-full mt-1" required autocomplete="form.name" />
                    <x-input-error for="form.name" class="mt-1" />
                </div>

                <!-- Email -->
                <div class="col-span-12">
                    <x-label for="form.email" value="Email" />
                    <x-input wire:model="form.email" id="form.email" type="text" class="w-full mt-1" required autocomplete="form.email" />
                    <x-input-error for="form.email" class="mt-1" />
                </div>

                <!-- Address -->
                <div class="col-span-12">
                    <x-label for="form.address" value="Address" />
                    <x-input wire:model="form.address" id="form.address" type="text" class="w-full mt-1" required autocomplete="form.address" />
                    <x-input-error for="form.address" class="mt-1" />
                </div>
            </div>
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('modalCustomerEdit', false)" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>
    
            <x-button class="ml-2" wire:loading.attr="disabled">
                Update
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
