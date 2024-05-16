{{-- create products  form--}}
{{-- tableau donnes --}}
@extends('layouts.backoffice')
@section('content')


    <div class="grid grid-cols-1 lg:grid-cols-1 p-4 gap-4">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md text-5xl font-extrabold">
                <h2 class="mb-4 text-4xl tracking-tight font-serif text-center text-gray-900 dark:text-white bg-clip-text text-transparent bg-gradient-to-r from-neutral-100 to-amber-900">create adds</h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
                <form action="/admin/annonce/store" method="POST" class="space-y-8" enctype="multipart/form-data">
                    @csrf
                    
                    <div>
                        <label for="image" class="block mb-2 text-sm font-serif text-amber-900 dark:text-gray-300">Image</label>
                        <input type="file" id="image" name="image" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                    </div>
                    <div>
                        <label for="prix" class="block mb-2 text-sm font-serif text-amber-900 dark:text-gray-300">date_debut</label>
                        <input type="date" id="prix" name="date_debut" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                    </div>
                    <div>
                        <label for="prix" class="block mb-2 text-sm font-serif text-amber-900 dark:text-gray-300">date_fin</label>
                        <input type="date" id="prix" name="date_fin" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                    </div>
                    {{-- <div> --}}
                        {{-- <label for="subject" class="block mb-2 text-sm font-serif text-amber-900 dark:text-gray-300">date_fin</label>
                        <select type="date" name="date_fin" id="" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you"> --}}
                            {{-- @foreach ($annonce as $annonce)
                                <option value="{{ $category->id }}">{{ $category->nom }}</option>
                                
                            @endforeach --}}

                        {{-- </select> --}}
                    {{-- </div> --}}
                   
                    <button type="submit" class="py-3 px-5 text-sm font-serif text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">add annonce</button>
                </form>
            </div>
          </section>
    </div>
@endsection
        