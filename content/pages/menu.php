<?php
$pagina = "";
if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = "home";
}
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php if($pagina == "home") { echo"active"; }?>" href="home">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($pagina == "vakantiehuizen") { echo"active"; }?>" href="vakantiehuizen">vakantiehuizen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($pagina == "contact") { echo"active"; }?>" href="contact">contact</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link <?php if($pagina == "admin_panel" || $pagina == "toevoegen" || $pagina == "edit" || $pagina == "delete") { echo"active"; }?>" href="admin_panel">admin pannel</a>
      </li>
    </ul>
  </div>
</nav>