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

use ContaoCommunityAlliance\DcGeneral\Data\NoOpDataProvider;

$GLOBALS['TL_DCA']['tl_dcg_themes_import'] = [
    // Config
    'config'     => [
        'dataContainer'    => 'General',
        'disableSubmit'    => false,
        'switchToEdit'     => false,
        'enableVersioning' => false,
        'closed'           => false,
    ],
    'dca_config' => [
        'data_provider' => [
            'default' => [
                'class'  => NoOpDataProvider::class,
                'source' => 'tl_dcg_themes_import'
            ],
        ],
    ],
    'palettes'   => [
        'default' => '{import_legend},name,upload;'
    ],
    'fields'     => [
        'name' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_dcg_themes_import']['name'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['mandatory'=>false, 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'],
        ],
        'upload' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_dcg_themes_import']['upload'],
            'exclude'   => true,
            'inputType' => 'fileUpload',
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
        ],
    ]
];
