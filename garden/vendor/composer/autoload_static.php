<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd08c29a3f50a6d748e4e59a2febe7b43
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vegetable\\' => 10,
        ),
        'P' => 
        array (
            'Pepper\\' => 7,
        ),
        'M' => 
        array (
            'Main\\' => 5,
        ),
        'G' => 
        array (
            'Greenhouse\\' => 11,
        ),
        'C' => 
        array (
            'Cucumber\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vegetable\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Pepper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Main\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Greenhouse\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Cucumber\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Cucumber\\Agurkas' => __DIR__ . '/../..' . '/src/Agurkas.php',
        'Greenhouse\\Siltnamis' => __DIR__ . '/../..' . '/src/Siltnamis.php',
        'Main\\App' => __DIR__ . '/../..' . '/src/App.php',
        'Pepper\\Paprika' => __DIR__ . '/../..' . '/src/Paprika.php',
        'Vegetable\\Darzove' => __DIR__ . '/../..' . '/src/Darzove.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd08c29a3f50a6d748e4e59a2febe7b43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd08c29a3f50a6d748e4e59a2febe7b43::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd08c29a3f50a6d748e4e59a2febe7b43::$classMap;

        }, null, ClassLoader::class);
    }
}
