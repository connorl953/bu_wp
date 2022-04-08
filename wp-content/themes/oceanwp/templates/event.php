<?php
/* Template Name: Event */

get_header(); 
$uploadsDir = wp_upload_dir()['baseurl'];
?>

<div class="container event-template fade-in">
    <div class="bird fly-in-left">
        <img src="<?php echo $uploadsDir . '/bird_itselfwith-handle.png';?>"/>
        <h1 class="text-container"><span class="blue">$</span>(FUN-ding) <span class="blue">4 Y</span>our <span class="blue">T</span>houghts</h1>
    </div>

    <div class="aardvark fade-in">
        <img src="<?php echo $uploadsDir . '/Aardvark.png';?>"/>
        <h1 class="text-container"><span class="blue">$4YT</span>2021</h1>
    </div>

    <div class="coins">
        <img src="<?php echo $uploadsDir . '/Coins.png';?>"/>
    </div>    

    <div class="peacock">
        <h1 class="text-container">12:00 PM Sat, Nov 20<br>TO<br>11:59 PM Sun, Nov 21</h1>
        <br>
        <img src="<?php echo $uploadsDir . '/Peacock.png';?>"/>
        
    </div>
    
    <div class="beaver my-5">
        <div class="text-container beaver-list-container">
            <h1>What is $4YT about?</h1>
            <p>It's for ALL High School Students from EVERYWHERE</p>
            <ul class="blue-list">
                <li>To give ideas to win <span class="dollar-sign">$$$</span></li>
                <li>Use free tickets to win prizes</li>
                <li>Learn about businesses</li>
                <li>Sign up for a post event meet-ups</li>
            </ul>
        </div>
        <br>
        <img src="<?php echo $uploadsDir . '/Beaver.png';?>"/>
    </div>

    <div class="students-register-here">
        <img src="<?php echo $uploadsDir . '/arm1.png';?>" alt="" class="arm1">
        <a href="<?php echo site_url('/student-registration'); ?>" class="student-registration btn">
            <p>Sign</p>
            <p>Up</p>
            <p>Now!</p>
        </a>
        <img src="<?php echo $uploadsDir . '/arm-2-2.png';?>" alt="" class="arm2">
    </div>

    <div class="information">
        <div class="more-about-attending">
            <h1 class="heading">Tell me more about attending</h1>
            <i class="fas fa-sort-down" onclick="showInfo(this, 'more-about-attending')" data-id="more-about-attending"></i>
            <img src="<?php echo $uploadsDir . '/Tell-me-more-about-attendingarm1.png';?>"/>
            <div class="page-dropdown text-container" id="more-about-attending" style="display: none;">
                <!-- <h1 id="more-about-attending" class="page-dropdown" style="display:none;"></h1> -->
                <ul class="blue-list">
                    <li>Students in grades 9-12 at the time of the contest</li>
                    <li>Students Register and Participate for FREE</li>
                    <li>Students Receive an anonymous ID# to participate</li>
                    <li>Students Registering ALL Receive 10 free raffle tickets</li>
                </ul>
            </div>
        </div>

        <div class="more-about-playing">
            <h1 class="heading">Tell me more about playing</h1>
            <i class="fas fa-sort-down" onclick="showInfo(this, 'more-about-playing')" data-id="more-about-playing"></i>
            <img src="<?php echo $uploadsDir . '/Tell-me-more-about-playingarm2.png';?>"/>
            <div class="text-container page-dropdown" id="more-about-playing" style="display:none;">
                <!-- <h1 id="more-about-playing" class="page-dropdown" style="display:none;"></h1> -->
                <ul class="blue-list">
                    <li>Students remain anonymous during the event</li>
                    <li>Students select raffle items can assign their tickets</li>
                    <li>Students visit business islands and answer questions to win $</li>
                    <li>Students may submit 1 entry per business</li>
                </ul>
            </div>
        </div>
        <div class="more-about-funds">
            <h1 class="heading">Tell me more about how funds can be used</h1>
            <i class="fas fa-sort-down" onclick="showInfo(this, 'more-about-funds')" data-id="more-about-funds"></i>
            <img src="<?php echo $uploadsDir . '/Tell-me-more-about-how-funds-can-be-usedarm3.png';?> " onclick="showInfo(this)"/>
            <br>
            <div class="text-container page-dropdown" id="more-about-funds" style="display:none;">
                <!-- <h1 id="more-about-playing" class="page-dropdown" style="display:none;"></h1> -->
                <ul class="blue-list">
                    <li>Students can use $$ for building their future</li>
                    <li>Students have 4 years to use prize $$</li>
                    <li>Students connect with building-U to use!</li>
                </ul>
            </div>
        </div>

        <!-- Changes made -->
        <div class="our-event-partners">
            <h1 class="heading">Our event partners</h1>
            <i class="fas fa-sort-down" onclick="showInfo(this, 'our-event-partners')" data-id="our-event-partners"></i>
            <img src="<?php echo $uploadsDir . '/Our-event-partnersarm4.png';?> " />
            <br>
            <div class="text-container page-dropdown" id="our-event-partners" style="display:none;">
                <p class = "title">Our Event Partners</p>
                <div class = "desktop">
                    <?php
                        $count = 0;
                        $columns = [[],[],[],[],[]];
                        $imagesDir = get_template_directory() . '/assets/img/events';
                        $files = glob($imagesDir . '/*.{png,jpg,jpeg}', GLOB_BRACE);
                        $file_amount = 0;
                        foreach ($files as $image){
                            $file_amount++;
                            $imageURL = get_template_directory_uri().'/assets/img/events/'.basename($image);
                            array_push($columns[$count], $imageURL);

                            $count++;
                            if($count > 4){
                                $count = 0;
                            }
                        }
                        $count = 0;
                        if ($file_amount > 4) {
                            $file_amount = 5;
                        }
                    ?>


                    <?php 
                        $delays = [0,0.3,0.6,0.9,1.2];
                        $delay_table = [];
                        for($i = 0; $i < count($columns[0]); ++$i) {
                            $delay_table[$i] = []; 
                            for($j = 0; $j < $file_amount; ++$j) {
                                $random_val = rand(0, $file_amount-1);

                                while(in_array($delays[$random_val], $delay_table[$i])) {
                                    $random_val = rand(0, $file_amount-1);
                                }

                                $delay_table[$i][$j] = $delays[$random_val];
                            }
                        }
                        $col_num = 0;
                        foreach($columns as $col) { 
                            $row_num = 0;
                    ?>
                        <div class = "column <?php echo $count ?> " style = "<?php if ($count % 2 == 1)echo "padding-top:40px;";?>">
                            
                            <?php foreach($col as $logo) { ?>
                                <img src = "<?php echo $logo ?>" style = "animation-delay: <?php echo $delay_table[$row_num][$col_num]?>s"/>
                            <?php $row_num++;} ?>
                        </div>
                    <?php $count++;$col_num++;} ?>
                    <br>
                    <a href="<?php echo site_url('/partners'); ?>">
                        <p>Check Out Our Sensational 'Fundational' Partners<i class="fas fa-arrow-right"></i></p>
                    </a>
                </div>
                <div class = "mobile">
                    <?php
                        $count = 0;
                        $columns = [[],[],[]];
                        $imagesDir = get_template_directory() . '/assets/img/events';
                        $files = glob($imagesDir . '/*.{png,jpg,jpeg}', GLOB_BRACE);
                        foreach ($files as $image){
                            $imageURL = get_template_directory_uri().'/assets/img/events/'.basename($image);
                            array_push($columns[$count], $imageURL);

                            $count++;
                            if($count > 2){
                                $count = 0;
                            }
                        }
                        $count = 0;
                    ?>

                    <?php foreach($columns as $col) { ?>
                        <div class = "column <?php echo $count ?> " style = "<?php if ($count % 2 == 1)echo "padding-top:20px;";?>">
                            <?php foreach($col as $logo) { ?>
                                <img src = "<?php echo $logo ?>" class = "logo"/>
                            <?php } ?>
                        </div>
                    <?php $count++;} ?>
                    <br>
                    <a href="<?php echo site_url('/partners'); ?>">
                        <p>Our Sensational 'Fundational' Partners<i class="fas fa-arrow-right"></i></p>
                    </a>
                </div>
            </div>
        </div>
        <!-- Changes made -->
        
        <div class="call-to-action">
            <a href="<?php echo site_url('/student-registration'); ?>" class="student-registration btn">
                <p>Sign</p>
                <p>Up</p>
                <p>Now!</p>
            </a>
            <a href="<?php echo site_url('/business-registration'); ?>" class="sponsor-btn btn">
                <p>Help Sponsor</p>
                <p>$4YT</p>
            </a>
        </div>
    </div>

