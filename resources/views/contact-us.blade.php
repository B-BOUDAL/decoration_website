@extends('layouts.master')
@section('main')
<!-- Container for demo purpose -->
<div class="container my-12 py-12 mx-auto px-4 md:px-6 lg:px-12">

  <!--Section: Design Block-->
  <section class="mb-20 text-gray-800 text-center">
    <h2 class="mb-4 text-4xl tracking-tight font-serif text-center text-gray-900 dark:text-white bg-clip-text text-transparent bg-gradient-to-r from-neutral-100 to-amber-900">Contact Us</h2>
    <div class="flex flex-wrap">
      <div class="mb-6 lg:mb-0 flex-initial shrink w-full lg:w-5/12 lg:pr-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12094.57348593182!2d-74.00599512526003!3d40.72586666928451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598f988156a9%3A0xd54629bdf9d61d68!2sBroadway-Lafayette%20St!5e0!3m2!1spl!2spl!4v1624523797308!5m2!1spl!2spl"
          class="h-56 md:h-full w-full border-0 rounded-md" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="flex-initial shrink w-full lg:w-7/12 lg:pl-3">
        <form action="{{ url('/contact-us') }}" method="POST" class="space-y-8">
          <div class="flex flex-wrap">
            <div class="flex-initial shrink w-full md:w-9/12 md:pr-3">
              <div class="grid md:grid-cols-2 md:gap-4 mb-6">
                <div class="mb-6 md:mb-0">
                  <input type="text"
                   name="nom"
                  class="font-serif text-amber-900 block w-full px-3 py-1.5 text-base font-normal  bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-amber-900 focus:outline-none" id="exampleX1" placeholder="First name" />
                </div>
                <div>
                  <input type="email"  
                   name="email"
                  class="font-serif text-amber-900 block w-full px-3 py-1.5 text-base font-normal  bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-amber-900 focus:outline-none" id="exampleX2" placeholder="Email address" />
                </div>
              </div>
              <div class="mb-6">
              </div>
              <div class="mb-6">
                <textarea  name="message" "form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-amber-900 focus:outline-none" id="exampleX4" rows="4" placeholder="Message"></textarea>
              </div>
              <div class="text-center md:text-left">
                <button type="submit" class="inline-block px-6 py-2.5 bg-amber-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-neutral-300 hover:shadow-lg focus:bg-amber-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out mb-12 md:mb-0">Send</button>
              </div>
            </div>
            <div class="flex-initial shrink w-full md:w-3/12 md:pl-3">
              <ul>
                <li>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-5 mx-auto text-amber-900 mb-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                  </svg>
                  <p class="mb-6"><small>New York, NY 10012, USA</small></p>
                </li>
                <li>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-6 mx-auto text-amber-900 mb-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path>
                  </svg>
                  <p class="mb-6"><small>+ 05 234 567 89</small></p>
                </li>
                <li>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="w-6 mx-auto text-amber-900 mb-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                  </svg>
                  <p><small>cosyhome@info.com</small></p>
                </li>
              </ul>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!--Section: Design Block-->

</div>
<!-- Container for demo purpose -->
<!-- <section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md text-5xl font-extrabold">
      <h2 class="mb-4 text-4xl tracking-tight font-serif text-center text-gray-900 dark:text-white bg-clip-text text-transparent bg-gradient-to-r from-neutral-100 to-amber-900">Contact Us</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
      <form action="#" class="space-y-8">
          <div>
              <label for="email" class="block mb-2 text-sm font-serif text-amber-900 dark:text-gray-300">Your email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-serif text-amber-900 dark:text-gray-300">Subject</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-serif text-amber-900 dark:text-gray-400">Your message</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-serif text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
      </form>
  </div>
  
</section> -->
@endsection