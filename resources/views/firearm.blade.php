<x-layout>
    {{-- <x-slot:title>{{ $type }}</x-slot> --}}
    <h1 class="text-6xl font-quentico">{{ request()->path() }}</h1>
    <x-product />
</x-layout>
