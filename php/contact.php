<div class="page-container">
    <!--Begin 1st Body Column-->

    <!--Begin Title-->
    <div class="row no-bottom-margin">
        <div class="col s12 m12 l12">
            <h4 class="outline shadow bold">CONTACT ITC SERVICES</h4>
        </div>
    </div>
    <!--End Title-->

    <div class="col s12 m12 l6">
        <section id="contact-section-1">
            <!--Begin Content-->
            <div id="contact-row-1" class="row">
                <div class="col s12 m11 l11">
                    <p class="bold">ITC Services, Inc</p>
                    <a class="location-link"
                        href="https://www.google.com/maps?saddr=My+Location&daddr=Independent+Temp+Control+Services,+11719+14th+Rd,+College+Point,+NY+11356"
                        target="_blank">
                        117-19 14th Road
                        <br />
                        College Point, NY 11356
                    </a>
                    <p>
                        Phone:
                        <a href="tel:1-718-939-8801">718.939.8801</a>
                        <br />
                        Fax:
                        <a href="fax:1-718-939-8147">718.939.8147</a>
                        <br />
                        Email:
                        <a class="text-link" href="mailto:info@itcservices.com">
                            info@itcservices.com
                        </a>
                        <br />
                    </p>
                    <p class="bold">
                        <span class="left">President</span>
                        <span class="right">Bud Flynn</span>
                        <br />
                        <span class="left">Secretary/Treasurer</span>
                        <span class="right">James Flynn</span>
                        <br />
                        <span class="left">Vice President of Operations</span>
                        <span class="right">John Trial</span>
                    </p>
                    <div class="center-align body-img-1">
                        <img class="responsive-img z-depth-2 hoverable" src="/images/building-sketch.jpg" alt="" />
                    </div>
                </div>
            </div>
            <!--End Content-->
        </section>
        <div class="divider hide-on-med-and-up"></div>
    </div>
    <!--End 1st Body Column-->

    <!--Begin 2nd Body Column-->
    <div class="col s12 m12 l6">
        <section id="contact-section-2">
            <div class="row no-bottom-margin">
                <form class="col s12 m12 l12 itc-blue" method="post" name="form1" id="form1" action="/php/email.php"
                    onsubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" name="first_name" type="text" value="<?php echo $_GET[
                                    'first_name'
                                ]; ?>" class="validate" />
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" name="last_name" type="text" value="<?php echo $_GET[
                                'last_name'
                            ]; ?>" class="validate" />
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" value="<?php echo $_GET[
                                'email'
                            ]; ?>" class="validate" />
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="subject" name="subject" type="text" value="<?php echo $_GET[
                                'subject'
                            ]; ?>" class="validate" />
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="message" name="message" type="text" value="<?php echo $_GET[
                                'message'
                            ]; ?>" class="materialize-textarea validate"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="verif_box" id="verif_box" type="text" />
                            <label for="verif_box">Verification</label>
                        </div>
                        <div class="input-field col s6">
                            <img src="/php/verificationimage.php?<?php echo rand(
                                0,
                                9999
                            ); ?>" alt="Please type the verification image in the box." />
                            <?php if (isset($_GET['wrong_code'])) { ?>
                            <div class="red-text">
                                Wrong verification code
                            </div>
                            <?php } ?>
                        </div>

                    </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="submit" type="submit" value="Submit" class="btn btn-itc-blue" />
                </div>
            </div>
            </form>
            <div class="hide">
                <form name="ITCSemail" action="confirm.asp" method="post" enctype="x-www-form-urlencoded">
                    <div></div>
                </form>
            </div>
    </div>
    </section>
</div>
<!--End 2nd Body Column-->
</div>

<section id="contact-map-section">
    <div class="row">
        <div id="map"></div>
    </div>
</section>

