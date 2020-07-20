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

<section class="home">
    <section class="welcome container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
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
    <section class="horizon d-none d-lg-flex container-fluid">
        <div class="row no-gutters">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__left">
                <h3 class="title">
                    Family Dentistry
                </h3>
                <p>
                    Family’s dental health requires a variety of dental services. Children’s teeth and oral structures require different treatments than those of their parents and older siblings—which are more complex. We offer a wide range of family dentistry services for every member of your family:
                </p>
                <a href="#"><i class="fa fa-chevron-circle-right"></i>Checkups & Cleanings</a>
                <a href="#"><i class="fa fa-chevron-circle-right"></i>Children’s Dentistry</a>
                    <button class="button">
                        Learn More
                    </button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img class="images" src="<?php echo THEME_URL ?>/src/images/girl-hot.png">
            </div>
        </div>
    </section>
    <section class="horizon_right d-flex d-lg-none container-fluid">
        <div class="row no-gutters">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img class="images" src="<?php echo THEME_URL ?>/src/images/girl-hot.png">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__right">
                <h3 class="title">
                    Family Dentistry
                </h3>
                <p>
                    Family’s dental health requires a variety of dental services. Children’s teeth and oral structures require different treatments than those of their parents and older siblings—which are more complex. We offer a wide range of family dentistry services for every member of your family:
                </p>
                <a href="#"><i class="fa fa-chevron-circle-right"></i>Checkups & Cleanings</a>
                <a href="#"><i class="fa fa-chevron-circle-right"></i>Children’s Dentistry</a>
                <button class="button">
                    Learn More
                </button>
            </div>
        </div>
    </section>
    <section class="horizon_right container-fluid">
        <div class="row no-gutters">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img class="images" src="<?php echo THEME_URL ?>/src/images/man-smile.png">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__right">
                <h3 class="title">
                    General Dentistry
                </h3>
                <p>
                    General dentistry describes services, treatments, and practices that help maintain your oral health, or repair your teeth after being damaged. We offer treatments that can be custom-designed to meet every patient’s unique needs. Our general dentistry services include:
                </p>
                <a href="#" style="display: block"><i class="fa fa-chevron-circle-right"></i>Checkups & Cleanings</a>
                <a href="#" style="display: block"><i class="fa fa-chevron-circle-right"></i>Checkups & Cleanings</a>
                <button class="button">
                    Learn More
                </button>
            </div>
        </div>
    </section>
    <section class="horizon container-fluid d-none d-lg-flex">
        <div class="row no-gutters">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__left">
                <h3 class="title">
                    Cosmetic Dentistry
                </h3>
                <p>
                    Whether your teeth are stained, chipped, or crooked, or you have cosmetic issues that need to be addressed to improve your smile’s appearance, Dr. Kennedy can prescribe a conservative smile makeover plan to correct your specific concerns. Common cosmetic procedures include:
                </p>
                <a href="#"><i class="fa fa-chevron-circle-right"></i>Checkups & Cleanings</a>
                <a href="#"><i class="fa fa-chevron-circle-right"></i>Bonding/Contouring</a>
                <a href="#"><i class="fa fa-chevron-circle-right"></i>Porcelain Veneers</a>
                <button class="button">
                    Learn More
                </button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img class="images" src="<?php echo THEME_URL ?>/src/images/girlHome1.jpg">
            </div>
        </div>
    </section>
    <section class="horizon_right d-flex d-sm-none container-fluid">
        <div class="row no-gutters">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img class="images" src="<?php echo THEME_URL ?>/src/images/girlHome1.jpg">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__right">
                <h3 class="title">
                    Cosmetic Dentistry
                </h3>
                <p>
                    Whether your teeth are stained, chipped, or crooked, or you have cosmetic issues that need to be addressed to improve your smile’s appearance, Dr. Kennedy can prescribe a conservative smile makeover plan to correct your specific concerns. Common cosmetic procedures include:
                </p>
                <a href="#"><i class="fa fa-chevron-circle-right"></i>Checkups & Cleanings</a>
                <a href="#"><i class="fa fa-chevron-circle-right"></i>Bonding/Contouring</a>
                <a href="#"><i class="fa fa-chevron-circle-right"></i>Porcelain Veneers</a>
                <button class="button">
                    Learn More
                </button>
            </div>
        </div>
    </section>
    <section class="horizon_right container-fluid">
        <div class="row no-gutters">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img class="images" src="<?php echo THEME_URL ?>/src/images/beutiful-women.png">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__right">
                <h3 class="title">
                    Replacement Teeth
                </h3>
                <p>
                    When a tooth is lost or needs to be extracted, the right type of replacement is needed to preserve the rest of your healthy teeth and oral structures. Using advanced equipment and materials, Dr. Kennedy can custom-design the right dental prosthetic to complete your smile, such as:
                </p>
                <a href="#" style="display: block"><i class="fa fa-chevron-circle-right "></i>Checkups & Cleanings</a>
                <a href="#" style="display: block"><i class="fa fa-chevron-circle-right"></i>Checkups & Cleanings</a>
                <button class="button">
                    Learn More
                </button>
            </div>
        </div>
    </section>
    <section class="title-begin container d-none d-lg-block">
        <div class="row text-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h2 class="title-second">
                    Our Smile Transformations
                </h2>
            </div>
        </div>
    </section>
    <div class="container home-slider">
        <div class="row">
        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
            <div class="test">
                <img src="<?php echo THEME_URL?>/src/images/patient-bf-1.png">
                <img src="<?php echo THEME_URL?>/src/images/patient-af-1.png">
            </div>
        </div>
         <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="test">
                    <img src="<?php echo THEME_URL?>/src/images/patient-bf-2.png">
                    <img src="<?php echo THEME_URL?>/src/images/patient-af-2.png">
                </div>
         </div>
         <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="test">
                    <img src="<?php echo THEME_URL?>/src/images/patient-bf-3.png">
                    <img src="<?php echo THEME_URL?>/src/images/patient-af-3.png">
                </div>
         </div>
         <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="test">
                    <img src="<?php echo THEME_URL?>/src/images/patient-bf-4.png">
                    <img src="<?php echo THEME_URL?>/src/images/patient-af-4.png">
                </div>
         </div>
    </div>
    </div>
    <section class="testimonials banner d-none d-lg-block">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <img class="col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/slider-1.png">
                        <div class="col-xl-6 col-lg-6">
                            <img class="d-block point" src="<?php echo THEME_URL?>/src/images/dau-phay.png">
                            <p class="testimonials__comment">Everyone was patient and understanding when I asked to address a different tooth than they had planned during my appointment. It's a pleasure working with Dr. Kennedy and all the staff!</p>
                            <img class="block star" src="<?php echo THEME_URL?>/src/images/stars.png">
                            <p class="testimonials__comment--name"> Jack</p>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <img class="col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/slider-2.png">
                        <div class="col-xl-6 col-lg-6">
                            <img class="d-block point" src="<?php echo THEME_URL?>/src/images/dau-phay.png">
                            <p class="testimonials__comment">“I really enjoy all of you. Friendly and funny and professional! Thank you.”</p>
                            <img class="block star" src="<?php echo THEME_URL?>/src/images/stars.png">
                            <p class="testimonials__comment--name"> M.H.</p>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <img class="col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/slider-3.png">
                        <div class="col-xl-6 col-lg-6">
                            <img class="d-block point" src="<?php echo THEME_URL?>/src/images/dau-phay.png">
                            <p class="testimonials__comment">“Always welcoming, professional with excellent service. Thanks for running a first rate service and I am happy to recommend you to all my friends!”</p>
                            <img class="block star" src="<?php echo THEME_URL?>/src/images/stars.png">
                            <p class="testimonials__comment--name"> D.H. </p>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tetimonials_mobile banner d-block d-xl-none">
        <div class="container">
            <h2>Testimonials</h2>
            <img class="avatar" src="<?php echo THEME_URL?>/src/images/slider-1.png">
            <p class="testimonials-mobile__comment">Everyone was patient and understanding when I asked to address a different tooth than they had planned during my appointment. It's a pleasure working with Dr. Kennedy and all the staff!</p>
            <img src="<?php echo THEME_URL?>/src/images/stars.png">
            <p class="testimonials-mobile__comment--name text-center">P.C</p>
            <button class="button">See more reviews</button>
        </div>
    </section>

</section>

<?php get_footer() ?>