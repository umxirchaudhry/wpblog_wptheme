<?php get_header(); ?>

  <section class="mbr-section content5 mbr-parallax-background" id="content5-9">
    <div class="cid-rCUG2bpzxH" style="background-image: url(<?php echo get_theme_file_uri( '/assets/images/background4.jpg' ) ?>);">


    
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    <?php the_archive_title(); ?>
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    Article header with background image and parallax effect
                </h3>
                
                
            </div>
        </div>
    </div>
    </div>
</section>

<section>

<?php while (have_posts()) {
    the_post(); ?>
    <div class="content container-fluid py-4 px-4 ml-40">
        <div class="row">
            <div class="col-xs-12 col-md-4 mr-auto">
                <div class="card-group">
                    <img src="<?php echo get_theme_file_uri( '/assets/images/background1.jpg' ); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-title">
                            <h2><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <div class="card-text">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">By: <?php the_author_posts_link(); ?> on <?php the_time('n/j/y'); ?> in <?php echo get_the_category_list( ', ' ) ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

</section>

<?php get_footer(); ?>