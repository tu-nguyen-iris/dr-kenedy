<?php get_header();
if(have_posts()) {
    the_post();
    $coverImage = get_the_post_thumbnail_url();
    ?>
    <section class="cover">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        } else {
            echo '<img src="'.THEME_URL
                . '/src/images/Home.png">';
        }
        ?>
        <div class="cover__body">
            <div class="container">
                <p class="cover__title">Robert M. Kennedy, DDS</p>
                <h1 class="heading">
                    <?php the_title()?>
                </h1>
                <div  class="cover__button" >
                    <button class="button button--video" >Watch a video</button>
                </div>
            </div>
        </div>
    </section>
<?php }get_footer(); ?>