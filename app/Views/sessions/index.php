<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</style>
</head>
<body>
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">   
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
         <?php foreach (session()->getFlashdata() as $key => $flash) : ?>
          <div class="alert alert-<?= $key ?>" role="alert">
          <?= $flash ?>
        </div>
        <?php endforeach; ?>

        <form action="/sessions" method="post">
          <h1 class="my-6 display-5 fw-bold ls-tight" style="color:#20c997;" >
          TOKOKONSER <br />
          <span style="color: hsl(218, 81%, 75%)"></span>
        </h1>
        <p class="mb-5 fs-4 opacity-150" style="color:#495057">
        Toko konser merupakan website untuk mempermudahkan pembelian dan penjualan serta menjamin keabsahan tiket konser
      </p>
    </div>

    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
      <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
      <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
      <div class="card bg-glass">
        <div class="card-body px-4 py-5 px-md-5">
          
        <!-- Email input -->
                <div class="form-outline mb-3">
                  <input type="email" name="email" id="exampleFormControlInput1" class="form-control" placeholder="name@example.com">
                  <label class="form-label" for="exampleFormControlInput1">ID KASIR</label>
                </div>
                
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" class="form-control" placeholder="******" />
                  <label class="form-label" for="password">PASSWORD</label>
                </div>
              </div>
              
              <!-- Submit button -->
              <input type="submit" value="MASUK" class="btn btn-success btn-block mb-4">
            </form>
          </div>
          <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


