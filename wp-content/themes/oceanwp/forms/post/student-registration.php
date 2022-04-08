<?php 

$validFields = ['first_name','last_name','grade','email','city_state'];
$validData = true;

foreach($validFields as $key => $value) {
	if(!isset($postData[$value])){
		$validData = false;
		break;
	}
}

$response['data'] = $postData;

if($validData){
	$insertPost = wp_insert_post(array(
        'post_title'=>$postData['first_name'].' '.$postData['last_name'],
        'post_type'=>'leads',
        'post_status'=>'publish'
    ));

    if($insertPost){
        $response['data']['wp_user'] = $insertPost;
         $optionalFields = ['instagram','permission','questions','mailing','referred_by','school_email'];

        foreach($optionalFields as $key => $field){
            if(isset($postData[$field]) && $postData[$field]){
                $insertData = is_array($postData[$field]) ? json_encode($postData[$field]) : $postData[$field];
                update_post_meta($insertPost,'_'.$field,$insertData);
            }
        }

        foreach($validFields as $key => $field){
            if(isset($postData[$field]) && $postData[$field]){
                $insertData = is_array($postData[$field]) ? json_encode($postData[$field]) : $postData[$field];
                update_post_meta($insertPost,'_'.$field,$insertData);
            }
        }

        $term = get_term_by('slug',$postData['type'],'lead-type');

        if(!$term){
        	$name = preg_replace("/[\-_]/", " ", $postData['type']);

        	wp_insert_term(ucwords($name),'lead-type',array('slug' => $postData['type']));
       	}

        wp_set_object_terms($insertPost,array($postData['type']),'lead-type', false );

        //s4yt
        $curl = curl_init('https://s4yt.building-u.com/api/students');
                                             
        curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type: application/json','Authorization: Bearer tZOHN9OZJsPFuqYwIMUWvITae6Dzo6m2BwZdlJjxuegRV8ga6wHl99wY0jILJRccdYoW8XjFaG13lqZo']);
        curl_setopt($curl,CURLOPT_USERAGENT,'PHP-MCAPI/3.0');
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_TIMEOUT,10);
        curl_setopt($curl,CURLOPT_POST,true);
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($response['data']));
                             
        try{
            $response['s4yt'] = json_decode(curl_exec($curl));
        }catch(Exception $exception){
            $response['s4yt'] = curl_exec($curl);
        }

        update_post_meta($insertPost,'_s4yt',json_encode($response['s4yt']));

        curl_close($curl);

        //mailchimp
        $curl = curl_init('https://us4.api.mailchimp.com/3.0/lists/cef1b1e26d/members/');
                                             
        curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type: application/json','Authorization: Basic cf490d2dabc97aa34c73283f5f994ca6-us4']);
        curl_setopt($curl,CURLOPT_USERAGENT,'PHP-MCAPI/3.0');
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_TIMEOUT,10);
        curl_setopt($curl,CURLOPT_POST,true);
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode(['email_address'=>$postData['contact_email'],'status'=>'subscribed','merge_fields'=>['FNAME'=>$postData['first_name'],'LNAME'=>$postData['last_name']]]));
                             
        try{
            $response['mc'] = json_decode(curl_exec($curl));
        }catch(Exception $exception){
            $response['mc'] = curl_exec($curl);
        }

         curl_close($curl);

        if(is_object($response['mc']) && isset($response['mc'] -> status) && $response['mc'] -> status == 'subscribed'){

            $curl = curl_init('https://us4.api.mailchimp.com/3.0/lists/cef1b1e26d/members/'.md5($postData['contact_email']).'/tags');
                         
            curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type: application/json','Authorization: Basic cf490d2dabc97aa34c73283f5f994ca6-us4']);
            curl_setopt($curl,CURLOPT_USERAGENT,'PHP-MCAPI/3.0');
            curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($curl,CURLOPT_TIMEOUT,10);
            curl_setopt($curl,CURLOPT_POST,true);
            curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
            curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode(['tags'=>[['name'=>'$4YT 2021','status'=>'active']]]));
                                 
            try{    
                $response['tags'] = json_decode(curl_exec($curl));
            }catch(Exception $exception){
                $response['tags'] = curl_exec($curl);
            }

            curl_close($curl);

            $response['success'] = true;
        }else{
            $response['error'] = $response['mc'] -> detail;
        }

        $adminUrl = get_admin_url().'post.php?post='.$insertPost.'&action=edit';
        
        wp_mail($postData['send_to'],'New Student Registration - '.$postData['email'],'<p>A new lead has been captured:<br /><br />'.$adminUrl.'</p>',array('Content-Type: text/html; charset=UTF-8'));

        $response['success'] = true;
    }
}else{
	$response['error'] = 'Missing required fields';
}

?>