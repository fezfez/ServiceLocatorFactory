# ServiceLocatorFactory

Allow you to get ServiceManager from everywhere in your application by calling this static factory.

    <?php

    namespace Corp\News;

    use Corp\News\NewsDAO;
    use Zend\ServiceManager\ServiceManager;
    use Corp\ServiceLocator\ServiceLocator;

    class NewsDAOFactory
    {
        private function __construct()
        {
            
        }
    
        /**
         * @return \Corp\News\NewsDAO
         */
        public static function getInstance()
        {
            $sm = ServiceLocatorFactory::getInstance();
            $em = $sm->get('doctrine.entitymanager.orm_default');
    
            return new NewsDAO($em);
        }
    }