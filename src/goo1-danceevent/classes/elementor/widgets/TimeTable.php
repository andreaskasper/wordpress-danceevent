<?php
/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */

namespace plugins\goo1\danceevent\elementor\widgets;

class TimeTable extends \Elementor\Widget_Base {
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
		return 'goo1-danceevent-timetable';
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
		return __( 'TimeTable', 'plugin-name' );
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
		return 'eicon-calendar';
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

		/*$this->add_control(
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
		);*/

        $this->end_controls_section();

		/*$this->start_controls_section(
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
		);
        

		$this->end_controls_section();*/
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
		/*if (\Elementor\Plugin::$instance->editor->is_edit_mode()) {
			echo('<div style="text-align: center; color: #fff; background: #ccc; border: 1px solid #fff;"><div>Live Support Chat</div><div style="font-size: 0.8rem;">This Element is not visible in the frontend.</div></div>');
			return;
		}*/
		$settings = $this->get_settings_for_display();
		echo('<table style="border: 1px solid #000;">');
		echo('<tr><td>Timetable</td></tr>');
		echo('<table>');
	}

	private static function esc($txt) {
		return $txt;
	}
}