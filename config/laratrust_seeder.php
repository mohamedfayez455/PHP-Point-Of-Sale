 <?php

return [
    'role_structure'    => [
        'super_admin' => [
            'categories' => 'c,r,u,d',
            'products' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
            'orders' => 'c,r,u,d',
            'users' => 'c,r,u,d',
    ],
     'admin'            => [],
//        'users' => 'c,r,u,d',
//            'acl' => 'c,r,u,d',
//            'profile' => 'r,u'
//        ],
//        'administrator' => [
//            'users' => 'c,r,u,d',
//            'profile' => 'r,u'
//        ],
//        'user' => [
//            'profile' => 'r,u'
//        ],
//    ],
//    'permission_structure' => [
//        'cru_user' => [
//            'profile' => 'c,r,u'
//        ],
    ],
    'permissions_map'   => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
