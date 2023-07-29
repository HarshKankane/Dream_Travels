<html lang="en">
  <?php require_once('header.php'); ?>

	<title> login | Dream Travels.com</title>
	<style media="screen">
				#align
				{
					margin-left:315px;
					margin-right: 90px;
				}
	</style>

<!--====== ABOUT CONTENT ==========-->

<section>
  <div class="rows pla pad-bot-redu tb-space">
    <div class="pla1 p-home container">
      <div class="spe-title spe-title-1">
        <h2> <span>log in</span> here to access</h2>
				<div class="title-line">
					<div class="tl-1"></div>
					<div class="tl-2"></div>
					<div class="tl-3"></div>
				</div>
						<div class="col-md-10 col-sm-8 col-xs-12 form_1 wow fadeInLeft" data-wow-duration="1s">
					<br><br><br>
					<form method="POST" action="verify_login (1).php" accept-charset="UTF-8" class="" id="contact_form" role="form"><input name="_token" type="hidden" value="FJ3sCcKjUOsMPD1o7XcUhcUDPxA5TzQvf4uAp6Hm">
						<ul id=align>
							<li>
								<input name="User_Id" type="text" class="input-text" id="text" placeholder="User_Id" autocomplete="off" />
									 <br><br><br>
							</li>
							 <li>
								 <input name="password" type="password" id="password" class="input-text" placeholder="password *" required="required" />
								 		 <br> <br>
											<div class="">
													<label for="" id="label1"style="color:green">
												<?php
													if(isset($_GET["q"]))
													{
														print $_GET["q"];
													}
													 ?>
													 </label>
											</div>
							 </li>
							<li>
								<input type="submit" value="Log in" id="send_button"> </li>
						</ul>


					 </form>
        </div>
      </div>
    </div>
	</div>
</div>
</section>
<!-- contents end -->


<?php
require_once('footer.php');
?>
</body>
</html>
