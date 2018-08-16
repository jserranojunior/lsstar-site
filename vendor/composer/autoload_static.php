<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51b978eb1f044ea238aaa3c1a0df3542
{
    public static $classMap = array (
        'SebastianBergmann\\Invoker\\Exception' => __DIR__ . '/..' . '/phpunit/php-invoker/src/Exception.php',
        'SebastianBergmann\\Invoker\\Invoker' => __DIR__ . '/..' . '/phpunit/php-invoker/src/Invoker.php',
        'SebastianBergmann\\Invoker\\TimeoutException' => __DIR__ . '/..' . '/phpunit/php-invoker/src/TimeoutException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit51b978eb1f044ea238aaa3c1a0df3542::$classMap;

        }, null, ClassLoader::class);
    }
}
