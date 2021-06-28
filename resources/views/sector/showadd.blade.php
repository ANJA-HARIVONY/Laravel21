@extends('layouts.app')

@section('contenu')


<section>
    <div class="container items-center px-5 py-12 lg:px-20">
      <form class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2">
        <div class="flex flex-wrap mb-6 -mx-3">
          <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
            <label class="text-base leading-7 text-blueGray-500" for="grid-title"> Title </label>
            <input class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" id="grid-title" type="text" name="title" placeholder="The Unicorns Feed..." required="">
          </div>
          <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
            <label class="text-base leading-7 text-blueGray-500" for="grid-url"> URL </label>
            <input class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" id="grid-url" type="text" name="url" placeholder="https://..." required="">
          </div>
        </div>
        <div class="flex flex-wrap mb-6 -mx-3">
          <div class="w-full px-3">
            <label class="text-base leading-7 text-blueGray-500" for="description"> Comments </label>
            <textarea class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 apearance-none autoexpand" id="description" type="text" name="description" placeholder="Commentaire..." required=""></textarea>
          </div>
        </div>
          <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
            <label class="text-base leading-7 text-blueGray-500" for="date"> Date </label>
            <div class="relative ">
              <!---pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-blueGray-700-->
              <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-blueGray-500">
                <svg fill="#ffffff" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="flex items-center w-full pt-4">
          <button class="w-full py-3 text-base font-semibold text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Button </button>
        </div>
      </form>
    </div>
  </section>
@endsection