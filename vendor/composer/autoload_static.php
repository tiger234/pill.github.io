<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f4b6b2dbe0bef913bbda62a5ba7029a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f4b6b2dbe0bef913bbda62a5ba7029a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f4b6b2dbe0bef913bbda62a5ba7029a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f4b6b2dbe0bef913bbda62a5ba7029a::$classMap;

        }, null, ClassLoader::class);
    }
}
