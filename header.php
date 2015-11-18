<!DOCTYPE html>
    <html lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//www.google-analytics.com" rel="dns-prefetch">
        
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        
        <?php wp_head(); ?>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <?php wp_nav_menu( array( 'theme_location' => 'main_navigation' ) ); ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Header</h1>
                </div>
            </div>
        </div>