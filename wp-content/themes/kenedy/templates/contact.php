<?php /*Template Name: contact*/
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
<section class="content container">
        <h2 class="d-none d-lg-block">    Your smile starts here.</h2>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <p>Need to request an appointment? Have questions or concerns? Dr. Kennedy and our caring professional team are here to help! Simply fill out the contact form below and one of our staff members will reply to you shortly.</p>
                <p class="notice">Please fill out the form below to request an appointment, we will reply shortly.</p>
                <form class="form-kenedy">
                    <div class="form-group">
                        <label>Name*</label>
                        <input  class="form-control" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label>Email*</label>
                        <input  type="email" class="form-control" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label>Phone number*</label>
                        <input  class="form-control" type="number" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea  class="form-control"></textarea>
                    </div>
                    <button class="button">Request an appoinment</button>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.04737853355!2d-71.27374028472421!3d42.49054537917838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e39ec4597925ad%3A0xf47800400bfd1c47!2s200%20Great%20Rd%20%23243%2C%20Bedford%2C%20MA%2001730%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1594872907770!5m2!1svi!2s"
                        width="480" height="480" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                <div class="infomation">
                    <h6>CONTACT INFORMATION</h6>
                    <a href="/cosmetic"><h5 class="family_cosmetic">Kennedy Family and Cosmetic Dentistry</h5></a>
                    <p>200 The Great Road, Suite 243 Bedford, MA 01730           </p>
                    <a href="tel:7812750200">781-275-0200</a>
                    <h6>HOUR</h6>
                    <p>Monday — 7:00 am to 5:00 pm</p>
                    <p>Tuesday — 7:00 am to 5:00 pm</p>
                    <p>Wednesday — 7:00 am to 5:00 pm</p>
                    <p>Thursday — 7:00 am to 5:00 pm</p>
                    <p>Friday — 7:00 am to 3:00 pm</p>
                </div>
            </div>
        </div>
</section>

<?php get_footer(); ?>