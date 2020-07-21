<?php get_header()
/* Template Name: Family */
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
                </div>
            </div>
        </div>
    </section>
    <section class="family container-fluid">
        <section class="container">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 title-headding">
                    <div class="title-text text-center">
                        <h2 class="title-headding__title-text">
                            DENTAL CARE FOR YOUR WHOLE FAMILY
                        </h2>
                    </div>
                    <p class="title-headding__title-content">
                        Caring for your family’s dental health requires a variety of different types of dental services, especially when it comes to your children. For instance, since children’s teeth and oral structures are still growing, their needs may be different than the needs of their parents and older siblings. Meanwhile, your dental needs may be more complex, such as the need to conservatively repair a tooth, or replace one that’s been lost.
                    </p>
                </div>
            </div>
        </section>
        <section class="container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title-begin">
                        Checkups & Cleanings
                    </h2>
                </div>
            </div>
        </section>
        <section class="horizon__first container-fluid">
            <div class="row horizon_right no-gutters">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">
                    <h2 class="title-second d-block d-lg-none text-center">
                        Checkups & <br> Cleanings
                    </h2>
                    <img src="<?php echo THEME_URL?>/src/images/shutterstock_194275118 1.png" class="images">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="item-body__right">
                    <h3 class="title">
                        Prevention through routine checkups & cleanings
                    </h3>

                    <p>
                        Preventive dental checkups and cleanings are essential to the long-term health of your mouth and your body.

                    </p>
                    <br>
                    <p>
                        During a checkup, Dr. Kennedy will look for cavities, demineralization (the precursor to cavities), and structural problems, like cracks or chips and recommend a suitable treatment. If necessary, we’ll take digital X-rays to review. During your cleaning, our registered dental hygienist will chart information about your gums, look for signs of gum disease, and then thoroughly clean your teeth to remove plaque, tartar, and debris. Because gum diseases begin with plaque, six-month cleanings will reduce your risk for those diseases.
                    </p>
                    <button class="button mobile">Learn More</button>
                    <button class="button desktop d-none d-lg-block">
                        Request an appoinment
                    </button>
                    </div>
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
                        To learn more about the services we offer to protect, restore, and improve your family’s smiles, contact us today by calling <a href="#">781-275-0200</a>, or by visiting our Bedford, MA dental office.
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
                        Children's Dentistry
                    </h2>
                </div>
            </div>
        </section>
        <section class="horizon__second horizon final d-none d-lg-flex">
            <div class="container-fluid">
                <div class="row horizon no-gutters">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="item-body__left">
                        <h3 class="title">
                            Protecting children's smiles with professional dentistry
                        </h3>
                        <p>
                            Around age one, your baby should come with you to a dental checkup. Between ages one and three, if you notice tooth decay, red and swollen gum tissue, or any other potential oral health problem, please come in for a visit. Otherwise, brief six-month checkups are sufficient. Because hormone changes can increase your proclivity for gum disease, it's important to have a dental checkup and cleaning during your pregnancy as part of early oral healthcare.
                        </p>
                        <br>
                        <p>
                            Dr. Kennedy will look inside your child’s mouth to assess oral development. If he sees any reason for concern, we can talk about your options. We’ll also chat about how to encourage your child to take good care of his or her teeth and gums at home.
                        </p>
                        <button class="button desktop d-none d-lg-block">
                            Request an appoinment
                        </button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 item-images">
                        <img src="<?php echo THEME_URL?>/src/images/shutterstock_663132562 1.png" class="images">
                        <button class="button d-none">Learn More</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="horizon__second final mobile container-fluid">
            <div class="row horizon_right no-gutters">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                    <h2 class="title-second d-block d-lg-none text-center">
                        Children's Dentistry
                    </h2>
                </div>
                <img src="<?php echo THEME_URL?>/src/images/shutterstock_663132562 1.png" class="images">

            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 item-body__right">
                <h3 class="title">
                    Protecting children's smiles with professional dentistry
                </h3>
                <p>
                    Around age one, your baby should come with you to a dental checkup. Between ages one and three, if you notice tooth decay, red and swollen gum tissue, or any other potential oral health problem, please come in for a visit. Otherwise, brief six-month checkups are sufficient. Because hormone changes can increase your proclivity for gum disease, it's important to have a dental checkup and cleaning during your pregnancy as part of early oral healthcare.
                </p>
                <br>
                <p>
                    Dr. Kennedy will look inside your child’s mouth to assess oral development. If he sees any reason for concern, we can talk about your options. We’ll also chat about how to encourage your child to take good care of his or her teeth and gums at home.
                </p>
                <button class="button desktop d-none d-lg-block">
                    Request an appoinment
                </button>
                <button class="button">Learn More</button>
            </div>

            </div>
        </section>
    </section>
<?php get_footer() ?>