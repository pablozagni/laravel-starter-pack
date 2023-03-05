<x-main-layout>
    <x-slot name="navbar">
        @include('layouts.guest.navbar')
    </x-slot>
    {{ $slot }}
</x-main-layout>
