<h1>Let's Reconnect!</h1>
<form name="custom" action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST" onsubmit="return submitForm(this)" enctype="multipart/form-data" novalidate>
	<fieldset>
		<span>First name*</span>
		<input name="first_name" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>Last name*</span>
		<input name="last_name" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>Email*</span>
		<input name="email" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>Phone</span>
		<input name="phone" type="text" value="" />
	</fieldset>
	<fieldset>
		<span>City and Country</span>
		<input name="location" type="text" value="" />
	</fieldset>
	<fieldset>
		<span>I AM INTERESTED IN CONNECTING AROUND</span>
		<input id="ed-programs" name="information[]" type="checkbox" value="EDUCATION PROGRAMS out there" />
		<label for="ed-programs">looking at EDUCATION PROGRAMS out there</label>
		<input id="volunteer" name="information[]" type="checkbox" value="skills-building/ VOLUNTEER OPPORTUNITIES" />
		<label for="volunteer">learning about skills-building/ VOLUNTEER OPPORTUNITIES</label>
		<input id="scholarship" name="information[]" type="checkbox" value="SCHOLARSHIP OPTIONS that might be a good fit" />
		<label for="scholarship">seeing what SCHOLARSHIP OPTIONS are available</label>
		<input id="partnering" name="information[]" type="checkbox" value="PARTNERING with building-U" />
		<label for="partnering">PARTNERING with building-U</label>
		<input id="support-services" name="information[]" type="checkbox" value="your one-on-one SUPPORT SERVICES" />
		<label for="support-services">exploring SUPPORT SERVICES</label>
		<input id="join-ucrew" name="information[]" type="checkbox" value="joining the U-CREW" />
		<label for="join-ucrew">joining the U-CREW</label>
		<input id="emails" name="information[]" type="checkbox" value="receiving the U Might Like email" />
		<label for="emails">receiving the U Might Like email</label>
		<input id="other" name="information[]" type="checkbox" value="something entirely OTHER" />
		<label for="other">something entirely OTHER</label>
	</fieldset>
	<fieldset>
		<span>Please add any helpful details</span>
		<textarea name="details"></textarea>
	</fieldset>
	<fieldset>
		<span>Resume</span>
		<input name="resume" type="file" value="" />
	</fieldset>
	<fieldset>
		<span>Cover Letter</span>
		<input name="cover_letter" type="file" value="" />
	</fieldset>
	<fieldset>
		<input name="action" type="hidden" value="process_lead" />
		<input name="confirm_msg" type="hidden" value="Thank you!" />
		<input name="send_to" type="hidden" value="<?php echo $email ?>" />
		<input name="type" type="hidden" value="lets-reconnect" />
		<button>Submit</button>
	</fieldset>
</form>	