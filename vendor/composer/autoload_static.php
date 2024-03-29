<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit742fafb098edef1bb278448cd462df1e
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

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit742fafb098edef1bb278448cd462df1e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit742fafb098edef1bb278448cd462df1e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit742fafb098edef1bb278448cd462df1e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
