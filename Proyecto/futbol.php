<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="store">
    <a href="inicio.php">
        <img src="logo.jpg" alt="logo" width="10%">
    </a>
    <h2>Tienda de Fútbol</h2>
    <div class="products">
        <div class="product">
            <img src="Mercurial.jpg" alt="Botas Nike">
            <h3>Botas Nike Mercurial</h3>
            <p>$2500</p>
            <button onclick="addToCart('Botas Nike Mercurial', 2500)">Añadir al carrito</button>
        </div>
        <div class="product">
            <img src="españa.jpg" alt="Camiseta">
            <h3>Camiseta Oficial España</h3>
            <p>$900</p>
            <button onclick="addToCart('Camiseta Oficial España', 900)">Añadir al carrito</button>
        </div>
        <div class="product">
            <img src="balon.jpg" alt="Balón">
            <h3>Balón Adidas Pro</h3>
            <p>$850</p>
            <button onclick="addToCart('Balón Adidas Pro', 850)">Añadir al carrito</button>
        </div>
    </div>

    <div class="cart">
        <h3>🛒 Carrito</h3>
        <ul id="cart-items"></ul>
        <p>Total: $<span id="cart-total">0</span></p>
        <button onclick="clearCart()">Vaciar carrito</button>
        <button onclick="confirmPurchase()">Confirmar compra</button>
    </div>

    <script src="script2.js"></script>
    <script>
        function clearCart() {
            document.getElementById('cart-items').innerHTML = '';
            document.getElementById('cart-total').textContent = '0';
            if (typeof cart !== 'undefined') {
                cart = [];
            }
        }

        function confirmPurchase() {
            const total = document.getElementById('cart-total').textContent;
            if (parseFloat(total) === 0) {
                alert("El carrito está vacío. Agrega productos antes de confirmar la compra.");
                return;
            }

            alert("¡Gracias por tu compra!\nTotal: $" + total);
            clearCart(); 
        }
    </script>
</section>
</body>
</html>
