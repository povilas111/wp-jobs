  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
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
              <div class="row">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4"><img src="<?php echo get_option('logo'); ?>"> </div>
                  <div class="col-sm-4"></div>
              </div>
          </div>
      </div>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        <div class="nav-collapse collapse">
          <ul class="nav">

              <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container">