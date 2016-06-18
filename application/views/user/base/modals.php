	<div class="selectregion">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				Select Your Region</button>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Please Choose Your Location</h4>
								</div>
								<div class="modal-body">
									 <form class="form-horizontal" role="form">
										<div class="form-group">
											<select id="basic2" class="show-tick form-control" multiple>
												<optgroup label="Popular Cities">
													<option selected style="display:none;color:#eee;">Select City</option>
													<option>Nairobi</option>
													<option>Mombasa</option>
													<option>Kisumu</option>
													<option>Nakuru</option>
													<option>Naivasha</option>
													<option>Kisumu</option>
													<option>Nyeri</option>
													<option>Nanyuki</option>
													<option>Kajiado</option>
													<option>Malindi</option>
													<option>Lamu</option>
												</optgroup>
												<optgroup label="More Cities">
													<optgroup label="Nairobi">
														<option>UpperHill</option>
														<option>Kileleshwa</option>
														<option>Milimani</option>
														<option>Langata</option>
														<option>Juja</option>
													</optgroup>
													<optgroup label="Nanyuki">
														<option>Anchorage</option>
														<option>Fairbanks</option>
														<option>Juneau</option>
														<option>Sitka</option>
														<option>Ketchikan</option>
													</optgroup>
													<optgroup label="Mombasa">
														<option>Nyali</option>
														<option>Mtwapa</option>
														<option>Diani</option>
														<option>Likoni</option>
													</optgroup>
													<optgroup label="Kisumu">
														<option>Little Rock</option>
														<option>Fort Smith</option>
													</optgroup>	
												</optgroup>
											</select>
										</div>
									  </form>    
								</div>
							</div>
						</div>
					</div>
				<script>
				$('#myModal').modal('');
				</script>
			</div>