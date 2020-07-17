<section class="contact_form container">
    <div class="row">
        <div class="col-xl-6 col-lg-6">
            <img class="contact_form__avatar" src="<?php echo THEME_URL ?>/src/images/avatar.png">
            <p class="contact_form__name d-lg-none">- Dr. Kennedy - </p>

            <p class="contact_form__description">
                I value my relationships with every single patient. My goal is to understand your concerns and provide
                you with the highest quality care. I want to give you the confidence to smile big knowing you have
                healthy, beautiful teeth.
            </p>
            <p class="contact_form__name d-none d-lg-block">- Dr. Kennedy - </p>

        </div>
        <div class="col-xl-6 col-lg-6">
            <h2 class="contact_form__title"> Have a question? Get answers</h2>
            <form class="form_custom">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Your name">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputPassword1"
                           placeholder="Your number phone">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Your e-mail">
                </div>
                <div class="form-group ">
                    <textarea type="text" class="form-control" id="exampleInputPassword1"
                              placeholder="Your messenger"></textarea>
                </div>
                <button type="submit" class="button">Submit your form</button>
            </form>


        </div>

    </div>


</section>


<section class="contact d-none d-lg-block clearfix">
    <div class="content">
        <h3 class="title">Kennedy Family and Cosmetic Dentistry</h3>
        <a class="address">200 The Great Road, Suite 243 Bedford, <br/>MA 01730</a>
        <a class="phone">
            781-275-0200
        </a>
        <div class="social d-flex">
            <span>Follow us</span>
            <a class="facebook"></a>
            <a class="linkedin"></a>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.04737853355!2d-71.27374028472421!3d42.49054537917838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e39ec4597925ad%3A0xf47800400bfd1c47!2s200%20Great%20Rd%20%23243%2C%20Bedford%2C%20MA%2001730%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1594872907770!5m2!1svi!2s"
                width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
    </div>
</section>

<section class="contact_mobile d-lg-none d-flex">
    <a class=" d-flex justify-content-center align-items-center request">Resquest </a>
    <a class="d-flex justify-content-center align-items-center call"> Call</a>
    <a class="d-flex justify-content-center align-items-center map">Map </a>
</section>

<footer class="d-none d-lg-block">
    <p>© 2020 Kennedy Family & Cosmetic Dentistry. All rights reserved.</p>
</footer>

<script src="<?php echo THEME_URL ?>/dist/vendors.js"></script>
<script src="<?php echo THEME_URL ?>/dist/app.js"></script>
<?php wp_footer() ?>
</body>
</html>