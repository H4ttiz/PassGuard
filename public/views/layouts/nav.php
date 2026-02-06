<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">

    <a class="navbar-brand me-auto" href="?page=home">
      <img class="icon" src="assets/img/icon.png" alt="Icon">
      <span>PassGuard</span>
    </a>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
          <img class="icon" src="assets/img/icon.png" alt="Icon">
          <span>PassGuard</span>
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
      </div>

      <div class="offcanvas-body">

        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">

          <li class="nav-item">
            <a class="truenav nav-link mx-lg-2 <?= $page == 'home' ? 'active' : '' ?>" 
              href="?page=home">
              Home
            </a>
          </li>

          <li class="nav-item">
            <a class="truenav nav-link mx-lg-2 <?= $page == 'dashboard' ? 'active' : '' ?>" 
              href="?page=dashboard">
              Dashboard
            </a>
          </li>

          <li class="nav-item">
            <a class="truenav nav-link mx-lg-2 <?= $page == 'contas' ? 'active' : '' ?>" 
              href="?page=contas">
              Cadastrar Contas
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="dropdown">

            <a 
              class=" nav-link mx-lg-2 text-black text-decoration-none dropdown-toggle"
              href="#" 
              role="button" 
              data-bs-toggle="dropdown"
            >
              👤 Leonardo
            </a>

            <ul class="dropdown-menu dropdown-menu-end">

              <li>
                <a 
                  class="dropdown-item <?= $page == 'perfil' ? 'active' : '' ?>" 
                  href="?page=perfil"
                >
                  Minha Conta
                </a>
              </li>

              <li><hr class="dropdown-divider"></li>

              <li>
                <a class="dropdown-item text-danger" href="?page=logout">
                  Sair
                </a>
              </li>

            </ul>
          </div>
          <button class="navbar-toggler pe-0" type="button"    data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  </div>
</nav>