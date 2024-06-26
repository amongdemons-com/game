<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fight - Among Demons</title>
    <meta name="description" content="We converted the first demon models into Stargaze NFTs. Owning a piece makes you a supporter of the Among Demons project.">
    <meta name="author" content="Among Demons">
    <meta property="og:image" content="https://amongdemons.com/nfts/demons/faq/learnmore_founders_collection.png" />

    <?php require_once("../data/parts/includes.php"); ?>
  </head>
  <body class="d-flex flex-column">
    <?php require_once("../data/parts/nav.php"); ?>
    <main class="container flex-fill">
      <div class="d-flex justify-content-center align-items-center">
        <div class="card my-3" style="max-width: 50%;">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="<?php echo $folder;?>/data/img/demons/1.png" class="img-fluid rounded-start" alt="Demon 1">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Boof Nitza</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Common</h6>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
              </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
            </div>
          </div>
        </div>
        <div class="px-2">VS</div>
        <div class="card" style="width: 18rem;">
          <img src="<?php echo $folder;?>/data/img/demons/1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Common</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div>
    </main>
    <?php require_once("../data/parts/footer.php"); ?>
  </body>
</html>