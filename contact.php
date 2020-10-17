<?php
include_once 'header.php';
?>





        <div class="hero-v1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center mx-auto">
                        <span class="d-block subheading"><?php echo $lang['contact'] ?></span>
                        <h1 class="heading mb-3"><?php echo $lang['contact1'] ?></h1>
                    </div>

                </div>
            </div>
        </div>


        <!-- MAIN -->

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fname"><?php echo $lang['contact2'] ?></label>
                                        <input type="text" id="fname" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lname"><?php echo $lang['contact3'] ?></label>
                                        <input type="text" id="lname" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="email"><?php echo $lang['contact4'] ?></label>
                                        <input type="text" id="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject"><?php echo $lang['contact5'] ?></label>
                                        <input type="text" id="subject" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="message"><?php echo $lang['contact6'] ?></label>
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $lang['contact7'] ?>">
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="col-lg-6 ml-auto">
                        <h3 class="mb-3 side-title"><?php echo $lang['contact8'] ?>
                        </h3>
                        <div class="quick-contact">

                            <div class="d-flex">
                                <span class="icon-room"></span>
                                <address>
                  Çağış Köyü
                  10463 Altıeylül/Balıkesir
                  Türkiye
                </address>
                            </div>
                            <div class="d-flex">
                                <span class="icon-phone"></span>
                                <a href="tel://02666121013">(0266) 612 10 13
                </a>
                            </div>
                            <div class="d-flex">
                                <span class="flaticon-telephone"></span>
                                <a href="https://api.whatsapp.com/send?phone=905458053591" >+90(545) 805 35 91</a>
                            </div>
                            <div class="d-flex">
                                <span class="flaticon-envelope"></span>
                                <a href="mailto:cagisyurdu@gmail.com">cagisyurdu@gmail.com</a>
                            </div>
                            <div class="d-flex">
                                <span class="icon-globe"></span>
                                <a href="#">https://cagisyurdu.com</a>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d769.4223535989098!2d28.00994122921518!3d39.521498998717455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b7a929d7916467%3A0xd46ed5bdef3ae687!2zw4dhxJ_EscWfIEJ1Y2HEn8SxLCDDh2HEn8SxxZ8sIDEwNDYzIEJpZ2FkacOnL0JhbMSxa2VzaXI!5e0!3m2!1str!2str!4v1602852802224!5m2!1str!2str"
                                width="500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
include_once 'footer.php';
?>



