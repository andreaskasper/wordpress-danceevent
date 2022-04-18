<?php

namespace plugins\goo1\danceevent;

class core {
	
  public static function init() {

    add_shortcode("danceevent_livestream", ["\\plugins\\goo1\\danceevent\\shortcodes","render_livestream"]);
	  add_shortcode("wcs_livestream", ["\\plugins\\goo1\\danceevent\\shortcodes","render_livestream"]);
    add_shortcode("danceevent_livesupport", ["\\plugins\\goo1\\danceevent\\shortcodes","render_zopim"]);

    add_action( 'elementor/elements/categories_registered', function($elements_manager) {
      $elements_manager->add_category(
        'danceevent',
        [
          'title' => esc_html__( 'DanceEvents', 'goo1-danceevent' ),
          'icon' => 'fa fas fa-deer',
        ]
      );
    });

    add_action( 'elementor/widgets/widgets_registered', function() {
      \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \plugins\goo1\danceevent\elementor\widgets\Livestream() );
      \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \plugins\goo1\danceevent\elementor\widgets\TimeTable() );
      \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \plugins\goo1\danceevent\elementor\widgets\Zopim() );
    });
	  
    do_action("goo1_danceevent_loaded");
  }


}