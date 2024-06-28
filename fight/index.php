<?php 
session_start();

$myDemonID = 6;
$enemyDemonID = 65;
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
              <img src="<?php echo $folder;?>/data/img/demons/<?php echo $myDemonID;?>.png" class="img-fluid rounded-start" alt="<?php echo ucfirst(getRarity($myDemonID))." ".getTypeName($myDemonID);?>" title="<?php echo ucfirst(getRarity($myDemonID))." ".getTypeName($myDemonID);?>">
            </div>
            <div class="col-md-6 d-flex flex-column">
              <div class="card-body flex-fill">
                <h5 class="card-title">
                  <?php echo getTypeName($myDemonID);?>
                  <span class="card-subtitle pt-2 fs-6 ad-<?php echo getRarity($myDemonID);?> float-end"><?php echo ucfirst(getRarity($myDemonID));?></span>
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Level 16</h6>
                <p class="card-text">This is a wider card with supporting text.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex bg-dark-subtle">
                  <div class="text-center flex-fill">
                    <span>1</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                      <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                    </svg>
                  </div>
                  <div class="text-center flex-fill">
                    <span>1</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill" viewBox="0 0 16 16">
                      <path d="M5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                    </svg>
                  </div>
                  <div class="text-center flex-fill">
                    <span>25 / 100</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-life-preserver" viewBox="0 0 16 16">
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m6.43-5.228a7.03 7.03 0 0 1-3.658 3.658l-1.115-2.788a4 4 0 0 0 1.985-1.985zM5.228 14.43a7.03 7.03 0 0 1-3.658-3.658l2.788-1.115a4 4 0 0 0 1.985 1.985zm9.202-9.202-2.788 1.115a4 4 0 0 0-1.985-1.985l1.115-2.788a7.03 7.03 0 0 1 3.658 3.658m-8.087-.87a4 4 0 0 0-1.985 1.985L1.57 5.228A7.03 7.03 0 0 1 5.228 1.57zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                    </svg>
                  </div>
                </li>
                <li class="list-group-item bg-dark-subtle">
                  <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 3em;">
                    <div class="progress-bar bg-success" style="width: 25%"></div>
                  </div>
                </li>
                <li class="list-group-item bg-dark-subtle"></li>
              </ul>
              <div class="pe-3 pb-3 text-end">
                <button type="button" class="btn btn-success btn-sm">Run</button>
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
                  <?php echo getTypeName($enemyDemonID);?>
                  <span class="card-subtitle pt-2 fs-6 ad-<?php echo getRarity($enemyDemonID);?> float-end"><?php echo ucfirst(getRarity($enemyDemonID));?></span>
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Level 16</h6>
                <p class="card-text">This is a wider card with supporting text.</p>
              </div>
              <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex bg-dark-subtle">
                  <div class="text-center flex-fill">
                    <span>1</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                      <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                    </svg>
                  </div>
                  <div class="text-center flex-fill">
                    <span>1</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill" viewBox="0 0 16 16">
                      <path d="M5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                    </svg>
                  </div>
                  <div class="text-center flex-fill">
                    <span>25 / 100</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-life-preserver" viewBox="0 0 16 16">
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m6.43-5.228a7.03 7.03 0 0 1-3.658 3.658l-1.115-2.788a4 4 0 0 0 1.985-1.985zM5.228 14.43a7.03 7.03 0 0 1-3.658-3.658l2.788-1.115a4 4 0 0 0 1.985 1.985zm9.202-9.202-2.788 1.115a4 4 0 0 0-1.985-1.985l1.115-2.788a7.03 7.03 0 0 1 3.658 3.658m-8.087-.87a4 4 0 0 0-1.985 1.985L1.57 5.228A7.03 7.03 0 0 1 5.228 1.57zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                    </svg>
                  </div>
                </li>
                <li class="list-group-item bg-dark-subtle">
                  <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 3em;">
                    <div class="progress-bar bg-success" style="width: 25%"></div>
                  </div>
                </li>
                <li class="list-group-item bg-dark-subtle"></li>
              </ul>
              <div class="ps-3 pb-3 text-start">
                <button type="button" class="btn btn-success btn-sm">Attack</button>
              </div>
            </div>
            <div class="col-md-6">
              <img src="<?php echo $folder;?>/data/img/demons/<?php echo $enemyDemonID;?>.png" class="img-fluid rounded-end" alt="<?php echo ucfirst(getRarity($enemyDemonID))." ".getTypeName($enemyDemonID);?>" title="<?php echo ucfirst(getRarity($enemyDemonID))." ".getTypeName($enemyDemonID);?>">
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php require_once("../data/parts/footer.php"); ?>
  </body>
</html>