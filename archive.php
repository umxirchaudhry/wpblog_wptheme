<?php get_header(); ?>

  <section class="mbr-section content5 mbr-parallax-background" id="content5-9">
    <div class="cid-rCUG2bpzxH" style="background-image: url(<?php echo get_theme_file_uri( '/assets/images/background4.jpg' ) ?>);">


    
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    <?php the_archive_title(); ?>
                </h2>
               <!--  <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    Article header with background image and parallax effect
                </h3> -->
                
                
            </div>
        </div>
    </div>
    </div>
</section>

<section><!--Main Content Start-->
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
</section><!--Main Content Ends-->


<section><!--Pagination Starts-->
    <div class="row text-center py-2 pb-3">
        <div class="col">
        <?php  echo paginate_links( ); ?>
        </div>
    </div>
</section><!--Pagination Ends-->

<?php get_footer(); ?>