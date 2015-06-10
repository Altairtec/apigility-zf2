<?php
return array(
    'router' => array(
        'routes' => array(
            'loja.rest.cliente' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/cliente[/:cliente_id]',
                    'defaults' => array(
                        'controller' => 'Loja\\V1\\Rest\\Cliente\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'loja.rest.cliente',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Loja\\V1\\Rest\\Cliente\\ClienteResource' => 'Loja\\V1\\Rest\\Cliente\\ClienteResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'Loja\\V1\\Rest\\Cliente\\Controller' => array(
            'listener' => 'Loja\\V1\\Rest\\Cliente\\ClienteResource',
            'route_name' => 'loja.rest.cliente',
            'route_identifier_name' => 'cliente_id',
            'collection_name' => 'cliente',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Loja\\V1\\Rest\\Cliente\\ClienteEntity',
            'collection_class' => 'Loja\\V1\\Rest\\Cliente\\ClienteCollection',
            'service_name' => 'Cliente',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Loja\\V1\\Rest\\Cliente\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Loja\\V1\\Rest\\Cliente\\Controller' => array(
                0 => 'application/vnd.loja.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Loja\\V1\\Rest\\Cliente\\Controller' => array(
                0 => 'application/vnd.loja.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Loja\\V1\\Rest\\Cliente\\ClienteEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'loja.rest.cliente',
                'route_identifier_name' => 'cliente_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Loja\\V1\\Rest\\Cliente\\ClienteCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'loja.rest.cliente',
                'route_identifier_name' => 'cliente_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Loja\\V1\\Rest\\Cliente\\Controller' => array(
            'input_filter' => 'Loja\\V1\\Rest\\Cliente\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Loja\\V1\\Rest\\Cliente\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\NotEmpty',
                        'options' => array(),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'nome',
                'description' => 'Nome do cliente',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\EmailAddress',
                        'options' => array(),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'email',
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'Loja\\V1\\Rest\\Cliente\\Controller' => array(
                'collection' => array(
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => false,
                    'DELETE' => true,
                ),
            ),
        ),
    ),
);
