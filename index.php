<?php get_header(); ?>

<section><!--Hero Section-->
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(20, 157, 204);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center pt-5">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    FULL WIDTH INTRO
                </h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">
                    Some Description
                </h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    Little More Description
                </p>
            </div>
        </div>
    </div>

</section>

<section><!--Main-->
    
        <?php while (have_posts()) {
                        the_post(); ?>
        <div class="container">
        <div class="row py-3">
            <div class="col-xs-12 col-md-6 col-lg-4">
                <img src="<?php echo get_theme_file_uri( '/assets/images/background1.jpg' ) ?>" class="card-img-top" alt="...">
                
            </div>
            <div class="col-xs-12 col-md-6 col-lg-8">
                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <small class="text-muted">By: <?php the_author_posts_link(); ?> on <?php the_time('n/j/y'); ?> in <?php echo get_the_category_list( ', ' ) ?></small>
                    <p class="card-text text-center"><?php the_excerpt(); ?></p>
                    <button class="btn btn-primary btn-sm ml-auto "><a href="<?php the_permalink(); ?>"><span class="text-light">Read More</span></a></button>
            </div>
        </div>
        <hr>
    </div>
    <?php } ?>
</section>

<section><!--Pagination-->
    <div class="row text-center py-2 pb-3">
        <div class="col">
            <?php  echo paginate_links( ); ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>
  
</body>
</html>