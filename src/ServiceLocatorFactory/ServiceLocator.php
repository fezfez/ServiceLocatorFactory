<?php

namespace ServiceLocatorFactory;

use ServiceLocatorFactory\NullServiceLocatorException;
use Zend\ServiceManager\ServiceManager;

class ServiceLocatorFactory
{
    /**
     * @var ServiceManager
     */
    private static $_serviceManager = null;

    /**
     * @throw ServiceLocatorFactory\NullServiceLocatorException
     * @return Zend\ServiceManager\ServiceManager
     */
    public static function getInstance()
    {
        if(null === self::$_serviceManager) {
            throw new NullServiceLocatorException('ServiceLocator is not set');
        }
        return self::$_serviceManager;
    }

    /**
     * @param ServiceManager
     */
    public static function setInstance(ServiceManager $sm)
    {
        self::$_serviceManager = $sm;
    }
}