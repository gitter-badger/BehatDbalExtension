<?php
/**
 * User: Tomasz Kunicki
 * Date: 24.11.2014
 */
namespace Behat\DbalExtension\ServiceContainer;


use Behat\Testwork\ServiceContainer\Extension as ExtensionInterface;
use Behat\Testwork\ServiceContainer\ExtensionManager;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class DbalExtension
 *
 * @package Behat\DbalExtension\ServiceContainer
 */
class DbalExtension implements ExtensionInterface
{

    /**
     * You can modify the container here before it is dumped to PHP code.
     *
     * @param ContainerBuilder $container
     *
     * @api
     */
    public function process(ContainerBuilder $container)
    {
    }

    /**
     * @return string
     */
    public function getConfigKey()
    {
        return 'dbalextension';
    }

    /**
     * @param ExtensionManager $extensionManager
     */
    public function initialize(ExtensionManager $extensionManager)
    {
    }

    /**
     * @param ArrayNodeDefinition $builder
     */
    public function configure(ArrayNodeDefinition $builder)
    {
        $builder
            ->addDefaultsIfNotSet()
            ->children()
            ->arrayNode('dbal')
                ->children()
                    ->scalarNode('default_connection_alias')->defaultValue('default')->end()
                    ->arrayNode('connections')
                        ->isRequired()
                        ->requiresAtLeastOneElement()
                        ->prototype('array')
                        ->children()
                            ->scalarNode('dbname')->end()
                            ->scalarNode('host')->end()
                            ->scalarNode('port')->end()
                            ->scalarNode('user')->end()
                            ->scalarNode('password')->end()
                            ->scalarNode('driver')->end()
                            ->scalarNode('memory')->end()
                            ->scalarNode('charset')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    /**
     * @param ContainerBuilder $container
     * @param array $config
     */
    public function load(ContainerBuilder $container, array $config)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Config'));
        $loader->load('services.yml');

        $container->setParameter('dbalextension.config', $config);
        $container->setParameter('dbalextension.config.default_connection_alias', $config['dbal']['default_connection_alias']);
    }
}
