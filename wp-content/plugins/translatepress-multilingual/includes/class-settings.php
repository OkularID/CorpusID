<?php

/**
 * Class TRP_Settings
 *
 * In charge of settings page and settings option.
 */
class TRP_Settings{

    protected $settings;
    protected $trp_query;
    protected $url_converter;
    protected $trp_languages;
    protected $machine_translator;

    /**
     * Return array of customization options for language switchers.
     *
     * Customization options include whether to add flags, full names or short names.
     * Used for all types of language switchers.
     *
     * @return array            Array with customization options.
     */
    public function get_language_switcher_options(){
        $ls_options = apply_filters( 'trp_language_switcher_output', array(
            'full-names'        => array( 'full_names'  => true, 'short_names'  => false, 'flags' => false, 'label' => __( 'Full Language Names', 'translatepress-multilingual' ) ),
            'short-names'       => array( 'full_names'  => false, 'short_names'  => true, 'flags' => false, 'label' => __( 'Short Language Names', 'translatepress-multilingual' ) ),
            'flags-full-names'  => array( 'full_names'  => true, 'short_names'  => false, 'flags' => true, 'label' => __( 'Flags with Full Language Names', 'translatepress-multilingual' ) ),
            'flags-short-names' => array( 'full_names'  => false, 'short_names'  => true, 'flags' => true, 'label' => __( 'Flags with Short Language Names', 'translatepress-multilingual' ) ),
            'only-flags'        => array( 'full_names'  => false, 'short_names'  => false, 'flags' => true, 'label' => __( 'Only Flags', 'translatepress-multilingual' ) ),
        ) );
        return $ls_options;
    }

    /**
     * Echo html for selecting language from all available language in settings.
     *
     * @param string $ls_type       shortcode_options | menu_options | floater_options
     * @param string $ls_setting    The selected language switcher customization setting (get_language_switcher_options())
     */
    public function output_language_switcher_select( $ls_type, $ls_setting ){
        $ls_options = $this->get_language_switcher_options();
        $output = '<select id="' . esc_attr( $ls_type ) . '" name="trp_settings[' . esc_attr( $ls_type ) .']" class="trp-select trp-ls-select-option">';
        foreach( $ls_options as $key => $ls_option ){
            $selected = ( $ls_setting == $key ) ? 'selected' : '';
            $output .= '<option value="' . esc_attr( $key ) . '" ' . esc_attr( $selected ) . ' >' . esc_html( $ls_option['label'] ). '</option>';
        }
        $output .= '</select>';

        echo $output;
    }

    /**
     * Echo html for selecting language from all available language in settings.
     *
     * @param string $ls_type       shortcode_options | menu_options | floater_options
     * @param string $ls_setting    The selected language switcher customization setting (get_language_switcher_options())
     */
    public function output_language_switcher_floater_possition( $ls_position ){
        $ls_options = array(
            'bottom-right'  => array( 'label' => __( 'Bottom Right', 'translatepress-multilingual' ) ),
            'bottom-left'   => array( 'label' => __( 'Bottom Left', 'translatepress-multilingual' ) ),
            'top-right'     => array( 'label' => __( 'Top Right', 'translatepress-multilingual' ) ),
            'top-left'      => array( 'label' => __( 'Top Left', 'translatepress-multilingual' ) ),

        );

        $output = '<select id="floater-position" name="trp_settings[floater-position]" class="trp-select trp-ls-select-option">';
        foreach( $ls_options as $key => $ls_option ){
            $selected = ( $ls_position == $key ) ? 'selected' : '';
            $output .= '<option value="' . esc_attr( $key ) . '" ' . esc_attr( $selected ) . ' >' . esc_html( $ls_option['label'] ). '</option>';
        }
        $output .= '</select>';

        echo $output;
    }

    /**
     * Returns settings_option.
     *
     * @return array        Settings option.
     */
    public function get_settings(){
        if ( $this->settings == null ){
            $this->set_options();
        }
        return $this->settings;
    }

