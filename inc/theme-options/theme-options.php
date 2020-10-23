<?php 
/*
 * theme-options.php
 * 
 * Table of contents:
 * 
 * 1. DEFINITIONS
 * 2. HOOKS
 * 3. RENDER FUNCTIONS
 * 4. SANITIZE FUNCTIONS
 * 5. CUSTOM SCRIPTS
 * 6. OTHER FUNCTIONS
 */



/*
 * 1. DEFINITIONS
 * Section information.
 */
$dcv3_sections = [
    // 'section-theme-settings' => [
    //     'title' => 'Theme Settings',
    //     'desc'  => 'General theme settings.'
    // ],
    // 'section-social-settings' => [
    //     'title' => 'Social Settings',
    //     'desc'  => 'Add the full URLs of your social media profiles to show them in the footer. Only the text fields with links will show up on the front end - blank fields won\'t be displayed.'
    // ],
    'section-header-alert' => [
        'title' => 'Header Alert',
        'desc'  => 'This is the text that will appear in the alert at the top of the homepage. To hide the alert, leave is field blank.'
    ]
];

/*
 * Field information.
 */
$dcv3_fields = [
    // 'dcv3-logo' => [
    //     'title'    => 'Header Logo',
    //     'type'     => 'upload',
    //     'section'  => 'section-theme-settings',
    //     'default'  => '',
    //     'desc'     => 'Set your default logo. Upload or choose an existing one.',
    //     'sanitize' => ''
    // ],
    // 'dcv3-social-facebook' => [
    //     'title'    => 'Facebook Profile',
    //     'type'     => 'text',
    //     'section'  => 'section-social-settings',
    //     'default'  => '',
    //     'desc'     => '',
    //     'sanitize' => 'full'
    // ],
    // 'dcv3-social-twitter' => [
    //     'title'    => 'Twitter Profile',
    //     'type'     => 'text',
    //     'section'  => 'section-social-settings',
    //     'default'  => '',
    //     'desc'     => '',
    //     'sanitize' => 'full'
    // ],
    // 'dcv3-social-instagram' => [
    //     'title'    => 'Instagram Profile',
    //     'type'     => 'text',
    //     'section'  => 'section-social-settings',
    //     'default'  => '',
    //     'desc'     => '',
    //     'sanitize' => 'full'
    // ],
    // 'dcv3-social-linkedin' => [
    //     'title'    => 'LinkedIn Profile',
    //     'type'     => 'text',
    //     'section'  => 'section-social-settings',
    //     'default'  => '',
    //     'desc'     => '',
    //     'sanitize' => 'full'
    // ],
    'dcv3-header-alert' => [
        'title'    => 'Alert Text',
        'type'     => 'textarea',
        'section'  => 'section-header-alert',
        'default'  => '',
        'desc'     => '',
        'sanitize' => ''
    ]
];



/*
 * 2. HOOKS
 */
add_action( 'after_setup_theme', 'dcv3_init_option' );
add_action( 'admin_menu', 'dcv3_update_menu' );
add_action( 'admin_init', 'dcv3_init_settings' );
add_action( 'admin_enqueue_scripts', 'dcv3_options_custom_scripts' );



/*
 * 3. RENDER FUNCTIONS
 * Renders a section description.
 */
function dcv3_render_section( $args ) {
    global $dcv3_sections;

    echo "<p>" . $dcv3_sections[ $args['id'] ]['desc'] . "</p>";
    echo "<hr />";
}

/*
 * Renders input fields: can be text, textarea, checkbox, radio, select, or upload
 */
function dcv3_render_field( $id ) {
    global $dcv3_fields;

    $options = get_option( 'dcv3_options' );

    // If options are not set yet for that ID, grab the default value.
    $field_value = isset( $options[ $id ] ) ? $options[ $id ] : dcv3_get_field_default( $id );

    // Generate HTML markup based on field type.
    switch ( $dcv3_fields[ $id ]['type'] ) {
        case 'text': 
            echo "<input type='text' name='dcv3_options[" . $id . "]' value='" . $field_value . "' />";
            echo "<p class='description'>" . $dcv3_fields[ $id ]['desc'] . "</p>";
            
            break;

        case 'upload':
            $visibility_class = ( '' != $field_value ) ? "" : "hide";

            echo "<img src='" . $field_value . "' alt='Logo' class='dcv3-custom-thumbnail " . $visibility_class . "' id='" . $id . "-thumbnail' />";
            echo "<input type='hidden' name='dcv3_options[" . $id . "]' id='" . $id . "-upload-field' value='" . $field_value . "' />";
            echo "<input type='button' class='btn-upload-img button' value='Upload logo' data-field-id='" . $id . "' />";
            echo "<input type='button' class='btn-remove-img button " . $visibility_class . "' value='Remove logo' data-field-id='" . $id . "' id='" . $id . "-remove-button' />";
            echo "<p class='description'>" . $dcv3_fields[ $id ]['desc'] . "</p>";
            
            break;

        case 'textarea': 
            echo "<textarea name='dcv3_options[" . $id . "]' cols='40' rows='10'>" . $field_value . "</textarea>";
            echo "<p class='description'>" . $dcv3_fields[ $id ]['desc'] . "</p>";
            
            break;

        case 'checkbox':
            echo "<input type='checkbox' name='dcv3_options[" . $id . "]' id='" . $id . "' value='1' " . checked( $field_value, 1, false ) . " />";
            echo "<label for='" . $id . "'>" . $dcv3_fields[ $id ]['label'] . "</label>";

            break;

        case 'radio': 
            // Generate as many radio buttons as there are children.
            for ( $i = 0; $i < sizeof( $dcv3_fields[ $id ]['children'] ); $i++ ) {
                echo "<p>";
                echo "<input type='radio' name='dcv3_options[" . $id . "]' id='dcv3_options[" . $id . "]-" . $i . "' value='" . $i . "' " . checked( $field_value, $i, false ) . " />";
                echo "<label for='dcv3_options[" . $id . "]-" . $i . "'>" . $dcv3_fields[ $id ]['children'][ $i ] . "</label>";
                echo "</p>";
            }

            break;

        case 'select': 
            echo "<select name='dcv3_options[" . $id . "]'>";
            for ( $i = 0; $i < sizeof( $dcv3_fields[ $id ]['children'] ); $i++ ) {
                echo "<option value='" . $i . "' " . selected( $field_value, $i, false ) . ">";
                echo $dcv3_fields[ $id ]['children'][ $i ];
                echo "</option>";
            }
            echo "</select>";

            break;
    }
}

