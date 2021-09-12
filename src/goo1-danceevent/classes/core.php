<?php

namespace plugins\goo1\danceevent;

class core {
	
  public static function init() {

    add_shortcode("danceevent_livestream", ["\\plugins\\goo1\\danceevent\\shortcodes","render_livestream"]);
	  add_shortcode("wcs_livestream", ["\\plugins\\goo1\\danceevent\\shortcodes","render_livestream"]);

    add_action( 'elementor/widgets/widgets_registered', function() {
      \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \plugins\goo1\danceevent\elementor\widgets\Livestream() );
    });
	  
    do_action("goo1_danceevent_loaded");
  }


}