    /**
     * Returns the value of an individual setting or the default provided.
     *
     * @param string $name
     * @param default mixed
     *
     * @return mixed Setting Value
     */
    public function get_setting($name, $default = null){
        if( array_key_exists($name, $this->settings ) ){
            return maybe_unserialize($this->settings[$name]);
        } else {
            return $default;
        }
    }

    /**
     * Register Settings subpage for TranslatePress
     */
    public function register_menu_page(){
        add_options_page( 'TranslatePress', 'TranslatePress', apply_filters( 'trp_settings_capability', 'manage_options' ), 'translate-press', array( $this, 'settings_page_content' ) );

        add_submenu_page( 'TRPHidden', 'TranslatePress Addons', 'TRPHidden', 'manage_options', 'trp_addons_page', array($this, 'addons_page_content') );
    }

    /**
     * Settings page content.
     */
    public function settings_page_content(){
	    if ( ! $this->trp_languages ){
            $trp                 = TRP_Translate_Press::get_trp_instance();
            $this->trp_languages = $trp->get_component( 'languages' );
        }

        $languages = $this->trp_languages->get_languages( 'english_name' );

        require_once TRP_PLUGIN_DIR . 'partials/main-settings-page.php';
    }

    /**
     * Addons page content.
     */
    public function addons_page_content(){
        require_once TRP_PLUGIN_DIR . 'partials/addons-settings-page.php';
    }

    /**
     * Register settings option.
     */
    public function register_setting(){
        register_setting( 'trp_settings', 'trp_settings', array( $this, 'sanitize_settings' ) );
    }

    /**
     * Sanitizes settings option after save.
     *
     * Updates menu items for languages to be used in Menus.
     *
     * @param array $settings       Raw settings option.
     * @return array                Sanitized option page.
     */
    public function sanitize_settings( $settings ){
        if ( ! $this->trp_query ) {
            $trp = TRP_Translate_Press::get_trp_instance();
            $this->trp_query = $trp->get_component( 'query' );
        }
        if ( ! $this->trp_languages ){
            $trp = TRP_Translate_Press::get_trp_instance();
            $this->trp_languages = $trp->get_component( 'languages' );
        }
        if ( !isset ( $settings['default-language'] ) ) {
            $settings['default-language'] = 'en_US';
        }
        if ( !isset ( $settings['translation-languages'] ) ){
            $settings['translation-languages'] = array();
        }
        if ( !isset ( $settings['publish-languages'] ) ){
            $settings['publish-languages'] = array();
        }

        $settings['translation-languages'] = array_filter( array_unique( $settings['translation-languages'] ) );
        $settings['publish-languages'] = array_filter( array_unique( $settings['publish-languages'] ) );

        if ( ! in_array( $settings['default-language'], $settings['translation-languages'] ) ){
            array_unshift( $settings['translation-languages'], $settings['default-language'] );
        }
        if ( ! in_array( $settings['default-language'], $settings['publish-languages'] ) ){
            array_unshift( $settings['publish-languages'], $settings['default-language'] );
        }

        if( !empty( $settings['native_or_english_name'] ) )
            $settings['native_or_english_name'] = sanitize_text_field( $settings['native_or_english_name']  );
        else
            $settings['native_or_english_name'] = 'english_name';

        if( !empty( $settings['add-subdirectory-to-default-language'] ) )
            $settings['add-subdirectory-to-default-language'] = sanitize_text_field( $settings['add-subdirectory-to-default-language']  );
        else
            $settings['add-subdirectory-to-default-language'] = 'no';

        if( !empty( $settings['force-language-to-custom-links'] ) )
            $settings['force-language-to-custom-links'] = sanitize_text_field( $settings['force-language-to-custom-links']  );
        else
            $settings['force-language-to-custom-links'] = 'no';


        if ( !empty( $settings['trp-ls-floater'] ) ){
            $settings['trp-ls-floater'] = sanitize_text_field( $settings['trp-ls-floater'] );
        }else{
            $settings['trp-ls-floater'] = 'no';
        }

        $language_switcher_options = $this->get_language_switcher_options();
        if ( ! isset( $language_switcher_options[ $settings['shortcode-options'] ] ) ){
            $settings['shortcode-options'] = 'flags-full-names';
        }
        if ( ! isset( $language_switcher_options[ $settings['menu-options'] ] ) ){
            $settings['menu-options'] = 'flags-full-names';
        }
        if ( ! isset( $language_switcher_options[ $settings['floater-options'] ] ) ){
            $settings['floater-options'] = 'flags-full-names';
        }

        if ( ! isset( $settings['floater-position'] ) ){
            $settings['floater-position'] = 'bottom-right';
        }

        if ( ! isset( $settings['url-slugs'] ) ){
            $settings['url-slugs'] = $this->trp_languages->get_iso_codes( $settings['translation-languages'] );
        }

        foreach( $settings['translation-languages'] as $language_code ){
            if ( empty ( $settings['url-slugs'][$language_code] ) ){
                $settings['url-slugs'][$language_code] = $language_code;
            }else{
                $settings['url-slugs'][$language_code] = sanitize_title( strtolower( $settings['url-slugs'][$language_code] )) ;
            }
        }

        // check for duplicates in url slugs
        $duplicate_exists = false;
        foreach( $settings['url-slugs'] as $urlslug ) {
            if ( count ( array_keys( $settings['url-slugs'], $urlslug ) ) > 1 ){
                $duplicate_exists = true;
                break;
            }
        }
        if ( $duplicate_exists ){
            foreach( $settings['translation-languages'] as $language_code ) {
                $settings['url-slugs'][$language_code] = $language_code;
            }
        }

        $this->create_menu_entries( $settings['publish-languages'] );

        require_once( ABSPATH . 'wp-includes/load.php' );
        foreach ( $settings['translation-languages'] as $language_code ){
            if ( $settings['default-language'] != $language_code ) {
                $this->trp_query->check_table( $settings['default-language'], $language_code );
            }
            wp_download_language_pack( $language_code );
            $this->trp_query->check_gettext_table( $language_code );
        }

        // regenerate permalinks in case something changed
        flush_rewrite_rules();

        return apply_filters( 'trp_extra_sanitize_settings', $settings );
    }

