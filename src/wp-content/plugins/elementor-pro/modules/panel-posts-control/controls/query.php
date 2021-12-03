<?php
namespace ElementorPro\Modules\PanelPostsControl\Controls;

use Elementor\Control_Select2;
use ElementorPro\Modules\PanelPostsControl\Module;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Query extends Control_Select2 {

	public function get_type() {
		return Module::QUERY_CONTROL_ID;
	}
}
