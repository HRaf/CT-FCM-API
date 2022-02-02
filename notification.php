<?php
$SERVER_API_KEY = 'AAAAdmvf124:APA91bGfp3-jjhwUmZxdrRLQfNSlNIpBC-NUMDeXcOI7tuBgZk1nHFuXXRIoJmnRSNgUPLgFihAEoBqT2KAHvc7OIesLJlKgCFbOZhEhLGQCthDExbFCc9MKw6SmCDrX7RXS82WhLOsU';

    $token_1 = $_POST["token"];
    $data = [

        "registration_ids" => [
            $token_1
        ],

        "notification" => [

            "title" => '❗ Warning ❗',  

            "body" => 'You’ve been exposed to someone with COVID-19',

            "sound"=> "default" // required for sound on ios

        ],

    ];

    $dataString = json_encode($data);

    $headers = [

        'Authorization: key=' . $SERVER_API_KEY,

        'Content-Type: application/json',

    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

    $response = curl_exec($ch);

    dd($response);
?>
