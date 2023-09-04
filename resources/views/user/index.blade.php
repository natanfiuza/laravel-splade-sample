<x-layout>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>
    <x-panel>
        <div class="max-w-7x1 mx-auto p-8">
           <x-splade-table :for="$users"/>
        </div>
    </x-panel>

</x-layout>
