<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1646429f1bc259684a86f23414570d7
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1646429f1bc259684a86f23414570d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1646429f1bc259684a86f23414570d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
