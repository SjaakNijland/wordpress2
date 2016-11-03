        <?php get_header() ?>
        <?php get_sidebar() ?>
            <div id="text">
            <div id="inhoud">
                <br>
                <br>
                <br>
                <br>
                <?php if(have_posts()) : while(have_posts()) : the_post() ?>
                < a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
                <p><?php the_content() ?></p>
                <?php endwhile; endif; ?>
<!--
                <h1>HOME</h1>
                <h2>HOME</h2>
                <div id="textjes">
                <p>Welkom op mijn site. hier vind je alles over onder andere: muziek, festivals en artiesten.  Laat een leuke reactie of mening achter op de blogs en veel kijk plezier!</p>
                </div>
                <img src="img/balon.jpg" alt="ballon">
-->
                </div>
            </div>
                </div>
        <?php get_footer() ?>
           