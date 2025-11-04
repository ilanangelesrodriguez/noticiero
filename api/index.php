<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-primary">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic text-warning">
            <?php echo "ILAN NESTOR ANGELES RODRIGUEZ"; ?>
          </h1>
          <p class="lead my-3">
            <?php echo htmlspecialchars($portada["resumen"] ?? ''); ?>
          </p>
        </div>
      </div>

<?php
  // Incluimos las secciones que definen $internacional y $nacional
  include("secciones/internacional.php");
  include("secciones/nacional.php");
  include("secciones/ciencia.php");

  include("secciones/clasificados.php");
  include("secciones/contenedores.php");
  include("secciones/cultura.php");
  include("secciones/deportes.php");
  include("secciones/economia.php");
  include("secciones/empleo.php");
include("secciones/formacion.php");
include("secciones/git.php");
include("secciones/nube.php");
include("secciones/openshift.php");
include("secciones/openstack.php");
include("secciones/opinion.php");

include("secciones/video.php");
include("secciones/uns.php");
include("secciones/television.php");
include("secciones/tecnologia.php");
include("secciones/sociedad.php");

  // Normaliza la sección para devolver siempre un array de artículos
  function articlesArray($section) {
    if (!is_array($section)) return [];
    // si ya es una lista de artículos (cada elemento es un array asociativo)
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
    $artsCiencia = articlesArray($ciencia ?? []);
    $artsClasificados = articlesArray($clasificados ?? []);
  $artsContenedores = articlesArray($contenedores ?? []);
  $artsCultura = articlesArray($cultura ?? []);
  $artsDeportes = articlesArray($deportes ?? []);
  $artsEconomia = articlesArray($economia ?? []);
  $artsEmpleo = articlesArray($empleo ?? []);
$artsFormacion = articlesArray($formacion ?? []);
$artsGit = articlesArray($git ?? []);
$artsNube = articlesArray($nube ?? []);
$artsOpenshift = articlesArray($openshift ?? []);
$artsOpenstack = articlesArray($openstack ?? []);
$artsOpinion = articlesArray($opinion ?? []);

$artsVideo = articlesArray($video ?? []);
$artsUns = articlesArray($uns ?? []);
$artsTelevision = articlesArray($television ?? []);
$artsTecnologia = articlesArray($tecnologia ?? []);
$artsSociedad = articlesArray($sociedad ?? []);
?>
      <!-- Fila 1: hasta 3 noticias por columna -->
      <div class="row mb-2">
        <div class="col-md-6">
          <?php
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
        <div class="col-md-12">
          <?php
            $limit = min(3, count($artsCiencia));
            for ($i = 0; $i < $limit; $i++) {
              $art = $artsCiencia[$i];
          ?>
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-info">Ciencia</strong>
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
                <p class="mb-0 text-muted">No hay noticias de ciencia disponibles.</p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>

      <!-- Fila Clasificados -->
      <div class="row mb-2">
        <div class="col-md-12">
          <?php
            $limit = min(3, count($artsClasificados));
            for ($i = 0; $i < $limit; $i++) {
              $art = $artsClasificados[$i];
          ?>
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-secondary">Clasificados</strong>
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
                <p class="mb-0 text-muted">No hay anuncios en clasificados.</p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <!-- Fin Fila Clasificados -->

      <!-- Fila Contenedores -->
      <div class="row mb-2">
        <div class="col-md-12">
          <?php
            $limit = min(3, count($artsContenedores));
            for ($i = 0; $i < $limit; $i++) {
              $art = $artsContenedores[$i];
          ?>
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-dark">Contenedores</strong>
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
                <p class="mb-0 text-muted">No hay noticias sobre contenedores disponibles.</p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <!-- Fin Fila Contenedores -->

      <!-- Fila Cultura -->
      <div class="row mb-2">
        <div class="col-md-12">
          <?php
            $limit = min(3, count($artsCultura));
            for ($i = 0; $i < $limit; $i++) {
              $art = $artsCultura[$i];
          ?>
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-warning">Cultura</strong>
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
                <p class="mb-0 text-muted">No hay noticias de cultura disponibles.</p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <!-- Fin Fila Cultura -->

      <!-- Fila Deportes -->
      <div class="row mb-2">
        <div class="col-md-12">
          <?php
            $limit = min(3, count($artsDeportes));
            for ($i = 0; $i < $limit; $i++) {
              $art = $artsDeportes[$i];
          ?>
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-success">Deportes</strong>
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
                <p class="mb-0 text-muted">No hay noticias deportivas disponibles.</p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <!-- Fin Fila Deportes -->

      <!-- Fila Economía -->
      <div class="row mb-2">
        <div class="col-md-12">
          <?php
            $limit = min(3, count($artsEconomia));
            for ($i = 0; $i < $limit; $i++) {
              $art = $artsEconomia[$i];
          ?>
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body d-flex flex-column align-items-start col-md-12">
              <strong class="d-inline-block mb-2 text-muted">Economía</strong>
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
                <p class="mb-0 text-muted">No hay noticias económicas disponibles.</p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <!-- Fin Fila Economía -->


      <!-- Fila Empleo -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsEmpleo));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsEmpleo[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-secondary">Empleo</strong>
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
          <p class="mb-0 text-muted">No hay ofertas de empleo disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila Empleo -->

<!-- Fila Formación -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsFormacion));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsFormacion[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-info">Formación</strong>
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
          <p class="mb-0 text-muted">No hay noticias de formación disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila Formación -->

<!-- Fila Git -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsGit));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsGit[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-dark">Git</strong>
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
          <p class="mb-0 text-muted">No hay noticias sobre Git disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila Git -->

<!-- Fila Nube -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsNube));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsNube[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-primary">Nube</strong>
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
          <p class="mb-0 text-muted">No hay noticias sobre nube disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila Nube -->

<!-- Fila OpenShift -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsOpenshift));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsOpenshift[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-secondary">OpenShift</strong>
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
          <p class="mb-0 text-muted">No hay noticias sobre OpenShift disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila OpenShift -->

<!-- Fila OpenStack -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsOpenstack));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsOpenstack[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-dark">OpenStack</strong>
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
          <p class="mb-0 text-muted">No hay noticias sobre OpenStack disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila OpenStack -->

<!-- Fila Opinión -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsOpinion));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsOpinion[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-muted">Opinión</strong>
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
          <p class="mb-0 text-muted">No hay columnas de opinión disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila Opinión -->

<!-- Fila Video -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsVideo));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsVideo[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-primary">Video</strong>
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
          <p class="mb-0 text-muted">No hay contenido en video disponible.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila Video -->

<!-- Fila UNS -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsUns));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsUns[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-secondary">UNS</strong>
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
          <p class="mb-0 text-muted">No hay noticias de la UNS disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila UNS -->
 <!-- Fila Televisión -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsTelevision));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsTelevision[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-warning">Televisión</strong>
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
          <p class="mb-0 text-muted">No hay noticias de televisión disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila Televisión -->
<!-- Fila Tecnología -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsTecnologia));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsTecnologia[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-info">Tecnología</strong>
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
          <p class="mb-0 text-muted">No hay noticias de tecnología disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila Tecnología -->    
<!-- Fila Sociedad -->
<div class="row mb-2">
  <div class="col-md-12">
    <?php
      $limit = min(3, count($artsSociedad));
      for ($i = 0; $i < $limit; $i++) {
        $art = $artsSociedad[$i];
    ?>
    <div class="card flex-md-row mb-4 shadow-sm ">
      <div class="card-body d-flex flex-column align-items-start col-md-12">
        <strong class="d-inline-block mb-2 text-muted">Sociedad</strong>
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
          <p class="mb-0 text-muted">No hay noticias de sociedad disponibles.</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Fila Sociedad -->

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
