<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <script src="form.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title></title>
  </head>
  <body>


<div>
<?php


?>

</div>











    <div class="container-fluid" align="center">
<div class="row" >



    <form action="registration.php" id="form"  method="post" style="margin-top:5%; margin-bottom:5%;padding:12%;">
      <h2 align="center" style="letter-spacing:2px;margin-top:-5%;">HELIX REGISTRATION FORM</h2>
		<ul class="flex-outer">
			<li>
				<label for="first-name">First Name</label>
				<input type="text" id="firstname" style="padding:15px;" placeholder="Enter your first name here" required>
			</li>
			<li>
				<label for="last-name">Last Name</label>
				<input type="text" id="lastname"  style="padding:15px;" placeholder="Enter your last name here" required>
			</li>
			<li>
				<label for="email">Email</label>
				<input type="email" id="email" style="padding:15px;" placeholder="Enter your email here" required>
			</li>
			<li>
				<label for="phone">Phone</label>
				<input type="tel" maxlength="10" id="phone" style="padding:15px;" placeholder="Enter your phone number here" required>
			</li>


        <div  class="select" style="margin-top:4%;">

                   <select  required id="select_box" class="" required>

                   <option style="background-color:#242831;color:#fff;" value="" for="0" selected disabled>Select College</option>
                   <option style="background-color:#242831;color:#fff;" value="Aravali_Institute_of_Technical_Studies" for="1">Aravali Institute of Technical Studies</option>
                   <option style="background-color:#242831;color:#fff;" value="College_of_Technology_and_Engineering" for="2">College of Technology and Engineering</option>
                   <option style="background-color:#242831;color:#fff;" value="Geetanjali_Institute_of_Technical_Studies" for="3">Geetanjali Institute of Technical Studies</option>
                   <option style="background-color:#242831;color:#fff;" value="Maharaja_College_of_Engineering" for="4">Maharaja College of Engineering</option>
                   <option style="background-color:#242831;color:#fff;" value="Pacific_College_of_Engineering" for="5">Pacific College of Engineering</option>
                   <option style="background-color:#242831;color:#fff;" value="Sir_Padampat_Singhania_University" for="6">Sir Padampat Singhania University</option>
                   <option style="background-color:#242831;color:#fff;" value="SS_College_of_Engineering" for="7">SS College of Engineering</option>
                   <option style="background-color:#242831;color:#fff;" value="Sunrise_Group_of_Institutions" for="8">Sunrise Group of Institutions</option>
                   <option style="background-color:#242831;color:#fff;" value="Techno_India_NJR_Institute_of_Technology" for="9">Techno India NJR Institute of Technology</option>
                   <option style="background-color:#242831;color:#fff;" value="Out_of_Udaipur" for="10">Out of Udaipur</option>

                   </select>
      </div>




                   <div id="Aravali_Institute_of_Technical_Studies" class="hide">
                     <p style="color:#000;">Attendees will be charged Rs.100 one-time registration fee at the venue.</p>
                   </div>
                   <div id="Geetanjali_Institute_of_Technical_Studies" class="hide">
                     <p style="color:#000;">Attendees will be charged Rs.100 one-time registration fee at the venue.</p>
                   </div>
                   <div id="Maharaja_College_of_Engineering" class="hide">
                     <p style="color:#000;">Attendees will be charged Rs.100 one-time registration fee at the venue.</p>
                   </div>
                   <div id="Pacific_College_of_Engineering" class="hide">
                     <p style="color:#000;">Attendees will be charged Rs.100 one-time registration fee at the venue.</p>
                   </div>
                   <div id="Sir_Padampat_Singhania_University" class="hide">
                     <p style="color:#000;">Attendees will be charged Rs.100 one-time registration fee at the venue.</p>
                   </div>
                   <div id="SS_College_of_Engineering" class="hide">
                     <p style="color:#000;">Attendees will be charged Rs.100 one-time registration fee at the venue.</p>
                   </div>
                   <div id="Sunrise_Group_of_Institutions" class="hide">
                     <p style="color:#000;">Attendees will be charged Rs.100 one-time registration fee at the venue.</p>
                   </div>
                   <div id="Techno_India_NJR_Institute_of_Technology" class="hide">
                     <p style="color:#000;">Attendees will be charged Rs.100 one-time registration fee at the venue.</p>
                   </div>
                   <div id="Out_of_Udaipur" class="hide">
                     <p style="color:#000;">Attendees will be charged Rs.100 one-time registration fee at the venue.</p>
                   </div>



                   <div class="select" style="margin-top:4%;">
                              <select  required id="gender" class="" required>
                                <option style="background-color:#242831;color:#fff;" value="" for="0" selected disabled>Gender</option>
                                <option style="background-color:#242831;color:#fff;" value="Male" for="1">Male</option>
                                <option style="background-color:#242831;color:#fff;" value="Female" for="2">Female</option>
                                <option style="background-color:#242831;color:#fff;" value="Other" for="3">Other</option>
                              </select>
                  </div>


                                       <div class="select" style="margin-top:4%;">
                                         <select  required id="accomodation" class="" required>
                                           <option style="background-color:#242831;color:#fff;" value="" for="0" selected disabled>Accomodation</option>
                                           <option style="background-color:#242831;color:#fff;" value="YES" for="1">Yes</option>
                                           <option style="background-color:#242831;color:#fff;" value="NO" for="2">No</option>

                                         </select>

                                       </div>
                                       <div align="left" >

                                         <h4 style="font-weight:normal;color:#242831;"> <span style="color:red;"> * </span> This is a mandatory one time registration form to enter in HELIX'20.</h4>
                                       <h4 style="font-weight:normal;color:#242831;"> <span style="color:red;"> * </span> Attendees will be provided physical passes at the venue.</h4>
                                           <h4 style="font-weight:normal;color:#242831;"> <span style="color:red;"> * </span>Attendees will get a unique 8-digit registration id after submitting this form which will be used to take part in various events.</h4>
                                           <h4 style="font-weight:normal;color:#242831;"> <span style="color:red;"> * </span> Attendees are requested to carry their respective college Id cards at the venue for check in. </h4>
                                           <h4 style="font-weight:normal;color:#242831;"> <span style="color:red;"> * </span> For any queries you can contact: <a href="tel:+916375185981">+91 6375185981</a> </h4>

                                       </div>

			<li>

				<ul class="flex-inner" >



				</ul>
			</li>
			<li >
			    <div class="g-recaptcha" data-sitekey="6LfZetcUAAAAAIIYbABeXc6tt97zTIk-iyYK-4cd"></div>
				<button id="register" type="submit"   style="font-size:15px;padding:10px;">Submit</button>
			</li>
		</ul>


	</form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phone = $('#phone').val();
			var select_box 	= $('#select_box').val();
      var gender = $('#gender').val();
      var accomodation = $('#accomodation').val();
				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phone: phone,select_box:select_box ,gender:gender,accomodation:accomodation},
					success: function(data){
            $("form").trigger("reset");
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})

					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});


			}else{

			}





		});


	});

</script>
  </div>
  </div>
  </body>
</html>
