<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65fbc3710d3c1eb7bb3e3b92088fdf9d
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tebazil\\dbseeder\\' => 17,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tebazil\\dbseeder\\' => 
        array (
            0 => __DIR__ . '/..' . '/tebazil/db-seeder/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65fbc3710d3c1eb7bb3e3b92088fdf9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65fbc3710d3c1eb7bb3e3b92088fdf9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65fbc3710d3c1eb7bb3e3b92088fdf9d::$classMap;

        }, null, ClassLoader::class);
    }
}
