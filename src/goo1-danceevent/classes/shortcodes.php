<?php

namespace plugins\goo1\danceevent;

class shortcodes {
	
  public static function render_livestream($atts, $content) {
    //$round_id = $_GET["round"] ?? null;

    $url = "https://5678.video/wordpress/embed/livestream.js?domain=".urlencode($atts["domain"] ?? $_SERVER["HTTP_HOST"] ?? null);
    $url2 = "https://5678.video/wordpress/embed/livestream?domain=".urlencode($atts["domain"] ?? $_SERVER["HTTP_HOST"] ?? null);

	  $html = '';
	  $html .= '<script src="'.$url.'"></script>';
    $html .= '<noscript><div style="position: relative; background: #000; width: 100%; height: 0; padding-bottom: 56.25%; border: none;">';
    $html .= '<IFRAME src="'.$url2.'" FRAMEBORDER="0" style="position: absolute; display: block; left: 0; top: 0; width: 100%; height: 100%; background: #000; color: #aaa;"></IFRAME>';
    $html .= '</div></noscript>';
    return $html;
  }

  public static function render_zopim($atts, $content) {
    $html = '<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
		$.src="https://v2.zopim.com/?HJnLRAfLbOZw1fR2agLUMNzJXzJyu3ot";z.t=+new Date;$.
		type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
		</script>
    <script>
		$zopim(function() {
    });
</script>';

    return $html;
  }


}