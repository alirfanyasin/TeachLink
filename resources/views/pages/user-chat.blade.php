@extends('layouts.user-dashboard')
@section('content')
  <section class="flex-1 flex flex-col">
    <div class="bg-white rounded-2xl border border-gray-300 p-5">
      <h2 class="font-bold mb-2 text-xl p-3">Kontak Mentor</h2>

      <div class="h-[455px] overflow-y-auto">
        <div class="flex items-center space-x-2 hover:cursor-pointer p-3 bg-[#007ADD] text-white rounded-xl mb-2">
          <div class="w-12 h-12 overflow-hidden rounded-full border-gray-200 border-2">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="font-semibold">John Doe</h3>
            <p class="text-sm font-light">Lorem ipsum dolor sit amet...</p>
          </div>
        </div>
        <div class="flex items-center space-x-2 hover:cursor-pointer p-3 hover:bg-gray-100 rounded-xl mb-2">
          <div class="w-12 h-12 overflow-hidden rounded-full border-2 border-gray-200">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="font-semibold">John Doe</h3>
            <p class="text-sm font-light">Lorem ipsum dolor sit amet...</p>
          </div>
        </div>
        <div class="flex items-center space-x-2 hover:cursor-pointer p-3 hover:bg-gray-100 rounded-xl mb-2">
          <div class="w-12 h-12 overflow-hidden rounded-full border-2 border-gray-200">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="font-semibold">John Doe</h3>
            <p class="text-sm font-light">Lorem ipsum dolor sit amet...</p>
          </div>
        </div>
        <div class="flex items-center space-x-2 hover:cursor-pointer p-3 hover:bg-gray-100 rounded-xl mb-2">
          <div class="w-12 h-12 overflow-hidden rounded-full border-2 border-gray-200">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="font-semibold">John Doe</h3>
            <p class="text-sm font-light">Lorem ipsum dolor sit amet...</p>
          </div>
        </div>

        <div class="flex items-center space-x-2 hover:cursor-pointer p-3 hover:bg-gray-100 rounded-xl mb-2">
          <div class="w-12 h-12 overflow-hidden rounded-full border-2 border-gray-200">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="font-semibold">John Doe</h3>
            <p class="text-sm font-light">Lorem ipsum dolor sit amet...</p>
          </div>
        </div>

        <div class="flex items-center space-x-2 hover:cursor-pointer p-3 hover:bg-gray-100 rounded-xl mb-2">
          <div class="w-12 h-12 overflow-hidden rounded-full border-2 border-gray-200">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="font-semibold">John Doe</h3>
            <p class="text-sm font-light">Lorem ipsum dolor sit amet...</p>
          </div>
        </div>

        <div class="flex items-center space-x-2 hover:cursor-pointer p-3 hover:bg-gray-100 rounded-xl mb-2">
          <div class="w-12 h-12 overflow-hidden rounded-full border-2 border-gray-200">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="font-semibold">John Doe</h3>
            <p class="text-sm font-light">Lorem ipsum dolor sit amet...</p>
          </div>
        </div>

        <div class="flex items-center space-x-2 hover:cursor-pointer p-3 hover:bg-gray-100 rounded-xl mb-2">
          <div class="w-12 h-12 overflow-hidden rounded-full border-2 border-gray-200">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="font-semibold">John Doe</h3>
            <p class="text-sm font-light">Lorem ipsum dolor sit amet...</p>
          </div>
        </div>

        <div class="flex items-center space-x-2 hover:cursor-pointer p-3 hover:bg-gray-100 rounded-xl mb-2">
          <div class="w-12 h-12 overflow-hidden rounded-full border-2 border-gray-200">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="font-semibold">John Doe</h3>
            <p class="text-sm font-light">Lorem ipsum dolor sit amet...</p>
          </div>
        </div>
      </div>

    </div>
  </section>


  <section class="flex-2 flex flex-col">
    <div class="bg-white rounded-2xl border border-gray-300 p-5">
      <div class="flex items-center space-x-2 hover:cursor-pointer p-3 bg-gray-100 rounded-xl mb-2">
        <div class="w-12 h-12 overflow-hidden rounded-full border-2 border-gray-200">
          <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full h-full object-cover" alt="">
        </div>
        <div>
          <h3 class="font-semibold">John Doe</h3>
          <p class="text-xs font-regular">Mentor Gitar</p>
        </div>
      </div>

      <div class="h-[385px] overflow-y-auto">
        <div class="bubble-chat-left mt-3 flex justify-start space-x-2 ">
          <div class="w-8 h-8 overflow-hidden rounded-full border-2 border-gray-200 shrink-0">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full  h-full object-cover" alt="">
          </div>
          <div>
            <div class="border border-blue-400 p-3 text-sm text-gray-600 rounded-xl">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius in itaque ipsa illo perferendis magni
              repellendus, ratione asperiores a. Provident!
            </div>
            <small class="text-gray-500">8:00 PM</small>
          </div>
        </div>

        <div class="bubble-chat-left mt-3 flex justify-start space-x-2 ">
          <div class="w-8 h-8 overflow-hidden rounded-full border-2 border-gray-200 shrink-0">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full  h-full object-cover" alt="">
          </div>
          <div>
            <div class="border border-blue-400 p-3 text-sm text-gray-600 rounded-xl">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </div>
            <small class="text-gray-500">8:00 PM</small>
          </div>
        </div>



        <div class="bubble-chat-right mt-3 flex justify-end space-x-2">
          <div class="w-8 h-8 overflow-hidden rounded-full border-2 ml-2 border-gray-200 shrink-0 order-2">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full  h-full object-cover" alt="">
          </div>
          <div>
            <div class="border bg-[#007ADD] p-3 text-sm text-white rounded-xl order-1">
              Lorem ipsum, dolor sit amet consectetur adipisicing
            </div>
            <small class="text-right flex justify-end text-gray-500">8:00 PM</small>
          </div>
        </div>

        <div class="bubble-chat-left mt-3 flex justify-start space-x-2 ">
          <div class="w-8 h-8 overflow-hidden rounded-full border-2 border-gray-200 shrink-0">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full  h-full object-cover"
              alt="">
          </div>
          <div>
            <div class="border border-blue-400 p-3 text-sm text-gray-600 rounded-xl">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius in itaque ipsa illo perferendis magni
              repellendus, ratione asperiores a. Provident!
            </div>
            <small class="text-gray-500">8:00 PM</small>
          </div>
        </div>

        <div class="bubble-chat-right mt-3 flex justify-end space-x-2">
          <div class="w-8 h-8 overflow-hidden rounded-full border-2 ml-2 border-gray-200 shrink-0 order-2">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full  h-full object-cover"
              alt="">
          </div>
          <div>
            <div class="border bg-[#007ADD] p-3 text-sm text-white rounded-xl order-1">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio expedita, nulla quisquam, adipisci
              mollitia excepturi deleniti quae voluptatem officiis placeat minus accusantium? Doloremque cumque autem
              commodi. Accusamus labore doloribus cupiditate.
            </div>
            <small class="text-right flex justify-end text-gray-500">8:00 PM</small>
          </div>
        </div>


        <div class="bubble-chat-left mt-3 flex justify-start space-x-2 ">
          <div class="w-8 h-8 overflow-hidden rounded-full border-2 border-gray-200 shrink-0">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full  h-full object-cover"
              alt="">
          </div>
          <div>
            <div class="border border-blue-400 p-3 text-sm text-gray-600 rounded-xl">
              Lorem ipsum, dolor sit amet
            </div>
            <small class="text-gray-500">8:00 PM</small>
          </div>
        </div>



        <div class="bubble-chat-left mt-3 flex justify-start space-x-2 ">
          <div class="w-8 h-8 overflow-hidden rounded-full border-2 border-gray-200 shrink-0">
            <img src="{{ asset('assets/img/card-mentor/04.png') }}" class="w-full  h-full object-cover"
              alt="">
          </div>
          <div>
            <div class="border border-blue-400 p-3 text-sm text-gray-600 rounded-xl">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, cupiditate.😁😎😎😎
            </div>
            <small class="text-gray-500">8:00 PM</small>
          </div>
        </div>


      </div>

      <div class="input-chatting bg-white flex items-center space-x-1 rounded-lg pt-2">
        <input type="text" name="chat" id="chat"
          class="p-2 w-full text-base rounded-lg focus:outline-0 border-2 border-[#007ADD]"
          placeholder="Tulis pesan disini...">

        <button
          class="w-12 h-10 bg-[#007ADD] hover:bg-[#0060dd] flex hover:cursor-pointer justify-center items-center rounded-lg text-white">
          <iconify-icon icon="ic:round-send" width="24"></iconify-icon>
        </button>
      </div>
    </div>
  </section>
@endsection
