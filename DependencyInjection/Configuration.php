<?php

namespace Avocode\FormExtensionsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Validates and merges configuration
 * 
 * @author Piotr Gołębiewski <loostro@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('avocode_form_extensions');
        
        $rootNode
            ->children()
                ->scalarNode('asset_provider')->defaultNull()->end()
                ->scalarNode('image_manipulator')->defaultNull()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
