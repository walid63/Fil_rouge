<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="./index.php?uc=register"><?php echo "register"; ?></a></li>
        <li><a href="./index.php?uc=login"><?php echo "login"; ?></a></li>

        <?php
        if (isset($_SESSION['user_id'])) {
          echo "<li><a href='index.php?uc=home''>Accueil</a></li>";
          echo "<li><a href='index.php?uc=logout''>deconnexion</a></li>";
      }
?>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Test 1</a></li>
        <li class="tab"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
  </nav>