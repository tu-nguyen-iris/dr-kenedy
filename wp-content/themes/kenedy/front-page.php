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
    <section class="horizon container-fluid">
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
    <section class="horizon container-fluid">
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
                <img class="images" src="<?php echo THEME_URL ?>/src/images/girl-hot.png">
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
    <section class="slider-teeth">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 test">
                <img class="teeth" src="<?php echo THEME_URL ?>/src/images/patient-bf-1.png">
                <img class="teeth" src="<?php echo THEME_URL ?>/src/images/patient-bf-2.png">
                </div>
            </div>
        </div>
    </section>
</section>

<?php get_footer() ?>