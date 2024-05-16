@extends('layouts.master')
@section('main')
<!-- Section: Design Block -->
<section class="background-radial-gradient mb-40 overflow-hidden">
  
  <!-- Jumbotron -->
  <form action="{{ url('/login') }}" method="post">
    @csrf
  <div class="px-6 py-12 text-center md:px-12 lg:py-24 lg:text-left">
    <div class="w-100 mx-auto text-neutral-800 sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl ">
      <div class="grid items-center gap-12 lg:grid-cols-2">
        <div class="mt-12 lg:mt-0 " >
          <img src="{{asset('/image 1.jpg')}}" alt="" class=" rounded-lg">
        </div>
        <div class="relative mb-12 lg:mb-0 bg-[#e8e3dd] rounded-lg">
          <div
            class="relative  block rounded-lg px-6 py-12 md:px-12 shadow-2xl">
            @if (Session::has('message'))
              <div class="alert alert-success">
                <p>{{ Session::get('message') }}</p>
              </div>
            @endif
              <div class="relative mb-6" data-te-input-wrapper-init>
                <input type="email" name="email"
                  class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                  id="exampleFormControlInput3" placeholder="Email address" />
                <label for="exampleFormControlInput3"
                  class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Email
                  address
                </label>
              </div>
              <div class="relative mb-6" data-te-input-wrapper-init>
                <input type="password" name="password"
                  class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                  id="exampleFormControlInput4" placeholder="Password" />
                <label for="exampleFormControlInput4"
                  class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Password
                </label>
              </div>
              <button
                      class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-dark-3 transition duration-150 ease-in-out hover:shadow-dark-2 focus:shadow-dark-2 focus:outline-none focus:ring-0 active:shadow-dark-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                      type="submit"
                      data-twe-ripple-init
                      data-twe-ripple-color="light"
                      style="
                        background: linear-gradient(to right, #A35C3E, #A35C3E, #86472D, #86472D);">
                      Sign up
                    </button>
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
@endsection