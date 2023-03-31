<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b573b4bec7acf2d75b92e2380e3a1ad
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'ombilahy\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ombilahy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b573b4bec7acf2d75b92e2380e3a1ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b573b4bec7acf2d75b92e2380e3a1ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b573b4bec7acf2d75b92e2380e3a1ad::$classMap;

        }, null, ClassLoader::class);
    }
}