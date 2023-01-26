<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c036c1fb1a9e9cf182b3f3b4d3cd2ce
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CakeWP\\CF7Blocks\\Notices\\' => 25,
            'CakeWP\\CF7Blocks\\Handlers\\' => 26,
            'CakeWP\\CF7Blocks\\Core\\' => 22,
            'CakeWP\\CF7Blocks\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CakeWP\\CF7Blocks\\Notices\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/notices',
        ),
        'CakeWP\\CF7Blocks\\Handlers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/handlers',
        ),
        'CakeWP\\CF7Blocks\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/core',
        ),
        'CakeWP\\CF7Blocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c036c1fb1a9e9cf182b3f3b4d3cd2ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c036c1fb1a9e9cf182b3f3b4d3cd2ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c036c1fb1a9e9cf182b3f3b4d3cd2ce::$classMap;

        }, null, ClassLoader::class);
    }
}