<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Auth strategy
    |--------------------------------------------------------------------------
    |
    | This value is can be 'basic' or 'oauth'. This value is used for
    | connecting with the Zendesk Api by the provided authentication strategy.
    | If you use basic as strategy, the username is required.
    |
    | Default value: basic
    |
    */
    'auth_strategy' => env('ZENDESK_AUTH_STRATEGY', 'basic'),

    /*
    |--------------------------------------------------------------------------
    | Subdomain
    |--------------------------------------------------------------------------
    |
    | This value is your Zendesk organisation URL. This value is used for
    | connecting with the Zendesk Api. For example:
    | https://homedesignshops.zendesk.com use homedesignshops
    |
    */
    'subdomain' => env('ZENDESK_SUBDOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Username
    |--------------------------------------------------------------------------
    |
    | This value is your Zendesk authentication account and only required for
    | if the 'auth_strategy' is basic. This value is used for authenticating
    | with the Zendesk Api. You can find them in your Zendesk control panel:
    | https://{subdomain}.zendesk.com/agent/admin/people
    |
    */
    'username' => env('ZENDESK_USERNAME'),

    /*
    |--------------------------------------------------------------------------
    | Token
    |--------------------------------------------------------------------------
    |
    | This value is can be your API token or OAuth Access Token. This value
    | is used for authenticating with the Zendesk Api. You can find them in
    | your Zendesk control panel:
    | https://{subdomain}.zendesk.com/agent/admin/api/settings
    |
    */
    'token' => env('ZENDESK_TOKEN'),

];