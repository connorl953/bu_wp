<form name="custom" action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST" onsubmit="return submitBusinessForm(this)" enctype="multipart/form-data" novalidate>
	<fieldset>
		<!--span>PREVIEW AND DOWNLOAD ANY OF THE FOLLOWING PDFS BEFORE OR AFTER REGISTERING:</span>
		<ul>
			<li><a href="/wp-content/uploads/S4YT-VIRTUAL-EVENT-POSTER.jpg" target="_BLANK">General Event</a></li>
			<li><a href="/wp-content/uploads/Main-map.png" target="_BLANK">Event Map</a></li>
			<li><a href="/wp-content/uploads/S4YT-Terms-Conditions-Virtual.pdf" target="_BLANK">Scholarship & Raffle Items Terms And Conditions</a></li>
		</ul-->
	</fieldset>
	<fieldset>
		<span>Business name*</span>
		<input name="business_name" type="text" value="" required />
	</fieldset>
	<fieldset class="half">
		<span>Contact First Name*</span>
		<input name="first_name" type="text" value="" required />
	</fieldset>
	<fieldset class="half right">
		<span>Contact Last Name*</span>
		<input name="last_name" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>Email*</span>
		<input name="email" type="text" value="" required />
	</fieldset>
	<!--fieldset>
		<span>Mailing Address</span>
		<input name="mailing_address" type="text" value="" />
	</fieldset-->
	<fieldset class="half">
		<span>City and State*</span>
		<input name="city_state" type="text" value="" required />
	</fieldset>
	<fieldset class="half right">
		<span>Phone Number*</span>
		<input name="phone" type="text" value="" required />
	</fieldset>
	<fieldset>
		<span>Name of Business Representative attending the event (if different from the primary contact)</span>
		<input name="representative" type="text" value="" />
	</fieldset>
	<fieldset>
		<span>Sponsorship Level</span>
		<input id="igniting" name="sponsorship_level" type="radio" value="0" checked />
		<label for="igniting">Igniting: Have an item for the FREE RAFFLE PAGE to contribute!</label>
		<input id="amount-2000" name="sponsorship_level" type="radio" value="1" />
		<label for="amount-2000">Encouraging: Couldn’t start without you! < $2000</label>
		<input id="amount-2000-3000" name="sponsorship_level" type="radio" value="2" />
		<label for="amount-2000-3000">Supporting: Looking after the details! ≥$2000 and <$3000</label>
		<input id="amount-3000-5000" name="sponsorship_level" type="radio" value="3" />
		<label for="amount-3000-5000">Major: Raising the stakes and impact ≥$3000 and < $5,000</label>
		<!--input id="amount-5000-plus" name="sponsorship_level" type="radio" value="4" />
		<label for="amount-5000-plus">Principal: Making it all happen! ≥$5,000</label-->
	</fieldset>
	<!--fieldset>
		<span><a href="/wp-content/uploads/Sponsorship-level-doc-with-linkspdf.pdf" target="_BLANK">A REMINDER ABOUT THE DIFFERENT SPONSORSHIP LEVELS</a> WOULD BE HELPFUL RIGHT ABOUT NOW</span>
	</fieldset-->
	<!--fieldset>
		<span>Donation Amount</span>
		<input name="donate" type="number" value="" min="1" max="5000" onchange="return updateAmount(this)" />
		<input name="cc_name" type="text" placeholder="Credit Card Name" style="margin:10px 0 0 0;" />
		<input name="secret" type="hidden" value=""  />
		<div id="stripe-form"></div>
		<p>Powered By <i class="fab fa-cc-stripe"></i></p>
	</fieldset-->	
	<fieldset>
		<span>Let us know that you are interested in donating and know that ---  we thank you in advance (YAY!!!) and will be in touch with you to get all of the details :)</span>
		<input id="donate" name="donate_item" type="radio" value="1" />
		<label for="donate">Yes, I would like to donate promotional items and or services to be used in the free raffle at the event!</label>
	</fieldset>
	<fieldset>
		<span>Feel free to <a href="mailto:connect@building-U.com">contact us</a> any time with any questions or concerns</span>
		<!--textarea name="questions"></textarea-->
	</fieldset>
	<fieldset>
		<span>One last thing: would you like  to join our mailing list?</span>
		<input id="mailing-yes" name="mailing_list" type="radio" value="1" />
		<label for="mailing-yes">Sure... I'd love to hear about programs and events once or twice a month</label>
		<input id="mailing-no" name="mailing_list" type="radio" value="0" />
		<label for="mailing-no">No thanks... if I want any more info on future stuff, I'll reach out to you</label>
	</fieldset>
	<fieldset>
		<span>Thanks for joining our 1st  Ideas Matter Fair : S4YT (Scholarship 4 Your Thoughts)! <br /><br />We’ll be in touch about the next steps!</span>
	</fieldset>
	<fieldset>
		<input name="action" type="hidden" value="process_lead" />
		<input name="confirm_msg" type="hidden" value="Thank you!" />
		<input name="send_to" type="hidden" value="<?php echo $email ?>" />
		<input name="type" type="hidden" value="business-registration" />
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