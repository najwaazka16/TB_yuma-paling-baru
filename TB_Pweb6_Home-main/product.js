// product.js
function addToCart(productId) {
    fetch('add_to_cart.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `product_id=${productId}&quantity=1`
    })
    .then(() => alert('Item added to cart'))
    .catch(error => console.error('Error:', error));
}
