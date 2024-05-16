
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&family=Roboto+Condensed:wght@300&family=Varela+Round&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <style>
.images{
    width : 70%px;
    height : 350px;
}
    </style>
    @include('header')
    <figure class=" relative h-auto w-full transition-all duration-300 ">
        <img class="h-96 w-full" src="{{asset('/salon-2.jpg')}}" alt="image description">
        <figcaption class="absolute px-4 px-8 text-lg text-black bottom-6 ">

            <button type="button" class=" container text-amber-900	  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 " style=background-color:#f8f9f0>
            <svg class="w-3.5 h-3.5 me-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
            <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
            </svg>
            Buy now
            </button>
        </figcaption>
    </figure>
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md text-5xl font-extrabold">
      <h2 class="font-serif  py-8 mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white bg-clip-text text-transparent bg-gradient-to-r from-neutral-400 to-amber-900">Our Categories</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl"></p>
      <form action="#" class="space-y-8">
          <div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 images">
                <div>
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                        <img class="h-auto max-w-full rounded-lg images" src="{{asset('/sofas.jpg')}}" alt="">
                        <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                            <p>Sofas</p>
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                        <img class="h-auto max-w-full rounded-lg images" src="{{asset('/amchairs.jpg')}}" alt="">
                        <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Amchairs</p>
                        </figcaption>
                    </figure>
                </div>
                
                <div>
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                        <img class="h-auto max-w-full rounded-lg images" src="{{asset('/chairs.jpg')}}" alt="">
                        <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                            <p>Chairs</p>
                        </figuration>
                     </figure>
                </div>
                <div>
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                    <img class="h-auto max-w-full rounded-lg images" src="{{asset('/tables.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Tables</p>
                    </figuration>
                        </figure>
                </div>
                <div>
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                    <img class="h-auto max-w-full rounded-lg images" src="{{asset('/tableau.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Paitings</p>
                    </figuration>
                        </figure>
                </div>
                <div>
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                    <img class="h-auto max-w-full rounded-lg images" src="{{asset('/vase.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Vases</p>
                    </figuration>
                        </figure>
                </div>
                <div>
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                    <img class="h-auto max-w-full rounded-lg images" src="{{asset('/rugs1.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Rugs</p>
                    </figuration>
                        </figure>
                </div>
                <div>
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                    <img class="h-auto max-w-full rounded-lg images" src="{{asset('/Miror.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Mirors</p>
                    </figuration>
                        </figure>
                </div>
                <div>
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                    <img class="h-auto max-w-full rounded-lg images" src="{{asset('/lamps.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Lamps</p>
                    </figuration>
                        </figure>
                </div>
            </div>
          </div>
      </form>
                
    </div>


@include('footer')
    
</body>

</html>

