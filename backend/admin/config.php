<?php

/* URL PROJECT */

define ('SITE_URL', 'https://academiaportuguesa.tech/backend/');

/* DATABASE CONFIGURATION */

$database = array(
'host' => 'localhost', // geralmente, o host é 'localhost'. No entanto, se você tiver uma string de host específica para o seu banco de dados, substitua 'localhost' por essa string.
'db' => 'u237711990_fitveggie',
'user' => 'u237711990_fitveggie',
'pass' => 'N3tf1n1ty' // substitua 'YOUR_DATABASE_PASSWORD' pela sua senha do banco de dados
);

$email_config = array(
'email_address' => 'EMAIL_ADDRESS_HERE',
'email_password' => 'PASSWORD_HERE',
'email_subject' => 'EMAIL_SUBJECT_HERE',
'email_name' => 'EMAIL_NAME_HERE',
'smtp_host' => 'EMAIL_HOST_HERE',
'smtp_port' => 'EMAIL_PORT_HERE',
'smtp_encrypt' => 'tls'
);

$items_config = array(
    'items_per_page' => '8',
    'images_folder' => 'images/'
);


?>