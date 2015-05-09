<?php
/*
Plugin Name: WCCGN Style Development
Description: For Development only. Adds Custom Style Sheet
Plugin URI: https://github.com/pixolin/wccgn-style
Author: Bego Mario Garde
Author URI: https://garde-medienberatung.de
Version: 1.0
License: GPL2
Text Domain: wccgn
Domain Path: languages
*/

/*

    Copyright (C) 2015  Bego Mario Garde  <pixolin@gmx.com>

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

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'wp_enqueue_script', 'wccgn_style' );

function wccgn_style() {
	wp_enqueue_style(
		$handle = 'wccgn',
		$src    = plugins_url('wccgn-style.css', __FILE__),
		$ver    = '1.0'
		);
}