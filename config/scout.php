<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Search Engine
    |--------------------------------------------------------------------------
    |
    | This option controls the default search connection that gets used while
    | using Laravel Scout. This connection is used when syncing all models
    | to the search service. You should adjust this based on your needs.
    |
    | Supported: "algolia", "meilisearch", "typesense", "turbopuffer",
    |            "database", "collection", "null"
    |
    */

    'driver' => env('SCOUT_DRIVER', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Index Prefix
    |--------------------------------------------------------------------------
    |
    | Here you may specify a prefix that will be applied to all search index
    | names used by Scout. This prefix may be useful if you have multiple
    | "tenants" or applications sharing the same search infrastructure.
    |
    */

    'prefix' => env('SCOUT_PREFIX', ''),

    /*
    |--------------------------------------------------------------------------
    | Queue Data Syncing
    |--------------------------------------------------------------------------
    |
    | This option allows you to control if the operations that sync your data
    | with your search engines are queued. When this is set to "true" then
    | all automatic data syncing will get queued for better performance.
    |
    */

    'queue' => env('SCOUT_QUEUE', false),

    /*
    |--------------------------------------------------------------------------
    | Database Transactions
    |--------------------------------------------------------------------------
    |
    | This configuration option determines if your data will only be synced
    | with your search indexes after every open database transaction has
    | been committed, thus preventing any discarded data from syncing.
    |
    */

    'after_commit' => false,

    /*
    |--------------------------------------------------------------------------
    | Chunk Sizes
    |--------------------------------------------------------------------------
    |
    | These options allow you to control the maximum chunk size when you are
    | mass importing data into the search engine. This allows you to fine
    | tune each of these chunk sizes based on the power of the servers.
    |
    */

    'chunk' => [
        'searchable' => 500,
        'unsearchable' => 500,
    ],

    /*
    |--------------------------------------------------------------------------
    | Soft Deletes
    |--------------------------------------------------------------------------
    |
    | This option allows to control whether to keep soft deleted records in
    | the search indexes. Maintaining soft deleted records can be useful
    | if your application still needs to search for the records later.
    |
    */

    'soft_delete' => false,

    /*
    |--------------------------------------------------------------------------
    | Identify User
    |--------------------------------------------------------------------------
    |
    | This option allows you to control whether to notify the search engine
    | of the user performing the search. This is sometimes useful if the
    | engine supports any analytics based on this application's users.
    |
    | Supported engines: "algolia"
    |
    */

    'identify' => env('SCOUT_IDENTIFY', false),

    /*
    |--------------------------------------------------------------------------
    | TNTSearch Configuration
    |--------------------------------------------------------------------------
    */

    'tntsearch' => [
        'storage' => storage_path(),

        'fuzziness' => env('TNTSEARCH_FUZZINESS', false),

        'fuzzy' => [
            'prefix_length' => 2,
            'max_expansions' => 50,
            'distance' => 2,
        ],

        'asYouType' => false,

        'searchBoolean' => env(
            'TNTSEARCH_BOOLEAN',
            false
        ),

        'maxDocs' => env(
            'TNTSEARCH_MAX_DOCS',
            500
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Algolia Configuration
    |--------------------------------------------------------------------------
    */

    'algolia' => [
        'id' => env('ALGOLIA_APP_ID', ''),
        'secret' => env('ALGOLIA_SECRET', ''),
        'index-settings' => [
            // 'users' => [
            //     'searchableAttributes' => ['id', 'name', 'email'],
            //     'attributesForFaceting'=> ['filterOnly(email)'],
            // ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Meilisearch Configuration
    |--------------------------------------------------------------------------
    */

    'meilisearch' => [
        'host' => env(
            'MEILISEARCH_HOST',
            'http://localhost:7700'
        ),
        'key' => env('MEILISEARCH_KEY'),

        'index-settings' => [
            // 'users' => [
            //     'filterableAttributes' => ['id', 'name', 'email'],
            // ],
        ],

        'model-settings' => [
            // User::class => [
            //     'embedding' => [
            //         'embedder' => 'default',
            //         'dimensions' => 1536,
            //     ],
            // ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Typesense Configuration
    |--------------------------------------------------------------------------
    */

    'typesense' => [
        'client-settings' => [
            'api_key' => env(
                'TYPESENSE_API_KEY',
                'xyz'
            ),

            'nodes' => [
                [
                    'host' => env(
                        'TYPESENSE_HOST',
                        'localhost'
                    ),
                    'port' => env(
                        'TYPESENSE_PORT',
                        '8108'
                    ),
                    'path' => env(
                        'TYPESENSE_PATH',
                        ''
                    ),
                    'protocol' => env(
                        'TYPESENSE_PROTOCOL',
                        'http'
                    ),
                ],
            ],

            'nearest_node' => [
                'host' => env(
                    'TYPESENSE_HOST',
                    'localhost'
                ),
                'port' => env(
                    'TYPESENSE_PORT',
                    '8108'
                ),
                'path' => env(
                    'TYPESENSE_PATH',
                    ''
                ),
                'protocol' => env(
                    'TYPESENSE_PROTOCOL',
                    'http'
                ),
            ],

            'connection_timeout_seconds' => env(
                'TYPESENSE_CONNECTION_TIMEOUT_SECONDS',
                2
            ),

            'healthcheck_interval_seconds' => env(
                'TYPESENSE_HEALTHCHECK_INTERVAL_SECONDS',
                30
            ),

            'num_retries' => env(
                'TYPESENSE_NUM_RETRIES',
                3
            ),

            'retry_interval_seconds' => env(
                'TYPESENSE_RETRY_INTERVAL_SECONDS',
                1
            ),
        ],

        'model-settings' => [
            //
        ],

        'import_action' => env(
            'TYPESENSE_IMPORT_ACTION',
            'upsert'
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Turbopuffer Configuration
    |--------------------------------------------------------------------------
    */

    'turbopuffer' => [
        'api_key' => env('TURBOPUFFER_API_KEY'),

        'region' => env(
            'TURBOPUFFER_REGION',
            'gcp-us-central1'
        ),

        'base_url' => env(
            'TURBOPUFFER_BASE_URL'
        ),

        'timeout' => env(
            'TURBOPUFFER_TIMEOUT',
            60
        ),

        'connect_timeout' => env(
            'TURBOPUFFER_CONNECT_TIMEOUT',
            5
        ),

        'retries' => env(
            'TURBOPUFFER_RETRIES',
            3
        ),

        'model-settings' => [
            //
        ],
    ],

];