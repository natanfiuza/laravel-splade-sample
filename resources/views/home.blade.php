<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />

        <div class="mt-8 text-2xl">
            Welcome to your Splade application!
        </div>
        <p class="mt-8">
            <Link modal href="/docs">Docs Modal </Link>
        </p>
        <p class="mt-8">
            <Link slideover href="/docs">Docs slideover</Link>
        </p>
        <p class="mt-8">
            <Link href="/docs_toggle">Docs toggle content </Link>
        </p>
    </x-panel>
</x-layout>
