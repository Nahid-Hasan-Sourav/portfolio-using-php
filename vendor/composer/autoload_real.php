<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit98f26c1ad226228805f7d7b4cfc6d18b
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

        spl_autoload_register(array('ComposerAutoloaderInit98f26c1ad226228805f7d7b4cfc6d18b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit98f26c1ad226228805f7d7b4cfc6d18b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit98f26c1ad226228805f7d7b4cfc6d18b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
