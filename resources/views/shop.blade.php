@extends('layouts.master')
@section('main')
<div class="h-screen ">
	<div class="py-12">
		
	
    <div class="max-w-md mx-auto bg-[#e8e3dd] shadow-lg rounded-lg  md:max-w-5xl font-serif">
        <div class="md:flex ">
            <div class="w-full p-4 px-5 py-5">

            	<div class="md:grid md:grid-cols-3 gap-2 ">

            		<div class="col-span-2 p-5">

            			<h1 class="text-xl font-medium ">Shopping Cart</h1>
						<div id="cart-items-container">
							<div class="flex justify-between items-center mt-6 pt-6">
								<!-- <div class="flex  items-center">
									<img src="{{asset('/amchairs.jpg')}}" width="60" class="rounded-full ">
	
									<div class="flex flex-col ml-3">
										<span class="md:text-md font-medium">Armchairs</span>
										<span class="text-xs font-light text-gray-400">#41551</span>
										
									</div>
	
									
								</div>
	
								<div class="flex justify-center items-center">
									
									<div class="pr-8 flex ">
										<input type="number" class="focus:outline-none bg-gray-100 border h-6 w-12 rounded text-sm px-2 mx-2" value="1">
									</div>
	
									<div class="pr-8 ">
										
										<span class="text-xs font-medium">$10.50</span>
									</div>
									<div>
									<i class="fa-solid fa-trash"></i>
									</div>
	
								</div> -->
								
							</div>
						</div>



            			<div class="flex justify-between items-center mt-6 pt-6 border-t"> 
            				<div class="flex items-center">
            					<i class="fa fa-arrow-left text-sm pr-2"></i>
            					<span class="text-md  font-medium text-amber-900">Continue Shopping</span>
            				</div>

            				<div class="flex justify-center items-end">
            					<span class="text-sm font-medium text-gray-400 mr-1">Subtotal:</span>
            					<span class="text-lg font-bold text-gray-800 " id="subtotal"> $24.90</span>
            					
            				</div>
            				
            			</div>

            		</div>
            		<div class=" p-5 bg-stone-500 rounded overflow-visible">

            			<span class="text-xl font-medium text-black block pb-3">Card Details</span>

            			<span class="text-xs text-black ">Card Type</span>

            			<div class="overflow-visible flex justify-between items-center mt-2">

            			


            				<div class="flex justify-center  items-center flex-col">

            					<img src="https://img.icons8.com/color/96/000000/mastercard-logo.png" width="40" class="relative right-5" />
            					<span class="text-xs font-medium text-gray-200 bottom-2 relative right-5">mastercard.</span>
            					
            				</div>
            				
            			</div>




            			<div class="flex justify-center flex-col pt-3">
            				<label class="text-xs text-black ">Name on Card</label>
            				<input type="text" class="focus:outline-none w-full h-6 bg-[#e8e3dd] text-black placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="lina ">
            			</div>


            			<div class="flex justify-center flex-col pt-3">
            				<label class="text-xs text-black ">Card Number</label>
            				<input type="text" class="focus:outline-none w-full h-6 bg-[#e8e3dd] text-black placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="**     **      **      **">
            			</div>




            			<div class="grid grid-cols-3 gap-2 pt-2 mb-3 ">

            				<div class="col-span-2 ">

            					<label class="text-xs text-black">Expiration Date</label>
            					<div class="grid grid-cols-2 gap-2">

            						<input type="text" class="focus:outline-none w-full h-6 bg-[#e8e3dd] text-black placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="mm">
            						<input type="text" class="focus:outline-none w-full h-6 bg-[#e8e3dd] text-black placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="yyyy">
            						
            					</div>


            					
            				</div>

            				<div class="">
            					<label class="text-xs text-black">CVV</label>
            					<input type="text" class="focus:outline-none w-full h-6 bg-[#e8e3dd] text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="XXX">
            					
            				</div>
            				
            			</div>





            			<button class="h-12 w-full bg-[#e8e3dd] rounded focus:outline-none text-black hover:bg-stone-500">Check Out</button>









            			
            		</div>

            		
            	</div>
            	
               
           </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('script')
	<script>
		let subTotalCart = document.getElementById('subtotal')
		// Fonction pour afficher les produits dans le panier
		function displayCartItems() {
            // Récupérer les produits du stockage local
            // localStorage.clear();
            let cart = localStorage.getItem('cart');
            
            // Vérifier si le panier existe
            if (cart) {
                cart = JSON.parse(cart);
                
                // Sélectionner l'élément où les produits seront affichés
                let cartItemsContainer = document.getElementById('cart-items-container');
                // Effacer le contenu précédent
                cartItemsContainer.innerHTML = '';
                
                // Parcourir chaque produit dans le panier
                cart.forEach(function(myCart) {
					// console.log(myCart);
					// console.log(productId,productName);
                    // Créer un élément de div pour chaque produit
                    let cartItemDiv = document.createElement('div');
                    cartItemDiv.classList.add('flex', 'justify-between', 'items-center', 'mt-6', 'pt-6');
                    
                    // Contenu HTML pour chaque produit
                    cartItemDiv.innerHTML = `
                        <div class="flex items-center">
                            <img src="{{asset('storage/product').'/'}}${myCart.image}" width="60" class="rounded-full">
                            <div class="flex flex-col ml-3">
                                <span class="md:text-md font-medium">${myCart.name}</span>
                                <span class="text-xs font-light text-gray-400">#${myCart.id}</span>
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <div class="pr-8 flex">
                                <input type="number" class="focus:outline-none bg-gray-100 border h-6 w-12 rounded text-sm px-2 mx-2" value="${myCart.quantity}">
                            </div>
                            <div class="pr-8 ">
                                <span class="text-xs font-medium">$${myCart.price}</span>
                            </div>
                            <div>
								<button onclick="deleteProductFromCart(${myCart.id})">
									<i class="fa-solid fa-trash"></i>
									
								</button>
                            </div>
                        </div>
                    `;
                    
                    // Ajouter l'élément de div à la liste des produits dans le panier
                    cartItemsContainer.appendChild(cartItemDiv);
                });
				//calcul th subtotal
				calculateSubtotal(cart)
            }else{
				// Sélectionner l'élément où les produits seront affichés
                let cartItemsContainer = document.getElementById('cart-items-container');
                // Effacer le contenu précédent
                cartItemsContainer.innerHTML = '';
				let cartItemDiv = document.createElement('div');
                    cartItemDiv.classList.add('flex', 'justify-between', 'items-center', 'mt-6', 'pt-6');
                    
                    // Contenu HTML pour chaque produit
                    cartItemDiv.innerHTML = `
                        <div class="flex items-center justify-center">
                            <p>Votre panier est vide</p>
                        </div>
                    `;
                    
                    // Ajouter l'élément de div à la liste des produits dans le panier
                    cartItemsContainer.appendChild(cartItemDiv);
					//calcul th subtotal
					calculateSubtotal(cart)
			}
        }
		displayCartItems()
		// deleting products from shopping cart
		function deleteProductFromCart(productId) {
			// Récupérer le panier du stockage local
			let cart = localStorage.getItem('cart');

			// Vérifier si le panier existe
			if (cart) {
				cart = JSON.parse(cart);

				// Trouver l'index du produit dans le panier
				let productIndex = cart.findIndex(item => item.id === productId);

				// Vérifier si le produit existe dans le panier
				if (productIndex !== -1) {
					// Supprimer le produit du panier
					cart.splice(productIndex, 1);

					// Mettre à jour le panier dans le stockage local
					localStorage.setItem('cart', JSON.stringify(cart));

					// Mettre à jour l'affichage du panier
					displayCartItems();
				}
			}
		}

		function calculateSubtotal(cart) {
			let subtotal = 0;

			// Vérifier si le panier existe
			if (cart) {
				// Parcourir chaque produit dans le panier
				cart.forEach(function (item) {
					// Ajouter le prix du produit multiplié par sa quantité au subtotal
					subtotal += (parseFloat(item.price) * item.quantity);
				});
			}else{
				subtotal = 0
			}

			subTotalCart.innerHTML = '$'+subtotal;
		}


	</script>
@endsection