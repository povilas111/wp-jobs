  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Terminal+Dosis" />
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
      <div class="page-container top-bar">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 margin-t-15">
                      <a href="<?php echo site_url(); ?>"><?php bloginfo('tagline'); ?></a>
                  </div>
                  <div class="col-sm-6 text-right margin-t-15">
                      <ul class="top-list">
                          <li><a href=""> info@lavisaspell.lt </a></li>
                          <li class="border-sides"><a href="tel: <?php echo get_option('phone_number'); ?>"> <?php echo get_option('phone_number') ?></a></li>
                          <li><a href="<?php echo get_option('facebook_url') ?>"><i class="fa fa-facebook fa-1x" aria-hidden="true"></i></a></li>
                          <li><a href="<?php echo get_option('facebook_url') ?>"><i class="fa fa-twitter fa-1x" aria-hidden="true"></i></a></li>
                          <li><a href="<?php echo get_option('linked_url') ?>" ><i class="fa fa-linkedin fa-1x" aria-hidden="true"></i></a></i></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4 text-center padding-20">
                  <?php if ( function_exists( 'the_custom_logo' ) ) {
                      the_custom_logo();
                  } ?>
              </div>
              <div class="col-sm-4"></div>
          </div>
      </div>

      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-center">
                      <?php wp_nav_menu(array(  'container' => '','items_wrap' => '%3$s', 'title_li' => '', 'exclude' => 4)); ?>
                  </ul>
              </div>
      </nav>
      </div>
  <div class="container">