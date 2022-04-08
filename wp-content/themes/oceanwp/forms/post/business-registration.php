<?php 

$validFields = ['first_name','last_name','email','business_name','city_state','sponsorship_level','phone'];
$validData = true;
$response['data'] = $postData;

foreach($validFields as $key => $value) {
	if(!isset($postData[$value])){
		$validData = false;
        $response['missing'] = $value;
		break;
	}
}


if($validData){
	$insertPost = wp_insert_post(array(
        'post_title'=>$postData['first_name'].' '.$postData['last_name'],
        'post_type'=>'leads',
        'post_status'=>'publish'
    ));

    if($insertPost){
         $optionalFields = ['mailing_address','representative','questions','mailing_list','donate_item','donate','payment_intent','secret'];

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

        //mailchimp
        $curl = curl_init('https://us4.api.mailchimp.com/3.0/lists/cef1b1e26d/members/');
                                             
        curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type: application/json','Authorization: Basic cf490d2dabc97aa34c73283f5f994ca6-us4']);
        curl_setopt($curl,CURLOPT_USERAGENT,'PHP-MCAPI/3.0');
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_TIMEOUT,10);
        curl_setopt($curl,CURLOPT_POST,true);
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode(['email_address'=>$postData['email'],'status'=>'subscribed','merge_fields'=>['FNAME'=>$postData['first_name'],'LNAME'=>$postData['last_name']]]));
                             
        try{
            $response['mc'] = json_decode(curl_exec($curl));
        }catch(Exception $exception){
            $response['mc'] = curl_exec($curl);
        }

         curl_close($curl);

        if(is_object($response['mc']) && isset($response['mc'] -> status) && $response['mc'] -> status == 'subscribed'){

            $curl = curl_init('https://us4.api.mailchimp.com/3.0/lists/cef1b1e26d/members/'.md5($postData['email']).'/tags');
                         
            curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type: application/json','Authorization: Basic cf490d2dabc97aa34c73283f5f994ca6-us4']);
            curl_setopt($curl,CURLOPT_USERAGENT,'PHP-MCAPI/3.0');
            curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($curl,CURLOPT_TIMEOUT,10);
            curl_setopt($curl,CURLOPT_POST,true);
            curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
            curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode(['tags'=>[['name'=>'S4YT Businesses','status'=>'active']]]));
                                 
            try{    
                $response['tags'] = json_decode(curl_exec($curl));
            }catch(Exception $exception){
                $response['tags'] = curl_exec($curl);
            }

            curl_close($curl);
        }else{
            $response['error'] = $response['mc'] -> detail;
        }

        $adminUrl = get_admin_url().'post.php?post='.$insertPost.'&action=edit';
        
        wp_mail($postData['send_to'],'New Business Registration - '.$postData['email'],'<p>A new lead has been captured:<br /><br />'.$adminUrl.'</p>',array('Content-Type: text/html; charset=UTF-8'));

        $response['success'] = true;
    }
}else{
	$response['error'] = 'Missing required fields';
}

?>