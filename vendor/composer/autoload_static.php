<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd9469a3af4f51f3fd4d5874704441ba
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'C' => 
        array (
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/CMS/database',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/CMS/config',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd9469a3af4f51f3fd4d5874704441ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd9469a3af4f51f3fd4d5874704441ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd9469a3af4f51f3fd4d5874704441ba::$classMap;

        }, null, ClassLoader::class);
    }
}
