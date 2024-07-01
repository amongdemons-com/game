<?php 
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require_once("../data/parts/functions.php");
session_start();

$myDemon = getMyDemon();
$enemyDemon = getDemonByID(65);
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
    <main class="container flex-fill d-flex align-center">
      <div class="d-flex justify-content-center align-items-center">
        <div class="card my-3 flex-fill bg-dark-subtle">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="<?php echo $folder;?>/data/img/demons/<?php echo $myDemon["model"];?>.png" class="img-fluid rounded-start" alt="<?php echo ucfirst($myDemon["rarity"])." ".$myDemon["name"];?>" title="<?php echo ucfirst($myDemon["rarity"])." ".$myDemon["name"];?>">
            </div>
            <div class="col-md-6 d-flex flex-column">
              <div class="card-body flex-fill">
                <h5 class="card-title">
                  <?php echo $myDemon["name"];?>
                  <span class="card-subtitle pt-2 fs-6 ad-<?php echo $myDemon["rarity"];?> float-end"><?php echo ucfirst($myDemon["rarity"]);?></span>
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Level <?php echo $myDemon["level"];?></h6>
                <p class="card-text">This is a wider card with supporting text.</p>
              </div>
              <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex bg-dark-subtle">
                  <div class="text-center flex-fill">
                    <span><?php echo $myDemon["attack"];?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 512 512"><defs></defs><path class="fa-secondary" d="M19.1 .3C13.9-.7 8.5 .9 4.7 4.7S-.7 13.9 .3 19.1L14.4 89.6c1.9 9.3 6.4 17.8 13.1 24.5L329.4 416 416 329.4 114.2 27.5c-6.7-6.7-15.2-11.3-24.5-13.1L19.1 .3zM146.7 278.6L96 329.4 182.6 416l50.7-50.7-86.6-86.6zm218.5-45.3L484.5 114.2c6.7-6.7 11.3-15.2 13.1-24.5l14.1-70.5c1-5.2-.6-10.7-4.4-14.5s-9.2-5.4-14.5-4.4L422.4 14.4c-9.3 1.9-17.8 6.4-24.5 13.1L278.6 146.7l86.6 86.6z"/><path class="fa-primary fa-secondary" d="M75.3 308.7c-6.2-6.2-16.4-6.2-22.6 0l-16 16c-4.7 4.7-6 11.8-3.3 17.8l27.5 62L4.7 460.7c-6.2 6.2-6.2 16.4 0 22.6l24 24c6.2 6.2 16.4 6.2 22.6 0l56.2-56.2 62 27.5c6 2.7 13.1 1.4 17.8-3.3l16-16c6.2-6.2 6.2-16.4 0-22.6l-128-128zm361.4 0l-128 128c-6.2 6.2-6.2 16.4 0 22.6l16 16c4.7 4.7 11.8 6 17.8 3.3l62-27.5 56.2 56.2c6.2 6.2 16.4 6.2 22.6 0l24-24c6.2-6.2 6.2-16.4 0-22.6l-56.2-56.2 27.5-62c2.7-6.1 1.4-13.1-3.3-17.8l-16-16c-6.2-6.2-16.4-6.2-22.6 0z"/></svg>
                  </div>
                  <div class="text-center flex-fill">
                    <span><?php echo $myDemon["defense"];?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 512 512"><defs></defs><path class="fa-secondary" d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z"/><path class="fa-primary" d=""/></svg>
                  </div>
                  <div class="text-center flex-fill">
                    <span><?php echo $myDemon["hp"];?> / <?php echo $myDemon["maxhp"];?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 384 512"><defs></defs><path class="fa-secondary" d="M192 512C86 512 0 426 0 320C0 228.8 130.2 57.7 166.6 11.7C172.6 4.2 181.5 0 191.1 0h1.8c9.6 0 18.5 4.2 24.5 11.7C253.8 57.7 384 228.8 384 320c0 106-86 192-192 192zM96 336c0-8.8-7.2-16-16-16s-16 7.2-16 16c0 61.9 50.1 112 112 112c8.8 0 16-7.2 16-16s-7.2-16-16-16c-44.2 0-80-35.8-80-80z"/><path class="fa-primary" d="M80 320c8.8 0 16 7.2 16 16c0 44.2 35.8 80 80 80c8.8 0 16 7.2 16 16s-7.2 16-16 16c-61.9 0-112-50.1-112-112c0-8.8 7.2-16 16-16z"/></svg>
                  </div>
                </li>
                <li class="list-group-item bg-dark-subtle">
                  <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="<?php echo $myDemon["hp"];?>" aria-valuemin="0" aria-valuemax="<?php echo $myDemon["maxhp"];?>" style="height: 3em;">
                    <div class="progress-bar bg-success" style="width: 25%"></div>
                  </div>
                </li>
                <li class="list-group-item bg-dark-subtle"></li>
              </ul>
              <div class="px-3 pb-3 text-center">
                <button type="button" class="btn btn-success btn-sm py-1 ps-2 pe-2">
                  Run
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 448 512" class="ms-1"><defs></defs><path class="fa-turd" d="M64 352l64.3-16.1c41.1-10.3 84.6-5.5 122.5 13.4c44.2 22.1 95.5 24.8 141.7 7.4l34.7-13c12.5-4.7 20.8-16.6 20.8-30V66.1c0-23-24.2-38-44.8-27.7l-9.6 4.8c-46.3 23.2-100.8 23.2-147.1 0c-35.1-17.6-75.4-22-113.5-12.5L64 48V352z"/><path class="fa-primary" d="M32 0C49.7 0 64 14.3 64 32V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V32C0 14.3 14.3 0 32 0z"/></svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="px-4">VS</div>
        <div class="card my-3 flex-fill bg-dark-subtle">
          <div class="row g-0">
            <div class="col-md-6 d-flex flex-column">
              <div class="card-body flex-fill">
                <h5 class="card-title">
                  <?php echo $enemyDemon["name"];?>
                  <span class="card-subtitle pt-2 fs-6 ad-<?php echo $enemyDemon["rarity"];?> float-end"><?php echo ucfirst($enemyDemon["rarity"]);?></span>
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Level <?php echo $enemyDemon["level"];?></h6>
                <p class="card-text">This is a wider card with supporting text.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex bg-dark-subtle">
                  <div class="text-center flex-fill">
                    <span><?php echo $enemyDemon["attack"];?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 512 512"><defs></defs><path class="fa-secondary" d="M19.1 .3C13.9-.7 8.5 .9 4.7 4.7S-.7 13.9 .3 19.1L14.4 89.6c1.9 9.3 6.4 17.8 13.1 24.5L329.4 416 416 329.4 114.2 27.5c-6.7-6.7-15.2-11.3-24.5-13.1L19.1 .3zM146.7 278.6L96 329.4 182.6 416l50.7-50.7-86.6-86.6zm218.5-45.3L484.5 114.2c6.7-6.7 11.3-15.2 13.1-24.5l14.1-70.5c1-5.2-.6-10.7-4.4-14.5s-9.2-5.4-14.5-4.4L422.4 14.4c-9.3 1.9-17.8 6.4-24.5 13.1L278.6 146.7l86.6 86.6z"/><path class="fa-primary fa-secondary" d="M75.3 308.7c-6.2-6.2-16.4-6.2-22.6 0l-16 16c-4.7 4.7-6 11.8-3.3 17.8l27.5 62L4.7 460.7c-6.2 6.2-6.2 16.4 0 22.6l24 24c6.2 6.2 16.4 6.2 22.6 0l56.2-56.2 62 27.5c6 2.7 13.1 1.4 17.8-3.3l16-16c6.2-6.2 6.2-16.4 0-22.6l-128-128zm361.4 0l-128 128c-6.2 6.2-6.2 16.4 0 22.6l16 16c4.7 4.7 11.8 6 17.8 3.3l62-27.5 56.2 56.2c6.2 6.2 16.4 6.2 22.6 0l24-24c6.2-6.2 6.2-16.4 0-22.6l-56.2-56.2 27.5-62c2.7-6.1 1.4-13.1-3.3-17.8l-16-16c-6.2-6.2-16.4-6.2-22.6 0z"/></svg>
                  </div>
                  <div class="text-center flex-fill">
                    <span><?php echo $enemyDemon["defense"];?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 512 512"><defs></defs><path class="fa-secondary" d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z"/><path class="fa-primary" d=""/></svg>
                  </div>
                  <div class="text-center flex-fill">
                    <span><?php echo $enemyDemon["hp"];?> / <?php echo $enemyDemon["maxhp"];?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 384 512"><defs></defs><path class="fa-secondary" d="M192 512C86 512 0 426 0 320C0 228.8 130.2 57.7 166.6 11.7C172.6 4.2 181.5 0 191.1 0h1.8c9.6 0 18.5 4.2 24.5 11.7C253.8 57.7 384 228.8 384 320c0 106-86 192-192 192zM96 336c0-8.8-7.2-16-16-16s-16 7.2-16 16c0 61.9 50.1 112 112 112c8.8 0 16-7.2 16-16s-7.2-16-16-16c-44.2 0-80-35.8-80-80z"/><path class="fa-primary" d="M80 320c8.8 0 16 7.2 16 16c0 44.2 35.8 80 80 80c8.8 0 16 7.2 16 16s-7.2 16-16 16c-61.9 0-112-50.1-112-112c0-8.8 7.2-16 16-16z"/></svg>
                  </div>
                </li>
                <li class="list-group-item bg-dark-subtle">
                  <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="<?php echo $enemyDemon["hp"];?>" aria-valuemin="0" aria-valuemax="<?php echo $enemyDemon["maxhp"];?>" style="height: 3em;">
                    <div class="progress-bar bg-success" style="width: 25%"></div>
                  </div>
                </li>
                <li class="list-group-item bg-dark-subtle"></li>
              </ul>
              <div class="px-3 pb-3 text-center">
                <button type="button" class="btn btn-success btn-sm py-1 ps-2 pe-2">
                  Fight
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512" class="ms-1"><defs></defs><path class="fa-turd" d="M19.1 .3C13.9-.7 8.5 .9 4.7 4.7S-.7 13.9 .3 19.1L14.4 89.6c1.9 9.3 6.4 17.8 13.1 24.5L329.4 416 416 329.4 114.2 27.5c-6.7-6.7-15.2-11.3-24.5-13.1L19.1 .3zM146.7 278.6L96 329.4 182.6 416l50.7-50.7-86.6-86.6zm218.5-45.3L484.5 114.2c6.7-6.7 11.3-15.2 13.1-24.5l14.1-70.5c1-5.2-.6-10.7-4.4-14.5s-9.2-5.4-14.5-4.4L422.4 14.4c-9.3 1.9-17.8 6.4-24.5 13.1L278.6 146.7l86.6 86.6z"/><path class="fa-primary" d="M75.3 308.7c-6.2-6.2-16.4-6.2-22.6 0l-16 16c-4.7 4.7-6 11.8-3.3 17.8l27.5 62L4.7 460.7c-6.2 6.2-6.2 16.4 0 22.6l24 24c6.2 6.2 16.4 6.2 22.6 0l56.2-56.2 62 27.5c6 2.7 13.1 1.4 17.8-3.3l16-16c6.2-6.2 6.2-16.4 0-22.6l-128-128zm361.4 0l-128 128c-6.2 6.2-6.2 16.4 0 22.6l16 16c4.7 4.7 11.8 6 17.8 3.3l62-27.5 56.2 56.2c6.2 6.2 16.4 6.2 22.6 0l24-24c6.2-6.2 6.2-16.4 0-22.6l-56.2-56.2 27.5-62c2.7-6.1 1.4-13.1-3.3-17.8l-16-16c-6.2-6.2-16.4-6.2-22.6 0z"/></svg>
                </button>
              </div>
            </div>
            <div class="col-md-6">
              <img src="<?php echo $folder;?>/data/img/demons/<?php echo $enemyDemon["model"];?>.png" class="img-fluid rounded-end" alt="<?php echo ucfirst($enemyDemon["rarity"])." ".$enemyDemon["name"];?>" title="<?php echo ucfirst($enemyDemon["rarity"])." ".$enemyDemon["name"];?>">
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php require_once("../data/parts/footer.php"); ?>
  </body>
</html>