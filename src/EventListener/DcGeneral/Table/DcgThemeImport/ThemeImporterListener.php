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

namespace ContaoCommunityAlliance\DcGeneral\Example\EventListener\DcGeneral\Table\DcgThemeImport;

use ContaoCommunityAlliance\DcGeneral\Contao\RequestScopeDeterminatorAwareTrait;
use ContaoCommunityAlliance\DcGeneral\Event\PostPersistModelEvent;

/**
 * This is the the importer, for import a theme.
 */
final class ThemeImporterListener
{
    use RequestScopeDeterminatorAwareTrait;

    /**
     * Import the theme.
     *
     * @param PostPersistModelEvent $event The event
     *
     * @return void
     */
    public function onImport(PostPersistModelEvent $event): void
    {
        if (!$this->wantToHandle($event)) {
            return;
        }

        // Get the data, who comes from the edit mask.
        $model = $event->getModel();

        // Make import your data....
    }

    /**
     * This determines whether are in the correct table and in scope.
     *
     * @param PostPersistModelEvent $event The event.
     *
     * @return bool
     */
    private function wantToHandle(PostPersistModelEvent $event): bool
    {
        return $this->scopeDeterminator->currentScopeIsBackend()
            && !$this->scopeDeterminator->currentScopeIsUnknown()
            && ('tl_dcg_themes_import' === $event->getEnvironment()->getDataDefinition()->getName());
    }
}
