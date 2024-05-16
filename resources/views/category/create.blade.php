{{-- create products  form--}}
{{-- tableau donnes --}}
@extends('layouts.backoffice')
@section('content')


    <div class="grid grid-cols-1 lg:grid-cols-1 p-4 gap-4">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md text-5xl font-extrabold">
                <h2 class="mb-4 text-4xl tracking-tight font-serif text-center text-gray-900 dark:text-white bg-clip-text text-transparent bg-gradient-to-r from-neutral-100 to-amber-900">Create Category</h2>
                <form action="{{url('/admin/category/store')}}" method="post" class="space-y-8">
                    @csrf
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-serif text-amber-900 dark:text-gray-400">Name</label>
                        <input name="name" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="enter name..."/>
                        @error('name')
                            <span class="text-[red] text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="image" class="block mb-2 text-sm font-serif text-amber-900 dark:text-gray-400">image</label>
                        <input type="file" name="image" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="enter name..."/>
                        @error('image')
                            <span class="text-[red] text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="py-3 px-5 text-sm font-serif text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">create</button>
                </form>
            </div>
          </section>
    </div>
@endsection
        