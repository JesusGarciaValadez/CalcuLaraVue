<div class="mt-12 mb-5">
    <x-calculator.result />
    <form action="{{ route('calculation.store') }}" method="POST" class="grid grid-cols-4 gap-1 grid-cols">
        @csrf

        @for ($i = 7; $i <= 9; $i++)
            <x-calculator.buttons.number>{{ $i }}</x-calculator.buttons.number>
        @endfor
        <x-calculator.buttons.operator>÷</x-calculator.buttons.operator>
        @for ($i = 4; $i <= 6; $i++)
            <x-calculator.buttons.number>{{ $i }}</x-calculator.buttons.number>
        @endfor
        <x-calculator.buttons.operator>×</x-calculator.buttons.operator>
        @for ($i = 1; $i <= 3; $i++)
            <x-calculator.buttons.number>{{ $i }}</x-calculator.buttons.number>
        @endfor
        <x-calculator.buttons.operator>−</x-calculator.buttons.operator>
        <x-calculator.buttons.number>0</x-calculator.buttons.number>
        <x-calculator.buttons.submit>=</x-calculator.buttons.submit>
        <x-calculator.buttons.operator>+</x-calculator.buttons.operator>
        <x-calculator.buttons.clear>Clear tape</x-calculator.buttons.clear>
    </form>
</div>
