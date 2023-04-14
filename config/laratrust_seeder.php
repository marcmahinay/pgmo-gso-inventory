<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'users' => 'c,r,u,d',
            'employees' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
            'suppliers' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
            'items' => 'c,r,u,d',
            'receive' => 'c,r,u,d',
            'release' => 'c,r,u,d',
            'return' => 'c,r,u,d',
            'damage' => 'c,r,u,d',
            'reconcile' => 'c,r,u,d',
        ],
        'administrator' => [
            'suppliers' => 'c,r,u',
            'clients' => 'c,r,u',
            'receive' => 'c,r,u',
            'release' => 'c,r,u',
            'return' => 'c,r,u',
            'damage' => 'c,r,u',
            'reconcile' => 'c,r,u',
            'basicuser' => 'c,r,u',
        ],
        'basicuser' => [
            'profile' => 'r,u',
            'request' => 'c,r,u,d',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
