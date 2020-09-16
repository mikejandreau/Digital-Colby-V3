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
$mjcv2_sections = [
    'section-theme-settings' => [
        'title' => 'Theme Settings',
        'desc'  => 'General theme settings.'
    ],
    'section-social-settings' => [
        'title' => 'Social Settings',
        'desc'  => 'Add the full URLs of your social media profiles to show them in the footer. Only the text fields with links will show up on the front end - blank fields won\'t be displayed.'
    ],
    'section-footer-tagline' => [
        'title' => 'Footer Tagline',
        'desc'  => 'This is the text that appears below the copyright info in the footer.'
    ]
];

/*
 * Field information.
 */
$mjcv2_fields = [
    'mjcv2-logo' => [
        'title'    => 'Header Logo',
        'type'     => 'upload',
        'section'  => 'section-theme-settings',
        'default'  => '',
        'desc'     => 'Set your default logo. Upload or choose an existing one.',
        'sanitize' => ''
    ],
    'mjcv2-social-facebook' => [
        'title'    => 'Facebook Profile',
        'type'     => 'text',
        'section'  => 'section-social-settings',
        'default'  => '',
        'desc'     => '',
        'sanitize' => 'full'
    ],
    'mjcv2-social-twitter' => [
        'title'    => 'Twitter Profile',
        'type'     => 'text',
        'section'  => 'section-social-settings',
        'default'  => '',
        'desc'     => '',
        'sanitize' => 'full'
    ],
    'mjcv2-social-instagram' => [
        'title'    => 'Instagram Profile',
        'type'     => 'text',
        'section'  => 'section-social-settings',
        'default'  => '',
        'desc'     => '',
        'sanitize' => 'full'
    ],
    'mjcv2-social-linkedin' => [
        'title'    => 'LinkedIn Profile',
        'type'     => 'text',
        'section'  => 'section-social-settings',
        'default'  => '',
        'desc'     => '',
        'sanitize' => 'full'
    ],
    'mjcv2-footer-tagline' => [
        'title'    => 'Tagline Text',
        'type'     => 'textarea',
        'section'  => 'section-footer-tagline',
        'default'  => '',
        'desc'     => '',
        'sanitize' => ''
    ]
];



/*
 * 2. HOOKS
 */
add_action( 'after_setup_theme', 'mjcv2_init_option' );
add_action( 'admin_menu', 'mjcv2_update_menu' );
add_action( 'admin_init', 'mjcv2_init_settings' );
add_action( 'admin_enqueue_scripts', 'mjcv2_options_custom_scripts' );



/*
 * 3. RENDER FUNCTIONS
 * Renders a section description.
 */
function mjcv2_render_section( $args ) {
    global $mjcv2_sections;

    echo "<p>" . $mjcv2_sections[ $args['id'] ]['desc'] . "</p>";
    echo "<hr />";
}

/*
 * Renders input fields: can be text, textarea, checkbox, radio, select, or upload
 */
function mjcv2_render_field( $id ) {
    global $mjcv2_fields;

    $options = get_option( 'mjcv2_options' );

    // If options are not set yet for that ID, grab the default value.
    $field_value = isset( $options[ $id ] ) ? $options[ $id ] : mjcv2_get_field_default( $id );

    // Generate HTML markup based on field type.
    switch ( $mjcv2_fields[ $id ]['type'] ) {
        case 'text': 
            echo "<input type='text' name='mjcv2_options[" . $id . "]' value='" . $field_value . "' />";
            echo "<p class='description'>" . $mjcv2_fields[ $id ]['desc'] . "</p>";
            
            break;

        case 'upload':
            $visibility_class = ( '' != $field_value ) ? "" : "hide";

            echo "<img src='" . $field_value . "' alt='Logo' class='mjcv2-custom-thumbnail " . $visibility_class . "' id='" . $id . "-thumbnail' />";
            echo "<input type='hidden' name='mjcv2_options[" . $id . "]' id='" . $id . "-upload-field' value='" . $field_value . "' />";
            echo "<input type='button' class='btn-upload-img button' value='Upload logo' data-field-id='" . $id . "' />";
            echo "<input type='button' class='btn-remove-img button " . $visibility_class . "' value='Remove logo' data-field-id='" . $id . "' id='" . $id . "-remove-button' />";
            echo "<p class='description'>" . $mjcv2_fields[ $id ]['desc'] . "</p>";
            
            break;

        case 'textarea': 
            echo "<textarea name='mjcv2_options[" . $id . "]' cols='40' rows='10'>" . $field_value . "</textarea>";
            echo "<p class='description'>" . $mjcv2_fields[ $id ]['desc'] . "</p>";
            
            break;

        case 'checkbox':
            echo "<input type='checkbox' name='mjcv2_options[" . $id . "]' id='" . $id . "' value='1' " . checked( $field_value, 1, false ) . " />";
            echo "<label for='" . $id . "'>" . $mjcv2_fields[ $id ]['label'] . "</label>";

            break;

        case 'radio': 
            // Generate as many radio buttons as there are children.
            for ( $i = 0; $i < sizeof( $mjcv2_fields[ $id ]['children'] ); $i++ ) {
                echo "<p>";
                echo "<input type='radio' name='mjcv2_options[" . $id . "]' id='mjcv2_options[" . $id . "]-" . $i . "' value='" . $i . "' " . checked( $field_value, $i, false ) . " />";
                echo "<label for='mjcv2_options[" . $id . "]-" . $i . "'>" . $mjcv2_fields[ $id ]['children'][ $i ] . "</label>";
                echo "</p>";
            }

            break;

        case 'select': 
            echo "<select name='mjcv2_options[" . $id . "]'>";
            for ( $i = 0; $i < sizeof( $mjcv2_fields[ $id ]['children'] ); $i++ ) {
                echo "<option value='" . $i . "' " . selected( $field_value, $i, false ) . ">";
                echo $mjcv2_fields[ $id ]['children'][ $i ];
                echo "</option>";
            }
            echo "</select>";

            break;
    }
}

