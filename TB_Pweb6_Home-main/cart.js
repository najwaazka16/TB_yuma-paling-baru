
document.addEventListener('DOMContentLoaded', loadCart);

function loadCart() {
    fetch('cart.php?action=load')
        .then(response => response.json())
        .then(data => {
            const cartItems = document.getElementById('cart-items');
            const subtotalElement = document.getElementById('subtotal');
            let subtotal = 0;

            data.forEach(item => {
                const cartItem = document.createElement('div');
                cartItem.classList.add('cart-item');
                cartItem.innerHTML = `
                    <img src="${item.image}" alt="${item.name}" width="50">
                    <p>${item.name} (Shade: ${item.shade})</p>
                    <p>Rp ${item.price.toFixed(2)}</p>
                    <input type="number" value="${item.quantity}" min="1" data-id="${item.id}">
                    <button data-id="${item.id}" class="remove-btn">Remove</button>
                `;
                cartItems.appendChild(cartItem);
                subtotal += item.price * item.quantity;
            });

            subtotalElement.textContent = `Rp ${subtotal.toFixed(2)}`;

            document.querySelectorAll('.remove-btn').forEach(button => {
                button.addEventListener('click', removeFromCart);
            });

            document.querySelectorAll('input[type="number"]').forEach(input => {
                input.addEventListener('change', updateQuantity);
            });
        });
}

function removeFromCart(event) {
    const productId = event.target.getAttribute('data-id');
    fetch(`cart.php?action=remove&id=${productId}`)
        .then(() => loadCart());
}

function updateQuantity(event) {
    const productId = event.target.getAttribute('data-id');
    const quantity = event.target.value;
    fetch(`cart.php?action=update&id=${productId}&quantity=${quantity}`)
        .then(() => loadCart());
}
