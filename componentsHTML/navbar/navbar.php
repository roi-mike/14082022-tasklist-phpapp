

<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <?php
        if($_SERVER['SCRIPT_NAME'] != '/register.php'){
        ?>
          <li><a href='../register.php'>S'inscrire</a></li>
        <?php
        } else {
        ?>
        <li><a href='/'>Accueil</a></li>
        <?php
        }
        ?>
    
    </ul>
    </div>
  </nav>