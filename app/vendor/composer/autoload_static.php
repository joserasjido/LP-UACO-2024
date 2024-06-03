<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8af0db5a4c5f8a5864b3f97b3542363a
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\libs\\' => 9,
            'app\\core\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\libs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/libs',
        ),
        'app\\core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8af0db5a4c5f8a5864b3f97b3542363a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8af0db5a4c5f8a5864b3f97b3542363a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8af0db5a4c5f8a5864b3f97b3542363a::$classMap;

        }, null, ClassLoader::class);
    }
}