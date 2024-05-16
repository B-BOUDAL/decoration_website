<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/script.js')}}"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-icons/11.9.0/simpleicons.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&family=Roboto+Condensed:wght@300&family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        .images{
            /* width : 70%px; */
            height : 350px;
        }
    </style>
    <title>@yield('title')</title>

</head>
<body>
    <div>@include('partials.header') </div>
        
    {{-- <section class="h-[250vh]"> --}}
    <section>
        @yield('main')
    </section>

    <section>@include('partials.footer')</section> 

</body>
   <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
   <script>
			let cart = localStorage.getItem('cart');
			// Si le panier n'existe pas, initialiser un tableau vide
			if (cart) {
                cart = JSON.parse(cart);
                cart.innerText = ''
                document.getElementById('cart-count').innerText = cart.length;
			}

   </script>
   @yield('script')
</html>