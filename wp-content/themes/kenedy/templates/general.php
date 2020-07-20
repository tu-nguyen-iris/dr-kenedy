<?php get_header()
/* Template Name: General */
?>
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
                </div>
                <div class="cover__rating d-none d-lg-block">
                    <div class="cover__rating__stars">
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="general">
        <section class="container">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 title-headding">
                    <div class="title-text text-center">
                        <h2 class="title-headding__title-text">
                            GENERAL DENTISTRY FOR ORAL HYGIENE AND TEETH HEALTH
                        </h2>
                    </div>
                    <p class="title-headding__title-content">
                        General dentistry describes services, treatments, and practices that help maintain your oral health, or repair your teeth after being damaged and/or infected. From preventive checkups and cleanings to more involved tooth restorations, our diverse range of general dental treatments can be custom-designed to meet every patient’s unique needs.
                    </p>
                </div>
            </div>
        </section>
        <section class="title-begin container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title-second">
                        Tooth Fillings
                    </h2>
                </div>
            </div>
        </section>
        <section class="horizon__second container-fluid">
            <div class="row horizon_right">
                <div class="col-sm-12 col-md-6 col-lg-6 item-images">
                    <div class="row text-center mobile">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <h2 class="title-second">
                                Tooth Fillings
                            </h2>
                        </div>
                    </div>
                    <img src="<?php echo THEME_URL?>/src/images/shutterstock_1294378294 (1) 1.png" class="images images__right">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item-body__right">
                    <h3 class="title">
                        Tooth-colored fillings that help restore your smile
                    </h3>
                    <p>
                        At some point in your life, you’ll probably develop a cavity. If you let a cavity continue to grow, it can become deep and necessitate root canal treatment and a dental crown, or in extreme cases, tooth extraction.
                    </p>
                    <br>
                    <p>
                        If you’re concerned about mercury in dental amalgam or you want to keep your smile natural-looking as long as possible, you’ll appreciate our tooth-colored composite resin fillings. This material is a durable acrylic resin that contains no mercury or metals. It does not expand and contract with temperature fluctuations, either. We tint composite resin fillings to match the teeth in which they are placed, and the result is impressively lifelike.
                    </p>
                    <button class="button mobile">Learn More</button>
                    <button class="button desktop d-none d-lg-block">
                        Request an appoinment
                    </button>
                </div>
            </div>
        </section>
        <section class="container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title-second">
                        Tooth Extraction
                    </h2>
                </div>
            </div>
        </section>

        <section class="container-fluid">

            <div class="row banner">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2 class="banner__title">
                        Schedule an Appointment with Dr. Kennedy Today!
                    </h2>
                    <p class="banner__content">
                        To learn more about the services we offer to protect, restore, and improve your family’s smiles, contact us today by calling (781) 275-0200, or by visiting our Bedford, MA dental office.
                    </p>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 button-up ml-auto">
                            <button class="button">
                                Request an appoinment
                            </button>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 button-down mr-auto">
                            <button class="button">
                                781-275-0200
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section><section class="container-fluid">

            <div class="row banner">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2 class="banner__title">
                        Schedule an Appointment with Dr. Kennedy Today!
                    </h2>
                    <p class="banner__content">
                        To learn more about the services we offer to protect, restore, and improve your family’s smiles, contact us today by calling (781) 275-0200, or by visiting our Bedford, MA dental office.
                    </p>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 button-up ml-auto">
                            <button class="button">
                                Request an appoinment
                            </button>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 button-down mr-auto">
                            <button class="button">
                                781-275-0200
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title-second">
                        Tooth Extraction
                    </h2>
                </div>
            </div>
        </section>
        <section class="horizon__second final container-fluid d-none d-lg-block">
            <div class="row horizon">
                <div class="col-sm-12 col-md-6 col-lg-6 item-body__left">
                    <h3 class="title">
                        A viable solution to impacted teeth and gum diseases
                    </h3>
                    <p>
                        We believe in conservative dental treatments. When Dr. Kennedy recommends tooth extraction, it is a last resort. Sometimes, when root canal treatment won’t suffice, a damaged tooth must be removed to ensure your good oral health. When teeth are too close together, one tooth or more may have to be extracted to apply orthodontic braces. Tooth extraction might be necessary for those who need dentures.
                    </p>
                    <br>
                    <p>
                        Whatever your situation is, we will explain the reasons behind, and talk with you about how we’ll make the procedure quick and comfortable. If another dentist has recommended tooth extraction but you’d like a second opinion, then we’ll be glad to provide one.
                    </p>
                    <button class="button desktop d-none d-lg-block">
                        Request an appoinment
                    </button>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item-images">
                    <img src="<?php echo THEME_URL?>/src/images/134949515 1.png" class="images images__right">
                </div>
            </div>
        </section>
        <section class="horizon__second final mobile container-fluid">
            <div class="row horizon_right">

                <div class="col-sm-12 col-md-6 col-lg-6 item-images">
                    <div class="row mobile text-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <h2 class="title-second">
                                Tooth Extraction
                            </h2>
                        </div>
                    </div>
                    <img src="<?php echo THEME_URL?>/src/images/134949515 1.png" class="images images__right">

                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item-body__right">
                    <h3 class="title">
                        A viable solution to impacted teeth and gum diseases
                    </h3>
                    <p>
                        We believe in conservative dental treatments. When Dr. Kennedy recommends tooth extraction, it is a last resort. Sometimes, when root canal treatment won’t suffice, a damaged tooth must be removed to ensure your good oral health. When teeth are too close together, one tooth or more may have to be extracted to apply orthodontic braces. Tooth extraction might be necessary for those who need dentures.
                    </p>
                    <br>
                    <p>
                        Whatever your situation is, we will explain the reasons behind, and talk with you about how we’ll make the procedure quick and comfortable. If another dentist has recommended tooth extraction but you’d like a second opinion, then we’ll be glad to provide one.
                    </p>
                    <button class="button mobile">Learn More</button>
                </div>

            </div>
        </section>
    </section>
<?php get_footer() ?>