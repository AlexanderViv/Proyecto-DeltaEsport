let cart = [];
let total = 0;

function addToCart(productName, price) {
  cart.push({ name: productName, price });
  total += price;
  updateCart();
}

function updateCart() {
  const cartItems = document.getElementById("cart-items");
  const cartTotal = document.getElementById("cart-total");

  cartItems.innerHTML = "";
  cart.forEach((item) => {
    const li = document.createElement("li");
    li.textContent = `${item.name} - $${item.price}`;
    cartItems.appendChild(li);
  });

  cartTotal.textContent = total.toFixed(2);
}
   function clearCart() {
            document.getElementById('cart-items').innerHTML = '';
            document.getElementById('cart-total').textContent = '0';
            if (typeof cart !== 'undefined') {
                cart = [];
            }
        }