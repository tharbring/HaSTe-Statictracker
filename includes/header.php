<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">Overview</a>
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
      <li class="nav-item">
        <a class="nav-link navlink-padding" href="./index.php?page=members">Members</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link navlink-padding dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Times</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/functions/headerfunctions/timeSelections.php'); ?>
          </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link navlink-padding dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Gear</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/functions/headerfunctions/gearSelections.php'); ?>
          </ul>
      </li>
    </ul>
  </div>
</nav>
