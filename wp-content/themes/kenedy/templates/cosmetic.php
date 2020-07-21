<?php /*Template Name: cosmetic*/
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
        <h4>A BEAUTIFUL SMILE THROUGH COSMETIC DENTISTRY</h4>
        <p class="">Cosmetic dentistry entails a number of procedures designed to address the issues that often affect patients’ smiles. Whether your teeth are stained, chipped, or crooked, or you have several cosmetic issues that need to be addressed to improve your smile’s appearance, Dr. Kennedy can prescribe a conservative smile makeover plan to correct your specific concerns.</p>
    </section>
    <section class="item-list container-fluid">
        <h2 class="d-none d-lg-block">Teeth Whitening</h2>
        <div class="horizon_right row no-gutters">
            <h2 class="d-block d-xl-none">Teeth Whitening</h2>
            <img class="col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/cosmetic-teeth-whitening.png">
            <div class="col-xl-6 col-lg-6 item-list__content--right">
                <h3>Professional teeth whitening treatments</h3>
                <p>Want whiter teeth? Worried about sensitivity with harsh bleaching lights? After evaluating many modern teeth whitening systems, we believe the best option is home whitening. The system we prescribe yields results that rival extensive bleaching systems, but without the sensitivity. </p><br>
                <p>Dr. Kennedy will create custom-fitted mouth trays to hold a prescription-strength bleaching gel closely against your tooth enamel. The trays will also keep saliva from diluting the gel. Wear your bleaching trays as directed — usually for an hour or two each night, for about 14 nights. After just one night’s treatment, you will notice a dramatic change in the brightness of your smile.</p>
                <a href="/contact" class="btn button d-none d-xl-block">Request an appoinment</a>
                <button class="button  d-block d-xl-none">Learn more</button>
            </div>
        </div>
    </section>
    <section class="item-list container-fluid">
        <h2 class="d-none d-xl-block">Bonding/ Contouring</h2>
        <div class="horizon_right row no-gutters">
            <h2 class="d-block d-xl-none">Bonding/ Contouring</h2>
            <img class="d-block d-xl-none col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/cosmetic-bonding.png">
            <div class="col-xl-6 col-lg-6 item-list__content--left">
                <h3>Cosmetic tooth bonding & contouring</h3>
                <p>Cosmetic dental imperfections like small gaps between teeth or a minor chip in a front tooth can be quickly and effectively corrected with cosmetic bonding. The material we use for bonding is the same material used for tooth fillings: a tooth-colored composite resin. </p><br>
                <p>Many times, patients who want a short-term (5 to 10 years) cosmetic solution prior to porcelain veneers will opt for cosmetic bonding. With bonding, Dr. Kennedy applies composite resin to add structure to the tooth. He can also remove tooth structure as needed with tooth contouring. This procedure works well for patients who have jagged, uneven, or sharp edges on their teeth. Contouring smooths the line for a more attractive appearance and smoother, more comfortable fit.</p>
                <a href="/contact" class="btn button d-none d-xl-block">Request an appoinment</a>
                <button class="button  d-block d-xl-none">Learn more</button>

            </div>
            <img class="d-none d-xl-flex col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/cosmetic-bonding.png">
        </div>
    </section>
    <section class="banner">
        <div class="container">
        <div class="d-block banner--content">
            <h1>Schedule an Appointment with Dr. Kennedy Today!</h1>
            <p>Robert M. Kennedy, DDS, and the caring, compassionate staff at Kennedy Family & Cosmetic Dentistry have served the Bedford, MA area and surrounding communities since 1992. To learn more about our services, contact us today by calling <a href="tel:781)2750200">(781) 275-0200 </a> or by visiting our office as soon as possible.</p>
        </div>
        <div class="row  justify-content-center d-none d-lg-flex">
            <div class="col-xl-3 col-lg-3 " style="text-align:right"><a href="/contact" class="btn button">Request an appoinment</a> </div>
            <div class="col-xl-3 col-lg-3" style="text-align:left"><a href="tel:7812750200" class="btn button">781-275-0200</a> </div>
        </div>
            <div class="row  justify-content-center d-block d-lg-none">
                <div class="col-xl-3 col-lg-3 "><a href="/contact" class="btn button">Request an appoinment</a> </div>
                <div class="col-xl-3 col-lg-3"><a href="tel:7812750200" class="btn button">781-275-0200</a> </div>
            </div>
        </div>
    </section>
    <section class="item-list container-fluid">
        <h2 class="d-none d-xl-block">Porcelain Veneers</h2>
        <div class="horizon_right  row no-gutters">
            <h2 class="d-block d-xl-none">Porcelain Veneers</h2>
            <img class="col-xl-6 col-lg-6" src="<?php echo THEME_URL?>/src/images/cosmetic-veener.png">
            <div class="col-xl-6 col-lg-6 item-list__content--right">
                <h3>Restore your perfect smile with porcelain veneers</h3>
                <p> Porcelain veneers can give you a nearly perfect, Hollywood-esque smile. Made from high-quality dental porcelain, these shell-shaped cosmetic enhancements correct gaps, stains, chips, crooked teeth, and misshapen teeth, and more. They’re stain-resistant, so you’ll never need teeth whitening. </p><br>
                <p> First, Dr. Kennedy will take a dental impression of your teeth. You’ll wear temporary restorations while our dental ceramists are hand-making your veneers in the lab. Once the veneers have been completed, you’ll return to our office for the final placement. The results will complement your overall appearance, while delivering the beautiful smile you need to feel great about your image.</p>
                <a href="/contact" class="btn button d-none d-xl-block">Request an appoinment</a>
                <button class="button  d-block d-xl-none">Learn more</button>
            </div>
        </div>
    </section>
<?php get_footer(); ?>