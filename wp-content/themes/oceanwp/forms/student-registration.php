<form name="custom student" action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST" onsubmit="return submitForm(this)" enctype="multipart/form-data" novalidate>
	<!--fieldset>
		<span>PREVIEW AND DOWNLOAD ANY OF THE FOLLOWING PDFS BEFORE OR AFTER REGISTERING:</span>
		<p style="color:#000">$4YT is a virtual one day drop-in event where local businesses can engage with students by posing an idea challenge that students can answer for a chance to win small funding prizes for their future. In addition there is a raffle page  of local business items and gift cards students can win through random draw by just assigning tickets they receive for signing up --so, no cost or contest stress.</p>
		<ul>
			<li><a href="/wp-content/uploads/S4YT-VIRTUAL-EVENT-POSTER.jpg" target="_BLANK">General Event</a></li>
			<li><a href="/" target="_BLANK">Building-U Homepage</a></li>
			<li><a href="/wp-content/uploads/Main-map.png" target="_BLANK">Event Page</a></li>
			<li><a href="/wp-content/uploads/S4YT-Terms-Conditions-Virtual.pdf" target="_BLANK">Scholarship & Raffle Items Terms And Conditions</a></li>
		</ul>
	</fieldset-->
	<fieldset>
		<span>$4YT is a virtual 36 hour virtual drop-in event where students can learn about businesses, answer questions and use free tickets for a chance to win funding and prizes</span>
	</fieldset>
	<fieldset>
		<span>First name*</span>
		<input name="first_name" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>Last name*</span>
		<input name="last_name" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>School Email Address</span>
		<input name="school_email" type="text" value="" />
	</fieldset>
	<fieldset>
		<span>Preferred email address for event communication and updates*</span>
		<input name="email" type="text" value="" required />
		<small>***you will need a non-institutional email that will not block your registration confirmation and event updates</small>
	</fieldset>
	<fieldset>
		<span>Instagram Handle (optional)</span>
		<input name="instagram" type="text" value="" />
	</fieldset>
	<fieldset>
		<span>Grade*</span>
		<input name="grade" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>State*</span>
		<input name="city_state" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>Let us know who referred you!</span>
		<input name="referred_by" type="text" value="" />
	</fieldset>
	<fieldset>
		<span>Do you have any questions about our IDEAS MATTER FAIR or about building-U? We're happy to answer!</span>
		<textarea name="questions"></textarea> 
	</fieldset>
	<fieldset>
		<span>Do we have your permission to share your information with our event partner(s) should you win a funding award or prize? Permission is required for receiving Raffle prizes.</span>
		<input name="permission" id="permission" type="checkbox" value="1" />
		<label for="permission">Permission to disclose registration information</label>
	</fieldset>
	<fieldset>
		<span>UMightLike, our newsletter??</span>
		<input name="mailing" id="mailing-yes" type="radio" value="1" />
		<label for="mailing-yes">Sure... I'd love to hear about programs and events once or twice a month</label>
		<input name="mailing" id="mailing-no" type="radio" value="0" />
		<label for="mailing-no">No thanks... if I want any more info on future stuff, I'll reach out to you</label>
	</fieldset>
	<fieldset>
		<span>Thanks for registering for our 1st  Ideas Matter Fair : S4YT (Scholarship 4 Your Thoughts)! <br /><br />We’ll be in touch to confirm all of the details, but always feel free to contact us if there's anything we've left out!</span>
	</fieldset>
	<fieldset>
		<input name="action" type="hidden" value="process_lead" />
		<input name="confirm_msg" type="hidden" value="Thank you!" />
		<input name="send_to" type="hidden" value="<?php echo $email ?>" />
		<input name="type" type="hidden" value="student-registration" />
		<button>Submit</button>
	</fieldset>
</form>	