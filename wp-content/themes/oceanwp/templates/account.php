<?php 

/* Template Name: Account */

$currentUser = wp_get_current_user();

if($currentUser -> ID){

	get_header();

	global $wpdb;

	$attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID),1200);
	$currentUser = wp_get_current_user();
	$roles = isset($currentUser -> roles) ? $currentUser -> roles : [];

	//user data
	$firstName = get_user_meta($currentUser -> ID,'first_name',true);
	$lastName = get_user_meta($currentUser -> ID,'last_name',true);
	$educationLevel = get_user_meta($currentUser -> ID,'education_level',true);
	$gender = get_user_meta($currentUser -> ID,'gender',true);
	$otherGender = get_user_meta($currentUser -> ID,'other_gender',true);
	$emailAddress = $currentUser -> user_email;

	//hours
	$totalQuery = $wpdb -> get_results('SELECT SUM(hours) as total FROM wp_payments_hours WHERE user='.$currentUser->ID);
	$totalHours = isset($totalQuery[0] -> total) ? $totalQuery[0] -> total : 0;

	//used
	$totalUsedQuery = $wpdb -> get_results('SELECT SUM(hours) as total FROM wp_hours_used WHERE student='.$currentUser->ID);
	$totalHoursUsed = isset($totalUsedQuery[0] -> total) ? $totalUsedQuery[0] -> total : 0;

	//latest hours
	$latestHourQuery = $wpdb -> get_results('SELECT * FROM wp_payments_hours WHERE user='.$currentUser->ID.' ORDER BY created DESC');
	$latestHour = isset($latestHourQuery[0]) ? $latestHourQuery[0] : 0;

	//roles
	$roles = isset($currentUser -> roles) ? $currentUser -> roles : null;

	//latest hours
	$latestPayment = $wpdb -> get_results('SELECT * FROM wp_payments_hours WHERE user='.$currentUser->ID.' AND id!='.$latestHour -> id.' ORDER BY created DESC LIMIT 5');
	
?>