<div class="page-container">
    <div class="divider"></div>

    <section id="desktop-contact-vendor-section" class="hide-on-small-only">
        <div class="row valign-wrapper">
            <div class="col s12 l2 center-align">
                <img class="body-img-1" src="/images/mca-ny.gif" alt="" />
            </div>
            <div class="col s12 l2 center-align">
                <img class="body-img-1" src="/images/bta-ny.gif" alt="" />
            </div>
            <div class="col s12 l2 center-align">
                <img class="body-img-1" src="/images/sta.gif" alt="" />
            </div>
            <div class="col s12 l2 center-align">
                <img class="body-img-1" src="/images/usgbc.gif" alt="" />
            </div>
            <div class="col s12 l2 center-align">
                <img class="body-img-1" src="/images/facility-explorer.gif" alt="" />
            </div>
            <div class="col s12 l2 center-align">
                <img class="body-img-1" src="/images/lonmark.gif" alt="" />
            </div>
        </div>

        <div class="row">
            <div class="col s12 l2 center-align">
                Member Mechanical Contractors Association
            </div>
            <div class="col s12 l2 center-align">
                Member Building Trades Association
            </div>
            <div class="col s12 l2 center-align">
                Member Subcontractors Trade Association
            </div>
            <div class="col s12 l2 center-align">
                Member U.S. Green Building Council of New York
            </div>
            <div class="col s12 l2 center-align">
                Authorized Facilty Explorer Specialist
            </div>
            <div class="col s12 l2 center-align">
                We support the LonMark Open Source Standard
            </div>
        </div>
    </section>

    <section id="mobile-contact-vendor-section">
        <div id="mobile-vendor-row" class="hide">
            <div id="contact-carousel-1">
                <div id="vendor-carousel-1" href="#one!">
                    <div class="row">
                        <img class="body-img-1" src="/images/mca-ny.gif" alt="" />
                    </div>
                    <div class="row">
                        <div class="vendor-container center-align">
                            Member Mechanical Contractors Association
                        </div>
                    </div>
                </div>

                <div id="vendor-carousel-2" href="#two!">
                    <div class="row">
                        <img class="body-img-1" src="/images/bta-ny.gif" alt="" />
                    </div>
                    <div class="row">
                        <div class="vendor-container center-align">
                            Member Building Trades Association
                        </div>
                    </div>
                </div>

                <div id="vendor-carousel-3" href="#three!">
                    <div class="row">
                        <img class="body-img-1" src="/images/sta.gif" alt="" />
                    </div>
                    <div class="row">
                        <div class="vendor-container center-align">
                            Member Subcontractors Trade Association
                        </div>
                    </div>
                </div>

                <div id="vendor-carousel-4" href="#four!">
                    <div class="row">
                        <img class="body-img-1" src="/images/usgbc.gif" alt="" />
                    </div>
                    <div class="row">
                        <div class="vendor-container center-align">
                            Member U.S. Green Building Council of New York
                        </div>
                    </div>
                </div>

                <div id="vendor-carousel-5" href="#five!">
                    <div class="row">
                        <img class="body-img-1" src="/images/facility-explorer.gif" alt="" />
                    </div>
                    <div class="row">
                        <div class="vendor-container center-align">
                            Authorized Facilty Explorer Specialist
                        </div>
                    </div>
                </div>

                <div id="vendor-carousel-6" href="#six!">
                    <div class="row">
                        <img class="body-img-1" src="/images/lonmark.gif" alt="" />
                    </div>
                    <div class="row">
                        <div class="vendor-container center-align">
                            We support the LonMark Open Source Standard
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSN3RxC_EkhzDxqGmTCCQvJYhpxCJLwd4&callback=initMap&map_ids=9badee228f2ee90a"
    type="text/javascript"></script>
<script src="/js/map.js"></script>
<!-- Load Carousel Script -->
<script src="/js/carousel.js"></script>
<!-- End Load Carousel Script -->
<!-- Load Mobile Style Script -->
<script src="/js/mobile-style.js"></script>
<!-- End Load Mobile Style Script -->