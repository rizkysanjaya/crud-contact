<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit04a0e4d2469ad7816beaf9c1a7df0dfc
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit04a0e4d2469ad7816beaf9c1a7df0dfc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit04a0e4d2469ad7816beaf9c1a7df0dfc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit04a0e4d2469ad7816beaf9c1a7df0dfc::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit04a0e4d2469ad7816beaf9c1a7df0dfc::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire04a0e4d2469ad7816beaf9c1a7df0dfc($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire04a0e4d2469ad7816beaf9c1a7df0dfc($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
