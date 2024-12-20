<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit550eedd161b142905bc8e14d38fb0455
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Noeignacio\\RepoNoe\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Noeignacio\\RepoNoe\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit550eedd161b142905bc8e14d38fb0455::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit550eedd161b142905bc8e14d38fb0455::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit550eedd161b142905bc8e14d38fb0455::$classMap;

        }, null, ClassLoader::class);
    }
}
