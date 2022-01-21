<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86c99e965d595195868a9e4518d762d0
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../model',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../controllers',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86c99e965d595195868a9e4518d762d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86c99e965d595195868a9e4518d762d0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86c99e965d595195868a9e4518d762d0::$classMap;

        }, null, ClassLoader::class);
    }
}