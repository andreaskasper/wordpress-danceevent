<?php

namespace plugins\goo1\danceevent;

class shortcodes {
	
  public static function render_livestream($atts, $content) {
    //$round_id = $_GET["round"] ?? null;

    $url = "https://5678.video/wordpress/embed/livestream.js?domain=".urlencode($atts["domain"] ?? $_SERVER["HTTP_HOST"] ?? null);
    $url2 = "https://5678.video/wordpress/embed/livestream?domain=".urlencode($atts["domain"] ?? $_SERVER["HTTP_HOST"] ?? null);

	  $html .= '';
	  $html .= '<script src="'.$url.'"></script>';
    $html .= '<noscript><div style="position: relative; background: #000; width: 100%; height: 0; padding-bottom: 56.25%; border: none;">';
    $html .= '<IFRAME src="'.$url2.'" FRAMEBORDER="0" style="position: absolute; display: block; left: 0; top: 0; width: 100%; height: 100%; background: #000; color: #aaa;"></IFRAME>';
    $html .= '</div></noscript>';
    return $html;
  }


}