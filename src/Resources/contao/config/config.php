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

use ContaoCommunityAlliance\DcGeneral\Example\EventListener\BackendIntegration\Design\ManipulateImportUrlListener;

/** Block START of example for the theme importer. */

$GLOBALS['TL_HOOKS']['getUserNavigation'][] = [ManipulateImportUrlListener::class, 'onManipulateUrl'];

$GLOBALS['BE_MOD']['design']['themes_import'] = [
    'tables' => ['tl_dcg_themes_import']
];

/** Block END of example for the theme importer. */
