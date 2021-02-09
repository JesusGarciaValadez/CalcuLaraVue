<x-layout>
    <div class="bg-white dark:bg-gray-800 py-16 px-4 sm:px-6 lg:px-8 lg:py-24">
        <div class="relative max-w-xl mx-auto" id="app" v-cloak>
            <x-calculator.ornament class="absolute left-full transform translate-x-1/2" />
            <x-calculator.ornament class="absolute right-full bottom-0 transform -translate-x-1/2" />

            <x-calculator.title-section>
                <x-slot name="title">Calculator</x-slot>
                Please, select the operation that you want to make.
            </x-calculator.title-section>

            <x-calculator />

            <x-calculator.ticker-tape />
        </div>
    </div>
</x-layout>
