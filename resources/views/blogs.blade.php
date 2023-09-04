<x-layout>
    <x-slot name="header">
        {{ __('Blogs') }}
    </x-slot>

    <x-panel>

        <div class="markdown">
            {!! Markdown::parse($content) !!}
        </div>

    </x-panel>
</x-layout>
