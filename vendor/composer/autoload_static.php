<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3ce9fb3d7949aeba60e358cc00fb600
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

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/lojavirtual/php-classes/src',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3ce9fb3d7949aeba60e358cc00fb600::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3ce9fb3d7949aeba60e358cc00fb600::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitf3ce9fb3d7949aeba60e358cc00fb600::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf3ce9fb3d7949aeba60e358cc00fb600::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}