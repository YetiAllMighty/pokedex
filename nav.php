<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <a class="navbar-brand" href="#"><img src="http://cdn.bulbagarden.net/upload/thumb/4/4b/Pok%C3%A9dex_logo.png/250px-Pok%C3%A9dex_logo.png" alt="" style="max-height: 100%"></a>
  </div>
        <form class="navbar-form" role="search" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="input-control">
            <select name="mod" id="mod" class="form-control">
              <option value="Name">Name</option>
              <option value="Health">Health</option>
              <option value="Attack">Attack</option>
              <option value="Defense">Defense</option>
              <option value="sattack">S-Attack</option>
              <option value="sdefense">S-Defense</option>
              <option value="xp">Base XP</option>
            </select>
            <?php $color = array('danger', 'info', 'warning', 'success'); $class= rand(0, sizeof($color)) ?>
            <input type="search" class="form-control" placeholder="I Choose You!" name="search">
            <button type="submit" name="submit" class="form-control btn btn-<?php echo $color[$class]; ?>">Search</button>
            </div>
        </form>
</nav>