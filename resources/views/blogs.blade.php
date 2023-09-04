
<x-layout>
    <x-slot name="header">
        {{ __('Blogs') }}
    </x-slot>

    <x-panel>
       {!! Markdown::parse($mk_source) !!}

    </x-panel>
</x-layout>
