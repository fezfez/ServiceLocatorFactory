<?php
namespace ServiceLocatorFactory;

use Zend\Loader\AutoloaderFactory;
use Zend\Mvc\MvcEvent;

class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface,
    ServiceProviderInterface,
    InitProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function onBootstrap(MvcEvent $e)
    {
        ServiceLocator::setInstance($e->getApplication()->getServiceManager());
    }

    /**
     * {@inheritDoc}
     */
    public function getAutoloaderConfig()
    {
        return array(
            AutoloaderFactory::STANDARD_AUTOLOADER => array(
                StandardAutoloader::LOAD_NS => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }
}
