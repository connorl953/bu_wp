<?php 

$parent = get_post_meta($post -> ID,'_parent',true);
$instagram = get_post_meta($post -> ID,'_instagram',true);
$parentEmail = get_post_meta($post -> ID,'_parent_email',true);
$permission = get_post_meta($post -> ID,'_permission',true);
$questions = get_post_meta($post -> ID,'_questions',true);
$mailing = get_post_meta($post -> ID,'_mailing',true);
$referred = get_post_meta($post -> ID,'_referred_by',true);
$s4yt = get_post_meta($post -> ID,'_s4yt',true);

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
		<label>Preferred email address for event communication and updates</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_contact_email',true); ?></b>
	</div>
</div>
<?php if($instagram){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Instagram Handle</label>
	</div>
	<div class="form-input">
		<b><?php echo $instagram; ?></b>
	</div>
</div>
<?php } ?>
<!--div class="form-field">
	<div class="form-label">
		<label>Phone</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_phone',true); ?></b>
	</div>
</div-->
<div class="form-field">
	<div class="form-label">
		<label>Grade</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_grade',true); ?></b>
	</div>
</div>
<div class="form-field">
	<div class="form-label">
		<label>State</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_city_state',true); ?></b>
	</div>
</div>
<?php if($referred){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Referred by</label>
	</div>
	<div class="form-input">
		<b><?php echo $referred; ?></b>
	</div>
</div>
<?php } ?>
<?php if($parent){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Parent</label>
	</div>
	<div class="form-input">
		<b><?php echo $parent; ?></b>
	</div>
</div>
<?php } ?>
<?php if($parentEmail){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Parent Email</label>
	</div>
	<div class="form-input">
		<b><?php echo $parentEmail; ?></b>
	</div>
</div>
<?php } ?>
<div class="form-field">
	<div class="form-label">
		<label>Do we have your permission to share your name and basic information with our sponsorship partner(s) should you receive one of their scholarship awards? Permission is required for receiving scholarship awards.</label>
	</div>
	<div class="form-input">
		<b><?php if($permission == 1){ echo 'Yes'; }else{ echo 'No'; }; ?></b>
	</div>
</div>
<?php if($questions){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Do you have any questions about our IDEAS MATTER FAIR or about building-U? We're happy to answer!</label>
	</div>
	<div class="form-input">
		<b><?php echo $questions; ?></b>
	</div>
</div>
<?php } ?>
<?php if($s4yt){ ?>
<div class="form-field">
	<div class="form-label">
		<label>S4Yt</label>
	</div>
	<div class="form-input">
		<code><?php echo $s4yt; ?></code>
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