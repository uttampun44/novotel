<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<section>
    <div class="rooms-info-container">
        <div class="py-12 grid">
            <div class="sidemenu grid">
               @include('layouts.header.siderbar');
            </div>

          <div class="rooms-table mr-8 ml-72 my-8">
              <div class="rooms-row mx-auto sm:px-6 lg:px-8">
                  <div class="rooms flex justify-center bg-white overflow-hidden shadow-sm sm:rounded-lg py-10">
                    <tbody>
                        <table class="w-[60%]">
                           <tr>
                               <th class="border-2 border-collapse border-white bg-blue-900 font-bold text-xl py-2 px-4 text-white">Room Available</th>
                               <th class="border-2 border-collapse border-white p-4 bg-blue-900 font-bold text-xl py-2 px-4 text-white">Room Types</th>
                               <th class="border-2 border-collapse border-white p-4 bg-blue-900 font-bold text-xl py-2 px-4 text-white">Update</th>
                               <th class="border-2 border-collapse border-white p-4 bg-blue-900 font-bold text-xl py-2 px-4 text-white">Delete</th>
                           </tr>
                           <tr class="text-center">
                               <td class="border-2 border-collapse border-white bg-slate-300 font-bold text-xl py-2 px-4 text-white">Yes</td>
                               <td class="border-2 border-collapse border-white bg-slate-300 font-bold text-xl py-2 px-4 text-white">Semi Deluxe</td>
                               <td class="border-2 border-collapse border-white bg-slate-300 font-bold text-xl py-2 px-4 text-white cursor-pointer"><i class="fa fa-edit" style="font-size:36px;color:red"></i></td>
                               <td class="border-2 border-collapse border-white bg-slate-300 font-bold text-xl py-2 px-4 text-white cursor-pointer"><i class="fa fa-trash-o" style="font-size:36px;color:red"></i></td>
                           </tr>
                        </table>
                     </tbody>
                  </div>
              </div>
          </div>
    </div>
</section>
</x-app-layout>