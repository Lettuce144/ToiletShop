<?php

@require_once("./db/Database.php");

// Now get all the products
$products = Database::query("SELECT * FROM products");
print_r($products);
?>

<div class="card">
<img
  src="https://aduwlvajep.cloudimg.io/v7/https://s3.eu-central-1.amazonaws.com/akeneo.x2o.assets.prod/assets/8/e/2/9/8e29c11acfa0371746fc932369f1d7e06a2b271d_68645_packshot.png?w=640&h=640&p=Apollo&force-format=webp%2Cjpeg"
  alt="toilet"
/>
<h2>Deluxe toilet</h2>
<p>€ 100</p>
</div>