/*
 * Renders the theme options page.
 */
function dcv3_render_theme_options() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'You do not have sufficient permissions to access this page.' );
    } ?>

    <div class="wrap">
        <h1>Theme Options</h1>

        <?php settings_errors(); ?>

        <form action="options.php" method="post">
            <?php
                settings_fields( "dcv3_options" );
                do_settings_sections( "dcv3-theme-options" );
                echo "<hr />";
                submit_button();
            ?>
        </form>
    </div>
<?php }



/*
 * 4. SANITIZE FUNCTIONS
 * Sanitizes the settings.
 */
function dcv3_options_validate( $input ) {
    // Define a blank array for the output.
    $output = [];

    // Do a general sanitization for every field.
    foreach ( $input as $key => $value ) {
        // Grab the sanitize option for this field.
        $field_sanitize = dcv3_get_field_sanitize( $key );

        switch ( $field_sanitize ) {
            case 'default':
                $output[ $key ] = strip_tags( stripslashes( $input[ $key ] ) );
                break;
            
            case 'full':
                $output[ $key ] = esc_url_raw( strip_tags( stripslashes( $input[ $key ] ) ) );
                break;

            case 'google-analytics':
                $output[ $key ] = ( preg_match('/^UA-[0-9]+-[0-9]+$/', $input[ $key ] ) ) ? $input[ $key ] : '';
                break;

            default:
                $output[ $key ] = $input[ $key ];
                break;
        }
    }

    return $output;
}



/*
 * 5. CUSTOM SCRIPTS
 * Registers and loads custom JavaScript and CSS.
 */
function dcv3_options_custom_scripts() {
    // Get information about the current page.
    $screen = get_current_screen();

    // Register a custom script that depends on jQuery, Media Upload and Thickbox (available from the Core).
    wp_register_script( 'dcv3-custom-admin-scripts', get_template_directory_uri() .'/inc/theme-options/theme-options.js', array( 'jquery' ) );

    // Register custom styles.
    wp_register_style( 'dcv3-custom-admin-styles', get_template_directory_uri() .'/inc/theme-options/theme-options.css' );
    
    // Only load these scripts if we're on the theme options page.
    if ( 'appearance_page_dcv3-theme-options' == $screen->id ) {
        // Enqueues all scripts, styles, settings, and templates necessary to use all media JavaScript APIs.
        wp_enqueue_media();
        
        // Load our custom scripts.
        wp_enqueue_script( 'dcv3-custom-admin-scripts' );

        // Load our custom styles.
        wp_enqueue_style( 'dcv3-custom-admin-styles' );
    }    
}



/*
 * 6. OTHER FUNCTIONS
 * Returns the default value of a field.
 */
function dcv3_get_field_default( $id ) {
    global $dcv3_fields;

    return $dcv3_fields[ $id ]['default'];
}

/*
 * Checks if the options exists in the database.
 */
function dcv3_init_option() {
    $options = get_option( 'dcv3_options' );

    if ( false === $options ) {
        add_option( 'dcv3_options' );
    }
}

/*
 * Creates a sub-menu under Appearance.
 */
function dcv3_update_menu() {
    add_theme_page( 'Theme Options', 'Theme Options', 'manage_options', 'dcv3-theme-options', 'dcv3_render_theme_options' );
}

/*
 * Registers and adds settings, sections and fields.
 */
function dcv3_init_settings() {
    // Declare $dcv3_sections and $dcv3_fields as global.
    global $dcv3_fields, $dcv3_sections;

    // Register a general setting.
    // The $option_group is the same as $option_name to prevent the "Error: options page not found." problem.
    register_setting( "dcv3_options", "dcv3_options", "dcv3_options_validate" );

    // Add sections as defined in the $dcv3_sections array.
    foreach ($dcv3_sections as $section_id => $section_value) {
        add_settings_section( $section_id, $section_value['title'], "dcv3_render_section", "dcv3-theme-options" );
    }

    // Add fields as defined in the $dcv3_fields array.
    foreach ($dcv3_fields as $field_id => $field_value) {
        add_settings_field( $field_id, $field_value['title'], "dcv3_render_field", "dcv3-theme-options", $field_value['section'], $field_id );
    }
}

/*
 * Returns the sanitized field value.
 */
function dcv3_get_field_sanitize( $id ) {
    global $dcv3_fields;

    return $dcv3_fields[ $id ]['sanitize'];
}