    /**
     * Output admin notices after saving settings.
     */
    public function admin_notices(){
        settings_errors( 'trp_settings' );
    }

    /**
     * Set options array variable to be used across plugin.
     *
     * Sets a default option if it does not exist.
     */
    protected function set_options(){
        $settings_option = get_option( 'trp_settings', 'not_set' );

        // initialize default settings
        $default = get_locale();
        if ( empty( $default ) ){
            $default = 'en_US';
        }
        $default_settings = array(
            'default-language'                     => $default,
            'translation-languages'                => array( $default ),
            'publish-languages'                    => array( $default ),
            'native_or_english_name'               => 'english_name',
            'add-subdirectory-to-default-language' => 'no',
            'force-language-to-custom-links'       => 'yes',
            'trp-ls-floater'                       => 'yes',
            'shortcode-options'                    => 'flags-full-names',
            'menu-options'                         => 'flags-full-names',
            'floater-options'                      => 'flags-full-names',
            'floater-position'                     => 'bottom-right',
            'url-slugs'                            => array( 'en_US' => 'en', '' ),
        );



        /* BEGIN Upgrade settings from TP version 1.5.8 or earlier to 1.6.1+*/
        $machine_translation_settings = get_option( 'trp_machine_translation_settings', false );

        // move the old API key option
        if( !empty( $settings_option['g-translate-key'] ) && empty( $machine_translation_settings['google-translate-key'] ) ){
            $machine_translation_settings['google-translate-key'] = $settings_option['g-translate-key'];

            update_option( 'trp_machine_translation_settings', $machine_translation_settings );
        }

        // enable machine translation if it was activated before
        if( !empty( $settings_option['g-translate'] ) && $settings_option['g-translate'] == 'yes' && ( isset( $machine_translation_settings['machine-translation'] ) && $machine_translation_settings['machine-translation'] != 'yes' ) ){
            $machine_translation_settings['machine-translation'] = 'yes';

            update_option( 'trp_machine_translation_settings', $machine_translation_settings );
        }

        // set date if missing because of migration of machine translation settings from trp_settings option to trp_machine_translation_settings option
        if ( !empty($machine_translation_settings) && empty( $machine_translation_settings['machine_translation_counter_date'] ) ){
            $machine_translation_settings['machine_translation_counter_date'] = date ("Y-m-d" );
            $machine_translation_settings['machine_translation_counter'] = 0;
            update_option( 'trp_machine_translation_settings', $machine_translation_settings );
        }
        /* END Upgrade settings */



        if ( 'not_set' == $settings_option ){
            update_option ( 'trp_settings', $default_settings );
            $settings_option = $default_settings;
        }else{
            // Add any missing default option for trp_setting
            foreach ( $default_settings as $key_default_setting => $value_default_setting ){
                if ( !isset ( $settings_option[$key_default_setting] ) ) {
                    $settings_option[$key_default_setting] = $value_default_setting;
                }
            }
        }

        // These options are not part of the actual trp_settings DB option. But they are included in $settings variable across TP
        $settings_option['trp_advanced_settings'] = get_option('trp_advanced_settings', array() );
        $settings_option['trp_machine_translation_settings'] = get_option('trp_machine_translation_settings', array(
            // default settings for trp_machine_translation_settings
            'machine-translation'   => 'no',
            'translation-engine'    => 'google_translate_v2',
            'block-crawlers'        => 'yes'
        ) );

        /* @deprecated Setting only used for compatibility with Deepl Add-on 1.0.0 */
        if ( $settings_option['trp_machine_translation_settings']['translation-engine'] === 'deepl' && defined( 'TRP_DL_PLUGIN_VERSION' ) && TRP_DL_PLUGIN_VERSION === '1.0.0' ) {
            $trp_languages = new TRP_Languages();
            $settings_option['machine-translate-codes'] = $trp_languages->get_iso_codes($settings_option['translation-languages']);
            if ( isset( $settings_option['trp_machine_translation_settings']['deepl-api-key'] ) ) {
                $settings_option['deepl-api-key'] = $settings_option['trp_machine_translation_settings']['deepl-api-key'];
            }
        }

        $this->settings = $settings_option;
    }

