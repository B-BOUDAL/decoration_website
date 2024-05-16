@extends('layouts.master')
@section('main')
<section class="gradient-form h-full font-serif ">
  <div class="container h-full p-10 ">
    <div
      class="flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200 ">
      <div class="max-w-4xl ">
        <div
          class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800  ">
          <div class="g-0 lg:flex lg:flex-wrap ">
            <!-- Left column container-->
            <div class="px-4 md:px-0 lg:w-6/12 max-h-screen	 ">
              <div class="md:mx-6 md:p-12 ">
                <!--Logo-->
                <div class="text-center">
                  <h4 class="mb-12 mt-1 pb-1 text-2xl font-serif text-amber-900">
                   CosyHome
                  </h4>
                </div>

                <form action="{{ url('/register-form') }}" method="POST" class="space-y-8">
                  @csrf
                  <!-- <p class="mb-4">Please register an account</p> -->
                  <!--Username input-->
                  <div class="relative mb-4" data-twe-input-wrapper-init>
                    <input
                      type="text"
                      name="name"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                      id="exampleFormControlInput1"
                      placeholder="Username" />
                    <label
                      for="exampleFormControlInput1"
                      class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary"
                      >Full name
                    </label>
                  </div>
                  <!-- phone number input  -->
                  {{-- <div class="relative mb-4" data-twe-input-wrapper-init> --}}
                    {{-- <input
                      type="text"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                      id="exampleFormControlInput1"
                      placeholder="Username" />
                    <label
                      for="exampleFormControlInput1"
                      class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary"
                      >Phone number
                    </label> --}}
                  {{-- </div> --}}
                  <!-- address input  -->
                  {{-- <div class="relative mb-4" data-twe-input-wrapper-init> --}}
                    {{-- <input
                      type="text"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                      id="exampleFormControlInput1"
                      placeholder="Username" />
                    <label
                      for="exampleFormControlInput1"
                      class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary"
                      >Address
                    </label> --}}
                  {{-- </div> --}}
                  <!-- Email input  -->
                  <div class="relative mb-4" data-twe-input-wrapper-init>
                    <input
                      type="text"
                      name="email"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                      id="exampleFormControlInput1"
                      placeholder="Username" />
                    <label
                      for="exampleFormControlInput1"
                      class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary"
                      >Email address
                    </label>
                  </div>

                  <!--Password input-->
                  <div class="relative mb-4" data-twe-input-wrapper-init>
                    <input
                      name="password"
                      type="password"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                      id="exampleFormControlInput11"
                      placeholder="Password" />
                    <label
                      for="exampleFormControlInput11"
                      class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary"
                      >Password
                    </label>
                  </div>

                  <!--Submit button-->
                  <div class="mb-12 pb-1 pt-1 text-center">
                    <button
                      class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-dark-3 transition duration-150 ease-in-out hover:shadow-dark-2 focus:shadow-dark-2 focus:outline-none focus:ring-0 active:shadow-dark-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                      type="submit"
                      data-twe-ripple-init
                      data-twe-ripple-color="light"
                      style="
                        background: linear-gradient(to right, #A35C3E, #A35C3E, #86472D, #86472D);">
                      Sign up
                    </button>

                    
                  </div>
                </form>
                  <!--Register button-->
                  <div class="flex items-center justify-between pb-6">
                    <p class="mb-0 me-2">Have an account?</p>
                    <a href="{{asset('/login-form')}}"><button
                      type="button"
                      class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-danger-50/50 hover:text-danger-600 focus:border-danger-600 focus:bg-danger-50/50 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-rose-950 dark:focus:bg-rose-950 bg-[#e8e3dd]"
                      data-twe-ripple-init
                      data-twe-ripple-color="light">
                      Login
                    </button></a>
                  </div>
              </div>
            </div>

            <!-- Right column container with background and description-->
            <div
              class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-e-lg lg:rounded-bl-none">
              <img src="{{asset('/mtlapcevic Stock Image and Video Portfolio.jpeg')}}" alt="">
              <div class="px-4 py-6 text-white md:mx-6 md:p-12">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="public/style.js"></script>
</section>
@endsection