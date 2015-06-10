<?php
return array(
    'db' => array(
        'adapters' => array(
            'DB\\Cliente' => array(),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(
                'Loja\\V1' => 'auth api',
            ),
        ),
    ),
);