<div class="sections">
	<div class="container">
		<div class="row">
			<div class="col-12 banner">
				<img src="<?php echo $attachment[0]; ?>" alt="" style="width:100%" />
			</div>
			<?php if(isset($currentUser -> ID)){ 
				$country = get_user_meta($currentUser -> ID,'_user_country',true);
			?>
			<div class="section-copy">
				<p>Please enter your profile information below</p>
			</div>
			<div id="profile" class="section">
				<div class="section-title">
					<strong>My Profile</strong>
				</div>
				<div class="section-content">
					<form action="<?php echo admin_url('admin-post.php'); ?>" method="POST" onsubmit="return submitForm(this)" novalidate>
						<fieldset class="half">
							<span>First Name</span>
							<input name="first_name" type="text" value="<?php echo $firstName; ?>" required />
						</fieldset>
						<fieldset class="half right">
							<span>Last Name</span>
							<input name="last_name" type="text" value="<?php echo $lastName; ?>" required />
						</fieldset>
						<fieldset>
							<span>Address</span>
							<input type="text" name="address" value="<?php echo get_user_meta($currentUser -> ID,'_user_address',true); ?>" />
						</fieldset>
						<fieldset class="three">
							<span>City</span>
							<input type="text" name="city" value="<?php echo get_user_meta($currentUser -> ID,'_user_city',true); ?>" />
						</fieldset>
						<fieldset class="three small">
							<span>State/Province</span>
							<input type="text" name="region" value="<?php echo get_user_meta($currentUser -> ID,'_user_region',true); ?>" />
						</fieldset>
						<fieldset class="three">
							<span>Country</span>
							<select name="country"><option name="CA">Canada</option><option value="USA" <?php if($country === 'USA'){ echo 'selected'; } ?>>United States</option></select>
						</fieldset>
						<fieldset>
							<span style="margin-bottom:10px;">Education Level</span>
							<div>
								<input id="grade-7" type="radio" name="education_level" value="Grade 7" <?php if($educationLevel == 'Grade 7'){ ?>checked<?php } ?> />
								<label for="grade-7">Grade 7</label>
							</div>
							<div>
								<input id="grade-8" type="radio" name="education_level" value="Grade 8" <?php if($educationLevel == 'Grade 8'){ ?>checked<?php } ?> />
								<label for="grade-8">Grade 8</label>
							</div>
							<div>
								<input id="grade-9" type="radio" name="education_level" value="Grade 9" <?php if($educationLevel == 'Grade 9'){ ?>checked<?php } ?> />
								<label for="grade-9">Grade 9</label>
							</div>
							<div>
								<input id="grade-10" type="radio" name="education_level" value="Grade 10" <?php if($educationLevel == 'Grade 10'){ ?>checked<?php } ?> />
								<label for="grade-10">Grade 10</label>
							</div>
							<div>
								<input id="grade-11" type="radio" name="education_level" value="Grade 11" <?php if($educationLevel == 'Grade 11'){ ?>checked<?php } ?> />
								<label for="grade-11">Grade 11</label>
							</div>
							<div>
								<input id="grade-12" type="radio" name="education_level" value="Grade 12" <?php if($educationLevel == 'Grade 12'){ ?>checked<?php } ?> />
								<label for="grade-12">Grade 12</label>
							</div>
							<div>
								<input id="post-secondary" type="radio" name="education_level" value="Post secondary or equivalent" <?php if($educationLevel == 'Post secondary or equivalent'){ ?>checked<?php } ?> />
								<label for="post-secondary">Post secondary or equivalent</label>
							</div>
						</fieldset>
						<fieldset>
							<span style="margin-bottom:10px;">Gender</span>
							<div>
								<input id="female" type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ ?>checked<?php } ?> />
								<label for="female">Female</label>
							</div>
							<div>
								<input id="male" type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ ?>checked<?php } ?> />
								<label for="male">Male</label>
							</div>
							<div>
								<input id="non-binary" type="radio" name="gender" value="Non-Binary" <?php if($gender == 'Non-Binary'){ ?>checked<?php } ?> />
								<label for="non-binary">Non-Binary</label>
							</div>
							<div>
								<input id="other" type="radio" name="gender" value="Other" <?php if($gender == 'Other'){ ?>checked<?php } ?> />
								<label for="other">Other</label>
								<input type="text" name="other_gender" value="<?php echo $otherGender ?>" />
							</div>
						</fieldset>
						<fieldset>
							<span>Phone</span>
							<input type="text" name="phone" value="<?php echo get_user_meta($currentUser -> ID,'_user_phone',true); ?>" />
						</fieldset>
						<fieldset>
							<span>Email Address</span>
							<input type="text" name="email" value="<?php echo $emailAddress; ?>" readonly />
						</fieldset>
						<fieldset>
							<input name="action" type="hidden" value="update_profile" />
							<button>Update</button>
						</fieldset>
					</form>
					<?php if(in_array('student',$roles)){ 
						$ucrewMentor = get_user_meta($currentUser -> ID,'_ucrew_mentor',true);
						$ucrewUser = $ucrewMentor ? get_user_by('ID',$ucrewMentor) : null;
		
						if($ucrewMentor && $ucrewUser){
							$profileImage = get_user_meta($ucrewUser -> ID,'_profile_image',true);
							$bio = get_user_meta($ucrewUser -> ID,'description',true);
						?>
						<strong>UCrew Member</strong>
						<ul>
						<?php if($profileImage){ ?>
							<li><img src="<?php echo $profileImage ?>" alt="" /></li>
						<?php } ?>
							<li><b><?php echo $ucrewUser -> display_name; ?></b><p><?php echo $bio ?></p><br /><a href="https://search.google.com/local/writereview?placeid=ChIJ0SinC4QzK4gRAEtX_pqnhDU" class="review-btn index no-lightbox" target="_BLANK"><img src="/wp-content/uploads/leave-a-review.png" alt="Leave a review"></a></li>
						</ul>
						<?php }
					};   ?>
				</div>
			</div>
			<?php  

			$topics = get_terms('topics',['hide_empty'=>false]);

			?>
			<div id="filters" class="section open" <?php if(!isset($_GET['filters'])){ ?>style="display:none"<?php } ?>>
				<div class="section-title">
					<strong>My Filters</strong>
				</div>
				<div class="section-content">
					<div class="filter-options">
						<div class="topics">
							<strong>Choose a Topic</strong>
							<select name="topic[]">
								<option value="">Select</option>
								<?php foreach($topics as $topic){ ?>
								<option value="<?php echo $topic -> term_id; ?>"><?php echo $topic -> name; ?></option>
								<?php } ?>
							</select>
							<i class="fas fa-plus"></i>
						</div>
						<div class="levels">
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php if(in_array('student',$roles)){ ?>
			<!--div id="hours" class="section">
				<div class="section-title">
					<strong>My Hours</strong>
				</div>
				<div class="section-content">
					<div class="total">
						<p>Total Hours</p>
						<span><?php echo $totalHours; ?></span>
					</div>
					<div class="used">
						<p>Hours Used</p>
						<span><?php echo $totalHoursUsed; ?></span>
					</div>
					<div class="remaining">
						<p>Hours Remaining</p>
						<span><?php echo $totalHours - $totalHoursUsed; ?></span>
					</div>
					<div class="buy">
						<p>Buy Hours</p>
						<span></span>
					</div>
				</div>
			</div>
			<div id="summary" class="section">
				<div class="section-title">
					<strong>My Account Summary</strong>
				</div>
				<div class="section-content">
					<div class="labels">
						<ul>
							<li>Payment Date</li>
							<li>Payment Amount</li>
							<li>Hours Purchased</li>
							<li>Usage History</li>
							<li>(hours)</li>
						</ul>
					</div>
					<?php if($latestHour){ 
						$paymentData = json_decode($latestHour -> data,true);
						$paymentHours = $wpdb -> get_results('SELECT * FROM wp_hours_used WHERE student='.$currentUser->ID.' AND payment='.$latestHour -> id);
						$hoursUsed = 0;

					?>
					<div class="summary-items">
						<ul>
							<li><?php echo date('m/d/y',strtotime($latestHour -> created)); ?></li>
							<li>$<?php echo isset($paymentData['amount']) ? number_format(($paymentData['amount'] * 0.01 ),2) : $latestHour -> data; ?></li>
							<li><?php echo $latestHour -> hours ?></li>
							<li>
								<ul>
								<?php foreach($paymentHours as $key => $value){ 
									$hoursUsed += $value -> hours;
								?>
								<li><?php echo date('m/d/y',strtotime($value -> created)); ?> - <?php if($value -> type == 1){ echo 'Session'; }else{ echo 'Research'; }; ?></li>
								<?php } ?>
								<li>(Balance Remaining)</li>
								</ul>
							</li>
							<li>
								<ul>
								<?php 

								$remaining = $latestHour -> hours - $hoursUsed;

								foreach($paymentHours as $key => $value){ ?>
								<li class="green"><?php echo $value -> hours; ?></li>
								<?php } ?>
								<li class="<?php if($remaining > 0){ echo 'green'; }else{ echo 'red'; }; ?>"><?php echo $remaining ?></li>
								</ul>
							</li>
						</ul>
						<hr />
						<?php 
						
						if(count($latestPayment)){ 
							foreach($latestPayment as $key => $payment){ 
								$paymentData = json_decode($payment -> data,true);
								$paymentHours = $wpdb -> get_results('SELECT * FROM wp_hours_used WHERE student='.$currentUser->ID.' AND payment='.$payment -> id);
								$hoursUsed = 0;
							?>
						<ul>
							<li><?php echo date('m/d/y',strtotime($payment -> created)); ?></li>
							<li>$<?php echo isset($paymentData['amount']) ? number_format(($paymentData['amount'] * 0.01 ),2) : $payment -> data; ?></li>
							<li><?php echo $payment -> hours ?></li>
							<li>
								<ul>
								<?php foreach($paymentHours as $key => $value){ 
									$hoursUsed += $value -> hours;
								?>
								<li><?php echo date('m/d/y',strtotime($value -> created)); ?> - <?php if($value -> type == 1){ echo 'Session'; }else{ echo 'Research'; }; ?></li>
								<?php } ?>
								<li>(Balance Remaining)</li>
								</ul>
							</li>
							<li>
								<ul>
								<?php 

								$remaining = $payment -> hours - $hoursUsed;

								foreach($paymentHours as $key => $value){ ?>
								<li class="green"><?php echo $value -> hours; ?></li>
								<?php } ?>
								<li class="<?php if($remaining > 0){ echo 'green'; }else{ echo 'red'; }; ?>"><?php echo $remaining ?></li>
								</ul>
							</li>
						</ul>
						<?php }; }; ?>
					</div>
					<?php }else{ ?><p>No Payments found</p><?php } ?>
				</div>
			</div-->
			<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>

<?php 

$favouritesDB = $wpdb -> get_results('SELECT post FROM '.$wpdb->prefix.'favourites WHERE user='.$currentUser -> data -> ID,ARRAY_A);
$favourites = [];

if($favouritesDB){
	foreach($favouritesDB as $key => $favourite){
		if(isset($favourite['post'])){
			array_push($favourites,$favourite['post']);
		}
	}
}

$favourites = (array) $favourites;
$args = array('post_type'=>array('programs','opportunities','funding'),'post__in'=>$favourites);
$postsQuery = new WP_Query($args);
$posts = $postsQuery -> posts;

//results
$results = ['programs'=>['label'=>'Education Programs','posts'=>[]],'funding'=>['label'=>'Funding Options','posts'=>[]],'opportunities'=>['label'=>'Student Opportunities','posts'=>[]]];

foreach($posts as $key => $singlePost){
	$postType = $singlePost -> post_type;

	if(isset($results[$postType])){
		array_push($results[$postType]['posts'],$singlePost);
	}
}

?>

<script type="text/javascript">
var actionUrl = '<?php echo esc_url(admin_url('admin-post.php')) ?>';
var themeUrl = '<?php echo get_template_directory_uri(); ?>';
</script>

<div class="archive-listing">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 style="margin:0">My Favourites</h1>
			</div>
			<?php foreach($results as $key => $value){ ?>
			<div class="result <?php echo $key; ?>">
				<div class="heading">
					<span><?php echo $value['label']; ?></span>
					<b>Click <a href="<?php echo get_post_type_archive_link($key) ?>">Here</a> To Explore <?php echo $value['label']; ?></b>
				</div>
				<?php 

				$posts = $value['posts'];
				$columns = [[],[],[],[]];
				$count = 0;

				foreach($posts as $index => $singlePost){ 
					array_push($columns[$count],$singlePost);
					
					$count++;

					if($count > 3){
						$count = 0;
					}
				}

				foreach($columns as $index => $programs){ ?>
				<div class="column <?php if($index % 2 !== 0 && $index !== 0){ ?>padding<?php echo ' '.$index; } ?>">
					<?php foreach($programs as $program){ ?>
					<div class="bubble" data-id="<?php echo $program -> ID; ?>">
						<div>
							<strong><?php echo get_post_meta($program -> ID,'_listing_title',true) ?></strong>
							<a href="<?php echo get_permalink($program -> ID); ?>" target="_BLANK"></a>
							<i class="fa fa-times" onclick="deleteFavourite(<?php echo $program -> ID; ?>)"></i>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php 
				}

				?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="payment-modal">
	<div class="row">
		<div class="content">
			<i class="fa fa-times" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"></i>
			<strong>Buy Hours</strong>
			<p>Please enter the amount of hours that you wish to purchase.</p>
			<ul>
				<li>Price Scheme</li>
				<li>1 - 5 hours: <b>$90/hr</b></li>
				<li>6 - 10 hours: <b>$85/hr</b></li>
				<li>11+ hours: <b>$75/hr</b></li>
			</ul>
			<form action="<?php echo admin_url('admin-post.php'); ?>" method="POST" novalidate>
				<fieldset>
					<input name="hours" type="number" value="1" onchange="setPrice(this)" onkeyup="setPrice(this)" />
				</fieldset>
				<fieldset id="stripe-form">
				</fieldset>
				<fieldset>
					<p>Pay: <span>90.00</span><small> <?php if($country === 'USA'){ echo 'USD'; }else{ echo 'CAD'; }; ?></small></span></p>
					<button>Buy</button>
					<input name="first_name" type="hidden" value="<?php echo $firstName ?>" />
					<input name="last_name" type="hidden" value="<?php echo $lastName ?>" />
					<input name="email" type="hidden" value="<?php echo $emailAddress ?>" />
					<input name="payment_intent" type="hidden" value="" />
					<input name="client_secret" type="hidden" value="" />
					<input name="action" type="hidden" value="process_payment" />
					<input name="total" type="hidden" value="90.00" />
				</fieldset>
			</form>
		</div>
	</div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
	var stripe = Stripe('<?php echo BUILDING_U_STRIPE_KEY_PUBLIC; ?>');
	var elements = stripe.elements();
	var cardElement = elements.create('card');
	var styles = {base:{'::placeholder':{color:'#F00'}}};

	cardElement.mount('#stripe-form',{style:styles});
</script>
<script>
var topics = <?php print(json_encode($topics)); ?>;	
</script>

<?php 

	get_footer();

}else{
	wp_redirect('/login');
}

?>