<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="menu.php">Brazilian | </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Listar</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="listarCategoria.php">Categoria</a></li>
              <li><a class="dropdown-item" href="listarTipo.php">Tipo</a></li>
              <li><a class="dropdown-item" href="listarResponsavel.php">Responsável</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Usuários</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="listarUsuarios.php">Usuários</a></li>  
            <li><a class="dropdown-item" href="cadastroUsuario.php">Cadastrar Usuário</a></li>
              <li><a class="dropdown-item" href="aprovarUsuario.php">Aprovar Usuário</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Adicionar</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="adicionarCategoria.php">Categoria</a></li>
              <li><a class="dropdown-item" href="adicionarTipo.php">Tipo</a></li>
              <li><a class="dropdown-item" href="adicionarResponsavel.php">Responsável</a></li>
            </ul>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Chamados</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="listarOs.php">Chamados</a></li>
            <li><a class="dropdown-item" href="listarOsNovo.php">Chamados Novos</a></li>
            <li><a class="dropdown-item" href="listarOsEmAndamento.php">Chamados Em Andamento</a></li>
            <li><a class="dropdown-item" href="listarOsFinalizado.php">Chamados Finalizado</a></li>
              
            </ul>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</header>