<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">

	<title>Product Register for Merimies : ArtUnit</title>


	<?php include('Inc_css.php'); ?>
<!--
	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/plugin/bootstrap-select/bootstrap-select.min.css" as="style" onload="this.rel='stylesheet'">
-->
	<style>

	</style>
</head>

<body id="page-top" data-spy="scroll" data-offset="51" data-target=".navbar-fixed-top">

	<?php include('Inc_js.php'); ?>

	<?php include('Inc_header.php'); ?>

	<section class="content-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 wow fadeInUp" style="margin-top: 40px;">
					<div class="panel-body" style="background:#383838;">
						<h3 class="text-center">Product Register</h3>
						<form action="" id="product_register">
							<div class="form-group mb-4">
								<label for="" class="control-label">Verify Code <small class="text-danger">* Required</small></label>
								<div class="">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-fw fa-key"></i></div>
										<input type="text" class="form-control" name="auth_code" value="<?php echo $auth_code ?>" required />
									</div>
								</div>
							</div>

							<div class="form-group mb-4">
								<label for="" class="control-label">Email Address <small class="text-danger">* Required</small></label>
								<div class="">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></div>
										<input type="email" class="form-control" name="email" value="" required />
									</div>
								</div>
							</div>
							<div class="form-group mb-4">
								<label for="" class="control-label">Location <small class="text-danger">* Required</small></label>
								<div class="">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-fw fa-globe"></i></div>
										<select class="form-control selectpicker" name="country" data-live-search="true" required>
											<option value="" selected>--select country--</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antigua & Barbuda">Antigua & Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Aruba">Aruba</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bermuda">Bermuda</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia">Bolivia</option>
											<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Brazil">Brazil</option>
											<option value="Brunei">Brunei</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Cayman Islands">Cayman Islands</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros Island">Comoros Island</option>
											<option value="Congo">Congo</option>
											<option value="Cook Island">Cook Island</option>
											<option value="Cooper Island">Cooper Island</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote D'ivoire (ivory Coast)">Cote D'ivoire (ivory Coast)</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Dominican Republic">Dominican Republic</option>
											<option value="East Timor">East Timor</option>
											<option value="Ecuador">Ecuador</option>
											<option value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">Equatorial Guinea</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Falkland Islands">Falkland Islands</option>
											<option value="Faroe Islands">Faroe Islands</option>
											<option value="Fiji Islands">Fiji Islands</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="French Guiana">French Guiana</option>
											<option value="French Polynesia">French Polynesia</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guadeloupe">Guadeloupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guinea">Guinea</option>
											<option value="Guinea Bissau">Guinea Bissau</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong, SAR of China">Hong Kong, SAR of China</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran">Iran</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea (north)">Korea (north)</option>
											<option value="Korea (south)">Korea (south)</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Laos">Laos</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libya">Libya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macau">Macau</option>
											<option value="Macedonia">Macedonia</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malawi">Malawi</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Mariana Islands">Mariana Islands</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Martinique">Martinique</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius Island">Mauritius Island</option>
											<option value="Mexico">Mexico</option>
											<option value="Micronesia">Micronesia</option>
											<option value="Moldova">Moldova</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montenegro">Montenegro</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Namibia">Namibia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherland Antilles">Netherland Antilles</option>
											<option value="Netherlands">Netherlands</option>
											<option value="New Caledonia">New Caledonia</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Niue Island">Niue Island</option>
											<option value="Norfolk Island">Norfolk Island</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau">Palau</option>
											<option value="Palestine Territories">Palestine Territories</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Philippines">Philippines</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Puerto Rico">Puerto Rico</option>
											<option value="Qatar">Qatar</option>
											<option value="Reunion Island">Reunion Island</option>
											<option value="Romania">Romania</option>
											<option value="Russia">Russia</option>
											<option value="Rwanda">Rwanda</option>
											<option value="Saint Eustatius">Saint Eustatius</option>
											<option value="Saint Helena">Saint Helena</option>
											<option value="Saint Kitts & Nevis">Saint Kitts & Nevis</option>
											<option value="Saint Lucia">Saint Lucia</option>
											<option value="Saint Maarten">Saint Maarten</option>
											<option value="Saint Pierre & Miquelon">Saint Pierre & Miquelon</option>
											<option value="Saint Thomas">Saint Thomas</option>
											<option value="Saint Vincent & Grenadines">Saint Vincent & Grenadines</option>
											<option value="Samoa">Samoa</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome & Principe">Sao Tome & Principe</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia">Serbia</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="South Africa">South Africa</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syria">Syria</option>
											<option value="Taiwan, China">Taiwan, China</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania">Tanzania</option>
											<option value="Thailand">Thailand</option>
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
											<option value="Tonga">Tonga</option>
											<option value="Trinidad & Tobago">Trinidad & Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Turks & Caicos Island">Turks & Caicos Island</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Emirates">United Arab Emirates</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
											<option value="Uruguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu Republic">Vanuatu Republic</option>
											<option value="Vatican City">Vatican City</option>
											<option value="Venezuela">Venezuela</option>
											<option value="Vietnam">Vietnam</option>
											<option value="Virgin Islands (british)">Virgin Islands (british)</option>
											<option value="Virgin Islands (u.s.)">Virgin Islands (u.s.)</option>
											<option value="Wake Island">Wake Island</option>
											<option value="Wallis & Futuna">Wallis & Futuna</option>
											<option value="Yemen">Yemen</option>
											<option value="Zaire (dem. Rep. Of Congo)">Zaire (dem. Rep. Of Congo)</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-group col">
								<div class="form-row">
									<label for="" class="control-label">Chat ID <small class="text-muted">(Optional)</small></label>
								</div>
								<div class="row">
									<div class="col-md-4" style="margin-bottom:5px;">
										<select class="form-control selectpicker" name="chat_app">
											<option value="" selected>-select-</option>
											<option value="LINE">LINE</option>
											<option value="WeChat">We Chat</option>
											<option value="WhatsApp">WhatsApp</option>
										</select>
									</div>
									<div class="col-md-8">
										<input type="text" class="form-control" name="chat_id" value="" />
									</div>
								</div>
							</div>

							<div class="">
								<button type="submit" class="btn btn-success btn-block"><i class="fa fa-pencil"></i> Register</button>
								<div class="alert alert-danger" role="alert" style="margin-top: 10px;"><i class="fa fa-xs fa-exclamation"></i> Note : Each authenticity code can be registered only one time.</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('Inc_footer.php'); ?>

	<?php include('Inc_js.php'); ?>
