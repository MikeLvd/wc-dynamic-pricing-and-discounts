<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Condition: Time - Months
 *
 * @class RP_WCDPD_Condition_Time_Months
 * @package WooCommerce Dynamic Pricing & Discounts
 * @author RightPress
 */
class RP_WCDPD_Condition_Time_Months extends RightPress_Condition_Time_Months
{

    protected $plugin_prefix = RP_WCDPD_PLUGIN_PRIVATE_PREFIX;

    protected $contexts = array(
        'product_pricing',
        'cart_discounts',
        'checkout_fees',
    );

    // Singleton instance
    protected static $instance = false;

    /**
     * Constructor
     *
     * @access public
     * @return void
     */
    public function __construct()
    {

        parent::__construct();
    }





}

RP_WCDPD_Condition_Time_Months::get_instance();
