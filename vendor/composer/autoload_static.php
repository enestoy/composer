<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f5ced72b4979bae16bf2cbe806eac9a
{
    public static $files = array (
        '5e5f2891deb7ed66d42c9c8e5030e3a3' => __DIR__ . '/../..' . '/src/libraries/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kairos\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kairos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/libraries',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f5ced72b4979bae16bf2cbe806eac9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f5ced72b4979bae16bf2cbe806eac9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f5ced72b4979bae16bf2cbe806eac9a::$classMap;

        }, null, ClassLoader::class);
    }
}