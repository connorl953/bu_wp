<form class="individual-giver" name="custom" action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST" onsubmit="return submitIndividualForm(this)" enctype="multipart/form-data" novalidate>
	<fieldset>
		<p>“The best way to predict the future is to create it." Abraham Lincoln<br /><br />Make a meaningful contribution to  RI High School student success.<br />Their future impacts us all.<br /><br />Help us with our event to help them... to help everyone.<br />Check out <a href="/event/">S4YT: AN IDEA FAIR for RI students</a></p>
	</fieldset>
	<fieldset>
		<span>Contact name*</span>
		<input name="contact_name" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>Email*</span>
		<input name="email" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>Mailing Address</span>
		<input name="mailing_address" type="text" value="" />
	</fieldset>
	<fieldset class="half">
		<span>City and State*</span>
		<input name="city_state" type="text" value="" required />
	</fieldset>
	<fieldset class="half right">
		<span>Phone Number*</span>
		<input name="phone" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>Individual Giver support preference</span>
		<input id="preference_1" name="preference" type="radio" value="0" />
		<label for="preference_1">I would like to GIVE to support RI students in ways that allow them to expand possibilities by networking, idea sharing, and exploring interests or plans that can shape their future and ours.</label>
		<input id="preference_2" name="preference" type="radio" value="2" />
		<label for="preference_2">I would like to GIVE to support RI businesses share their journeys and offer students their insights on creating sustainable business practices and discovering paths of personal and professional value.</label>
	</fieldset>
	<fieldset>
		<span>Individual Giver contribution level</span>
		<input id="contribution_10" name="contribution" type="radio" value="10" onchange="updateContribution(this)" />
		<label for="contribution_10">$10</label>
		<input id="contribution_20" name="contribution" type="radio" value="20" onchange="updateContribution(this)" />
		<label for="contribution_20">$20</label>
		<input id="contribution_50" name="contribution" type="radio" value="50" onchange="updateContribution(this)" />
		<label for="contribution_50">$50</label>
		<input id="contribution_100" name="contribution" type="radio" value="100" onchange="updateContribution(this)" />
		<label for="contribution_100">$100</label>
		<input id="contribution_500" name="contribution" type="radio" value="500" onchange="updateContribution(this)" />
		<label for="contribution_500">$500</label>
		<input id="contribution_other" name="contribution" type="radio" value="0" onchange="updateContribution(this)" />
		<label for="contribution_other">Other</label>
		<input name="donation_amount" type="number" placeholder="Donation Amount" min="1" max="100000" onchange="updateContribution(this)" />
	</fieldset>
	<fieldset>
		<span>Donate with Credit Card</span>
		<select name="donate_cc" onchange="this.parentNode.nextElementSibling.style.display = this.value == 0 ? 'none' : 'block';">
			<option value="0">No</option>
			<option value="1" selected>Yes</option>
		</select>
	</fieldset>
	<fieldset class="cc-details" style="display:block">
		<input name="cc_name" type="text" placeholder="Credit Card Name" style="margin:10px 0 0 0;" />
		<input name="secret" type="hidden" value=""  />
		<div id="stripe-form"></div>
		<p class="powered">Powered By <i class="fab fa-cc-stripe"></i></p>
	</fieldset>	
	<fieldset>
		<span>Do you have any questions about our IDEAS MATTER FAIR or about building-U? We're happy to answer!</span>
		<textarea name="questions"></textarea>
	</fieldset>
	<fieldset>
		<span>One last thing: would you like  to join our mailing list?</span>
		<input id="mailing-yes" name="mailing_list" type="radio" value="1" />
		<label for="mailing-yes">Sure... I'd love to hear about programs and events once or twice a month</label>
		<input id="mailing-no" name="mailing_list" type="radio" value="0" />
		<label for="mailing-no">No thanks... if I want any more info on future stuff, I'll reach out to you</label>
	</fieldset>
	<fieldset>
		<span>Enormous thanks for being a big part of making this event happen!!<br />Look for your name on <a href="/partners">OUR PARTNER PAGE</a> and we will make sure you are updated with the event results.<br /><br />Your impact is real!!</span>
	</fieldset>
	<fieldset>
		<input name="action" type="hidden" value="process_lead" />
		<input name="confirm_msg" type="hidden" value="Thank you!" />
		<input name="send_to" type="hidden" value="<?php echo $email ?>" />
		<input name="type" type="hidden" value="independent-giver" />
		<button>Submit</button>
	</fieldset>
</form>	

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
	var stripe = Stripe('<?php echo BUILDING_U_STRIPE_KEY_PUBLIC; ?>');
	var elements = stripe.elements();
	var cardElement = elements.create('card');
	var styles = {base:{'::placeholder':{color:'#F00'}}};

	cardElement.mount('#stripe-form',{style:styles});
</script>