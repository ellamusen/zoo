<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Animals') }}
        </h2>
    </x-slot>

    <div class="px-32 my-10">
        <div class="w-full">

            <!-- Form -->
            <form action="/upload" method="post" enctype="multipart/form-data">
                @csrf

                <label for="file" class="block text-md font-medium text-gray-900">Upload dit fortrukne dyr</label>
                <x-input type="file" name="image"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mb-8"></x-input>

                <label for="file" class="block text-md font-medium text-gray-900">Beskriv dit fortrukne dyr her</label>
                <x-textarea name="text" cols="30" rows="5" placeholder="Jeg elsker det her dyr, fordi..."
                            class="w-full"></x-textarea>
                <div class="flex justify-center mt-8">
                    <button type="submit" value="Upload"
                            class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Submit
                    </button>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>
