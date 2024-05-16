{{-- create products  form--}}
{{-- tableau donnes --}}
@extends('layouts.backoffice')
@section('content')


    <div class="grid grid-cols-1 lg:grid-cols-1 p-4 gap-4">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md text-5xl font-extrabold">
                <h2 class="mb-4 text-4xl tracking-tight font-serif text-center text-gray-900 dark:text-white bg-clip-text text-transparent bg-gradient-to-r from-neutral-100 to-amber-900">update</h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
                <form action="/admin/category/update" method="POST" class="space-y-8" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <div>
                        <label for="nom" class="block mb-2 text-sm font-serif text-amber-900 dark:text-gray-300">Name</label>
                        <input type="text" id="nom" name="nom" value="{{ $category->nom }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" required>
                    </div>
                    <div>
                        <label for="nom" class="block mb-2 text-sm font-serif text-amber-900 dark:text-gray-300">Image</label>
                        <input type="file" id="image" name="image" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" required>
                    </div>
                  
                  
                    <button type="submit" class="py-3 px-5 text-sm font-serif text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">update</button>
                </form>
            </div>
          </section>
    </div>
@endsection
        