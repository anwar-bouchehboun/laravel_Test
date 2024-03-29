@extends('layout.master')
@section('title','Create_Computers')
@section('content')
   <div class="mx-auto ">

    <div class="px-0 text-center sm:items-center sm:justify-between">
        <h1 class="py-5 text-2xl font-bold">Formullaire Computers</h1>

    </div>
<form class="max-w-md p-4 mx-auto bg-blue-100 border shadow-md" method="POST" action="{{route('computers.store')}}">
    @csrf
    <div class="relative z-0 w-full mb-5 group">
        {{-- old :stocker donner  --}}
        <input type="text"  value="{{old('computer-name')}}"  name="computer-name" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
        <label for="computer-name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name Computer</label>
       @error('computer-name')
       <p class="mt-2 text-sm text-red-600"> {{$message}}.</p>

       @enderror
    </div>

    <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
          <input type="text" value="{{old('computer-origin')}}" name="computer-origin" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
          <label for="computer-origin" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Oeigin From</label>
          @error('computer-origin')
          <p class="mt-2 text-sm text-red-600"> {{$message}}.</p>

          @enderror        </div>
      <div class="relative z-0 w-full mb-5 group">
          <input type="text" value="{{old('computer-price')}}"  name="computer-price" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
          <label for="computer-price" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
          @error('computer-price')
          <p class="mt-2 text-sm text-red-600"> {{$message}}.</p>

          @enderror        </div>
    </div>

    <button type="submit" name="add" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Add Computer</button>
  </form>







@endsection
