<?php

declare(strict_types=1);

namespace IronMan\SyliusProductOnDemandPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('iron_man_sylius_product_on_demand_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
