<?php 

$validFields = ['first_name','last_name','email','city'];
$validData = true;

foreach($validFields as $key => $value) {
	if(!isset($postData[$value])){
		$validData = false;
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
         $optionalFields = ['experience','level','details'];

        foreach($optionalFields as $key => $field){
            if(isset($postData[$field]) && $postData[$field]){
                $insertData = is_array($postData[$field]) ? json_encode($postData[$field]) : $postData[$field];
                update_post_meta($insertPost,'_'.$field,$insertData);
            }
        }

        $fileFields = ['resume','cover_letter'];

        foreach($fileFields as $key => $field){
            if(isset($_FILES[$field]) && $_FILES[$field]){
                $file = isset($_FILES[$field]) ? $_FILES[$field] : null;

                if($file && $_FILES[$field]['error'] == 0){
                    $_FILES[$field]['name'] = $insertPost.'-'.strtotime('NOW').'-'.$field.'-'.strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-',$_FILES[$field]['name'])));
                    
                    $response['file'] = wp_handle_upload($_FILES[$field],array( 'test_form' => false ));
                    update_post_meta($insertPost,'_'.$field,$_FILES[$field]['name']);
                }
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

        $adminUrl = get_admin_url().'post.php?post='.$insertPost.'&action=edit';
        
        //wp_mail($postData['send_to'],'New Lead - '.$postData['email'],'<p>A new lead has been captured:<br /><br />'.$adminUrl.'</p>',array('Content-Type: text/html; charset=UTF-8'));

        $response['success'] = true;
    }
}else{
	$response['error'] = 'Missing required fields';
}

?>