</div>

<script>
function showInfo(node, id){
    var text = document.getElementById(id);
    text.style.display = text.style.display == 'inline-block' ? 'none' : 'inline-block';
    node.className = text.style.display == 'inline-block' ? 'fas fa-sort-up' : 'fas fa-sort-down';
}
</script>

<!-- Adding on page load animations and other configurations -->
<script>
    // adding animations
    const aardvarkContainer = document.body.querySelector(".aardvark");
    const outerContainer = document.body.querySelector(".event-template");
    const birdContainer = document.body.querySelector(".bird");
    
    window.onload = function() {
        outerContainer.style.opacity = "1";
        outerContainer.style.transform = "translateY(0)";
        aardvarkContainer.style.opacity = "1";
        aardvarkContainer.style.transform = "translateY(0)";
        birdContainer.style.transform = "translateX(0)";
        birdContainer.style.opacity = "1";
    }

    // configuring scroll on dropdown
    const triangles = document.body.querySelectorAll(".fa-sort-down");

    triangles.forEach(triangle => triangle.addEventListener("click", () => {
        const dropdownElement = document.body.querySelector(`#${triangle.dataset.id}`);
        const offsetTop = dropdownElement.offsetTop;
        if(offsetTop != 0) window.scrollTo(0, offsetTop - 100);
    }))
</script>

<?php get_footer(); ?>