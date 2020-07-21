<?php /*Template Name: replacement*/
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
                    <a data-fancybox href="https://www.youtube.com/watch?v=7aipHynsoLo"><button class="button button--video" >Watch a video</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="intro container">
        <h4>LIFELIKE REPLACEMENTS FOR LOST TEETH</h4>
        <p class="">When a tooth is lost or needs to be extracted, the right type of replacement tooth/teeth is needed to preserve the rest of your healthy teeth and oral structures. Using advanced equipment and materials, Dr. Kennedy can custom-design the right dental prosthetic to complete your smile.</p>
    </section>
    <section class="item-list container-fluid">
        <h2 class="d-none d-lg-block">Dental Bridges</h2>
        <div class="horizon_right row no-gutters">
            <h2 class="d-block d-xl-none">Dental Bridges</h2>
            <img class="col-xl-6 col-lg-6 d-none d-md-flex" src="<?php echo THEME_URL?>/src/images/replacements-dental.png">
            <div class="col-xl-6 col-lg-6 d-flex d-md-none">
                <img class="col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/replacements-dental.png">
            </div>
            <div class="col-xl-6 col-lg-6 ">
                <div class="item-list__content--right">
                <h3>Bridge the gap between your teeth</h3>
                <p>To replace a missing tooth, or a few in a row, a dental bridge literally bridges the gap. We work with talented ceramists at reputable dental labs so that the materials and quality of the bridges we place are of high quality.</p><br>
                <p>During your visit, we’ll take an impression of your mouth, then send it to the dental lab. There, a ceramist will use the guide and Dr. Kennedy’s detailed notes to fabricate a custom dental bridge just for you. The bridge will consist of one or more replacement teeth set between two dental crowns. After we receive the bridge from the lab, you’ll return so that we can complete the procedure.</p>
                <a href="/contact" class="btn button d-none d-xl-block">Request an appoinment</a>
                <button class="button  d-block d-xl-none">Learn more</button>
                </div>
            </div>
        </div>
    </section>
    <section class="item-list container-fluid">
        <h2 class="d-none d-xl-block">Dentures</h2>
        <div class="horizon_right row no-gutters">
            <h2 class="d-block d-xl-none">Dentures</h2>
            <div class="d-flex d-xl-none col-xl-6 col-lg-6">
            <img class="col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/replacements-dentures.png">
            </div>
            <div class="col-xl-6 col-lg-6 ">
                <div class="item-list__content--left">
                <h3>Complete and partial dentures</h3>
                <p>Dentures are a full arch of replacement teeth set on a gum-colored base. You may need top, bottom, or both dentures. In most cases, dentures are secured in place by suction (top) or adhesive (top or bottom). However, implant-secured dentures have become an increasingly-more popular option.</p><br>
                <p>Partial dentures replace multiple teeth on the upper and/or lower dental arch. They attach to existing teeth with inconspicuous clasps. Partials dentures can also be attached to one or more dental implants.</p>
                <p>Dr. Kennedy will sit down with you to talk about your situation. By understanding your previous experiences and current needs, we can recommend the best solution to replace your missing teeth.</p>
                <a href="/contact" class="btn button d-none d-xl-block">Request an appoinment</a>
                <button class="button  d-block d-xl-none">Learn more</button>
                </div>
            </div>
            <img class="d-none d-xl-flex col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/replacements-dentures.png">
        </div>
    </section>
    <section class="banner">
        <div class="container">
            <div class="d-block banner--content">
                <h1>Schedule an Appointment with Dr. Kennedy Today!</h1>
                <p>Robert M. Kennedy, DDS, and the caring, compassionate staff at Kennedy Family & Cosmetic Dentistry have served the Bedford, MA area and surrounding communities since 1992. To learn more about our services, contact us today by calling <a href="tel:781)2750200" class="phone">(781) 275-0200 </a> or by visiting our office as soon as possible.</p>
            </div>
            <div class="row justify-content-center d-none d-lg-flex">
                <div class="col-xl-3 col-lg-3" style="text-align:right"><a href="/contact" class="btn button">Request an appoinment</a> </div>
                <div class="col-xl-3 col-lg-3" style="text-align:left"><a href="tel:7812750200" class="btn button">781-275-0200</a> </div>
            </div>
            <div class="row  justify-content-center d-block d-lg-none">
                <div class="col-xl-3 col-lg-3 "><a href="/contact" class="btn button">Request an appoinment</a> </div>
                <div class="col-xl-3 col-lg-3"><a href="tel:7812750200" class="btn button">781-275-0200</a> </div>
            </div>
        </div>
    </section>
    <section class="item-list container-fluid">
        <h2 class="d-none d-xl-block">Dental Implants</h2>
        <div class="horizon_right  row no-gutters">
            <h2 class="d-block d-xl-none">Dental Implants</h2>
            <img class="col-xl-6 col-lg-6 d-none d-md-flex" src="<?php echo THEME_URL?>/src/images/replacement-dental-implant.png">
            <div class="col-xl-6 col-lg-6 d-flex d-md-none">
                <img class="col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/replacement-dental-implant.png">
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class=" item-list__content--right">
                <h3>Dental implants for more realistic replacement teeth</h3>
                <p> Whether you’re missing one or many teeth, you may want to consider dental implants. This innovative option for tooth replacement and denture stabilization provides extreme stability. Dental implants have two major components: a small post that anchors into the jawbone, and the replacement tooth or teeth. One implant post can hold one dental crown or a few can anchor a complete or partial denture.</p><br>
                <p>If you have good oral health and sufficient jawbone density, let’s talk about dental implants. We’ll answer all of your questions and help you decide if implants are the right option for your situation.</p>
                <a href="/contact" class="btn button d-none d-xl-block">Request an appoinment</a>
                <button class="button  d-block d-xl-none">Learn more</button>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>