<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <a class="navbar-brand" href="#"><img src="http://cdn.bulbagarden.net/upload/thumb/4/4b/Pok%C3%A9dex_logo.png/250px-Pok%C3%A9dex_logo.png" alt="" style="max-height: 100%"></a>
  </div>
    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <select class="form-control" name='mod'>
            <option>Name</option>
            <option>Health</option>
            <option>Attack</option>
            <option value="sattack">S-Attack</option>
            <option>Defense</option>
            <option value="sdefense">S-Defense</option>
            <option>Base XP</option>

          </select>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="I choose you!" name="search">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
</nav>