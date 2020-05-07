<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enabled
    |--------------------------------------------------------------------------
    |
    | When this switch is set false the accountable package will stop logging.
    |
    */
    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Authentication Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the authentication driver used to determine which
    | user has either created, updated, or deleted a model. When left set
    | to null, Accountable will be using the default Laravel driver.
    |
    */
    'auth_driver' => null,

    /*
    |--------------------------------------------------------------------------
    | Column Names
    |--------------------------------------------------------------------------
    |
    | You can override the default column names, if you'd like. These columns
    | should be present on each model / table that implements Accountable.
    |
    */
    'column_names' => [
        'created_by' => 'created_by_user_id',
        'updated_by' => 'updated_by_user_id',
        'deleted_by' => 'deleted_by_user_id',
    ],

    /*
    |--------------------------------------------------------------------------
    | Anonymous User
    |--------------------------------------------------------------------------
    |
    | Unauthenticated users will leave empty (NULL) columns. In these cases,
    | you might want to fall back on a fictive, anonymous user. Use this
    | array to specify its details or leave it NULL to forgo a fallback.
    |
    */
    'anonymous' => null,

    /*
     * Example:
     *
    'anonymous' => [
        'name' => 'Anonymous'
    ],
    */
];
