

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">  
    <img src='/web2/css/logo.png' alt='' style='width:100px' />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
        <?php foreach($data['menuItems'] as $item): ?>
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <?php echo $item[0] ?>    
                </a>
            </li>
        <?php endforeach; ?>
      
    </ul>
  </div>
</nav>