<html lang="en">

<?php require_once('header.php'); ?>
	<title>Contact us | Dream Travels.com</title>

<!--====== QUICK ENQUIRY FORM ==========-->



<section>
		<div class="rows inner_banner inner_banner_2">
			<div class="container">
				<h2><span>Contact us</span> </h2>
				<ul>
					<li><a href="..\index.php">Home</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li><a href="#" class="bread-acti">Contact us</a>
					</li>
				</ul>

			</div>
		</div>
	</section>
	<section>
		<div class="form form-spac rows">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->

        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1s">
					<div class="rows book_poly">
						<h3><i class="fa fa-address-card"></i> Office address</h3>
            PURNEA COLLEGE PURNEA <br>
BCA DEPARTMENT <br>
PURNEA COLLEGE
PURNEA,
BIHAR, <br>
INDIA - 854301
						 <p></p><br>
</p>



            <h3><i class="fa fa-phone"></i> Phone</h3>
            <p>+918409989897</p>


					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 form_1 wow fadeInLeft" data-wow-duration="1s">
					<!--====== THANK YOU MESSAGE ==========-->

					<h3><i class="fa fa-comment-smile"></i> Send us a Message</h3>


					<!-- notification -->

          <form method="POST" action="message.php" accept-charset="UTF-8" class="" id="contact_form" role="form"><input name="_token" type="hidden" value="FJ3sCcKjUOsMPD1o7XcUhcUDPxA5TzQvf4uAp6Hm">



           <ul>
             <li>
               <input name="name" type="text" id="name" class="input-text" placeholder=" Name *" required="required" />
</li>

<li>
 <input name="mobile" type="text" id="mobile" class="input-text" placeholder=" Mobile*" required="required"/>
</li>
             <li>
               <input name="email" type="email" class="input-text" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"  />

              </li>
             <li>


               <select name="subject">
                 <option >General Enquiry</option>
                 <option>Plan Enquiry</option>
                 <option>Complain/ Feedback</option>
                 <option>Others</option>
</select>



             </li>

             <li>
                </li>
             <li>
              </li>
             <li>
               <textarea name="notes" cols="40" rows="3" id="text-comment" placeholder="Enter message"></textarea>
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





<!-- contents end -->

<?php
require_once('footer.php');
?>




</body>
</html>
