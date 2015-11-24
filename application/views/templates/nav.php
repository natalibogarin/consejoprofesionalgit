<!-- nav -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Toggle mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li class="active"><a href="<?php echo base_url()?>">Inicio <span class="sr-only">(current)</span></a></li>
      	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <div class="iconsejo"></div> El Consejo <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url()?>index.php/sitio/page/quienesomos">Quienes Somos</a></li>
            <li><a href="<?php echo base_url()?>index.php/sitio/page/autoridades">Autoridades</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url()?>index.php/sitio/page/novedades">Novedades <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Cursos</a></li>
        <li><a href="#">Novedades Legislativas</a></li>
        <li><a href="#">Institutos</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
	  </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- /nav -->