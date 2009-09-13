<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2008 Harvey Kane <code@ragepank.com>
 * Copyright 2008 Michael Holt <code@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

class JOJO_Plugin_jojo_cart_test_processor extends JOJO_Plugin
{
    function getPaymentOptions()
    {
        global $smarty;
        $options = array();
        $options[] = array('id' => 'test', 'label' => 'Test processor', 'html' => $smarty->fetch('jojo_cart_test_processor_checkout.tpl'));
        return $options;
    }

    /*
    * Determines whether this payment plugin is active for the current payment.
    */
    function isActive()
    {
        /* Look for a post variable specifying the test processor */
        return (Jojo::getFormData('handler', false) == 'test') ? true : false;
    }

    function process()
    {
        $outcome = Jojo::getFormData('outcome', 'declined');

        $receipt = array('Info' => 'This is a test transaction');
        $errors  = array();

        return array(
                    'success' => ($outcome == 'accepted'),
                    'receipt' => $receipt,
                    'errors'  => $errors,
                    'message' => 'This is a test transaction'
                    );
    }
}