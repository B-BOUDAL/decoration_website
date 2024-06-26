<!-- component -->
<!-- This is an example component -->
<div class="w-full mx-auto bg-[#e8e3dd]">
    
    <nav class="border-gray-200">
    <div class="container w-full flex flex-wrap items-center justify-between">
        <a href="{{asset('/')}}" class="flex">
        <img class="h-16 mr-3" w-26  viewBox="0 0 51 70" fill="none" src="{{asset('/logo2.jpg')}}"><g clip-path="url(#clip0)"><path d="M1 53H27.9022C40.6587 53 51 42.7025 51 30H24.0978C11.3412 30 1 40.2975 1 53Z" fill="#76A9FA"></path><path d="M-0.876544 32.1644L-0.876544 66.411C11.9849 66.411 22.4111 55.9847 22.4111 43.1233L22.4111 8.87674C10.1196 8.98051 0.518714 19.5571 -0.876544 32.1644Z" fill="#A4CAFE"></path><path d="M50 5H23.0978C10.3413 5 0 15.2975 0 28H26.9022C39.6588 28 50 17.7025 50 5Z" fill="#1C64F2"></path></g><defs><clipPath id="clip0"><rect width="51" height="70" fill="white"></rect></clipPath></defs></svg>
            <span class="text-amber-900 font-serif self-center text-lg font-semibold whitespace-nowrap">CosyHome</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
                <a href="{{asset('/')}}" class=" font-serif bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-amber-900 md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-amber-900 md:p-0 font-medium flex items-center justify-between w-full md:w-auto font-serif">Category <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                   @foreach ($categories as $category)
                    <div class="py-1">
                        <a href="{{url('/category'.'/'.$category->id)}}" class=" font-serif text-sm hover:bg-[#e8e3dd] text-amber-900  block px-4 py-2">{{ $category->nom }}</a>
                    </div>
                   @endforeach
                    {{-- <div class="py-1">
                    <a href="{{asset('/tables')}}" class=" font-serif text-sm hover:bg-[#e8e3dd] text-amber-900  block px-4 py-2">Tables</a>
                    </div>
                    <div class="py-1">
                    <a href="{{asset('/rugs')}}" class=" font-serif text-sm hover:bg-[#e8e3dd] text-amber-900 block px-4 py-2">Rugs</a>
                    </div>
                    <div class="py-1">
                    <a href="{{asset('/chairs')}}" class=" font-serif text-sm hover:bg-[#e8e3dd] text-amber-900 block px-4 py-2">Chairs</a>
                    </div>
                    <div class="py-1">
                    <a href="{{asset('/armchairs')}}" class=" font-serif text-sm hover:bg-[#e8e3dd] text-amber-900 block px-4 py-2">Armchairs</a>
                    </div>
                    <div class="py-1">
                    <a href="{{asset('/sofas')}}" class=" font-serif text-sm hover:bg-[#e8e3dd] text-amber-900 block px-4 py-2">Sofas</a>
                    </div>
                    <div class="py-1">
                    <a href="{{asset('/paintings')}}" class=" font-serif text-sm hover:bg-[#e8e3dd] text-amber-900 block px-4 py-2">Paintings</a>
                    </div>
                    <div class="py-1">
                    <a href="{{asset('/lamps')}}" class=" font-serif text-sm hover:bg-[#e8e3dd] text-amber-900 block px-4 py-2">Lamps</a>
                    </div>
                    <div class="py-1">
                    <a href="{{asset('/vases')}}" class=" font-serif text-sm hover:bg-[#e8e3dd] text-amber-900 block px-4 py-2">Vases</a>
                    </div>
                    <div class="py-1">
                    <a href="{{asset('/mirors')}}" class=" font-serif text-sm hover:bg-[#e8e3dd] text-amber-900 block px-4 py-2">Mirors</a>
                    </div> --}}

                </div>
            </li>
            <li>
                <a href="{{asset('/products')}}" class="font-serif text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-amber-900 md:p-0">Products</a>
            </li>
            <li>
                <a href="{{asset('/about-us')}}" class=" font-serif text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-amber-900 md:p-0">About Us</a>
            </li>
            <li>
            <a href="{{asset('/contact-us')}}" class=" font-serif text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-amber-900 md:p-0">Contact Us</a>
            </li>
                <a class="relative" href="{{asset('/shop')}}"><li><i class=" text-amber-900 fa-solid fa-cart-shopping"></i><span class="absolute top-[-12px] bg-amber-500 rounded px-1" id="cart-count">0</span></a>
            </li>
            <li>
                <a href="{{asset('/register-form')}}"><i class="text-amber-900 fa-solid fa-user" ></i></a>
            </li>
        </ul>
        </div>

    </div>
    </nav>

</div>