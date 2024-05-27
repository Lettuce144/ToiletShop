<?php
include_once("db/Database.php");
@require_once("auth/auth.php");
@require_once("components/headerbar.php");
session_start();

$products = Database::GetAllProducts();

Database::query("SELECT * FROM klanten");
print_r(Database::getAll());
var_dump($_SESSION['user']);

Auth\login("Daan", "krijgdetering");

//hash_pbkdf2("sha256", "password", "salt", 1000, 20);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>De toilet shop</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/index-style.css" />
  </head>
  <body>
    <!-- Main content here -->
    <main>
      <!-- <div class="banner">
        <h1>The beste toiletten voor u!</h1>
      </div> -->

      <div class="main-content">
        <h1>Welcome to the toilet shop</h1>

        <div class="cards">
          <div class="card-collection">
              <?php foreach ($products as $product) : ?>
                <div class="card">
                    <?php if($product->img_url != null){?>
                    <img
                        src="<?= $product->img_url;?>"
                        alt="toilet"
                    />
                    <?php } else{?>
                    <img
                            src="https://aduwlvajep.cloudimg.io/v7/https://s3.eu-central-1.amazonaws.com/akeneo.x2o.assets.prod/assets/8/e/2/9/8e29c11acfa0371746fc932369f1d7e06a2b271d_68645_packshot.png?w=640&h=640&p=Apollo&force-format=webp%2Cjpeg"
                            alt="toilet"
                    />
                    <?php } ?>

                  <h2><?= $product->ItemName?></h2>
                  <p>&euro; <span></span> <?= $product->prijs?></p>
                </div>
              <?php endforeach; ?>
          </div>
          <div class="card-collection">
            <div class="card">
              <img
                src="https://aduwlvajep.cloudimg.io/v7/https://s3.eu-central-1.amazonaws.com/akeneo.x2o.assets.prod/assets/8/e/2/9/8e29c11acfa0371746fc932369f1d7e06a2b271d_68645_packshot.png?w=640&h=640&p=Apollo&force-format=webp%2Cjpeg"
                alt="toilet"
              />
              <h2>Deluxe toilet</h2>
              <p>€ 100</p>
            </div>
            <div class="card">
              <img
                src="https://aduwlvajep.cloudimg.io/v7/https://s3.eu-central-1.amazonaws.com/akeneo.x2o.assets.prod/assets/8/e/2/9/8e29c11acfa0371746fc932369f1d7e06a2b271d_68645_packshot.png?w=640&h=640&p=Apollo&force-format=webp%2Cjpeg"
                alt="toilet"
              />
              <h2>Deluxe toilet</h2>
              <p>€ 100</p>
            </div>
            <div class="card">
              <img
                src="https://aduwlvajep.cloudimg.io/v7/https://s3.eu-central-1.amazonaws.com/akeneo.x2o.assets.prod/assets/8/e/2/9/8e29c11acfa0371746fc932369f1d7e06a2b271d_68645_packshot.png?w=640&h=640&p=Apollo&force-format=webp%2Cjpeg"
                alt="toilet"
              />
              <h2>Deluxe toilet</h2>
              <p>€ 100</p>
            </div>
            <div class="card">
              <img
                src="https://aduwlvajep.cloudimg.io/v7/https://s3.eu-central-1.amazonaws.com/akeneo.x2o.assets.prod/assets/8/e/2/9/8e29c11acfa0371746fc932369f1d7e06a2b271d_68645_packshot.png?w=640&h=640&p=Apollo&force-format=webp%2Cjpeg"
                alt="toilet"
              />
              <h2>Deluxe toilet</h2>
              <p>€ 100</p>
            </div>
          </div>
        </div>
      </div>

      <div id="newsletter">
        <div id="newsletter-combo">
          <h2>Subscribe to our newsletter:</h2>
          <form action="">
            <input type="email" placeholder="Enter your email" />
            <button>Subscribe</button>
          </form>
        </div>

        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam
          harum doloribus, voluptate vel nam aut nesciunt cumque asperiores
          neque, necessitatibus et quasi totam corrupti id atque ratione optio
          repellat eius.
        </p>
      </div>
    </main>

    <footer>
      <div id="footer-container">
        <div id="footer-links">
          <ul class="links-list">
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <ul class="links-list">
            <li><a href="#">Hello</a></li>
            <li><a href="#">Login</a></li>
            <li>
              <a href="#"
                ><img
                  src="https://icons.veryicon.com/png/o/miscellaneous/unicons/cart-38.png"
                  alt="cart"
                  width="32"
                  height="32"
              /></a>
            </li>
          </ul>
        </div>
        <div id="footer-info">
          <p>&copy; 2024 De toilet shop</p>
        </div>
      </div>
    </footer>
    <!-- Footer here -->
  </body>
</html>
