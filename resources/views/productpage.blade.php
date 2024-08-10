<x-layout>
    <x-slot:title>{{ ucwords($weapon["type"]) }}</x-slot>

    <x-products :data="$data" :type="$type"></x-products>
</x-layout>
