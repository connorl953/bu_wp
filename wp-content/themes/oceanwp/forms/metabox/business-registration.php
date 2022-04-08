<?php 

$cityState = get_post_meta($post -> ID,'_city_state',true);
$representative = get_post_meta($post -> ID,'_representative',true);
$businessName = get_post_meta($post -> ID,'_business_name',true);
$questions = get_post_meta($post -> ID,'_questions',true);
$mailing = get_post_meta($post -> ID,'_mailing',true);
$mailingAddress = get_post_meta($post -> ID,'_mailing_address',true);
$sponsorshipLevel = get_post_meta($post -> ID,'_sponsorship_level',true);
$donate = get_post_meta($post -> ID,'_donate',true);
$donateItem = get_post_meta($post -> ID,'_donate_item',true);

switch($sponsorshipLevel){
	case 0:
		$sponsorshipLevel = 'Igniting: Starting the Conversation! Interested in attending as a sponsored participant';
		break;
	case 1:
		$sponsorshipLevel = 'Encouraging: Couldn’t start without you! < $2000';
		break;
	case 2:
		$sponsorshipLevel = 'Supporting: Looking after the details! ≥$2000 and <$3000';
		break;
	case 3:
		$sponsorshipLevel = 'Major: Raising the stakes and impact ≥$3000 and < $5,000';
		break;
	case 4:
		$sponsorshipLevel = 'Principal: Making it all happen! ≥$5,000';
		break;
	default:
		$sponsorshipLevel = null;
		break;
}

$paymentIntent = get_post_meta($post -> ID,'_payment_intent',true);

?><div class="form-field">
	<div class="form-label">
		<label>First Name</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_first_name',true); ?></b>
	</div>
</div>
<div class="form-field">
	<div class="form-label">
		<label>Last Name</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_last_name',true); ?></b>
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
<div class="form-field">
	<div class="form-label">
		<label>Business Name</label>
	</div>
	<div class="form-input">
		<b><?php echo $businessName; ?></b>
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
<?php if($representative){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Name of Business Representative attending the event (if different from the primary contact)</label>
	</div>
	<div class="form-input">
		<b><?php echo $representative; ?></b>
	</div>
</div>
<?php } ?>
<?php if($sponsorshipLevel){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Sponsorship Level</label>
	</div>
	<div class="form-input">
		<b><?php echo $sponsorshipLevel; ?></b>
	</div>
</div>
<?php } ?>
<?php if($donate){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Donation Amount</label>
	</div>
	<div class="form-input">
		<b><?php echo $donate; ?></b>
	</div>
</div>
<?php } ?>
<?php if($donateItem){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Donate Item</label>
	</div>
	<div class="form-input">
		<b><?php echo 'Yes'; ?></b>
	</div>
</div>
<?php } ?>
<?php if($paymentIntent){ 
	require_once(__DIR__.'/../../vendor/autoload.php');

	\Stripe\Stripe::setApiKey(BUILDING_U_STRIPE_KEY_SECRET);

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