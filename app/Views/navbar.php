<nav class="navbar navbar-dark navbar-expand-lg bg-light .ms-1 " mx>
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" style="color:#20c997;" .navbar-default {
width:38.5%;} href="dashboard">TOKOKONSER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link col-3" style="color:#495057;" href="/items">PRODUCT</a>
        </li>
        <li class="nav-item col-2">
          <a class="nav-link col-3" style="color:#495057;" href="/sales">SALE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#495057;" href="/employees">PEGAWAI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#495057;" href="/users">USER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#495057;" href="/validation">VALIDATION</a>
        </li>
        <li class="nav-item col-5">
<div class="container">
<a class="nav-link" style="color:#495057;" href="/kart">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
 </a>
 </li>
        
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