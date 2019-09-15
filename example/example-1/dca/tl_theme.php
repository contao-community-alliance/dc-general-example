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

$GLOBALS['TL_DCA']['tl_theme'] = array
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
            'default' => array
            (
                'source' => 'tl_theme'
            ),

            // The child data provider for all children are has related to this and has their child relation.
            // This must configure so when you delete this theme are all relations deletes too. (deep delete)
            'tl_module' => array
            (
                'source' => 'tl_module'
            ),

            'tl_style_sheet' => array
            (
                'source' => 'tl_style_sheet'
            ),
            'tl_style' => array
            (
                'source' => 'tl_style'
            ),

            'tl_layout' => array
            (
                'source' => 'tl_layout'
            ),

            'tl_image_size' => array
            (
                'source' => 'tl_image_size'
            ),
            'tl_image_size_item' => array
            (
                'source' => 'tl_image_size_item'
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
            ),

            array
            (
                'from'    => 'tl_theme',
                'to'      => 'tl_style_sheet',
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
            ),
            array
            (
                'from'    => 'tl_style_sheet',
                'to'      => 'tl_style',
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
            ),

            array
            (
                'from'    => 'tl_theme',
                'to'      => 'tl_layout',
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
            ),

            array
            (
                'from'    => 'tl_theme',
                'to'      => 'tl_image_size',
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
            ),
            array
            (
                'from'    => 'tl_image_size',
                'to'      => 'tl_image_size_item',
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
            ),
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
            'importTheme' => array
            (
                // No changes.
            ),
            'store' => array
            (
                // No changes.
            ),
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
            'delete' => array
            (
                // No changes.
            ),
            'show' => array
            (
                // No changes.
            ),
            'css' => array
            (
                // Add the id parameter, which there tl_theme related to tl_stylesheet.
                'idparam' => 'pid'
            ),
            'modules' => array
            (
                // Add the id parameter, which there tl_theme related to tl_module.
                'idparam' => 'pid'
            ),
            'layout' => array
            (
                // Add the id parameter, which there tl_theme related to tl_layout.
                'idparam' => 'pid'
            ),
            'imageSizes' => array
            (
                // Add the id parameter, which there tl_theme related to tl_image_size.
                'idparam' => 'pid'
            ),
            'exportTheme' => array
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

    // Fields
    'fields' => array
    (
        // No changes.
    )
);
