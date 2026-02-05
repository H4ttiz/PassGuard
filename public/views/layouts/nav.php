<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">

    <a class="navbar-brand fw-bold" href="?page=dashboard">
      🔐 SafeVault
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMain">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link <?= $page == 'dashboard' ? 'active fw-bold' : '' ?>" href="?page=dashboard">
            Home
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= $page == 'contas' ? 'active fw-bold' : '' ?>" href="?page=contas">
            Contas
          </a>
        </li>

      </ul>

      <div class="d-flex align-items-center gap-3">

        <a href="?page=nova-senha" class="btn btn-success btn-sm">
          + Nova Senha
        </a>

        <div class="dropdown">

          <a 
            class="text-white text-decoration-none dropdown-toggle"
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

      </div>

    </div>
  </div>
</nav>
