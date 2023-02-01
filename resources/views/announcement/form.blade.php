<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $header }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if ( session('status') )
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('status') }} 
                </div>
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form method="POST" action="{{ ( url()->current() == url('/announcement/add') ) ? url('/announcement/add') : url('/announcement/update/' . $announcement->id) }}" enctype="multipart/form-data"> 
                        @csrf

                        <!-- Header -->
                        <div>
                            <x-input-label for="Header" :value="__('Header')" />
                            <x-text-input id="header" class="block mt-1 w-full" type="text" name="header" :value="( url()->current() == url('/announcement/add') ) ? old('header'):$announcement->header" required autofocus />
                            <x-input-error :messages="$errors->get('header')" class="mt-2" />
                        </div>

                        <!-- Sub_Header -->
                        <div class="mt-4">
                            <x-input-label for="sub_header" :value="__('sub_header')" />
                            <x-text-input id="sub_header" class="block mt-1 w-full" type="sub_header" name="sub_header" :value="( url()->current() == url('/announcement/add') ) ? old('sub_header'):$announcement->sub_header" required />
                            <x-input-error :messages="$errors->get('sub_header')" class="mt-2" />
                        </div>

                            {{-- Image --}}
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload image</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="image">
                        </div>

                            {{-- Description --}}
                        <div class="mt-4">
                            <x-input-label for="Discription" :value="__('Discription')" />
                            <x-text-input id="discription" class="block mt-1 w-full" type="discription" name="description" :value="( url()->current() == url('/announcement/add') ) ? old('description'):$announcement->description" required />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <input name="user_id" value="{{ auth()->user()->id }}" hidden>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ $header }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>