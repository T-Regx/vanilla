<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf76b0a2b3818b7241a2774c0d3480a23
{
    public static $files = array (
        '8b3f8a3ae8e6735c5c18ca84e978b632' => __DIR__ . '/..',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TRegx\\' => 6,
            'T-Regx\\Fiddle\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TRegx\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'T-Regx\\Fiddle\\' => 
        array (
            0 => __DIR__ . '/../vanilla' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf76b0a2b3818b7241a2774c0d3480a23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf76b0a2b3818b7241a2774c0d3480a23::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf76b0a2b3818b7241a2774c0d3480a23::$classMap;

        }, null, ClassLoader::class);
    }
}