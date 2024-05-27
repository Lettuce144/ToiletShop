<?php
@require_once("components/headerbar.php");

$products = Database::GetAllProducts();
//hash_pbkdf2("sha256", "password", "salt", 1000, 20);
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>De toilet shop</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"
    />
    <link rel="stylesheet" href="css/bulma-custom.css"> 
  </head>
  <body>
    <section class="hero banner is-medium">
      <div class="hero-body has-text-centered">
        <p class="title is-1 has-text-white">Elke onstopper 40% korting!</p>
        <p class="subtitle is-italic is-6 has-text-grey-light">Alleen bij verkoop van ziel*</p>
      </div>
    </section>

    <!-- Main content here -->
    <main id="main">
      <section class="section">
        <h1 class="title">Shop</h1>
        <h2 class="subtitle">
          A simple container to divide your page into <strong>sections</strong>,
          like the one you're currently reading.
        </h2>

        <div class="grid is-col-min-11">
          <div class="columns">
            <div class="column is-one-fifth">
              <!-- Filter -->
              <div class="dropdown">
                <div class="dropdown-trigger">
                  <button
                    class="button"
                    aria-haspopup="true"
                    aria-controls="dropdown-menu"
                  >
                    <span>Filters</span>
                    <span class="icon is-small">
                      <img src="img/filter.svg" alt="filter" srcset="">
                    </span>
                  </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                  <div class="dropdown-content">
                    <a href="#" class="dropdown-item"> Dropdown item </a>
                    <a class="dropdown-item"> Other dropdown item </a>
                    <a href="#" class="dropdown-item is-active">
                      Active dropdown item
                    </a>
                    <a href="#" class="dropdown-item"> Other dropdown item </a>
                    <hr class="dropdown-divider" />
                    <a href="#" class="dropdown-item"> With a divider </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="fixed-grid">
                <div class="is-flex is-flex-direction-row is-flex-wrap-wrap is-justify-content-center newsletter">
                <?php foreach ($products as $product) : ?>
                  <div class="card is-showdow-2xl is-shadow-none is-cursor-pointer transform is-duration-500 hover-translate-y">
                    <div class="card-image p-5">
                        <figure class="image">
                          <?php if($product->img_url != null){?>
                            <img class="is-img-center"
                            src="<?= $product->img_url;?>"
                            alt="Placeholder image">
                          <?php } else{?>
                            <img class="is-img-center"
                            src="https://aduwlvajep.cloudimg.io/v7/https://s3.eu-central-1.amazonaws.com/akeneo.x2o.assets.prod/assets/8/e/2/9/8e29c11acfa0371746fc932369f1d7e06a2b271d_68645_packshot.png?w=640&h=640&p=Apollo&force-format=webp%2Cjpeg"
                            alt="Placeholder image">
                          <?php }?>
                        </figure>
                    </div>
                    <div class="card-content py-5">
                        <div class="content">
                            <h3 class="is-size-6 has-text-info">Hot Collection</h3>
                            <h2 class="mt-2 mb-4 is-size-4-mobile"><?= $product->ItemName?></h2>
                            <p class="mb-4 is-size-7-mobile">Urenlang met plezier ontlasten! Lekker voor de bips!</p>
                            <p class="is-size-5 has-text-weight-bold mb-5">&euro;<?= $product->prijs?></p>
                            <a class="button is-primary" href="#">Add to Cart</a>
                        </div>
                    </div>

                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="box container" id="newsletter">
          <div class="columns">
            <div class="column is-two-thirds">
              <div id="newsletter-combo">
                <h2 class="title is-4">Subscribe to our newsletter:</h2>
              </div>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam
                harum doloribus, voluptate vel nam aut nesciunt cumque asperiores
                neque, necessitatibus et quasi totam corrupti id atque ratione optio
                repellat eius.
              </p>
            </div>
            <div class="newsletter column is-flex is-align-items-center" action="javascript:void(0);">
              <input class="input" type="email" placeholder="Enter your email" />
              <button class="button" onclick="
              Bulma('.banner').notification({
                body: 'Example notification',
                color: 'success',
                dismissInterval: 5000,
                destroyOnDismiss: true
              }).show();
              ">Subscribe</button>
            </div>
          </div>
        </div>
      </section>
    </main>
    
    <footer class="footer is-primary">
      <div class="content has-text-centered">
        <p>
          <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>.
          The source code is licensed
          <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The
          website content is licensed
          <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/"
            >CC BY NC SA 4.0</a
          >.
        </p>
      </div>
    </footer>

    <script src="js/bulma.js">
    </script>
    <!-- Footer here -->
  </body>
</html>