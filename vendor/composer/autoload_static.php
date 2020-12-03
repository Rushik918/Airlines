<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6464451c23453158225d70a2556c1165
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6464451c23453158225d70a2556c1165::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6464451c23453158225d70a2556c1165::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6464451c23453158225d70a2556c1165::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6464451c23453158225d70a2556c1165::$classMap;

        }, null, ClassLoader::class);
    }
}