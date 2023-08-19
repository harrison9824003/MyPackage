<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85e0a4a21286453ff6d3c83aa8c8c6e6
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Virtualorz\\Hello\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Virtualorz\\Hello\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/virtualorz/hello/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85e0a4a21286453ff6d3c83aa8c8c6e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85e0a4a21286453ff6d3c83aa8c8c6e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85e0a4a21286453ff6d3c83aa8c8c6e6::$classMap;

        }, null, ClassLoader::class);
    }
}
