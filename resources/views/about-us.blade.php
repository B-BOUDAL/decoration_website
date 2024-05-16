@extends('layouts.master')
@section('main')
<!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class="mb-32 text-center">
  <h2 class=" py-8 mb-4 text-5xl tracking-tight font-serif text-center text-gray-900 dark:text-white bg-clip-text text-transparent bg-gradient-to-r from-neutral-100 to-amber-900">Our stores</h2>
    </h2>

    <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
      <div class="mb-6 lg:mb-0">
        <div
          class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
          <div class="flex">
            <div
              class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
              data-te-ripple-init data-te-ripple-color="light">
              <img src="{{('/boutique2.jpg')}}" class="w-full" />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                </div>
              </a>
            </div>
          </div>
          <div class="p-6">
            <h5 class="mb-3 text-xl font-serif text-amber-900">Morocco</h5>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
              <small>Published <u>13.01.2022</u> by
                <a href="#!">Anna Maria Doe</a></small>
            </p>
            <p class="mb-4 pb-2 font-serif">
              Ut pretium ultricies dignissim. Sed sit amet mi eget urna
              placerat vulputate. Ut vulputate est non quam dignissim
              elementum. Donec a ullamcorper diam.
            </p>
            <a href="#!" data-te-ripple-init data-te-ripple-color="light"
              class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-serif uppercase leading-normal text-amber-900 shadow-[0_4px_9px_-4px_#78350f] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] bg-[#e8e3dd]">Read
              more</a>
          </div>
        </div>
      </div>

      <div class="mb-6 lg:mb-0">
        <div
          class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
          <div class="flex">
            <div
              class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
              data-te-ripple-init data-te-ripple-color="light">
              <img src="{{asset('/boutique.jpg')}}" class="w-full" />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                </div>
              </a>
            </div>
          </div>
          <div class="p-6">
            <h5 class="mb-3 text-xl font-serif text-amber-900">Italy</h5>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
              <small>Published <u>12.01.2022</u> by
                <a href="#!">Halley Frank</a></small>
            </p>
            <p class="mb-4 pb-2 font-serif">
              Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
              diam orci, nec ornare metus semper sed. Integer volutpat
              ornare erat sit amet rutrum.
            </p>
            <a href="#!" data-te-ripple-init data-te-ripple-color="light"
              class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-serif uppercase leading-normal text-amber-900 shadow-[0_4px_9px_-4px_#78350f] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] bg-[#e8e3dd]">Read
              more</a>
          </div>
        </div>
      </div>

      <div class="mb-0">
        <div
          class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
          <div class="flex">
            <div
              class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
              data-te-ripple-init data-te-ripple-color="light">
              <img src="{{asset('/boutique4.jpg')}}" class="w-full " />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                </div>
              </a>
            </div>
          </div>
          <div class="p-6">
            <h5 class="mb-3 text-xl font-serif text-amber-900">France</h5>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
              <small>Published <u>10.01.2022</u> by
                <a href="#!">Joe Svan</a></small>
            </p>
            <p class="mb-4 pb-2 font-serif">
              Curabitur tristique, mi a mollis sagittis, metus felis mattis
              arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
              massa volutpat feugiat. Donec.
            </p>
            <a href="#!" data-te-ripple-init data-te-ripple-color="light"
              class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-serif uppercase leading-normal text-amber-900 shadow-[0_4px_9px_-4px_#78350f] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] bg-[#e8e3dd]">Read
              more</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->

<!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->







  <section class="mb-32">
  <h2 class=" py-8 mb-4 text-5xl tracking-tight font-serif text-center text-gray-900 dark:text-white bg-clip-text text-transparent bg-gradient-to-r from-neutral-100 to-amber-900">Our services</h2>
    </h2>
    <div class="flex flex-wrap items-center">
      <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-6 lg:mb-0 lg:w-5/12">
        <div class="relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init data-te-ripple-color="light">
          <img src="{{asset('/image2.jpg')}}" class="w-full max-h-full" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,0%,0.2)] bg-fixed">
              <div class="flex h-full items-center justify-center">
                <div class="px-6 py-12 text-center text-[#e8e3dd] md:px-12">
                  <h3 class="mb-6 text-2xl font-serif uppercase">
                    The future is
                    <u class="text-amber-900">now</u>
                  </h3>
                  <!-- <p class="text-neutral-500  font-serif">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Harum quia laboriosam error consequuntur fugit,
                    doloribus rerum, iure nesciunt amet quidem veniam
                    cupiditate hic fugiat dolore aperiam quisquam libero
                    earum quibusdam?
                  </p> -->
                </div>
              </div>
            </div>
            <div class="relative overflow-hidden bg-cover bg-no-repeat">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="w-full shrink-0 grow-0 basis-auto md:px-6 lg:w-7/12 ">
        <div class="mb-12 flex">
          <div class="shrink-0">
            <div class="rounded-md bg-[#e8e3dd] p-4 shadow-lg dark:bg-[hsl(204,23%,30%)] ">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-6 w-6 text-amber-900 ">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
              </svg>
            </div>
          </div>
          <div class="ml-4 grow ">
            <p class="mb-1 font-serif text-amber-900 text-xl">Support 24/7</p>
            <p class="text-neutral-500 dark:text-neutral-300">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Nihil quisquam quibusdam modi sapiente magni molestias
              pariatur facilis reprehenderit facere aliquam ex.
            </p>
          </div>
        </div>

        <div class="mb-12 flex">
          <div class="shrink-0">
            <div class="rounded-md bg-[#e8e3dd] p-4 shadow-lg dark:bg-[hsl(204,23%,30%)]">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-6 w-6 text-amber-900">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
              </svg>
            </div>
          </div>
          <div class="ml-4 grow">
            <p class="mb-1 font-serif text-amber-900 text-xl">Safe and solid</p>
            <p class="text-neutral-500 dark:text-neutral-300">
              Eum nostrum fugit numquam, voluptates veniam neque quibusdam
              ullam aspernatur odio soluta, quisquam dolore animi mollitia a
              omnis praesentium, expedita nobis!
            </p>
          </div>
        </div>

        <div class="mb-12 flex">
          <div class="shrink-0">
            <div class="rounded-md bg-[#e8e3dd] p-4 shadow-lg dark:bg-[hsl(204,23%,30%)]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-6 w-6 text-amber-900">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                  </svg>
            </div>
          </div>
          <div class="ml-4 grow">
            <p class="mb-1 font-serif text-amber-900 text-xl">Extremely fast</p>
            <p class="text-neutral-500 dark:text-neutral-300">
              Enim cupiditate, minus nulla dolor cumque iure eveniet facere
              ullam beatae hic voluptatibus dolores exercitationem? Facilis
              debitis aspernatur amet nisi iure eveniet facere?
            </p>
          </div>
        </div>

        <div class="flex">
          <div class="shrink-0">
            <div class="rounded-md bg-[#e8e3dd] p-4 shadow-lg dark:bg-[hsl(204,23%,30%)]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-6 w-6 text-amber-900">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                  </svg>
            </div>
          </div>
          <div class="ml-4 grow">
            <p class="mb-1 font-serif text-amber-900 text-xl">Money back guarantee</p>
            <p class="text-neutral-500 dark:text-neutral-300">
              Illum doloremque ea, blanditiis sed dolor laborum praesentium
              maxime sint, consectetur atque ipsum ab adipisci ullam
              aspernatur odio soluta, quisquam dolore
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->
@endsection