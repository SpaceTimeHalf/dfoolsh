<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Authentication
    |--------------------------------------------------------------------------
    |
    | For login to http://yourdomain/admin, be sure to change the password.
    |
     */
    'user'               => 'adminCTMm58f',
    'password'           => 'Zx64__CyN4_k',

    /*
    |--------------------------------------------------------------------------
    | Facebook Settings
    |--------------------------------------------------------------------------
    |
    | To make the application works, you have to create both the Facebook Page
    | and Facebook App by your own. You also need to obtain a Page access token
    | which should never expired.
    |
    | To create Facebook Page see:
    |   https://www.facebook.com/pages/create/
    |
    | To create Facebook App see:
    |   https://developers.facebook.com/
    |
    | To obtain a Page access token, follow the readme guide:
    |   https://github.com/kxgen/kangxi-anonymous-publisher/blob/master/readme.md
    |
     */
    'fb_app_setting'     => [
        'app_id'                => '252618148425379',
        'app_secret'            => 'e1de40630e2a01132f499dfa4dcdfa13',
        'default_graph_version' => 'v2.6',
    ],
    'fb_page_token'      => 'EAADlwT8ALqMBAEfUZAxZBFZA8Bm5xy3AA2GvYQV5F1YhjhZCkruSEMuBE13SkoJtWyEm8XaDaewCuV5PrtgDpFI69qOEb08sXFrtUNxQACYUWNU4RELks8prf9mnJDkYZAKUkHsm6ysi5ZChGmqn6r02maFcxFhgsjb9QN9fQQewZDZD',

    /*
    |--------------------------------------------------------------------------
    | Google reCAPTCHA
    |--------------------------------------------------------------------------
    |
    | To avoid abuse and spam, we use Google reCAPTCHA service to verify guest.
    | For more informations see:
    |   https://www.google.com/recaptcha/intro/index.html
    |
     */
    'recaptcha_key'      => '6Le4jBAUAAAAAMYEG3eUgQmkp1pZXouDUqiCFxVh',
    'recaptcha_secret'   => '6Le4jBAUAAAAANaljRFydzwdQz-ZUAOfpmYv4bUj',

];
