<?php require "../../valida.php"; ?>
<div id="header">
  <h1><a href="dashboard.php">Dashboard da Turma de SIS</a></h1>
</div>
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav btn-group">
    <li class="btn btn-inverse"><a title="Desconectar" href="../../../index.php"><i class="icon icon-share-alt"></i> <span class="text">Sair</span></a></li>
  </ul>
</div>
<?php require "../../conecta.php"; ?>
<div id="sidebar">
  <a href="#" class="visible-phone"><i class="icon icon-home"></i> Inicio</a>
  <ul> 
    <li>
      <a href="../dashboard/dashboard.php"><i class="icon icon-home"></i><span>Inicio</span></a>
    </li>
    <li class="submenu">
      <a href="#"><i class="icon icon-th-list"></i><span>Usuarios</span></a>
      <ul>
        <li class="active"><a href="../usuario/form_adicionar_usuarios.php">Cadastrar</a></li>
        <li><a href="../usuario/list_usu.php">Listar</a></li>
      </ul>
    </li>
    <li class="submenu">
      <a href="#"><i class="icon icon-th-list"></i><span>Produtos</span></a>
      <ul>
        <li class="active"><a href="../Produto/form_add_prod.php">Cadastrar</a></li>
        <li><a href="../Produto/form_list_prod.php">Listar</a></li>
    </ul>
  </li>
</ul>
</div>
