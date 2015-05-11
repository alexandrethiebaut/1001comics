<div class="top-bar-container contain-to-grid show-for-medium-up fixed">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><img src="wp-content/uploads/2015/04/logo1001comics.png" alt="logo"></a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
            <ul class="right">
                    <?php  wp_loginout(); ?>
            </ul>
        </section>
    </nav>
</div>
