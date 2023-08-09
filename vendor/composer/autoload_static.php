<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fc291fb15fcf847efd6850376885680
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fc291fb15fcf847efd6850376885680::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fc291fb15fcf847efd6850376885680::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2fc291fb15fcf847efd6850376885680::$classMap;

        }, null, ClassLoader::class);
    }
}