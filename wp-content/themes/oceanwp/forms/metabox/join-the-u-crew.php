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
		<b><?php echo get_post_meta($post -> ID,'_city',true); ?></b>
	</div>
</div>
<div class="form-field">
	<div class="form-label">
		<label>Any experience around standardized testing?</label>
	</div>
	<div class="form-input">
		<b><?php 

	$metaData = get_post_meta($post -> ID,'_experience',true);

	try{
		$data = json_decode($metaData,true);
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
		<label>What best describes your level of experience?</label>
	</div>
	<div class="form-input">
		<b><?php 

	$metaData = get_post_meta($post -> ID,'_level',true);

	try{
		$data = json_decode($metaData,true);
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
		<label>If you answered "Other" please describe.</label>
	</div>
	<div class="form-input">
		<b><?php echo get_post_meta($post -> ID,'_details',true); ?></b>
	</div>
</div>
<?php 

$wpUploadsDir = wp_get_upload_dir();
$resume = get_post_meta($post -> ID,'_resume',true);

if($resume){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Resume</label>
	</div>
	<div class="form-input">
		<b><a href="<?php echo $wpUploadsDir['baseurl'].'/'.$resume; ?>" target="_BLANK"><?php echo $resume; ?></a></b>
	</div>
</div>
<?php }

$cv = get_post_meta($post -> ID,'_cover_letter',true); 

if($cv){ ?>
<div class="form-field">
	<div class="form-label">
		<label>Cover Letter</label>
	</div>
	<div class="form-input">
		<b><a href="<?php echo $wpUploadsDir['baseurl'].'/'.$cv; ?>" target="_BLANK"><?php echo $cv; ?></a></b>
	</div>
</div>
<?php } ?>