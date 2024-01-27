<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<section class="room-section" id="roomSection">
    <div class="py-12 grid">
        <div class="sidemenu grid">
           @include('layouts.header.siderbar')
        </div>

        <div class="rooms-content mr-8 ml-72 my-8" id="content">
           <div class="mx-auto sm:px-6 lg:px-8">
               <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-10">
                  <div class="dashboard-col-form md:px-8">
                     <div class="form-container">
                         <form method="POST" action="{{url('/')}}">
                            @csrf
                             <div class="form-grid grid justify-items-center grid-cols-2 gap-y-6">
                                  <div class="cols-one">
                                      <label for="Property amenties">Property amenties</label><br>
                                      <input type="text" name="property-amenties" class="rounded-md" />
                                  </div>
                                  <div class="cols-two">
                                      <label>Room Available/Not Available</label><br>
                                      <select name="avaliable-not-available" class="rounded-md">
                                         <option selected>Available</option>
                                         <option>Not Available</option>
                                      </select>
                                  </div>
                                  <div class="cols-three">
                                       <label>Room Features</label><br>
                                       <input type="text" name="room-amenties" class="rounded-md" />
                                  </div>
                                  <div class="cols-four">
                                    <label>Room Types</label><br>
                                    <select name="room" class="rounded-md">
                                            <option>Normal</option>
                                            <option selected>Semi-deluxe</option>
                                            <option>Deluxe</option>
                                            <option>Luxury</option>
                                        </select>
                                  </div>
                                  <div class="add-room bg-green-700 md:px-6 md:py-2 rounded-lg">
                                    <button type="subit" class="text-white">Add Room</button>
                                </div>
                             </div>
                         </form>
                     </div>
                  </div>
               </div>
           </div>
        </div>
   </div>
</section>
</x-app-layout>