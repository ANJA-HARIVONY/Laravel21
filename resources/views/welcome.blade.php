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
        <div class="contaire">
        <section class="text-blueGray-700 ">
            <div class="container flex flex-col px-5 py-16 mx-auto lg:items-center md:flex-row lg:px-28">
              <div class="w-full mb-10 lg:w-5/6 lg:max-w-lg md:w-1/2">
                <img class="object-cover object-center rounded" alt="hero" loading="lazy" src="https://dummyimage.com/720x600/F3F4F7/8693ac">
              </div>
              <div class="flex flex-col items-start text-left lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">ANJA-HARIVONY</h2>
                <h1 class="mb-8 text-2xl font-bold tracking-tighter text-left text-black lg:text-5xl title-font">TONGASOA, application Technico de CONEXXIA </h1>
                <p class="mb-8 text-base leading-relaxed text-left text-blueGray-700 ">Deploy your mvp in minutes, not days. WT offers you a a wide selection swapable sections for your landing page.</p>
                <div class="flex flex-col justify-left lg:flex-row">
                  <button class="flex items-center px-6 py-2 mt-auto font-semibold text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2"> <a href="{{ route('acceuil')}}">Entrer</a></button>
                  <p class="mt-2 text-sm text-left text-blueGray-600 md:ml-6 md:mt-0"> It will take you to candy shop. <br class="hidden lg:block">
                    <a href="#" class="inline-flex items-center font-semibold text-blue-600 md:mb-2 lg:mb-0 hover:text-black " title="read more"> Read more about it » </a>
                  </p>
                </div>
              </div>
            </div>
          </section>
        </div>
        



        <script src=" {{asset('js/app.js')}} "></script>
    </body>
</html>
