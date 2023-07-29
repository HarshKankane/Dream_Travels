<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php require_once('header.php'); ?>

<title>Corporate | Dream Travels.com</title>

<section>
    <div class="rows inner_banner inner_banner_2">
        <div class="container">
            <h2><span>corporate</span> </h2>
            <ul>
                <li><a href="..\index.php">Home</a>
                </li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                <li><a href="#" class="bread-acti">corporate</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section>
    <div class="form form-spac rows">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight animated" data-wow-duration="1s"
                style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                <div class="rows book_poly">
                    <p>
                        <p class="MsoNormal" style="text-align: justify; margin-bottom: 1.5pt; line-height: normal;">
                            <span style="font-family: Aparajita, sans-serif; font-size: 24px;"><span
                                    style="font-weight: bold;">DreamTravels.com</span> is India’s unique travel website.
                                We feel obliged to introduce our ambitious venture “<span
                                    style="font-weight: bold;">DREAM TRAVELS</span>” as an entity which takes care of
                                any travel requirements of our valuable clients at city level. The inception of <span
                                    style="font-weight: bold;">DREAM TRAVELS </span>is to offer a range of best-value
                                products and services along with the cutting-edge technology and dedicated
                                round-the-clock customer support services.</span></p>
                        <p class="MsoNormal" style="text-align: justify; margin-bottom: 1.5pt; line-height: normal;">
                            <span style="font-family: Aparajita, sans-serif; font-size: 24px;"><span
                                    style="font-weight: bold;">DREAM TRAVELS </span>is an excellent platform into
                                designing tailor made tour, domestic/plans, bus ticket booking, cab bookings, auto
                                bookings, taxi bookings, e-Rickshaw bookings,scorpio rental, local transfers are also
                                included in our services. From domestic ticketing to booking, we provide all travel
                                related services. We are specialists in customized itineraries for the discerning
                                travellers. Whether it is your honeymoon, a summer cruise vacation, your wedding
                                anniversary, weekend break, or your birthday celebrations or anything else, we are here
                                to plan your perfect getaway. <span style="font-weight: bold;">DREAM TRAVELS
                                </span>specialises in such tailor-made luxury holidays that have been created to appeal
                                to the types of traveller who wants to be a part of an exclusive culture, experience the
                                best that is out there to be discovered in an ultra-luxurious setting.</span></p>
                        <div style="text-align: justify;"><br></div>
                        <p class="MsoNormal" style="margin-bottom:1.5pt;text-align:justify;line-height:
normal"><span style="font-size:18.0pt;font-family:&quot;Aparajita&quot;,sans-serif;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-IN;
mso-bidi-language:AR-SA">
                                <o:p></o:p>
                            </span></p>
                        <p class="MsoNormal" style="margin-bottom:1.5pt;text-align:justify;line-height:
normal"><span style="font-size:18.0pt;font-family:&quot;Aparajita&quot;,sans-serif;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-fareast-language:EN-IN;mso-bidi-language:AR-SA">
                                <o:p></o:p>
                            </span></p>
                    </p>

                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 form_1 wow fadeInLeft animated" data-wow-duration="1s"
                style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                <!--====== THANK YOU MESSAGE ==========-->
                <div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>


                <form method="POST" action="message.php" accept-charset="UTF-8" class="" id="home_form" role="form">
                    <input name="_token" type="hidden" value="FJ3sCcKjUOsMPD1o7XcUhcUDPxA5TzQvf4uAp6Hm">
                    <input name="service_type" value="Corporate" type="hidden">

                    <ul>

                        <li>
                            <input type="text" name="first_name" value="" id="ename" placeholder="Name" required="">
                        </li>
                        <li>
                            <input type="tel" name="mobile" value="" id="emobile" placeholder="Mobile" required=""
                                pattern="[6789][0-9]{9}"> </li>
                        <li>
                            <input type="text" name="uid" value="" id="uid" placeholder="User id" required=""> </li>


                        <li>
                            <textarea name="notes" cols="40" rows="3" id="text-comment"
                                placeholder="Enter your message"></textarea>
                        </li>
                        <li>
                            <input type="submit" value="Submit" id="send_button"> </li>
                    </ul>
                </form>
            </div>
            <!--====== COMMON NOTICE ==========-->

        </div>
    </div>
</section>



<?php
require_once('footer.php');
?>

</body>

</html>