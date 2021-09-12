<?php
/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */

namespace plugins\goo1\danceevent\elementor\widgets;

class Livestream extends \Elementor\Widget_Base {
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
		return 'goo1-danceevent-livestream';
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
		return __( 'Livestream', 'plugin-name' );
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
		return 'fa fas fa-camera';
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
			"domain",
			[
				'label' => __( 'Domain', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'default: auto', 'plugin-domain' ),
			]
		);


		$arr = array(
			"auto" => "auto",
			"enUS" => "English",
			"deDE" => "German"
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

        $this->end_controls_section();

        $this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Style', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE
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
		$settings = $this->get_settings_for_display();
		$html = \plugins\goo1\danceevent\shortcodes::render_livestream(array(), "");
        echo $html;
	}
}