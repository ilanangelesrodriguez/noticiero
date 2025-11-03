
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">
<!-- favicon público y fiable -->
<link rel="icon" href="https://github.com/favicon.ico" type="image/x-icon">
<link rel="icon" href="https://github.githubassets.com/favicons/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png">
<meta name="theme-color" content="#24292e">
    <title>DIARIO EL HOCICÓN</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/examples/blog/blog.css" rel="stylesheet">
  
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="#">NOTICIAS SON NOTICIAS 2025</a>
          </div>
        </div>
      </header>

      <?php
        include("secciones/portada.php");
      ?>
      <div class="jumbotron p-3 p-md-5 text-white rounded  bg-primary">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic text-warning">
            <?php
              echo "ILAN NESTOR ANGELES RODRIGUEZ";
            ?>
          </h1>
          <p class="lead my-3">
            <?php
              echo $portada["resumen"];
            ?>
          </p>
        </div>
      </div>
<?php
  include("secciones/internacional.php");
  include("secciones/nacional.php");

  // Helper: siempre devuelve un array de artículos (aunque el archivo defina solo uno)
  function articlesArray($section) {
    if (!is_array($section)) return [];
    // si es lista de artículos (cada elemento es un array asociativo)
    if (isset($section[0]) && is_array($section[0])) {
      return $section;
    }
    // si es un único artículo en forma asociativa
    if (isset($section['titulo']) || isset($section['autor']) || isset($section['resumen'])) {
      return [$section];
    }
    return [];
  }

  $artsInt = articlesArray($internacional ?? []);
  $artsNac = articlesArray($nacional ?? []);
?>
<div class="row mb-2">
  <div class="col-md-6">
    <?php
      // Mostrar hasta 3 noticias internacionales
      $limit = min(3, count($artsInt));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsInt[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-primary">Internacional</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="#"><?php echo htmlspecialchars($art['titulo'] ?? ''); ?></a>
        </h3>
        <div class="mb-1 text-muted"><?php echo htmlspecialchars($art['autor'] ?? ''); ?></div>
        <p class="card-text mb-auto"><?php echo htmlspecialchars($art['resumen'] ?? ''); ?></p>
      </div>
    </div>
    <?php } 
      if ($limit === 0) {
    ?>
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <p class="mb-0 text-muted">No hay noticias internacionales disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>

  <div class="col-md-6">
    <?php
      // Mostrar hasta 3 noticias nacionales
      $limit = min(3, count($artsNac));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsNac[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-success">Nacional</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="#"><?php echo htmlspecialchars($art['titulo'] ?? ''); ?></a>
        </h3>
        <div class="mb-1 text-muted"><?php echo htmlspecialchars($art['autor'] ?? ''); ?></div>
        <p class="card-text mb-auto"><?php echo htmlspecialchars($art['resumen'] ?? ''); ?></p>
      </div>
    </div>
    <?php } 
      if ($limit === 0) {
    ?>
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <p class="mb-0 text-muted">No hay noticias nacionales disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila 1 -->
<div class="row mb-2">
  <div class="col-md-6">
    <?php
      // Mostrar hasta 3 noticias internacionales
      $limit = min(3, count($artsInt));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsInt[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-primary">Internacional</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="#"><?php echo htmlspecialchars($art['titulo'] ?? ''); ?></a>
        </h3>
        <div class="mb-1 text-muted"><?php echo htmlspecialchars($art['autor'] ?? ''); ?></div>
        <p class="card-text mb-auto"><?php echo htmlspecialchars($art['resumen'] ?? ''); ?></p>
      </div>
    </div>
    <?php } 
      // Si no hay noticias, puedes mostrar un mensaje opcional:
      if ($limit === 0) {
    ?>
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <p class="mb-0 text-muted">No hay noticias internacionales disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>

  <div class="col-md-6">
    <?php
      // Mostrar hasta 3 noticias nacionales
      $limit = min(3, count($artsNac));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsNac[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-success">Nacional</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="#"><?php echo htmlspecialchars($art['titulo'] ?? ''); ?></a>
        </h3>
        <div class="mb-1 text-muted"><?php echo htmlspecialchars($art['autor'] ?? ''); ?></div>
        <p class="card-text mb-auto"><?php echo htmlspecialchars($art['resumen'] ?? ''); ?></p>
      </div>
    </div>
    <?php } 
      if ($limit === 0) {
    ?>
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <p class="mb-0 text-muted">No hay noticias nacionales disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila 1 -->
<div class="row mb-2">
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-primary">Internacional</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="#"><?php echo htmlspecialchars($artInt['titulo']); ?></a>
        </h3>
        <div class="mb-1 text-muted"><?php echo htmlspecialchars($artInt['autor']); ?></div>
        <p class="card-text mb-auto"><?php echo htmlspecialchars($artInt['resumen']); ?></p>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-success">Nacional</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="#"><?php echo htmlspecialchars($artNac['titulo']); ?></a>
        </h3>
        <div class="mb-1 text-muted"><?php echo htmlspecialchars($artNac['autor']); ?></div>
        <p class="card-text mb-auto"><?php echo htmlspecialchars($artNac['resumen']); ?></p>
      </div>
    </div>
  </div>
</div>
<!-- Fin Fila 1 -->
      <!-- Fin Fila 1 -->
    </div>


    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
