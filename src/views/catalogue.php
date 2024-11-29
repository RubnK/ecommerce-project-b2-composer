<div class="search-bar">
        <input type="text" placeholder="Rechercher un produit...">
        <button type="button">Rechercher</button>
    </div>

    <div class="product-grid">
    <?php foreach ($produits as $produit) : ?>
            <a href="/catalogue/<?= $produit['name'] ?>" class="product-card">
                <img src="/imgs/<?= $produit['name'] ?>.png" alt="Logo <?= $produit['name'] ?>">
                <h3><?= $produit['name'] ?></h3>
                <p><?= $produit['description'] ?></p>
                <div class="price"><?= $produit['price'] ?></div>
            </a>
    <?php endforeach; ?>
    </div>