<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc84b5fc3caf81e1de241a5a34075e20f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automad\\Composer\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automad\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/automad/package-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc84b5fc3caf81e1de241a5a34075e20f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc84b5fc3caf81e1de241a5a34075e20f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc84b5fc3caf81e1de241a5a34075e20f::$classMap;

        }, null, ClassLoader::class);
    }
}
