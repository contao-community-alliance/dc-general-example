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

$GLOBALS['TL_DCA']['tl_module'] = array
(

    // Config
    'config' => array
    (
        // Replace the data container Table with General.
        'dataContainer'               => 'General'
    ),

    // Add the data container configuration.
    'dca_config' => array
    (
        // Configure the data provider and all child data provider.
        'data_provider' => array
        (
            // The default data provider, for this data container.
            'parent' => array
            (
                'source' => 'tl_theme'
            )
        ),

        // Add the child condition. This will announce the relations.
        'childCondition' => array
        (
            array
            (
                'from'    => 'tl_theme',
                'to'      => 'tl_module',
                'setOn'   => array
                (
                    array
                    (
                        'to_field'   => 'pid',
                        'from_field' => 'id',
                    ),
                ),
                'filter'  => array
                (
                    array
                    (
                        'local'     => 'pid',
                        'remote'    => 'id',
                        'operation' => '=',
                    ),
                ),
                'inverse' => array
                (
                    array
                    (
                        'local'     => 'pid',
                        'remote'    => 'id',
                        'operation' => '=',
                    ),
                )
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            // No changes.
        ),
        'label' => array
        (
            // No changes.
        ),
        'global_operations' => array
        (
            'all' => array
            (
                // No changes.
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                // No changes.
            ),
            'copy' => array
            (
                // No changes.
            ),
            'cut' => array
            (
                // No changes.
            ),
            'delete' => array
            (
                // No changes.
            ),
            'show' => array
            (
                // No changes.
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        // No changes.
    ),

    // Subpalettes
    'subpalettes' => array
    (
        // No changes.
    ),

    // Fields
    'fields' => array
    (
        // No changes.
    )
);
