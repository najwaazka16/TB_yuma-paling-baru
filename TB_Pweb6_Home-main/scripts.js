// scripts.js
document.addEventListener('DOMContentLoaded', function () {
    const quantityBtns = document.querySelectorAll('.quantity-btn');
    const deleteBtns = document.querySelectorAll('.delete-btn');

    quantityBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const input = this.parentNode.querySelector('input');
            let value = parseInt(input.value);

            if (this.textContent === '-') {
                if (value > 1) value--;
            } else {
                value++;
            }

            input.value = value;
            updateSubtotal();
        });
    });

    deleteBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            this.closest('.cart-item').remove();
            updateSubtotal();
        });
    });

    function updateSubtotal() {
        let subtotal = 0;
        const itemPrices = document.querySelectorAll('.item-price');
        itemPrices.forEach(priceElement => {
            const price = parseFloat(priceElement.textContent.replace('Rp', '').replace('.', '').replace(',', '.'));
            const quantity = priceElement.closest('.cart-item').querySelector('input').value;
            subtotal += price * quantity;
        });
        document.querySelector('.subtotal span:last-child').textContent = `Rp ${subtotal.toLocaleString('id-ID')}.00`;
    }
});
