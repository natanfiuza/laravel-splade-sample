<x-layout>
    <x-slot name="header">
        {{ __('User') }}
    </x-slot>
    <x-panel>
        <p class="text-2xl text-bold">
            {{ $user->name }}
        </p>
    </x-panel>

</x-layout>
