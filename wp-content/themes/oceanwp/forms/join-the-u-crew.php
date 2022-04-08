<h1>Love what we do? Join the U-Crew! </h1>
<p>We're so pleased that you'd like to investigate becoming part our U-Team at building-U!<br /><br />Please fill out the form below and attach your resume and a brief note on what drew you to us and what your current schedule looks like.</p>
<h2>U-Crew Application</h2>
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
		<span>City*</span>
		<input name="city" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>Any experience around standardized testing?*<br /><small>Please select one or more if applicable</small></span>
		<input id="sat-act" name="experience[]" type="radio" value="SAT or ACT" />
		<label for="sat-act">SAT or ACT</label>
		<input id="gre" name="experience[]" type="radio" value="GRE or MCAT or LSAT or GMAT" />
		<label for="gre">GRE or MCAT or LSAT or GMAT</label>
	</fieldset>
	<fieldset>
		<span>What best describes your level of experience?*<br /><small>Please select one or more if applicable</small></span>
		<input id="studied" name="level[]" type="radio" value="Studied for" />
		<label for="studied">Studied for</label>
		<input id="written" name="level[]" type="radio" value="Written" />
		<label for="written">Written</label>
		<input id="instructed" name="level[]" type="radio" value="Instructed" />
		<label for="instructed">Instructed</label>
		<input id="other" name="level[]" type="radio" value="Other" />
		<label for="other">Other</label>
	</fieldset>
	<fieldset>
		<span>If you answered "Other" please describe.</span>
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
		<input name="type" type="hidden" value="join-the-u-crew" />
		<button>Submit</button>
	</fieldset>
</form>	