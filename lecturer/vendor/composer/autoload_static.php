<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit451266127f76a4b861d98abfe2c816db
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Elearn\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Elearn\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit451266127f76a4b861d98abfe2c816db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit451266127f76a4b861d98abfe2c816db::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
