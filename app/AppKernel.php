<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new PetroPack\ProductoBundle\PetroPackProductoBundle(),
            new PetroPack\LoginBundle\PetroPackLoginBundle(),
            new PetroPack\ClienteBundle\PetroPackClienteBundle(),
            new PetroPack\VentaBundle\PetroPackVentaBundle(),
            new PetroPack\MenuBundle\PetroPackMenuBundle(),
            new PetroPackFront\LoginBundle\PetroPackFrontLoginBundle(),
            new PetroPackFront\MenuBundle\PetroPackFrontMenuBundle(),
            new PetroPackFront\ProductoBundle\PetroPackFrontProductoBundle(),
            new PetroPackFront\PaginadoBundle\PetroPackFrontPaginadoBundle(),
            new PetroPack\PaginadoBundle\PetroPackPaginadoBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
