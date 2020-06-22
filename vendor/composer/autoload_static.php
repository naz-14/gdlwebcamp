<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3769664ea047f727bca6c84a468f6dd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3769664ea047f727bca6c84a468f6dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3769664ea047f727bca6c84a468f6dd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita3769664ea047f727bca6c84a468f6dd::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
