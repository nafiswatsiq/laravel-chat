<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    {{-- @include('vendor.Chatify.pages.app') --}}
    <div x-data="{ open: false }">
        <div class="w-fit z-50 absolute bottom-0 right-4 border" x-show="open">
            <div class="relative">
                <p class="absolute -top-3 px-2 bg-white rounded-full border -right-2 cursor-pointer" x-on:click="open = ! open">X</p>
                <iframe src="{{ env('APP_URL') }}/dashboard/chat" frameborder="0" class="w-[20rem] h-[30rem]"></iframe>
            </div>
        </div>
        <div>
            <button class="fixed bottom-4 right-4 bg-blue-500 text-white px-3 rounded-full border p-2 flex items-center" x-on:click="open = ! open">
                Chat
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="comment" class="fill-white w-5 h-5 ml-1"><path d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"></path></svg>
            </button>
        </div>
    </div>
</x-app-layout>
