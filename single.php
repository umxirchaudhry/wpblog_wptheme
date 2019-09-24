<?php get_header(); ?>
<?php while (have_posts()) {
    the_post(); ?>


  <section class="mbr-section content5 mbr-parallax-background" id="content5-9">
    <div class="cid-rCUG2bpzxH" style="background-image: url(<?php echo get_theme_file_uri( '/assets/images/background4.jpg' ) ?>);">


    
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    <?php the_title(); ?>
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    Article header with background image and parallax effect
                </h3>
                
                
            </div>
        </div>
    </div>
    </div>
</section>


<section class="mbr-section article content1 cid-rCXrmjMORI" id="content1-c">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-8"><p>
                <p><?php the_content( ); ?></p>
        </div>
    </div>
</section>

<?php } ?>
<?php get_footer(); ?>