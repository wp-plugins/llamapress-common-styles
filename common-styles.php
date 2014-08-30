<?php
/**
 * Plugin Name: LlamaPress common styles
 * Plugin URI: https://llamapress.com
 * Description: This plugin adds styles that are used for both LlamaPress themes and LlamaPress plugins, having the styles enqueued like this means they only get enqued once.
 * Version: 1.0
 * Author: LlamaPress
 * Author URI: https://llamapress.com
 * License: GPL2
 */

/*  Copyright 2014  LlamaPress LTD  (email : info@llamapress.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * This class creates the common styles used on LlamaPress products, it also enques Fontawesome.
 *
 * @since 1.0
 * @link https://llamapress.com
 */
class lpCommon {
    /**
    * Initiate functions
    *
    * @since 1.0
    * @link https://llamapress.com
    */
    public function __construct( ){
        
        /* enque styles */
        wp_enqueue_style( 'common', plugins_url('llamapress-common-styles/css/style.css', '') );
        /* enque styles for fontawesome */
        wp_enqueue_style( 'font-awesome', plugins_url('llamapress-common-styles/css/font-awesome.min.css', ''), array(), '4.0.3' );

    }

}

$common = new lpCommon();

?>