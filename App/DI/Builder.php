<?php
namespace App\DI;

use Psr\Container\ContainerInterface;
use DI\Container;
use DI\ContainerBuilder;
use function DI\factory;
use Jenssegers\Blade\Blade;

use App\Views\ViewManager;


class Builder
{
    private static $builder;

    /**
     * buildContainer
     *
     * Returns a new Container Object
     *
     * @return Container
     */
    public static function buildContainer(): Container
    {
        self::$builder = new ContainerBuilder();

        self::$builder->addDefinitions([
            'ViewManager' => factory(function (ContainerInterface $c) {
                return new ViewManager($c->get('Blade'));
            }),

            'Blade' => factory(function () {
                return new Blade(__DIR__ . '/../Views' , __DIR__ . '/../Views/cache');
            }),
        ]);

        return self::$builder->build();
    }
}