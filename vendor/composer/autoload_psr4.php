<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Twig\\' => array($vendorDir . '/twig/twig/src'),
    'Symfony\\Polyfill\\Mbstring\\' => array($vendorDir . '/symfony/polyfill-mbstring'),
    'Symfony\\Polyfill\\Ctype\\' => array($vendorDir . '/symfony/polyfill-ctype'),
    'Product\\view\\dash\\' => array($baseDir . '/view'),
    'Product\\start\\' => array($baseDir . '/daisy'),
    'Product\\mod\\userdata\\' => array($baseDir . '/model'),
    'Product\\mod\\docdata\\' => array($baseDir . '/model'),
    'Product\\mod\\data\\' => array($baseDir . '/model'),
    'Product\\control\\useractc\\' => array($baseDir . '/controller'),
    'Product\\control\\useract\\' => array($baseDir . '/controller'),
    'Product\\control\\docactc\\' => array($baseDir . '/controller'),
    'Product\\control\\docact\\' => array($baseDir . '/controller'),
    'Product\\control\\actc\\' => array($baseDir . '/controller'),
    'Product\\control\\act\\' => array($baseDir . '/controller'),
);
