<nav class="navbar navbar-dark navbar-expand-lg bg-light .ms-1 " mx>
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" style="color:#20c997;" .navbar-default {
width:38.5%;} href="dashboard">TOKOKONSER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" style="color:#495057;" href="/items">PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#495057;" href="/sales">SALE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#495057;" href="/employees">Pegawai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#495057;" href="/users">USER</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#495057;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" style="color:#495057;" href="#">Action</a></li>
            <li><a class="dropdown-item" style="color:#495057;" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" style="color:#495057;" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ml-auto"> 
          <form action="/sessions/logout" method="post">
            <button type="submit" style="color:#495057;" class="btn btn-link nav-link"><?= current_user() == NULL ? "-" : current_user()['name'] ?> | Keluar</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>