    /**
     * Enqueue scripts and styles for settings page.
     *
     * @param string $hook          Admin page.
     */
    public function enqueue_scripts_and_styles( $hook ) {
        if( in_array( $hook, [ 'settings_page_translate-press', 'admin_page_trp_license_key', 'admin_page_trp_addons_page', 'admin_page_trp_advanced_page', 'admin_page_trp_machine_translation', 'admin_page_trp_test_machine_api' ] ) ){
            wp_enqueue_style(
                'trp-settings-style',
                TRP_PLUGIN_URL . 'assets/css/trp-back-end-style.css',
                array(),
                TRP_PLUGIN_VERSION
            );
        }

        if( in_array( $hook, array( 'settings_page_translate-press', 'admin_page_trp_advanced_page', 'admin_page_trp_machine_translation' ) ) ) {
            wp_enqueue_script( 'trp-settings-script', TRP_PLUGIN_URL . 'assets/js/trp-back-end-script.js', array( 'jquery', 'jquery-ui-sortable' ), TRP_PLUGIN_VERSION );

            if ( ! $this->trp_languages ){
                $trp                 = TRP_Translate_Press::get_trp_instance();
                $this->trp_languages = $trp->get_component( 'languages' );
            }

            $all_language_codes = $this->trp_languages->get_all_language_codes();
            $iso_codes          = $this->trp_languages->get_iso_codes( $all_language_codes, false );

            wp_localize_script( 'trp-settings-script', 'trp_url_slugs_info', array( 'iso_codes' => $iso_codes, 'error_message_duplicate_slugs' => __( 'Error! Duplicate URL slug values.', 'translatepress-multilingual' ) ) );

            wp_enqueue_script( 'trp-select2-lib-js', TRP_PLUGIN_URL . 'assets/lib/select2-lib/dist/js/select2.min.js', array( 'jquery' ), TRP_PLUGIN_VERSION );
            wp_enqueue_style( 'trp-select2-lib-css', TRP_PLUGIN_URL . 'assets/lib/select2-lib/dist/css/select2.min.css', array(), TRP_PLUGIN_VERSION );

        }
    }

