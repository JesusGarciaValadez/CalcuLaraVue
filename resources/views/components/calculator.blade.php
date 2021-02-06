<div class="mt-12 mb-5">
    <x-calculator.result />
    <form action="{{ route('calculation.store') }}" method="POST" class="grid grid-cols-4 gap-1 grid-cols">
        @csrf
        <x-calculator.buttons.number>7</x-calculator.buttons.number>
        <x-calculator.buttons.number>8</x-calculator.buttons.number>
        <x-calculator.buttons.number>9</x-calculator.buttons.number>
        <x-calculator.buttons.operator>÷</x-calculator.buttons.operator>
        <x-calculator.buttons.number>4</x-calculator.buttons.number>
        <x-calculator.buttons.number>5</x-calculator.buttons.number>
        <x-calculator.buttons.number>6</x-calculator.buttons.number>
        <x-calculator.buttons.operator>×</x-calculator.buttons.operator>
        <x-calculator.buttons.number>1</x-calculator.buttons.number>
        <x-calculator.buttons.number>2</x-calculator.buttons.number>
        <x-calculator.buttons.number>3</x-calculator.buttons.number>
        <x-calculator.buttons.operator>−</x-calculator.buttons.operator>
        <x-calculator.buttons.number>0</x-calculator.buttons.number>
        <x-calculator.buttons.submit>=</x-calculator.buttons.submit>
        <x-calculator.buttons.operator>+</x-calculator.buttons.operator>
        <x-calculator.buttons.clear>Clear tape</x-calculator.buttons.clear>
    </form>
</div>
