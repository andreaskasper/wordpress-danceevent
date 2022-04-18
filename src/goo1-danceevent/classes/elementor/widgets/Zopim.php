<?php
/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */

namespace plugins\goo1\danceevent\elementor\widgets;

class Zopim extends \Elementor\Widget_Base {
	/**
	 * Get widget name.
	 *
	 * Retrieve oEmbed widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'goo1-danceevent-zopim';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve oEmbed widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Live Support Chat', 'plugin-name' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve oEmbed widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-headphones';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the oEmbed widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return ['andreaskasper', 'danceevent', 'goo1'];
	}

	/**
	 * Register oEmbed widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT
			]
		);

		$this->add_control(
			"title",
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => "Live Support",
				'placeholder' => __( '', 'plugin-domain' ),
			]
		);

		$this->add_control(
			"department",
			[
				'label' => __( 'Department', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( '', 'plugin-domain' ),
			]
		);

		$this->add_control(
			"tags",
			[
				'label' => __( 'Tags', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( '', 'plugin-domain' ),
			]
		);


		$arr = array(
			"" => "auto",
			"en-us" => "English (United Staates)",
			"en-gb" => "English (United Kingdom)",
			"fi" => "Finnish",
			"de" => "German"
		);

		$this->add_control(
			"lang",
			[
				'label' => __( 'Language', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => null,
				'options' => $arr,
			]
		);

		$this->add_control(
			'use_wp_user',
			[
				'label' => esc_html__( 'USe Wordpress Userdata', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'your-plugin' ),
				'label_off' => esc_html__( 'No', 'your-plugin' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_when_offline',
			[
				'label' => esc_html__( 'Show when offline?', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'your-plugin' ),
				'label_off' => esc_html__( 'Hide', 'your-plugin' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'content2_section',
			[
				'label' => __( 'Bubble', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT
			]
		);

		$this->add_control(
			"bubble_title",
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( '', 'plugin-domain' ),
			]
		);

		$this->add_control(
			"bubble_text",
			[
				'label' => __( 'Text', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( '', 'plugin-domain' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'content3_section',
			[
				'label' => __( 'PreChat Form', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT
			]
		);

		$this->add_control(
			"prechat_greeting",
			[
				'label' => __( 'Greeting', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( '', 'plugin-domain' ),
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Style', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE
			]
		);

		$arr = array(
			"bl" => "Bottom Left",
			"br" => "Bottom Right",
			"tl" => "Top Left",
			"tr" => "Top Right"
		);

		$this->add_control(
			"window_position",
			[
				'label' => __( 'Language', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => "br",
				'options' => $arr,
			]
		);

        /*$arr = array(
            "light" => __("light", 'plugin-domain'),
            "dark" => __("dark", 'plugin-domain'),
            "custom" => __("custom", 'plugin-domain')
        );
		
        $this->add_control(
			'theme',
			[
				'label' => __( 'Theme', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => null,
				'options' => $arr,
			]
		);*/
        

		$this->end_controls_section();
    }
    
	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
    protected function render() {
		if (\Elementor\Plugin::$instance->editor->is_edit_mode()) {
			echo('<div style="text-align: center; color: #fff; background: #ccc; border: 1px solid #fff;"><div>Live Support Chat</div><div style="font-size: 0.8rem;">This Element is not visible in the frontend.</div></div>');
			return;
		}
		$settings = $this->get_settings_for_display();
		echo('<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
		$.src="https://v2.zopim.com/?HJnLRAfLbOZw1fR2agLUMNzJXzJyu3ot";z.t=+new Date;$.
		type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
		</script>
    <script>
		$zopim(function() {');
	  if ($settings["use_wp_user"] == "yes") {

	  }
	  if (!empty($settings["department"])) echo('$zopim.livechat.departments.filter("'.$settings["department"].'");');
	  if (!empty($settings["tags"])) echo('$zopim.livechat.addTags("'.$settings["tags"].'");');
	  if (!empty($settings["title"])) echo('$zopim.livechat.window.setTitle("'.$settings["title"].'");');
	  if (!empty($settings["prechat_greeting"])) echo('$zopim.livechat.prechatForm.setGreetings("'.$settings["prechat_greeting"].'");');
	  if (!empty($settings["bubble_title"])) echo('$zopim.livechat.bubble.setTitle("'.$settings["bubble_title"].'");');
	  if (!empty($settings["bubble_text"])) echo('$zopim.livechat.bubble.setText("'.$settings["bubble_text"].'");');

	  $w = array();
	  if (!empty($settings["lang"])) $w["language"] = $settings["lang"];
	  echo('$zopim.livechat.set('.json_encode($w).');');

	  if (!empty($settings["window_position"])) echo('$zopim.livechat.window.setPosition("'.$settings["window_position"].'");');
      /*echo('$zopim.livechat.setGreetings({
        "online": "Live Support",
        "offline": "Leave us a message"
      });');*/
    echo('});
</script>');
	}

	private static function esc($txt) {
		return $txt;
	}
}