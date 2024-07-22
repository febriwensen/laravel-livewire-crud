<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <livewire:customer-create />

                <livewire:customer-edit />

                <livewire:customer-delete />
                
                <livewire:customer-table />

            </div>
        </div>
    </div>
</div>
