<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href=" {{ asset('css/app.css')}}">
    </head>
    <body>
        < class="container">
          <div class="container items-center ">
            <div class="text-blueGray-700 rounded-lg">
              <div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">
                <a href="{{route('welcome')}}" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
                  <div class="inline-flex items-center">
                    <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">
                    </div>
                    <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8"> Conexxia DATABASE </h2>
                  </div>
                </a>
                <nav class="flex flex-wrap items-center justify-center text-base lg:mr-auto">
                  <ul class="items-center inline-block list-none lg:inline-flex">
                    <li>
                      <a href="{{route('acceuil')}}" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Acceuil</a>
                    </li>
                    <li>
                      <a href="{{route('sector.show')}}" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Sector</a>
                    </li>
                  </ul>
                </nav>
                <button class="w-auto px-8 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:b-gblue-700 ">Button </button>
              </div>
            </div>
          </div>
            @yield('contenu')

<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button>

        </div>
        <script src=" {{asset('js/app.js')}} "></script>
    </body>
</html>