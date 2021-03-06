<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

return array(
    'name'        => 'Outlook',
    'description' => 'Enables integrations with Outlook for email tracking',
    'version'     => '1.0',
    'author'      => 'Werner Garcia',

    'routes'   => array(
        'public' => [
            'mautic_outlook_tracker'             => [
                'path'       => '/outlook/tracking.gif',
                'controller' => 'MauticOutlookBundle:Public:trackingImage'
            ]
        ]
    ),

    'services'    => array(
        'events' => array(
            'mautic.outlook.formbundle.subscriber' => array(
                'class' => 'MauticPlugin\MauticOutlookBundle\EventListener\FormSubscriber'
            )
        ),
        'forms'  => array(
            'mautic.form.type.fieldslist.selectidentifier'  => array(
                'class' => 'MauticPlugin\MauticOutlookBundle\Form\Type\FormFieldsType',
                'arguments' => 'mautic.factory',
                'alias' => 'formfields_list'
            )
        )
    )

);
