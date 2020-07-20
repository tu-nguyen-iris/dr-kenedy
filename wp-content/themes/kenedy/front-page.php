<?php get_header() ?>
<section class="cover">
    <?php
    if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else {
        echo '<img src="' . THEME_URL
            . '/src/images/Home.png">';
    }
    ?>
    <div class="cover__body">
        <div class="container">
            <p class="cover__title">Robert M. Kennedy, DDS</p>
            <h1 class="heading">
                <?php the_title() ?>
            </h1>
            <div class="cover__button">
                <button class="button button--video">Watch a video</button>
                <button class="button button--video button--video--primary d-none d-lg-block">Watch a video</button>
            </div>
            <div class="cover__rating d-none d-lg-block">
                <p class="title">Best Dental</p>
                <p class="number">101</p>
                <p class="label">Review</p>
                <div class="cover__rating__stars">
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                </div>
                <a class="cover__rating__learnmore" href="#!">Learn More</a>
            </div>
        </div>
    </div>
</section>
<section class="welcome container">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 ">
            <h2 class="welcome__title">
                Welcome to Kennedy Family and Cosmetic Dentistry
            </h2>
            <p class="welcome__text">
                Since 1992, the Kennedy Family and Cosmetic Dentistry office has been providing patients in the Bedford,
                MA community with comprehensive dental care. With cosmetic and family dentistry, we can help you achieve
                a healthier and more attractive smile.
            </p>
        </div>
        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
            <h3 class="welcome__description">
                Advanced, comfortable, and efficient
            </h3>
            <p class="welcome__text">Your good dental health is important, and so is your time. Therefore, we do our
                best to minimize your wait and treatment time by investing in advanced dental technology and maintaining
                a friendly, but efficient, practice atmosphere.</p>
            <h3 class="welcome__description">
                Quality dental care for you and your family
            </h3>
            <p class="welcome__text">
                We can also protect and improve the smiles of every member of your family, including young children, so
                that your entire family can receive the care they need under one roof.
            </p>
        </div>
    </div>

</section>

<section class="banner">
    <img src="<?php echo THEME_URL?>/src/images/Home2.png" >
</section>
<section class="content-page-home">
        <div class="row horizon">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <h2 class="item-title">
                Family Dentistry
            </h2>
            <p>
                Family’s dental health requires a variety of dental services. Children’s teeth and oral structures require different treatments than those of their parents and older siblings—which are more complex. We offer a wide range of family dentistry services for every member of your family:
            </p>
            <button class="button">
                Learn More
            </button>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <img src="<?php echo THEME_URL?>/src/images/Rectangle 104.png" class="images" >
        </div>
        </div>
</section>
<section class="home-slider">
    <div class="row cover">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
            <img
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 cover__body">

        </div>
    </div>
</section>

<?php get_footer() ?>
