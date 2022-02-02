{\rtf1\ansi\ansicpg1252\cocoartf2580
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;\f1\fnil\fcharset0 AppleColorEmoji;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
$SERVER_API_KEY = 'AAAAdmvf124:APA91bGfp3-jjhwUmZxdrRLQfNSlNIpBC-NUMDeXcOI7tuBgZk1nHFuXXRIoJmnRSNgUPLgFihAEoBqT2KAHvc7OIesLJlKgCFbOZhEhLGQCthDExbFCc9MKw6SmCDrX7RXS82WhLOsU';\
\
    $token_1 = $_POST["token"];\
    $data = [\
\
        "registration_ids" => [\
            $token_1\
        ],\
\
        "notification" => [\
\
            "title" => '
\f1 \uc0\u10071 
\f0  Warning 
\f1 \uc0\u10071 
\f0 ',  \
\
            "body" => 'You\'92ve been exposed to someone with COVID-19',\
\
            "sound"=> "default" // required for sound on ios\
\
        ],\
\
    ];\
\
    $dataString = json_encode($data);\
\
    $headers = [\
\
        'Authorization: key=' . $SERVER_API_KEY,\
\
        'Content-Type: application/json',\
\
    ];\
\
    $ch = curl_init();\
\
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');\
\
    curl_setopt($ch, CURLOPT_POST, true);\
\
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);\
\
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);\
\
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);\
\
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);\
\
    $response = curl_exec($ch);\
\
    dd($response);\
?>}