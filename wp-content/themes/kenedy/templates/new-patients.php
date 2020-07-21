<?php /*Template Name: new patients*/
get_header();?>
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
    <section class="intro container">
        <h4>Before your visit to our office</h4>
        <p class="">We want your dental experience to be as convenient as possible. Before coming to our Medford, MA office, please be prepared to provide us with your dental history records (including prescriptions, health conditions, and X-rays), bring your payment and insurance information, arrive a little early so that you'll have more time to relax and fill out some paperwork. Please also write down all your questions or concerns to go over them with our dentists later.</p>
    </section>
    <section class="before-after container">
        <h2>Smile Gallery</h2>
        <div class="row d-none d-lg-flex">
            <h3 class="col-xl-6 col-lg-6">Before</h3>
            <h3 class="col-xl-6 col-lg-6">After</h3>
        </div>
        <div class="d-none d-lg-block">
            <div class="row justify-content-center">
                <img class="col-xl-5 col-lg-5" src="<?php echo THEME_URL?>/src/images/patient-bf-1.png">
                <img class="col-xl-5 col-lg-5" src="<?php echo THEME_URL?>/src/images/patient-af-1.png">
            </div>
            <div class="row justify-content-center">
                <img class="col-xl-5 col-lg-5" src="<?php echo THEME_URL?>/src/images/patient-bf-2.png">
                <img class="col-xl-5 col-lg-5" src="<?php echo THEME_URL?>/src/images/patient-af-2.png">
            </div>
        </div>
        <!--mobile-->
        <div class="d-block d-xl-none">
        <div class="test">
            <img  src="<?php echo THEME_URL?>/src/images/patient-bf-1.png">
            <img  src="<?php echo THEME_URL?>/src/images/patient-af-1.png">
        </div>
            <div class="test">
                <img  src="<?php echo THEME_URL?>/src/images/patient-bf-2.png">
                <img  src="<?php echo THEME_URL?>/src/images/patient-af-2.png">
            </div>
            <div class="test">
                <img  src="<?php echo THEME_URL?>/src/images/patient-bf-3.png">
                <img  src="<?php echo THEME_URL?>/src/images/patient-af-3.png">
            </div>
            <div class="test">
                <img src="<?php echo THEME_URL?>/src/images/patient-bf-4.png">
                <img src="<?php echo THEME_URL?>/src/images/patient-af-4.png">
            </div>
            <button class="button">See more</button>
        </div>
    </section>
    <section class="banner">
        <div class="container">
            <div class="d-block banner--content">
                <h1>Schedule an Appointment with Dr. Kennedy Today!</h1>
                <p>Robert M. Kennedy, DDS, and the caring, compassionate staff at Kennedy Family & Cosmetic Dentistry have served the Bedford, MA area and surrounding communities since 1992. To learn more about our services, contact us today by calling <a href="tel:781)2750200">(781) 275-0200 </a> or by visiting our office as soon as possible.</p>
            </div>
            <div class="row justify-content-center d-none d-lg-flex" >
                <div class="col-xl-3 col-lg-3" style="text-align:right"><a href="/contact" class="btn button">Request an appoinment</a> </div>
                <div class="col-xl-3 col-lg-3"style="text-align:left"><a href="tel:7812750200" class="btn button">781-275-0200</a> </div>
            </div>
            <div class="row  justify-content-center d-block d-lg-none">
                <div class="col-xl-3 col-lg-3 "><a href="/contact" class="btn button">Request an appoinment</a> </div>
                <div class="col-xl-3 col-lg-3"><a href="tel:7812750200" class="btn button">781-275-0200</a> </div>
            </div>
        </div>
    </section>
    <section class="before-after container d-none d-xl-block">
        <div class="row justify-content-center">
            <img class="col-xl-5 col-lg-5" src="<?php echo THEME_URL?>/src/images/patient-bf-3.png">
            <img class="col-xl-5 col-lg-5" src="<?php echo THEME_URL?>/src/images/patient-af-3.png">
        </div>
        <div class="row justify-content-center">
            <img class="col-xl-5 col-lg-5" src="<?php echo THEME_URL?>/src/images/patient-bf-4.png">
            <img class="col-xl-5 col-lg-5" src="<?php echo THEME_URL?>/src/images/patient-af-4.png">
        </div>
    </section>
    <section class="testimonials  d-none d-lg-block">
        <h2>Testimonials</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row no-gutters">
                        <img class="col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/slider-1.png">
                        <div class="banner col-xl-6 col-lg-6 ">
                            <img class="d-block point" src="<?php echo THEME_URL?>/src/images/dau-phay.png">
                            <p class="testimonials__comment">Everyone was patient and understanding when I asked to address a different tooth than they had planned during my appointment. It's a pleasure working with Dr. Kennedy and all the staff!</p>
                            <img class="block star" src="<?php echo THEME_URL?>/src/images/stars.png">
                            <p class="testimonials__comment--name"> Jack</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row no-gutters">
                        <img class="col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/slider-2.png">
                        <div class="col-xl-6 col-lg-6  banner">
                            <img class="d-block point" src="<?php echo THEME_URL?>/src/images/dau-phay.png">
                            <p class="testimonials__comment">“I really enjoy all of you. Friendly and funny and professional! Thank you.”</p>
                            <img class="block star" src="<?php echo THEME_URL?>/src/images/stars.png">
                            <p class="testimonials__comment--name"> M.H.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row no-gutters">
                        <img class="col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/slider-3.png">
                        <div class="col-xl-6 col-lg-6  banner">
                            <img class="d-block point" src="<?php echo THEME_URL?>/src/images/dau-phay.png">
                            <p class="testimonials__comment">“Always welcoming, professional with excellent service. Thanks for running a first rate service and I am happy to recommend you to all my friends!”</p>
                            <img class="block star" src="<?php echo THEME_URL?>/src/images/stars.png">
                            <p class="testimonials__comment--name"> D.H. </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="tetimonials_mobile banner d-block d-xl-none">
        <div class="container">
        <h2>Testimonials</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="avatar" src="<?php echo THEME_URL?>/src/images/slider-1.png">
                        <p class="testimonials-mobile__comment">Everyone was patient and understanding when I asked to address a different tooth than they had planned during my appointment. It's a pleasure working with Dr. Kennedy and all the staff!</p>
                        <img src="<?php echo THEME_URL?>/src/images/stars.png">
                        <p class="testimonials-mobile__comment--name">P.C</p>
                    </div>
                    <div class="carousel-item">
                        <img class="avatar" src="<?php echo THEME_URL?>/src/images/slider-2.png">
                        <p class="testimonials-mobile__comment">“I really enjoy all of you. Friendly and funny and professional! Thank you.”</p>
                        <img src="<?php echo THEME_URL?>/src/images/stars.png">
                        <p class="testimonials-mobile__comment--name">P.C</p>
                    </div>
                    <div class="carousel-item">
                        <img class="avatar" src="<?php echo THEME_URL?>/src/images/slider-3.png">
                        <p class="testimonials-mobile__comment">“Always welcoming, professional with excellent service. Thanks for running a first rate service and I am happy to recommend you to all my friends!”</p>
                        <img src="<?php echo THEME_URL?>/src/images/stars.png">
                        <p class="testimonials-mobile__comment--name">P.C</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        <button class="button">See more reviews</button>
        </div>
    </section>
<?php get_footer(); ?>