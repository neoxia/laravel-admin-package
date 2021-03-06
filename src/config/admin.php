<?php

return [
    'sitename'             => [
        'short'  => 'BA',
        'html'   => '<b>Backoffice</b> Admin',
        'string' => 'Backoffice Admin',
    ],

    // {subdomain}.website.com : can be blank if no subdomain.
    'subdomain'            => '',

    // mywebsite.com/{path} : Caution, modify the restfull resources' route names and the VerifyCsrfToken Exception.
    'path'                 => 'admin',

    // Fully qualified namespace of the User model
    'user_model_fqn'       => '\App\Models\User',
    'user_password_reset_route' => 'auth.passwordResetForm',

    // Should we use the default package auth routes and controllers?
    'use_default_auth'     => true,

    // Is registration opened (for default auth routes and views)?
    'is_registration_open' => env('APP_ENV') === 'local',

    /*
    |--------------------------------------------------------------------------
    | Admin LTE Settings
    |--------------------------------------------------------------------------
    |
    | Famous open-source template.
    | see https://almsaeedstudio.com/themes/AdminLTE/index2.html for documentation.
    |
    */

    // skin-black, skin-blue, skin-purple, skin-red, skin-yellow, skin-green, skin-blue-light, skin-black-light, skin-purple-light, skin-green-light, skin-red-light, skin-yellow-light
    'skin'                 => 'skin-black',

    // fixed, layout-boxed, layout-top-nav, sidebar-collapse, sidebar-mini (Can be combined.)
    'layout'               => 'fixed',

];
