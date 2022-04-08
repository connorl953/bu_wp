<h1>Let's Set Up a Time to Chat</h1>
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
		<span>Phone*</span>
		<input name="phone" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>When would you like to chat? <a href="https://calendar.google.com/calendar/selfsched?sstoken=UUIwNDBQNEZaaTAzfGRlZmF1bHR8MWMyNmI1YmY1ZWZlZTlhOTNhMmRkOWQwMjdmMjc2ZDc" target="_BLANK">View Calendar</a></span>
		<input name="date" type="text" value="" />
	</fieldset>
	<fieldset>
		<span>How can we connect with you?*</span>
		<input name="connect_method" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>I would like to connect</span>
		<input id="info" name="connect[]" type="checkbox" value="Get More Information on a Program You Feature" />
		<label for="info">Get More Information on a Program You Feature</label>
		<input id="support" name="connect[]" type="checkbox" value="Talk About One-on-One Support" />
		<label for="support">Talk About One-on-One Support</label>
		<input id="questions" name="connect[]" type="checkbox" value="Ask Some Questions About Other Information I've Collected" />
		<label for="questions">Ask Some Questions About Other Information I've Collected</label>
		<input id="prep" name="connect[]" type="checkbox" value="Talk About Standardized Test Prep" />
		<label for="prep">Talk About Standardized Test Prep</label>
		<input id="work" name="connect[]" type="checkbox" value="See How We Can Work Together" />
		<label for="work">See How We Can Work Together</label>
	</fieldset>
	<fieldset>
		<span>Anything Else You'd Like to Share Before We Chat</span>
		<textarea name="details"></textarea>
	</fieldset>
	<fieldset>
		<input name="action" type="hidden" value="process_lead" />
		<input name="confirm_msg" type="hidden" value="Thank you!" />
		<input name="send_to" type="hidden" value="<?php echo $email ?>" />
		<input name="type" type="hidden" value="set-up-a-time-to-chat" />
		<button>Submit</button>
	</fieldset>
</form>	