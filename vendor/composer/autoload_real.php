<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb94619baa41db753fb3a5e571ea3596a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb94619baa41db753fb3a5e571ea3596a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb94619baa41db753fb3a5e571ea3596a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb94619baa41db753fb3a5e571ea3596a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
