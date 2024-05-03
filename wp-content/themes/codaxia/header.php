<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- <meta property="og:image" content="https://cdn.thumbsmith.com/v1/u/codaxia/e-commerce" /> -->
  <meta name="google-site-verification" content="tPREifeNXUZ5BzNqsRZhQob__mrIxy1dQjsSd6GhCKE" />
  <link rel="shortcut icon" type="image/x-icon" href="<?= the_field('logo', 'option'); ?>" />
  <?php wp_head()  ?>
</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

  <!-- ========================= header start ========================= -->
  <header class="header">
    <div class="navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="<?= home_url() ?>">
                <img src="<?= the_field('logo', 'option'); ?>" alt="Logo" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul id="menu-navbar" class="navbar-nav ms-auto">
                  <?php wp_nav_menu([
                    'container' => false,
                    'items_wrap' => '%3$s',
                    'walker' => new Custom_Walker_Nav_Menu()
                  ]);
                  ?>
                </ul>

              </div>
              <!-- navbar collapse -->
            </nav>
            <!-- navbar -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- navbar area -->
  </header>
  <!-- ========================= header end ========================= -->