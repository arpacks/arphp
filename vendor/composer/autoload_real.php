<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit878baade498b2c2c68aa5f45e98f0ddf
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

        spl_autoload_register(array('ComposerAutoloaderInit878baade498b2c2c68aa5f45e98f0ddf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit878baade498b2c2c68aa5f45e98f0ddf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit878baade498b2c2c68aa5f45e98f0ddf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
