<x-layout>
    <x-slot name="header">
        {{ __('Docs Toggle') }}
    </x-slot>

    <x-panel>
        <p class="text-2xl font-bold mb-2">Use x-splade-toggle</p>
        <x-splade-toggle>
            <button v-show="!toggled" @click="setToggle(true)" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" >Show more</button>
            <button v-show="toggled" @click="setToggle(false)" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" >Show less</button>
            <p v-show="!toggled">Short content...</p>
            <p v-show="toggled">Full content: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam quod iusto, libero nemo atque accusantium laboriosam sed possimus iste consectetur perferendis harum repellat a. Architecto, illo veritatis. Ullam, dolorem quos? Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nobis magnam assumenda, sed eos ipsum voluptas aliquid facere, aspernatur qui optio. Qui ab quod debitis. Placeat sunt sit exercitationem iste.</p>
        </x-splade-toggle>
        <hr class="mt-5 mb-5">
        <p class="text-2xl font-bold mb-2">Use x-splade-data</p>
        <x-splade-data :default="['show' => true]" remember="content" local-storage>
            <button v-show="!data.show" @click="data.show = true" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" >Show more</button>
            <button v-show="data.show" @click="data.show = false" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" >Show less</button>
            <p v-show="!data.show" class>Short content...</p>
            <p v-show="data.show">Full content: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam quod iusto, libero nemo atque accusantium laboriosam sed possimus iste consectetur perferendis harum repellat a. Architecto, illo veritatis. Ullam, dolorem quos? Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nobis magnam assumenda, sed eos ipsum voluptas aliquid facere, aspernatur qui optio. Qui ab quod debitis. Placeat sunt sit exercitationem iste.</p>
        </x-splade-data>
    </x-panel>
</x-layout>
