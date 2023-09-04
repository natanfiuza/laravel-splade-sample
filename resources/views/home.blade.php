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
        <hr class="mt-5  mb-5" style="border: 3px black solid">
        <p class="text-2xl font-bold mb-2">Use x-splade-defer</p>
        <x-splade-defer url="http://api.quotable.io/random">
            <p v-text="response.content" class="mb-5 text-2xl" />
            <p v-text="response.author" class="mb-5 font-bold px-4" />
            <p v-if="processing">Processing...</p>
            <button @click="reload" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Reload</button>
        </x-splade-defer>
    </x-panel>
</x-layout>
