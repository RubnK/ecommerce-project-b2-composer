<section class="product">
    <div class="product-image">
        <img src="/imgs/<?= $produit?>.png" alt="<?= $produit ?>">
    </div>  
    <div class="product-details">
        <h1><?= $produit ?></h1>
        <p class="price"><?= $produits[$produit]['price'] ?></p>
        <p class="description"><?= $produits[$produit]['description'] ?></p>
        <button class="add-to-cart">Ajouter au panier</button>
    </div>
</section>