<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8af0db5a4c5f8a5864b3f97b3542363a
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

        spl_autoload_register(array('ComposerAutoloaderInit8af0db5a4c5f8a5864b3f97b3542363a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8af0db5a4c5f8a5864b3f97b3542363a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8af0db5a4c5f8a5864b3f97b3542363a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}