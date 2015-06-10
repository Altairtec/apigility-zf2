<?php
return array(
    'Loja\\V1\\Rest\\Cliente\\Controller' => array(
        'description' => 'Serviço responsável pela administração de clientes',
        'collection' => array(
            'description' => 'Coleção de dados de clientes',
            'GET' => array(
                'description' => 'Traz a listagem de clientes',
                'response' => '{
   "_links": {
       "self": {
           "href": "/cliente"
       },
       "first": {
           "href": "/cliente?page={page}"
       },
       "prev": {
           "href": "/cliente?page={page}"
       },
       "next": {
           "href": "/cliente?page={page}"
       },
       "last": {
           "href": "/cliente?page={page}"
       }
   }
   "_embedded": {
       "cliente": [
           {
               "_links": {
                   "self": {
                       "href": "/cliente[/:cliente_id]"
                   }
               }
              "nome": "Nome do cliente",
              "email": ""
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => 'Insere novo cliente',
                'request' => '{
   "nome": "Nome do cliente",
   "email": "email@email.com"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/cliente[/:cliente_id]"
       }
   }
   "nome": "Nome do cliente",
   "email": "email@email.com"
}',
            ),
        ),
        'entity' => array(
            'description' => 'Cliente do sistema',
            'GET' => array(
                'description' => 'Traz um cliente específico do sistema',
                'response' => '{
   "_links": {
       "self": {
           "href": "/cliente[/:cliente_id]"
       }
   }
   "nome": "Nome do cliente",
   "email": ""
}',
            ),
            'DELETE' => array(
                'description' => 'Remove um cliente do sistema',
            ),
        ),
    ),
);
