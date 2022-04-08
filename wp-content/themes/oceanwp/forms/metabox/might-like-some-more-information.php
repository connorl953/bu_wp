<div class="form-field">
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
		<label>Phone</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_phone',true); ?></b>
	</div>
</div>
<div class="form-field">
	<div class="form-label">
		<label>City and Country</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_location',true); ?></b>
	</div>
</div>
<div class="form-field">
	<div class="form-label">
		<label>I would like to connect</label>
	</div>
	<div class="form-input">
		<b><?php 

	$metaData = get_post_meta($post -> ID,'_information',true);
	
	try{
		$data = json_decode(stripslashes($metaData),true);
	}catch(Exception $e){
		$data = [];
	}
	
	foreach($data as $key => $value) {
		echo $value.'<br />';
	}

	?></b>
	</div>
</div>
<div class="form-field">
	<div class="form-label">
		<label>Please add any helpful details</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_details',true); ?></b>
	</div>
</div>