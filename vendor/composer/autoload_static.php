<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78ca5e80054a5626a99c76ff9ba84670
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'MercadoPago\\' => 12,
        ),
        'D' => 
        array (
            'Doctrine\\Persistence\\' => 21,
            'Doctrine\\Common\\Lexer\\' => 22,
            'Doctrine\\Common\\Annotations\\' => 28,
            'Doctrine\\Common\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'MercadoPago\\' => 
        array (
            0 => __DIR__ . '/..' . '/mercadopago/dx-php/src/MercadoPago',
            1 => __DIR__ . '/..' . '/mercadopago/dx-php/tests',
            2 => __DIR__ . '/..' . '/mercadopago/dx-php/src/MercadoPago/Generic',
            3 => __DIR__ . '/..' . '/mercadopago/dx-php/src/MercadoPago/Entities',
            4 => __DIR__ . '/..' . '/mercadopago/dx-php/src/MercadoPago/Entities/Shared',
        ),
        'Doctrine\\Persistence\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/persistence/src/Persistence',
        ),
        'Doctrine\\Common\\Lexer\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
        'Doctrine\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/event-manager/lib/Doctrine/Common',
            1 => __DIR__ . '/..' . '/doctrine/common/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78ca5e80054a5626a99c76ff9ba84670::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78ca5e80054a5626a99c76ff9ba84670::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78ca5e80054a5626a99c76ff9ba84670::$classMap;

        }, null, ClassLoader::class);
    }
}
