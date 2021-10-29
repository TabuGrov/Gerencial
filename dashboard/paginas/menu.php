<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Inicio</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<?php if($tipo_user=="Administrador"){ ?>
<!-- Heading -->
<div class="sidebar-heading">
  Usuarios
</div>
<li class="nav-item">
  <a class="nav-link" href="usuarios.php">
    <i class="fas fa-fw fa-users"></i>
    <span>Lista de Usuarios</span></a>
</li>
<?php } ?>


<div class="sidebar-heading">
  Administrar Areas
</div>
<li class="nav-item">
  <a class="nav-link" href="areas.php">
    <i class="fas fa-fw fa-users"></i>
    <span>Areas</span></a>
</li>

<!-- <li class="nav-item">
  <a class="nav-link" href="descripcion_area.php">
    <i class="fas fa-fw fa-users"></i>
    <span>Descripcion area</span></a>
</li> -->
<?php if($tipo_user=="Gerente General"){ ?>
<div class="sidebar-heading">
  Estadisticas
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Estadisticas</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Consultas:</h6>
      <a class="collapse-item" href="buttons.php">Por periodo</a>
      <a class="collapse-item" href="cards.php">Por areas</a>
    </div>
  </div>
</li>
<?php } ?>