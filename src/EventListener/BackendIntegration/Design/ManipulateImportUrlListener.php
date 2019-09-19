<?php

/**
 * This file is part of contao-community-alliance/dc-general-example.
 *
 * (c) 2019 Contao Community Alliance.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    contao-community-alliance/dc-general-example
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @copyright  2019 Contao Community Alliance.
 * @license    https://github.com/contao-community-alliance/dc-general/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

declare(strict_types=1);

namespace ContaoCommunityAlliance\DcGeneral\Example\EventListener\BackendIntegration\Design;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;

/**
 * This manipulate the backend url for the theme importer.
 */
final class ManipulateImportUrlListener
{
    /**
     * The router.
     *
     * @var RouterInterface
     */
    private $router;

    /**
     * The request stack.
     *
     * @var RequestStack
     */
    private $request;

    /**
     * The constructor.
     *
     * @param RouterInterface $router  The router.
     * @param RequestStack    $request The request stack.
     */
    public function __construct(RouterInterface $router, RequestStack $request)
    {
        $this->router  = $router;
        $this->request = $request;
    }

    /**
     * Manipulate the backend url for the theme importer.
     *
     * @param array $modules The modules.
     *
     * @return array
     */
    public function onManipulateUrl(array $modules): array
    {
        $modules['design']['modules']['themes_import']['href'] = $this->prepareImportMainHref();

        return $modules;
    }

    /**
     * Prepare the href for the backend main.
     *
     * @return string
     */
    private function prepareImportMainHref(): string
    {
        return $this->router->generate(
            'contao_backend',
            [
                'do' => 'themes_import',
                'act' => 'create',
                'ref' => $this->request->getCurrentRequest()->attributes->get('_contao_referer_id')
            ]
        );
    }
}