<!--
	<script src="<?php echo base_url();?>assets/js/plugin/bootstrap-select/bootstrap-select.min.js"></script>
-->
	<script>
		$(function(){
			//$.fn.selectpicker.Constructor.BootstrapVersion = '3';

		
		$("form#product_register").submit(function() {
			var $frm = $(this)
			$("#AjaxLoadingModal").modal('show')
			var content = $(this).serialize()
			$.ajax({
				url: "<?php echo base_url() ?>authenticity",
				type: "post",
				data: content,
				success: function(data, status) {
					$("#AjaxLoadingModal").modal('hide')

					swal({
						title: "Coming soon.",
						icon: "warning",
						dangerMode: true,
						closeOnClickOutside: false,
					})
					/*
					if (data.status == "success") {
						var title = 'success' 
						swal({
								title: title,
								icon: "success",
								dangerMode: false,
								closeOnClickOutside: false,
							})
							.then((value) => {
								if (value) {
									window.location = '<?php echo base_url() ?>'
								}
							});
					} else {
						var button_text = 'Contact us' 
						swal({
								title: data.msg['en'],
								icon: "warning",
								dangerMode: true,
								button: button_text,
								closeOnClickOutside: false,
							})
							.then((value) => {
								if (value) {
									$("#contactModal").modal('show')
									//window.location = 'https://merimies.com/about-us';
								}
							});
					}
					*/
				},
				error: function(xhr, desc, err) {
					$("#AjaxLoadingModal").modal('hide')
					swal({
							title: err,
							icon: "warning",
							dangerMode: true,
							button: "Try again",
							closeOnClickOutside: false,
						})
						.then((value) => {
							if (value) {
								location.reload();
							}
						});
				}
			});
			return false;
			/*
			grecaptcha.ready(function() {
				grecaptcha.execute('6Le-R3sfAAAAADtsxbNcO0rg60Rn1FYCIFG333uS', {
					action: 'product_register'
				}).then(function(token) {
					$frm.prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
					var content = $frm.serialize();
					$("#AjaxLoadingModal").modal('show')
					$.ajax({
						url: "https://merimies.com/authenticity",
						type: "post",
						data: content,
						success: function(data, status) {
							$("#AjaxLoadingModal").modal('hide')
							if (data.status == "success") {
								var title = 'success' 
								swal({
										title: title,
										icon: "success",
										dangerMode: false,
										closeOnClickOutside: false,
									})
									.then((value) => {
										if (value) {
											window.location = 'https://merimies.com/'
										}
									});
							} else {
								var button_text = 'Contact us' 
								swal({
										title: data.msg['en'],
										icon: "warning",
										dangerMode: true,
										button: button_text,
										closeOnClickOutside: false,
									})
									.then((value) => {
										if (value) {
											$("#contactModal").modal('show')
											//window.location = 'https://merimies.com/about-us';
										}
									});
							}

						},
						error: function(xhr, desc, err) {
							$("#AjaxLoadingModal").modal('hide')
							swal({
									title: err,
									icon: "warning",
									dangerMode: true,
									button: "Try again",
									closeOnClickOutside: false,
								})
								.then((value) => {
									if (value) {
										location.reload();
									}
								});
						}
					});
					return false;
				});
			});
			return false
			*/
		})
		})
	</script>

</body>

</html>