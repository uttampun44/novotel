<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 grid  grid-cols-2">
         <div class="sidemenu grid">
            @include('layouts.header.siderbar')
         </div>

         <div class="dashboard-content col-span-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-10">
                   <div class="dashboard-col grid gap-y-4 justify-center">
                    <div class="p-6 text-gray-900">
                        <p class="text-lg font-medium leading-normal"> {{ __("You're logged in!") }} </p>
                         <img src="{{asset('images/user.svg')}}" alt="user" class="w-40 h-40 object-cover my-9" />
                     </div>
                     <div class="dashboard-title">
                           <h1 class="text-xl font-bold leading-normal">Welcom to your dashboard</h1>
                     </div>
                   </div>
                </div>
            </div>
         </div>
    </div>
</x-app-layout>

