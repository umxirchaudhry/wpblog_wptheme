<?php get_header(); ?>

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(20, 157, 204);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center pt-5">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    FULL WIDTH INTRO
                </h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">
                    Beautiful mobile websites
                </h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    Full width intro with adjustable height, background image and a color overlay. Click any text to edit or style it.
                </p>
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-secondary display-4" href="https://mobirise.co">
                        <span class="mbr-iconfont mbri-file"></span>LEARN MORE</a></div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section info2 cid-rCUEgVFpI9" id="info2-4">

    

    

    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-left py-4">
                    <a class="btn btn-primary display-4" href="https://mobirise.co">
                    <span class="mbri-preview mbr-iconfont"></span>
                    SEE MORE
                    </a>
                </div>
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    GRADIENT BACKGROUND
                </h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
                    Info block with gradient. Text is aligned to right.
                </h3>
            </div>
        </div>
    </div>
</section>


<section>
    
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

<div class="cpontainer">
    <div class="row text-center py-2">
        <div class="col">
            <button class="btn btn-xs"><?php  echo paginate_links( ) ?></button>
            
        </div>
    </div>
</div>


<?php get_footer(); ?>
  
</body>
</html>