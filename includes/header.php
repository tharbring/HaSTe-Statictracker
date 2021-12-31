<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid header-padding">
    <a class="navbar-brand" href="./index.php">Overview</a>
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
      <li class="nav-item">
        <a class="nav-link navlink-padding" href="./index.php?page=members">Members</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link navlink-padding dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Times</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/functions/headerfunctions/timeSelections.php'); ?>
          </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link navlink-padding dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Gear</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/functions/headerfunctions/gearSelections.php'); ?>
          </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link navlink-padding" href="./index.php?page=lootpriority">Loot-Priority</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link navlink-padding" href="./index.php?page=loot">Loot</a>
      </li>

    </ul>
    <ul class="navbar-nav mb-2 mb-md-0 justify-content-end">
      <li class="nav-item dropdown">
        <a class="nav-link navlink-padding justify-content-end" target="_blank" href="https://harbring.com/">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link navlink-padding justify-content-end" target="_blank" href="https://harbring.com/index.php?page=changelog_staticplanner" style="color:Crimson;">v1.2</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link navlink-padding justify-content-end" target="_blank" href="https://discord.gg/4qCmERpSUk">
          <img src="/storage/img/Discord-Logo-White.png" alt="Join My Discord" height="25">
        </a>
      </li>
    </ul>

  </div>
</nav>
