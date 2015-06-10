<?php
namespace Loja;

use ZF\Apigility\Provider\ApigilityProviderInterface;
use Zend\Db\ResultSet\ResultSet;
use Loja\V1\Rest\Cliente\ClienteEntity;
use Zend\Db\TableGateway\TableGateway;
use Loja\V1\Rest\Cliente\ClienteMapper;

class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
    
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'LojaClienteTableGateway' => function ($sm){
                    $dbAdapter = $sm->get('DB\Cliente');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new ClienteEntity());
                    
                    return new TableGateway('cliente', $dbAdapter, null, $resultSetPrototype);
                }, 
                'Loja\V1\Rest\Cliente\ClienteMapper' => function ($sm){
                    $tableGateway = $sm->get('LojaClienteTableGateway');
                    return new ClienteMapper($tableGateway);
                }
            )
        );        
    }

    public function getAutoloaderConfig()
    {
        return array(
            'ZF\Apigility\Autoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }
}
