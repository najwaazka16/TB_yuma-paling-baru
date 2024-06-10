document.getElementById('sortOption').addEventListener('change', function() {
    const selectedOption = this.value;
    // Display the selected option (this is just an example, you can process it as needed)
    document.getElementById('results').innerHTML = `<p>Selected: ${selectedOption}</p>`;

    // You can add your sorting logic here
    // For example, if you have an array of products, you can sort it based on the selected option
    // const products = [...]; // Your product data
    // sortProducts(products, selectedOption);
});

// Example function to sort products (implement your sorting logic here)
function sortProducts(products, criterion) {
    switch (criterion) {
        case 'Featured':
            // Sort by featured logic
            break;
        case 'Newest':
            // Sort by newest logic
            break;
        case 'Best Selling':
            // Sort by best selling logic
            break;
        case 'Lowest $ - Highest $':
            // Sort by price ascending logic
            break;
        case 'Highest $$$ - Lowest $':
            // Sort by price descending logic
            break;
        default:
            // Default sort logic
            break;
    }
    // Update the UI with the sorted products
    displayProducts(products);
}

// Example function to display products (implement your display logic here)
function displayProducts(products) {
    // Clear previous results
    const resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = '';
    // Append each product to the results div
    products.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.textContent = product.name; // Adjust as per your product structure
        resultsDiv.appendChild(productDiv);
    });
}