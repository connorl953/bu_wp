<?php 

$cityState = get_post_meta($post -> ID,'_city_state',true);
$representative = get_post_meta($post -> ID,'_representative',true);
$businessName = get_post_meta($post -> ID,'_business_name',true);
$questions = get_post_meta($post -> ID,'_questions',true);
$mailing = get_post_meta($post -> ID,'_mailing',true);
$mailingAddress = get_post_meta($post -> ID,'_mailing_address',true);
$contribution = get_post_meta($post -> ID,'_contribution',true);
$cc = get_post_meta($post -> ID,'_donate_cc',true);

if($contribution == 0){
	$contribution = get_post_meta($post -> ID,'_donation_amount',true);
}


?><div class="form-field">
	<div class="form-label">
		<label>Contact Name</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_contact_name',true); ?></b>
	</div>
</div>
<div class="form-field">
	<div class="form-label">
		<label>Email</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_email',true); ?></b>
	</div>
</div>
<?php if($mailingAddress){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Mailing Address</label>
	</div>
	<div class="form-input">
		<b><?php echo $mailingAddress; ?></b>
	</div>
</div>
<?php } ?>
<div class="form-field">
	<div class="form-label">
		<label>City State</label>
	</div>
	<div class="form-input">
		<b><?php echo $cityState; ?></b>
	</div>
</div>
<div class="form-field">
	<div class="form-label">
		<label>Phone</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_phone',true); ?></b>
	</div>
</div>
<?php if($mailing){ ?>
<div class="form-field">
	<div class="form-label">
		<label>one last thing: Join Our Mailing List???</label>
	</div>
	<div class="form-input">
		<b><?php if($mailing == 1){ echo 'Sure... I\'d love to hear about programs and events once or twice a month'; }else{ echo 'No thanks... if I want any more info on future stuff, I\'ll reach out to you'; }; ?></b>
	</div>
</div>
<?php } ?>
<?php if($contribution){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Individual Giver contribution level</label>
	</div>
	<div class="form-input">
		<b><?php echo $contribution; ?></b>
	</div>
</div>
<?php } ?>
<div class="form-field">
	<div class="form-label">
		<label>Pay With Credit Card</label>
	</div>
	<div class="form-input">
		<b><?php echo $cc == 1 ? 'Yes' : 'No'; ?></b>
	</div>
</div>
<?php if($questions){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Questions</label>
	</div>
	<div class="form-input">
		<b><?php echo $questions; ?></b>
	</div>
</div>
<?php } ?>
<?php if($cc == 1){

	$paymentIntent = get_post_meta($post -> ID,'_payment_intent',true);

	require_once(__DIR__.'/../../vendor/autoload.php');

	\Stripe\Stripe::setApiKey(BUILDING_U_STRIPE_KEY_SECRET	);

	$paymentIntent = \Stripe\PaymentIntent::retrieve($paymentIntent);
?>
<div class="form-field">
	<div class="form-label">
		<label>Stripe Data</label>
	</div>
	<div class="form-input">
		<code style="display: inline-block;word-break: break-all;"><?php print(json_encode($paymentIntent)); ?></code>
	</div>
</div>
<?php } ?>
