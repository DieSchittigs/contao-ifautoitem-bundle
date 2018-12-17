<?php 

declare(strict_types=1);

namespace DieSchittigs\IfautoitemBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use DieSchittigs\IfautoitemBundle\ContaoIfautoitemBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoIfautoitemBundle::class)
                ->setLoadAfter([
                    'Contao\CoreBundle\ContaoCoreBundle'
                ])
                ->setReplace(['redirects']),
        ];
    }
}