    /**
     * Output HTML for Translation Language option.
     *
     * Hooked to trp_language_selector.
     *
     * @param array $languages          All available languages.
     */
    public function languages_selector( $languages ){
        if ( ! $this->url_converter ) {
            $trp = TRP_Translate_Press::get_trp_instance();
            $this->url_converter = $trp->get_component('url_converter');
        }
        $selected_language_code = '';

        require_once TRP_PLUGIN_DIR . 'partials/main-settings-language-selector.php';
    }

    /**
     * Update language switcher menu items.
     *
     * @param array $languages          Array of language codes to create menu items for.
     */
    protected function create_menu_entries( $languages ){
        if ( ! $this->trp_languages ){
            $trp = TRP_Translate_Press::get_trp_instance();
            $this->trp_languages = $trp->get_component( 'languages' );
        }
        $published_languages = $this->trp_languages->get_language_names( $languages, 'english_name' );
        $published_languages['current_language'] = __( 'Current Language', 'translatepress-multilingual' );
        $languages[] = 'current_language';
        $posts = get_posts( array( 'post_type' =>'language_switcher',  'posts_per_page'   => -1  ) );

        foreach ( $published_languages as $language_code => $language_name ) {
            $existing_ls = null;
            foreach( $posts as $post ){
                if ( $post->post_content == $language_code ){
                    $existing_ls = $post;
                    break;
                }
            }

            $ls = array(
                'post_title' => $language_name,
                'post_content' => $language_code,
                'post_status' => 'publish',
                'post_type' => 'language_switcher'
            );
            if ( $existing_ls ){
                $ls['ID'] = $existing_ls->ID;
                wp_update_post( $ls );
            }else{
                wp_insert_post( $ls );
            }
        }

        foreach ( $posts as $post ){
            if ( ! in_array( $post->post_content, $languages ) ){
                wp_delete_post( $post->ID );
            }
        }
    }

    /**
     * Add navigation tabs in settings.
     *
     */
    public function add_navigation_tabs(){
        $tabs = array(
            array(
                'name'  => __( 'General', 'translatepress-multilingual' ),
                'url'   => admin_url( 'options-general.php?page=translate-press' ),
                'page'  => 'translate-press'
            ),
            array(
                'name'  => __( 'Translate Site', 'translatepress-multilingual' ),
                'url'   => add_query_arg( 'trp-edit-translation', 'true', home_url() ),
                'page'  => 'trp_translation_editor'
            ),
	        array(
		        'name'  => __( 'Addons', 'translatepress-multilingual' ),
		        'url'   => admin_url( 'admin.php?page=trp_addons_page' ),
		        'page'  => 'trp_addons_page'
	        ),
        );

        if( class_exists( 'TRP_LICENSE_PAGE' ) ) {
            $tabs[] = array(
                'name'  => __( 'License', 'translatepress-multilingual' ),
                'url'   => admin_url( 'admin.php?page=trp_license_key' ),
                'page'  => 'trp_license_key'
            );
        }

	    $tabs = apply_filters( 'trp_settings_tabs', $tabs );

        $active_tab = 'translate-press';
        if ( isset( $_GET['page'] ) ){
            $active_tab = esc_attr( wp_unslash( $_GET['page'] ) );
        }

        require TRP_PLUGIN_DIR . 'partials/settings-navigation-tabs.php';
    }

    /**
     * Plugin action links.
     *
     * Adds action links to the plugin list table
     *
     * Fired by `plugin_action_links` filter.
     *
     * @param array $links An array of plugin action links.
     *
     * @return array An array of plugin action links.
     */
    public function plugin_action_links( $links ) {
        $settings_link = sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'options-general.php?page=translate-press' ), __( 'Settings', 'translatepress-multilingual' ) );

        array_unshift( $links, $settings_link );

        $links['go_pro'] = sprintf( '<a href="%1$s" target="_blank" style="color: #e76054; font-weight: bold;">%2$s</a>', trp_add_affiliate_id_to_link('https://translatepress.com/pricing/?utm_source=wpbackend&utm_medium=clientsite&utm_content=tpeditor&utm_campaign=tpfree'), __( 'Pro Features', 'translatepress-multilingual' ) );

        return $links;
    }

}