/*
 * Renders the theme options page.
 */
function mjcv2_render_theme_options() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'You do not have sufficient permissions to access this page.' );
    } ?>

    <div class="wrap">
        <h1>Theme Options</h1>

        <?php settings_errors(); ?>

        <form action="options.php" method="post">
            <?php
                settings_fields( "mjcv2_options" );
                do_settings_sections( "mjcv2-theme-options" );
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
function mjcv2_options_validate( $input ) {
    // Define a blank array for the output.
    $output = [];

    // Do a general sanitization for every field.
    foreach ( $input as $key => $value ) {
        // Grab the sanitize option for this field.
        $field_sanitize = mjcv2_get_field_sanitize( $key );

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
function mjcv2_options_custom_scripts() {
    // Get information about the current page.
    $screen = get_current_screen();

    // Register a custom script that depends on jQuery, Media Upload and Thickbox (available from the Core).
    wp_register_script( 'mjcv2-custom-admin-scripts', get_template_directory_uri() .'/inc/theme-options/theme-options.js', array( 'jquery' ) );

    // Register custom styles.
    wp_register_style( 'mjcv2-custom-admin-styles', get_template_directory_uri() .'/inc/theme-options/theme-options.css' );
    
    // Only load these scripts if we're on the theme options page.
    if ( 'appearance_page_mjcv2-theme-options' == $screen->id ) {
        // Enqueues all scripts, styles, settings, and templates necessary to use all media JavaScript APIs.
        wp_enqueue_media();
        
        // Load our custom scripts.
        wp_enqueue_script( 'mjcv2-custom-admin-scripts' );

        // Load our custom styles.
        wp_enqueue_style( 'mjcv2-custom-admin-styles' );
    }    
}



/*
 * 6. OTHER FUNCTIONS
 * Returns the default value of a field.
 */
function mjcv2_get_field_default( $id ) {
    global $mjcv2_fields;

    return $mjcv2_fields[ $id ]['default'];
}

/*
 * Checks if the options exists in the database.
 */
function mjcv2_init_option() {
    $options = get_option( 'mjcv2_options' );

    if ( false === $options ) {
        add_option( 'mjcv2_options' );
    }
}

/*
 * Creates a sub-menu under Appearance.
 */
function mjcv2_update_menu() {
    add_theme_page( 'Theme Options', 'Theme Options', 'manage_options', 'mjcv2-theme-options', 'mjcv2_render_theme_options' );
}

/*
 * Registers and adds settings, sections and fields.
 */
function mjcv2_init_settings() {
    // Declare $mjcv2_sections and $mjcv2_fields as global.
    global $mjcv2_fields, $mjcv2_sections;

    // Register a general setting.
    // The $option_group is the same as $option_name to prevent the "Error: options page not found." problem.
    register_setting( "mjcv2_options", "mjcv2_options", "mjcv2_options_validate" );

    // Add sections as defined in the $mjcv2_sections array.
    foreach ($mjcv2_sections as $section_id => $section_value) {
        add_settings_section( $section_id, $section_value['title'], "mjcv2_render_section", "mjcv2-theme-options" );
    }

    // Add fields as defined in the $mjcv2_fields array.
    foreach ($mjcv2_fields as $field_id => $field_value) {
        add_settings_field( $field_id, $field_value['title'], "mjcv2_render_field", "mjcv2-theme-options", $field_value['section'], $field_id );
    }
}

/*
 * Returns the sanitized field value.
 */
function mjcv2_get_field_sanitize( $id ) {
    global $mjcv2_fields;

    return $mjcv2_fields[ $id ]['sanitize'];
}