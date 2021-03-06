<!-- aqui começa o navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="principal.php">OnTheLine</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="produtos.php">Produtos <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categoria.php">Categoria</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="salvar-usuario.php">Cadastro</a>
          <a class="dropdown-item" href="usuarios.php">Lista de usuários</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Algo mais aqui</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Funcionários
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cargo.php">Cargo</a>
          <a class="dropdown-item" href="funcionarios.php">Funcionários</a>
        </div>

      </li>



    </ul>
    <p class="text-success"> Usuário : <strong> <?php echo $_SESSION['nome'] ?> </strong>
    <a href="logout.php" class="btn btn-success">

      <i class="fas fa-sign-out-alt"></i>
    </a>

    </p>
  </div>
</nav>
<!-- aqui fecha o navbar -->