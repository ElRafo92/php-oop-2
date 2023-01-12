<?php 

require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Game.php';
require_once __DIR__ . '/classes/Bed.php';
require_once __DIR__ . '/classes/Category.php';

    $dog = new Category('Cane', '<i class="fa-solid fa-dog"></i>');    
    $cat = new Category('Cane', '<i class="fa-solid fa-cat"></i>');


    $game = new Game('Pallina scrausa', 3.75, 'https://iperdrive.iper.it/wcsstore/FiniperCatalogAssetStore/asset/images/3074457345617022356/3074457345617022356_thumb_main.jpg', $dog);
    $game->setMaterial('Gomma');

    $food = new Food('Sheba, umido per gatti', 4.50, 'https://cdn.shopify.com/s/files/1/0288/2152/0466/products/cibo-umido-gatto-sheba-selezione-in-salsa-85-gr-vitello-tacchino.jpg?v=1634725379', $cat);
    $food->setExpiration('22/10/2024');

    $bed = new Bed('Cuccia Top', 204.85, 'https://www.omlet.it/images/cache/400/400/Topology_Dog_Bed_with_Bolster_Topper_and_Black_Metal_Hairpin_Feet_-_Medium.jpg', $dog);
    $bed->setSize('XL');    

$products = [
    $game,
    $food,
    $bed
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>E-Pet</title>
</head>
<body>
    <h1>E-Pet Commerce</h1>
<?php foreach( $products as $product) { ?>
    <div class="card" style="width: 18rem;">
        <img src=<?php echo $product->getImg(); ?> class="card-img-top" alt="...">
        <div>
            <?php echo $product->getCategory()->getIcon(); ?>
        </div>
        <div class="card-body">
            <h3 class="card-title"><?php echo $product->getName(); ?></h3>

            <?php if(method_exists($product, 'getExpiration')) { ?>
                <h5>Expiration date: <?php echo $food->getExpiration(); ?></h5>
            <?php } ?>

            <?php if(method_exists($product, 'getMaterial')) { ?>
                <h5>Materiale: <?php echo $game->getMaterial(); ?></h5>
            <?php } ?>

            <?php if(method_exists($product, 'getSize')) { ?>
                <h5>Taglia: <?php echo $bed->getSize(); ?></h5>
            <?php } ?>

            <h5>Price: <?php echo $product->getPrice(); ?> €</h5>

            <a href="#" class="btn btn-primary">BUY</a>
        </div>
    </div>
<?php }?>
</body>
</html>