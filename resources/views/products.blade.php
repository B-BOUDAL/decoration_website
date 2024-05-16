@extends('layouts.master')
@section('main')
{{-- filter --}}
<div class="flex items-center justify-center p-4">
  <button id="dropdownDefault" data-dropdown-toggle="dropdown"
    class="text-amber-900 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
    type="button">
    Filter by category
    <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
  </button>

  <!-- Dropdown menu -->
  <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
      Category
    </h6>
    <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
      <li class="flex items-center text-amber-900">
              @foreach ($categories as $category)

              <input id="apple" type="checkbox" value=""
                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-amber-900 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

              <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
              <a href="{{url('/category'.'/'.$category->id)}}" > {{ $category->nom }} </a>       </label>
              @endforeach

      </li>

    </ul>
  </div>
</div>
{{-- filter --}}

<div class="grid grid-cols-4 gap-4 font-serif">
  @foreach ($products as $product)
    <div class="group my-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
      
      
      <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
        <img class="peer absolute top-0 right-0 h-full w-full object-cover" src="{{asset('storage/product').'/'. $product->image }}">
      
        <!-- <div class="absolute  bottom-0 mb-4 flex space-x-4 w-full justify-center">
          <div class="rounded-full h-3 w-3 bg-gray-200 border-2 border-white"></div> 
          <div class="rounded-full h-3 w-3 bg-gray-200 border-2 border-white"></div>
          <div class="rounded-full h-3 w-3 bg-gray-200 border-2 border-white"></div>
        </div> -->
        <svg class="pointer-events-none absolute inset-x-0 bottom-5 mx-auto text-3xl text-white  transition-opacity group-hover:animate-ping group-hover:opacity-30 peer-hover:opacity-0" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M2 10a4 4 0 0 1 4-4h20a4 4 0 0 1 4 4v10a4 4 0 0 1-2.328 3.635a2.996 2.996 0 0 0-.55-.756l-8-8A3 3 0 0 0 14 17v7H6a4 4 0 0 1-4-4V10Zm14 19a1 1 0 0 0 1.8.6l2.7-3.6H25a1 1 0 0 0 .707-1.707l-8-8A1 1 0 0 0 16 17v12Z" /></svg>
        <!-- <span class="absolute top-0 left-0 m-2 rounded-full bg-black px-2 text-center text-sm font-medium text-white">39% OFF</span> -->
      </a>
      <div class="mt-4 px-5 pb-5">
        <a href="#">
          <h5 class="text-xl tracking-tight text-amber-900">{{$product->nom}}</h5>
        </a>
        <div class="mt-2 mb-5 flex items-center justify-between">
          <p>
            <span class="text-3xl font-bold text-slate-900">{{ $product->prix }}</span>
            <span class="text-sm text-slate-900 line-through">$92</span>
          </p>
        </div>
        {{-- <button type="button"> --}}
          {{-- href="{{ url('/add-cart') }}" --}}
          <a 
            onclick="addToCart({{ $product->id }})"
            {{-- onclick="addToCart({{ $product->id }},{{ $product->nom }},{{ $product->image }},{{ $product->prix }})" --}}
            id="cartBtn{{ $product->id }}"
            data-id="{{ $product->id }}" data-nom="{{ $product->nom }}" data-image="{{ $product->image }}" data-prix="{{ $product->prix }}"
             class="flex items-center justify-center rounded-md bg-amber-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#e8e3dd] focus:outline-none focus:ring-4 focus:ring-blue-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Add to cart
          </a>
        {{-- </button> --}}
      </div>
      
    </div>
  @endforeach
</div>
@endsection

@section('script')
	<script>
    
		function addToCart(productId) {
      // let productId = cartBtn.getAttribute('data-id')
      let cartBtn=document.getElementById('cartBtn'+productId);
      let productName = cartBtn.getAttribute('data-nom')
      let productImage = cartBtn.getAttribute('data-image')
      let productPrice = cartBtn.getAttribute('data-prix')
      let productQuantity = 1; // Default quantity to add

			// Vérifier si le panier existe déjà dans le stockage local
			let cart = localStorage.getItem('cart');
      
			// Si le panier n'existe pas, initialiser un tableau vide
			if (!cart) {
				cart = [];
			} else {
				// Si le panier existe, le convertir en tableau JSON
				cart = JSON.parse(cart);
			}

			// Vérifier si le produit existe déjà dans le panier
      let existingProductIndex = cart.findIndex(item => item.id === productId);

      if (existingProductIndex !== -1) {
          // Si le produit existe déjà, incrementer la quantité
          cart[existingProductIndex].quantity++;
      } else {
          // Si le produit n'existe pas, l'ajouter au panier
          cart.push({
              id: productId,
              name: productName,
              image: productImage,
              price: productPrice,
              quantity: productQuantity
          });
      }

			// Mettre à jour le panier dans le stockage local
			localStorage.setItem('cart', JSON.stringify(cart));

			// Mettre à jour le nombre de produits dans le panier affiché sur la page
			updateCartCount(cart.length);
		}

		// Fonction pour mettre à jour le nombre de produits dans le panier affiché sur la page
		function updateCartCount(count) {
			// Mettre à jour l'élément HTML avec l'ID "cart-count" avec le nouveau nombre de produits
			document.getElementById('cart-count').innerText = count;
		}

		// Exemple d'utilisation : Appeler la fonction addToCart avec l'ID du produit lorsqu'un bouton "Ajouter au panier" est cliqué
		// document.getElementById('add-to-cart-button').addEventListener('click', function() {
		// 	addToCart('productId123'); // Remplacer 'productId123' par l'ID réel du produit
		// });

	</script>
@endsection