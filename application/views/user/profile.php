<!-- Categories -->
	<!--Vertical Tab-->
	<div class="categories-section main-grid-border">
		<div class="container-fluid">
			<h2 class="head">Main Categories</h2>
			<div class="category-list">
				<div id="parentVerticalTab">
					<ul class="resp-tabs-list hor_1">
						<li>My Profile</li>
						<li>My WishList</li>						
						<li>Logout</li>
					</ul>
					<div class="resp-tabs-container hor_1">
						<span class="active total" style="display:block;" data-toggle="modal" data-target="#myModal"><strong>{Antony Mwathi}</strong> (Select your city to see local ads)</span>
						<div>
							<div class="category">
								<div class="category-img">
									<img src="images/cat1.png" title="image" alt="" />
								</div>
								<div class="category-info">
									<h4>Antony Mwathi</h4>
									<span>5,12,850 Ads</span>
									<a href="all-classifieds.html">View all  Ads</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="sub-categories">
	<!-- <section> -->
			<div id="page-wrapper" class="sign-in-wrapper container-fluid">
				<div class="graphs">
					<div class="sign-up">
						<h1>account Information</h1>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Email Address* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required="required " name="email" />
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Phone No* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required=" required" name="phonenum" />
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Password* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="password" placeholder=" " required="required " name="passwd" />
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Confirm Password* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="password" placeholder=" " required="required " name="confirm_passwd" />
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sub_home">
							<div class="sub_home_left">
								<form>
									<input type="submit" value="Edit Profile">
								</form>
							</div>
							<div class="sub_home_right">
								<form>
									<input type="submit" value="Save Changes">
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
	<!-- </section> -->
							</div>
						</div>
						<div>
							<div class="category">
								<div class="category-img">
									<img src="images/cat2.png" title="image" alt="" />
								</div>
								<div class="category-info">
									<h4>Electronics & Appliances</h4>
									<span>2,01,850 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="sub-categories">
								<ul>
									<li><a href="electronics-appliances.html">Computers & accessories</a></li>
									<li><a href="electronics-appliances.html">Tv - video - audio</a></li>
									<li><a href="electronics-appliances.html">Cameras & accessories</a></li>
									<li><a href="electronics-appliances.html">Games & Entertainment</a></li>
									<li><a href="electronics-appliances.html">Fridge - AC - Washing Machine</a></li>
									<li><a href="electronics-appliances.html">Kitchen & Other Appliances</a></li>
									<div class="clearfix"></div>
								</ul>
							</div>
						</div>


						
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
    $(document).ready(function() {

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
	<!-- //Categories -->