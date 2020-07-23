<?php get_header()
/* Template Name: About */
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
    <section class="about">
        <section class="container">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 title-headding">
                    <div class="title-text text-center">
                    <h2 class="title-headding__title-text">
                        ABOUT KENNEDY FAMILY & COSMETIC DENTISTRY
                    </h2>
                    </div>
                    <p class="title-headding__title-content">
                        Our goal is to provide high-quality family, general, and cosmetic dental services to patients and their families throughout the community. Combining over two decades of experience, an array of advanced technology and procedures, and a caring, compassionate, and knowledgeable staff, Dr. Kennedy works to ensure that you receive the effective dental care that you and your family need.                    </p>
                </div>
            </div>
        </section>
        <section class="container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <h2 class="title-begin">
                      Meet Dr. Robert M. Kennedy
                  </h2>
                </div>
            </div>
        </section>
        <section class="horizon__first container-fluid">
            <div class="row horizon_right no-gutters">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">
                            <h2 class="title-second d-block d-lg-none text-center">
                                Meet Dr. Robert M. Kennedy
                            </h2>
                    <img src="<?php echo THEME_URL?>/src/images/about-kenedy.png" class="images">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 item-body__right">
                    <h3 class="title">
                        Robert M.Kennedy, DDS
                    </h3>
                    <p>
                        Dr. Kennedy received his bachelor’s degree from the College of the Holy Cross in 1983, and his dental degree from Georgetown University School of Dentistry in 1987. He opened his family and cosmetic dentistry practice in Bedford, MA in 1992.
                    </p>
                    <br>
                    <p>
                        With a commitment to delivering high-quality, comprehensive dental treatment, Dr. Kennedy is dedicated to staying current and proficient with the latest developments in dentistry. He has incorporated some of the most advanced dental technology into his practice and participates regularly in continuing education and advanced training courses in the Boston, MA area and around the country.
                    </p>
                    <br>
                    <p>
                        Dr. Kennedy is a member of several professional dental associations, including the American Dental Association, the Massachusetts Dental Society, the Academy of General Dentistry, and the American Academy of Cosmetic Dentistry.
                    </p>
                    <br>
                    <p>
                        When he is not seeing patients, Dr. Kennedy spends his time with his wife Lisa and their twin boys, Kevin and James.
                    </p>
                    <button class="button mobile"><a href="/contact">Learn More</a></button>
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
                        To learn more about the services we offer to protect, restore, and improve your family’s smiles, contact us today by calling <a href="tel:7812750200"> (781) 275-0200 </a>, or by visiting our Bedford, MA dental office.
                    </p>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 button-up ml-auto">
                            <button class="button">
                                <a href="/contact">  Request an appoinment </a>
                            </button>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 button-down mr-auto">
                            <button class="button">
                                <a href="tel:7812750200"> 781-275-0200</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title-two">
                        Our Hygienists
                    </h2>
                </div>
            </div>
        </section>
        <section class="horizon__second container-fluid horizon_mid ">
            <div class="row horizon d-none d-lg-flex no-gutters">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="item-body__left">
                    <p class="title">
                        Casey
                    </p>
                    <p>
                        Casey graduated from the Middlesex Hygiene Program and began working as a Dental Hygienist in 2009. Prior to that, she received her bachelor’s degree from Bryant College in 2001. Whether she is performing a cleaning, answering a question, or just making an anxious patient feel comfortable, Casey enjoys coming to work every day knowing that she will be making a positive difference in the patient’s oral health.
                    </p>
                    <br>
                    <p>
                        When she is not at work, she is busy spending time with family, friends and her South African Mastiff named Chase. She enjoys reading, yoga, Jazzercise, and going to her lake house in New Hampshire.
                    </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item-images">
                    <img src="<?php echo THEME_URL?>/src/images/7807 1.png" class="images images__right">
                    <button class="button"><a href="/contact"> Learn More</a></button>
                </div>
            </div>
            <div class="row horizon_right no-gutters mobile">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center item-images">
                            <h2 class="title-second d-block d-lg-none text-center">
                                Our Hygienists
                            </h2>
                    <img src="<?php echo THEME_URL?>/src/images/7807 1.png" class="images images__right">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item-body__right">
                    <p class="title">
                        Casey
                    </p>
                    <p>
                        Casey graduated from the Middlesex Hygiene Program and began working as a Dental Hygienist in 2009. Prior to that, she received her bachelor’s degree from Bryant College in 2001. Whether she is performing a cleaning, answering a question, or just making an anxious patient feel comfortable, Casey enjoys coming to work every day knowing that she will be making a positive difference in the patient’s oral health.
                    </p>
                    <br>
                    <p>
                        When she is not at work, she is busy spending time with family, friends and her South African Mastiff named Chase. She enjoys reading, yoga, Jazzercise, and going to her lake house in New Hampshire.
                    </p>
                    <button class="button"><a href="/contact"> Learn More</a></button>
                </div>
            </div>

            <div class="row horizon_right no-gutters">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center item-images">

                    <img src="<?php echo THEME_URL?>/src/images/happy-cheerful-professional-posing-studio_1262-20927 1.png" class="images images__right">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item-body__right">
                    <p class="title">
                        Cheryl
                    </p>
                    <p>
                        Cheryl began working as a Dental Hygienist in 1978, and enjoys being a part of Dr. Kennedy’s team at Kennedy Family and Cosmetic Dentistry. She strives to provide a friendly and professional environment for our patients while also providing quality state of the art care. Cheryl is dedicated to treating and educating our patients so that they can maintain their optimal oral health. Working with children is a part of the job Cheryl truly loves, and she strives to always make sure they have an anxiety-free introduction to a lifetime of good oral care.
                    </p>
                    <br>
                    <p>
                        In her spare time, Cheryl enjoys spending time with her family, friends and two dogs. Her hobbies include quilting, gardening, cooking, and remodeling projects around her house. She is an avid New England sports fan!
                    </p>
                    <button class="button"><a href="/contact"> Learn More</a></button>
                </div>
            </div>
            <div class="row horizon no-gutters d-none d-lg-flex">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="item-body__left">
                    <p class="title">
                        McKayla
                    </p>
                    <p>
                        McKayla started working with Dr. Kennedy in 2012 as a dental assistant while working towards her degree in Dental Hygiene. She completed her program in 2016, and has thoroughly enjoyed growing in her career as a hygienist. Her favorite part of her job is interacting with and educating patients of all ages. She loves meeting new people, and providing exceptional care to meet everyone’s individual dental needs.
                    </p>
                    <br>
                    <p>
                        In her free time McKayla enjoys spending quality time with her family and friends, outdoor activities with her two dogs and is always happy to read a good book!
                    </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item-images">
                    <img src="<?php echo THEME_URL?>/src/images/beautiful-young-woman-looking-camera-white-background_1301-7766 1.png" class="images images__right">
                    <button class="button"><a href="/contact"> Learn More</a></button>
                </div>

            </div>
            <div class="row horizon_right no-gutters mobile">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center item-images">
                    <img src="<?php echo THEME_URL?>/src/images/beautiful-young-woman-looking-camera-white-background_1301-7766 1.png" class="images images__right">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item-body__right">
                    <p class="title">
                        McKayla
                    </p>
                    <p>
                        McKayla started working with Dr. Kennedy in 2012 as a dental assistant while working towards her degree in Dental Hygiene. She completed her program in 2016, and has thoroughly enjoyed growing in her career as a hygienist. Her favorite part of her job is interacting with and educating patients of all ages. She loves meeting new people, and providing exceptional care to meet everyone’s individual dental needs.
                    </p>
                    <br>
                    <p>
                        In her free time McKayla enjoys spending quality time with her family and friends, outdoor activities with her two dogs and is always happy to read a good book!
                    </p>
                    <button class="button final__mid"><a href="/contact">Learn More </a></button>
                </div>
            </div>
        </section>
        <section class="container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title-second">
                        Our Dental Assistant
                    </h2>
                </div>
            </div>
        </section>
        <section class="horizon__second">
            <div class="container-fluid">
            <div class="row horizon_right no-gutters">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center item-images">
                            <h2 class="title-second d-block d-lg-none text-center">
                                Our Dental Assistant
                            </h2>
                    <img src="<?php echo THEME_URL?>/src/images/Mask Group.png" class="images images__right">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item-body__right">
                    <p class="title">
                        Nevena
                    </p>
                    <p>
                        Nevena began her career as a Dental Assistant in 2004 after moving to the United States from Bulgaria. She enjoys the dynamic environment in Dr. Kennedy’s office, as well as ensuring that each patient has a pleasant and comfortable experience.
                    </p>
                    <br>
                    <p>
                        Nevena loves being with her family and friends, taking long walks on the beach, and working on her arts and crafts projects.
                    </p>
                    <button class="button"><a href="/contact"> Learn More</a></button>
                </div>
            </div>
            </div>
        </section>
        <section class="container d-none d-lg-block">
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title-second">
                        Office Manager
                    </h2>
                </div>
            </div>
        </section>
        <section class="horizon__second  final d-none d-lg-block">
            <div class="container-fluid">
            <div class="row horizon no-gutters">
                <div class="col-sm-12 col-md-6 col-lg-6 ">
                    <div class="item-body__left">
                    <p class="title">
                        Ruth
                    </p>
                    <p>
                        Ruth has been in the Event/Facility Management field for 20 years. She enjoys the different aspects of her job ranging from scheduling patient appointments, coordinating patient care with the staff and Dr. Kennedy and taking care of the day to day aspects of our office.
                    </p>
                    <br>
                    <p>
                        In her free time she enjoys spending time with her family, working in her garden and getting together with friends and family.
                    </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item-images">
                    <img src="<?php echo THEME_URL?>/src/images/close-up-smiling-man_23-2148364950 1.png" class="images images__right">
                    <button class="button"><a href="/contact"> Learn More</a></button>
                </div>
            </div>
            </div>
        </section>
        <section class="horizon__second final mobile container-fluid">
            <div class="row horizon_right no-gutters">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center item-images">
                    <h2 class="title-second text-center">
                        Office Manager
                    </h2>
                    <img src="<?php echo THEME_URL?>/src/images/close-up-smiling-man_23-2148364950 1.png" class="images images__right">

                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item-body__right">
                    <p class="title">
                        Ruth
                    </p>
                    <p>
                        Ruth has been in the Event/Facility Management field for 20 years. She enjoys the different aspects of her job ranging from scheduling patient appointments, coordinating patient care with the staff and Dr. Kennedy and taking care of the day to day aspects of our office.
                    </p>
                    <br>
                    <p>
                        In her free time she enjoys spending time with her family, working in her garden and getting together with friends and family.
                    </p>
                    <button class="button"><a href="/contact"> Learn More</a></button>
                </div>

            </div>
        </section>
    </section>
<?php get_footer() ?>