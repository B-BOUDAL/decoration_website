@extends('layouts.master') 
@section('title')
    Acceuil
@endsection
@section('main')
    <div
    class="relative h-[500px] overflow-hidden bg-[url('spacejoy-c0JoR_-2x3E-unsplash-e1687865957632-1200x675.webp')] bg-cover bg-[50%] bg-no-repeat">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black/20 bg-fixed">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
          <h1 class="mb-6 text-5xl font-serif text-[#e8e3dd] ">CosyHome</h1>
          <!-- <h3 class="mb-8 text-3xl font-bold">Subeading</h3> -->
          <a href="{{asset('/products')}}"><button
            type="button"
            class="inline-block rounded border-2 border-[#e8e3dd] px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-amber-900 hover:text-amber-900	 focus:border-neutral-300 focus:text-neutral-200 focus:outline-none focus:ring-0 active:border-neutral-300 active:text-neutral-200 dark:hover:bg-amber-900 dark:focus:bg-neutral-600"
            data-twe-ripple-init
            data-twe-ripple-color="light">
            Shop Now
          </button></a>
        </div>
      </div>
    </div>
  </div>
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md text-5xl font-extrabold">
    <h2 class="font-serif  py-8 mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white bg-clip-text text-transparent bg-gradient-to-r from-neutral-400 to-amber-900">Our Categories</h2>
    <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl"></p>
    <div class="space-y-8 ">
        
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 ">
                @foreach ($categories as $category)
                    <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat">
                        <figure class="relative h-auto w-full transition-all duration-300 ">
                            <a href="{{ url('/category'.'/'.$category->id )}}">
                                <img class="h-[15rem] w-[15rem] rounded-lg transition duration-300 ease-in-out hover:scale-110" src="{{asset('storage/category').'/'. $category->image }}" alt="">
                            
                                <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                                    <p>{{ $category->nom }}</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                @endforeach
                
                {{-- <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat">
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                        <a href="{{asset('/armchairs')}}"><img class="h-[15rem] w-[15rem] rounded-lg images transition duration-300 ease-in-out hover:scale-110" src="{{asset('/amchairs.jpg')}}" alt="">
                        <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Armchairs</p>
                        </figcaption></a>
                    </figure>
                </div>
                
                <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat">
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                        <a href="{{asset('/chairs')}}"><img class="h-[15rem] max-w-full rounded-lg transition duration-300 ease-in-out hover:scale-110" src="{{asset('/chairs.jpg')}}" alt="">
                        <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                            <p>Chairs</p>
                        </figcaption></a>
                    </figure>
                </div>
                <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat">
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                    <a href="{{asset('/tables')}}"><img class="h-[15rem] w-[15rem] rounded-lg transition duration-300 ease-in-out hover:scale-110" src="{{asset('/tables.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Tables</p>
                    </figcaption></a>
                        </figure>
                </div>
                <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat">
                    <figure class="relative h-auto w-full transition-all duration-300">
                    <a href="{{asset('/paintings')}}"><img class="h-[15rem] w-[15rem] rounded-lg transition duration-300 ease-in-out hover:scale-110" src="{{asset('/tableau.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Paitings</p>
                    </figuration></a>
                        </figure>
                </div>
                <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat">
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                    <a href="{{asset('/vases')}}"><img class="h-[15rem] w-[15rem] rounded-lg images transition duration-300 ease-in-out hover:scale-110" src="{{asset('/vase.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Vases</p>
                    </figcaption></a>
                        </figure>
                </div>
                <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat">
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                    <a href="{{asset('/rugs')}}"><img class="h-[15rem] w-[15rem] rounded-lg images transition duration-300 ease-in-out hover:scale-110" src="{{asset('/rugs1.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Rugs</p>
                    </figcaption></a>
                        </figure>
                </div>
                <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat">
                    <figure class="relative h-auto w-full transition-all duration-300 ">
                    <a href="{{asset('/mirors')}}"><img class="h-[15rem] w-[15rem] rounded-lg images transition duration-300 ease-in-out hover:scale-110" src="{{asset('/Miror.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Mirors</p>
                    </figcaption></a>
                        </figure>
                </div>
                <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat">                    <figure class="relative h-auto w-full transition-all duration-300 ">
                    <a href="{{asset('/lamps')}}"><img class="h-[15rem] w-[15rem] rounded-lg images transition duration-300 ease-in-out hover:scale-110" src="{{asset('/lamps.jpg')}}" alt="">
                    <figcaption class="absolute px-4 text-lg text-stone-600 bottom-6">
                        <p>Lamps</p>
                    </figcaption></a>
                        </figure>
                </div> --}}
            </div>
        
    </div>
                
    </div>

@endsection