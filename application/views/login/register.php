<section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-up">
						<h1>Create an account</h1>
						<p class="creating">Register on our platdiv to have access to amazing products & Services from a wide array of SME's</p>
						<h2>Personal Indivation</h2>
					<?php echo form_open('Auth/Register')?>
						<?php echo validation_errors()?>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>First Name :</h4>
							</div>
							<div class="sign-up2">
								<div>
									<input type="text" placeholder=" " required="required " name="first_name" />
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Middle Name :</h4>
							</div>
							<div class="sign-up2">
								<div>
									<input type="text" placeholder=" "  name="middle_name" />
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Last Name  :</h4>
							</div>
							<div class="sign-up2">
								<div>
									<input type="text" placeholder=" " required="required " name="last_name" />
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Email Address :</h4>
							</div>
							<div class="sign-up2">
								<div>
									<input type="text" placeholder=" " required="required " name="email" />
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Phone No :</h4>
							</div>
							<div class="sign-up2">
								<div>
									<input type="text" placeholder="+254" value="+254" required=" required" name="phone_number" />
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Password :</h4>
							</div>
							<div class="sign-up2">
								<div>
									<input type="password" placeholder=" " required="required " name="passwd" />
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Confirm Password :</h4>
							</div>
							<div class="sign-up2">
								<div>
									<input type="password" placeholder=" " required="required " name="confirm_passwd" />
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sub_home">
							<div class="sub_home_left">
								<div>
									<input type="submit" value="Create">
								</div>
							</div>
							<div class="sub_home_right">
								<p>Go Back to <a href="<?php echo base_url();?>">Home</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<?php echo form_close()?>
					</div>
				</div>
			</div>
	</section>