<?php
return array(
    // Sponsors module routing configuration
    'router' => array(
        'routes' => array(   
                                
            // Sponsors pages to be cached using PhlySimplePage
            // PhlySimplePage settings are in global.php since the 
            // cache configuration information is not sensitive
            'sponsors' => array(                
                'type' => 'Literal',
                'options' => array(
                    'route' => '/sponsors',
                    'defaults' => array(
                        // sponsors.phtml will be handled by the PhlySimplePage module
                        'controller' => 'PhlySimplePage\Controller\Page',
                        'template'   => 'sponsors/sponsors/sponsors',
                    ),
                ),
            ),
            
            // To improve readability and maintainability, any additional routes for the 
            // sponsors module can be named and configured here
                        
        ),
    ),
    
    // Sponsors module controllers
    'controllers' => array(
        'invokables' => array(     
            // Sponsors\Controller\SponsorsController is mapped for convenience below 
            // however no actions are currently defined as we have simply specified that
            // a template will be used by PhlySimplePage 
            'Sponsors\Controller\Sponsors' => 'Sponsors\Controller\SponsorsController'
        ),
    ),     

    // Sponsors module view scripts
    'view_manager' => array(        
        'template_map' => array(    
            // We specified a unique template name to be used by PhlySimplePage ('sponsors/sponsors/sponsors')
            // See the routing configuration for 'sponsors' in the 'defaults' array at the 'template' index
            // The line below maps this template name this to a specific file....         
            'sponsors/sponsors/sponsors' => __DIR__ . '/../view/sponsors/sponsors/sponsors.phtml',            
        ),
    ),
    
);
