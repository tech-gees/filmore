<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe2703596d381beadb16e244b8930981
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendor\\Movieapi\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendor\\Movieapi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sunra\\PhpSimple\\HtmlDomParser' => 
            array (
                0 => __DIR__ . '/..' . '/sunra/php-simple-html-dom-parser/Src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe2703596d381beadb16e244b8930981::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe2703596d381beadb16e244b8930981::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfe2703596d381beadb16e244b8930981::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfe2703596d381beadb16e244b8930981::$classMap;

        }, null, ClassLoader::class);
    }
}