<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6dbb303c9ab94f8874cd5a7a3c8406fd
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'ClientAPI\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ClientAPI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6dbb303c9ab94f8874cd5a7a3c8406fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6dbb303c9ab94f8874cd5a7a3c8406fd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
