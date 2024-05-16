document.addEventListener('DOMContentLoaded', function() {
    const quantityInputs = document.querySelectorAll('input[type="number"]');
    const removeButtons = document.querySelectorAll('.fa-trash');

    // Function to update subtotal based on quantity change
    function updateSubtotal() {
        let subtotal = 0;
        quantityInputs.forEach(input => {
            const price = parseFloat(input.parentElement.previousElementSibling.textContent.replace('$', ''));
            const quantity = parseInt(input.value);
            subtotal += price * quantity;
        });
        document.querySelector('.text-lg').textContent =` $${subtotal.toFixed(2)}`;
    }

    // Event listener for quantity change
    quantityInputs.forEach(input => {
        input.addEventListener('change', function() {
            updateSubtotal();
        });
    });

    // Event listener for removing item
    removeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const parentElement = button.parentElement.parentElement;
            parentElement.remove();
            updateSubtotal();
        });
    });

    // Event listener for checkout button (just an alert for now)
    const checkoutButton = document.querySelector('.bg-[#e8e3dd]');
    checkoutButton.addEventListener('click', function() {
        alert('Checkout functionality will be implemented later.');
    });
});