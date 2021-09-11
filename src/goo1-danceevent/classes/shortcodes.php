<?php

namespace plugins\goo1\danceevent;

class shortcodes {
	
  public static function render_livestream($atts, $content) {
    //$round_id = $_GET["round"] ?? null;

    $url = "https://5678.video/wordpress/embed/livestream?domain=".urlencode($_SERVER["HTTP_HOST"]);

	  $html .= '';
	  $html .= '<div style="position: relative; background: #000; width: 100%; height: 0; padding-bottom: 56.25%; border: none;">';
    $html .= '<IFRAME src="'.$url.'" FRAMEBORDER="0" style="position: absolute; display: block; left: 0; top: 0; width: 100%; height: 100%; background: #000; color: #aaa;"></IFRAME>';
    $html .= '</div>';
    return $html;
  }


}