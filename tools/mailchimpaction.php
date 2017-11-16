<?php
if(isset($_POST)){

    $apikey = 'f56dd2a57b96927d3291ef264a32205f-us17';
    $auth = base64_encode( 'user:'.$apikey );

    $data = array(
        'apikey'        => $apikey,
        'email_address' => $_POST['email_address'],
        'status'        => 'subscribed'
    );
    $json_data = json_encode($data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://us17.api.mailchimp.com/3.0/lists/5caef3abcb/members/');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                'Authorization: Basic '.$auth));
    curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);                                                                                                                  

    $result = curl_exec($ch);
    print_r(json_encode($result));
}

// curl --request GET \
// --url 'https://us17.api.mailchimp.com/3.0/' \
// --user 'anystring:f56dd2a57b96927d3291ef264a32205f-us17'