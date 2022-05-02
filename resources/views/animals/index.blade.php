<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Animals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('animals.create') }}" class="btn-link btn-lg mb-2">Upload dit dyr</a>
            @foreach ($animals as $animal)
                <div>
                    <h2>{{ $animal->title }}</h2>
                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
