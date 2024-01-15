<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @include('layouts.header.siderbar')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <p> {{ __("You're logged in!") }} </p>
                    <img src="{{asset('images/user.svg')}}" alt="user" class="w-40 h-40 object-cover" />
                </div>
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
</x-app-layout>

