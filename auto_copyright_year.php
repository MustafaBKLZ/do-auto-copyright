<?php
/*
Plugin Name: Do Auto Copyright Year
Plugin URI:  https://dijitalortagim.com/our_plugins/auto-copyright-year/
Description: Light weight automatic copyright year updater, by placing shortcode. And you can add Copyright symbol, Trademark symbol, Registered symbol.
Version:     1.0
Author URI:  https://dijitalortagim.com/
Author:      Dijital Ortağım
License:     GPL2


Do Auto Copyright Year is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Do Auto Copyright Year. If not, see http://www.gnu.org/licenses/gpl-2.0.html.
*/


/**
 * [do_year] 
 * 
 * shortcode
 *
 *  @return Current Year
 */
function do_display_current_year() {
	$date = getdate();
	return $date['year'];
}
add_shortcode( 'do_year', 'do_display_current_year' );



/**
 * [do_copy] 
 * 
 * shortcode
 * 
 * @return the Copyright Symbol.
 */
function do_display_copyright_symbol() {
	return '&copy;';
}
add_shortcode( 'do_copy', 'do_display_copyright_symbol' );



/**
 * [do_tm] 
 * 
 * shortcode
 * 
 * @return the Trademark Symbol.
 */
function do_display_trademark_symbol() {
	return '&trade;';
}
add_shortcode( 'do_tm', 'do_display_trademark_symbol' );


/**
 * [do_reg] 
 * 
 * shortcode
 * 
 * @return the Registered Symbol.
 */
function do_display_registered_symbol() {
	return '&reg;';
}
add_shortcode( 'do_reg', 'do_display_registered_symbol' );
