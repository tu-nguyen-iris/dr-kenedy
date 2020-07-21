<?php get_header()
/*Template Name: General*/?>
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
                    <a data-fancybox href="https://www.youtube.com/watch?v=7aipHynsoLo"><button class="button button--video" >Watch a video</button></a>
                </div>
                <div class="cover__rating d-none d-lg-block">
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
        <section class="horizon_right d-block d-lg-none container-fluid">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                    <h2 class="title-second text-center">
                        Tooth Fillings
                    </h2>
                    <img class="images" src="<?php echo THEME_URL ?>/src/images/shutterstock_1294378294 (1) 1.png">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__right">
                    <h3 class="title">
                        Tooth-colored fillings that help restore your smile
                    </h3>
                    <p>
                        At some point in your life, you’ll probably develop a cavity. If you let a cavity continue to grow, it can become deep and necessitate root canal treatment and a dental crown, or in extreme cases, tooth extraction.
                    </p>
                    <p>
                        If you’re concerned about mercury in dental amalgam or you want to keep your smile natural-looking as long as possible, you’ll appreciate our tooth-colored composite resin fillings. This material is a durable acrylic resin that contains no mercury or metals. It does not expand and contract with temperature fluctuations, either. We tint composite resin fillings to match the teeth in which they are placed, and the result is impressively lifelike.
                    </p>
                    <button class="button button-request d-none d-lg-block">
                        Request an appoinment
                    </button>
                    <button class="button d-block d-sm-none">
                        Learn More
                    </button>
                </div>
            </div>
        </section>
        <section class="container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title-begin">
                        Tooth Fillings
                    </h2>
                </div>
            </div>
        </section>
        <section class="horizon_right d-none d-lg-block container-fluid">
            <div class="row no-gutters">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img class="images" src="<?php echo THEME_URL ?>/src/images/shutterstock_1294378294 (1) 1.png">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__right">
                    <h3 class="title">
                        Tooth-colored fillings that help restore your smile
                    </h3>
                    <p>
                        At some point in your life, you’ll probably develop a cavity. If you let a cavity continue to grow, it can become deep and necessitate root canal treatment and a dental crown, or in extreme cases, tooth extraction.
                    </p>
                    <p>
                        If you’re concerned about mercury in dental amalgam or you want to keep your smile natural-looking as long as possible, you’ll appreciate our tooth-colored composite resin fillings. This material is a durable acrylic resin that contains no mercury or metals. It does not expand and contract with temperature fluctuations, either. We tint composite resin fillings to match the teeth in which they are placed, and the result is impressively lifelike.
                    </p>
                    <button class="button button-request d-none d-lg-block">
                        Request an appoinment
                    </button>
                    <button class="button d-block d-sm-none">
                        Learn More
                    </button>
                </div>
            </div>
        </section>
        <section class="title-begin container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title-second">
                        Root Canal Treatment
                    </h2>
                </div>
            </div>
        </section>

        <section class="horizon container-fluid d-none d-lg-block">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="item-body__left">
                    <h3 class="title">
                        Erase extreme tooth decays with root canal treatment
                    </h3>


                    <p>
                        Modern root canal therapy is vastly different than what it was. Our office provides treatments that can be completed in one visit. In addition, we use high-quality and precision instruments for restorative treatments to reduce the potential for complications during and after the procedure.

                    </p>
                    <p>
                    Root canal treatment is an endodontic procedure, meaning that it involves the internal structure of a tooth. A deep crack or cavity can allow bacteria to enter the tooth’s internal canals. Inside a tooth’s canals, a nerve (or pulp) supplies blood and sustains the tooth’s life. Bacteria cause infection of the nerve, which creates swelling, pressure and, as a result, pain. Ultimately, the infection can reach the bloodstream and cause overall health problems.
                    </p>
                        <button class="button button-request d-none d-lg-block">
                            Request an appoinment
                        </button>
                        <button class="button d-block d-sm-none">
                            Learn More
                        </button>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img class="images" src="<?php echo THEME_URL ?>/src/images/general-root-canal.png">
                </div>
            </div>
        </section>
        <section class="horizon_right d-block d-sm-none container-fluid">
            <div class="row no-gutters">

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                    <h2 class="title-second text-center d-block d-lg-none">
                        Root Canal <br> Treatment
                    </h2>
                    <img class="images" src="<?php echo THEME_URL ?>/src/images/general-root-canal.png">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__right">
                    <h3 class="title">
                        Erase extreme tooth decays with root canal treatment
                    </h3>
                    <p>
                        Modern root canal therapy is vastly different than what it was. Our office provides treatments that can be completed in one visit. In addition, we use high-quality and precision instruments for restorative treatments to reduce the potential for complications during and after the procedure.

                    </p>
                    <p>
                        Root canal treatment is an endodontic procedure, meaning that it involves the internal structure of a tooth. A deep crack or cavity can allow bacteria to enter the tooth’s internal canals. Inside a tooth’s canals, a nerve (or pulp) supplies blood and sustains the tooth’s life. Bacteria cause infection of the nerve, which creates swelling, pressure and, as a result, pain. Ultimately, the infection can reach the bloodstream and cause overall health problems.
                    </p>
                    <button class="button   button-request d-none d-lg-block">
                        Request an appoinment
                    </button>
                    <button class="button d-block d-sm-none">
                        Learn More
                    </button>
                </div>
            </div>
        </section>
        <section class="container-fluid ">
            <div class="row banner">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2 class="banner__title">
                        Schedule an Appointment with Dr. Kennedy Today!
                    </h2>
                    <p class="banner__content">
                        To learn more about the services we offer to protect, restore, and improve your family’s smiles, contact us today by calling<a href="#">781-275-0200</a>, or by visiting our Bedford, MA dental office.
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
        <section class="title-begin container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title-second">
                        Dental Crowns
                    </h2>
                </div>
            </div>
        </section>
        <section class="horizon_right d-none d-lg-block container-fluid">
            <div class="row no-gutters">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img class="images" src="<?php echo THEME_URL ?>/src/images/Dental-Crown 1.png">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__right">
                    <h3 class="title">
                        Lifelike porcelain dental crowns for a natural look
                    </h3>
                    <p>
                        Because Dr. Kennedy understands the importance of an attractive smile, we approach all dental procedures with a cosmetic dental philosophy. In many situations where a durable, attractive restoration is called for, we prefer to place tooth-colored, porcelain crowns rather than metal ones.
                    </p>
                    <p>
                        At a trusted dental lab, a skilled ceramist will follow our instructions and use the impression of your teeth as a guide to create a crown that will fit snugly onto your prepared tooth. The ceramist will follow a shade guide to match the porcelain to the teeth on either side of the tooth. This will help ensure a natural and discreet finish.
                    </p>
                    <button class="button button-request d-none d-lg-block">
                        Request an appoinment
                    </button>
                    <button class="button d-block d-sm-none">
                        Learn More
                    </button>
                </div>
            </div>
        </section>
        <section class="horizon_right d-block d-lg-none container-fluid">
            <div class="row no-gutters">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                    <h2 class="title-second text-center">
                        Dental Crowns
                    </h2>
                    <img class="images" src="<?php echo THEME_URL ?>/src/images/Dental-Crown 1.png">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__right">
                    <h3 class="title">
                        Lifelike porcelain dental crowns for a natural look
                    </h3>
                    <p>
                        Because Dr. Kennedy understands the importance of an attractive smile, we approach all dental procedures with a cosmetic dental philosophy. In many situations where a durable, attractive restoration is called for, we prefer to place tooth-colored, porcelain crowns rather than metal ones.
                    </p>
                    <p>
                        At a trusted dental lab, a skilled ceramist will follow our instructions and use the impression of your teeth as a guide to create a crown that will fit snugly onto your prepared tooth. The ceramist will follow a shade guide to match the porcelain to the teeth on either side of the tooth. This will help ensure a natural and discreet finish.
                    </p>
                    <button class="button button__request d-none d-lg-block">
                        Request an appoinment
                    </button>
                    <button class="button d-block d-sm-none">
                        Learn More
                    </button>
                </div>
            </div>
        </section>
        <section class="title-begin container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title-second">
                        Tooth Extraction
                    </h2>
                </div>
            </div>
        </section>
        <section class="horizon d-none d-lg-block final-section container-fluid">
            <div class="row no-gutters">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="item-body__left">
                        <h3 class="title">
                            A viable solution to impacted teeth and gum diseases
                        </h3>
                        <p>
                            We believe in conservative dental treatments. When Dr. Kennedy recommends tooth extraction, it is a last resort. Sometimes, when root canal treatment won’t suffice, a damaged tooth must be removed to ensure your good oral health. When teeth are too close together, one tooth or more may have to be extracted to apply orthodontic braces. Tooth extraction might be necessary for those who need dentures.
                        </p>
                        <p>
                            Whatever your situation is, we will explain the reasons behind, and talk with you about how we’ll make the procedure quick and comfortable. If another dentist has recommended tooth extraction but you’d like a second opinion, then we’ll be glad to provide one.
                        </p>
                        <button class="button button__request d-none d-lg-block">
                            Request an appoinment
                        </button>
                        <button class="button d-block d-sm-none">
                            Learn More
                        </button>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img class="images" src="<?php echo THEME_URL ?>/src/images/134949515 1.png">
                </div>
            </div>
        </section>
        <section class="horizon_right d-block d-lg-none container-fluid">
            <div class="row no-gutters">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                            <h2 class="title-second text-center">
                                Tooth Extraction
                            </h2>
                    <img class="images" src="<?php echo THEME_URL ?>/src/images/134949515 1.png">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 item-body__right">
                    <h3 class="title">
                        A viable solution to impacted teeth and gum diseases
                    </h3>
                    <p>
                        We believe in conservative dental treatments. When Dr. Kennedy recommends tooth extraction, it is a last resort. Sometimes, when root canal treatment won’t suffice, a damaged tooth must be removed to ensure your good oral health. When teeth are too close together, one tooth or more may have to be extracted to apply orthodontic braces. Tooth extraction might be necessary for those who need dentures.
                    </p>
                    <p>
                        Whatever your situation is, we will explain the reasons behind, and talk with you about how we’ll make the procedure quick and comfortable. If another dentist has recommended tooth extraction but you’d like a second opinion, then we’ll be glad to provide one.
                    </p>
                    <button class="button button__request d-none d-lg-block">
                        Request an appoinment
                    </button>
                    <button class="button d-block d-sm-none">
                        Learn More
                    </button>
                </div>
            </div>
        </section>
    </section>

<?php get_footer() ?>