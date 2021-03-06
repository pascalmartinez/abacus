<?php
/**
 * UserRegistration Admin.
 *
 * @class    UR_Form_Field_First_Name
 * @version  1.0.0
 * @package  UserRegistration/Form
 * @category Admin
 * @author   WPEverest
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * UR_Form_Field_First_Name Class
 */
class UR_Form_Field_First_Name extends UR_Form_Field {

	private static $_instance;


	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Hook in tabs.
	 */
	public function __construct() {

		$this->id = 'user_registration_first_name';

		$this->form_id = 1;

		$this->registered_fields_config = array(

			'label' => __( 'First Name', 'user-registration' ),

			'icon' => 'dashicons dashicons-id',
		);
		$this->field_defaults           = array(

			'default_label' => __( 'First Name','user-registration' ),

			'default_field_name' => 'first_name',

		);
	}


	public function get_registered_admin_fields() {

		return '<li id="' . $this->id . '_list "

				class="ur-registered-item draggable"

                data-field-id="' . $this->id . '"><span class="' . $this->registered_fields_config['icon'] . '"></span>' . $this->registered_fields_config['label'] . '</li>';
	}


	public function validation( $single_form_field, $form_data, $filter_hook, $form_id ) {
		// TODO: Implement validation() method.
	}
}

return UR_Form_Field_First_Name::get_instance();
