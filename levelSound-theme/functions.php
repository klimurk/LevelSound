<?php

//       *   add scripts and styles
// *==========================================================================

    add_action( 'after_setup_theme', 'myMenu' );
    add_action( 'wp_enqueue_scripts','add_scripts_and_styles');
    add_theme_support( 'custom-logo');


    function myMenu(){
        register_nav_menu( 'headerMenu', 'menu in header' );
    }
    function add_scripts_and_styles(){
        // *external scripts
        //*========================
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' ,false, null, false );
        wp_enqueue_script('jquery');

        wp_enqueue_script( 'plyr', 'https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.2/plyr.min.js' ,array('jquery'), null, 'footer' );

        wp_enqueue_script( 'html5media', 'https://cdnjs.cloudflare.com/ajax/libs/html5media/1.1.8/html5media.min.js' ,array('jquery'), null, 'footer' );

        wp_enqueue_script( 'slickslider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js' ,array('jquery'), null, 'footer' );


        // *libs scripts
        //*========================
        wp_enqueue_script('owl_carousel', get_template_directory_uri(  ).'/assets/js/libs/owl/owl.carousel.js', array('jquery'), null, 'footer');

        wp_enqueue_script('jqueryLazyMin', get_template_directory_uri(  ).'/assets/js/libs/lazy/jquery.lazy.js', array('jquery'), null, false);
        wp_enqueue_script('jqueryLazyPluginsMin', get_template_directory_uri(  ).'/assets/js/libs/lazy/jquery.lazy.plugins.js', array('jquery','jqueryLazyMin'), null,false);

        // *developer scripts
        //*========================
        wp_enqueue_script('app', get_template_directory_uri(  ).'/assets/js/app.js', array('jquery','owl_carousel'), null, 'footer');

        if(is_front_page()) {
            wp_enqueue_script('index', get_template_directory_uri(  ).'/assets/js/index/index.js', array('app'), null, 'footer');
            wp_enqueue_script('index_anim', get_template_directory_uri(  ).'/assets/js/index/index_anim.js', array('index'), null, 'footer');
        }
        if(is_page_template('works.php')){
            wp_enqueue_script('works', get_template_directory_uri(  ).'/assets/js/works/works.js', array('app'), null, 'footer');
            wp_enqueue_script('works_anim', get_template_directory_uri(  ).'/assets/js/works/works_anim.js', array('works'), null, 'footer');
        }
        if(is_page_template('aboutUs.php')){
            wp_enqueue_script('aboutUs', get_template_directory_uri(  ).'/assets/js/aboutUs/aboutUs.js', array('app'), null, 'footer');
            wp_enqueue_script('aboutUs_anim', get_template_directory_uri(  ).'/assets/js/aboutUs/aboutUs_anim.js', array('aboutUs'), null, 'footer');
        }
        if(is_page_template('contacts.php')){
            wp_enqueue_script('contacts', get_template_directory_uri(  ).'/assets/js/contacts/contacts.js', array('app'), null, 'footer');
            wp_enqueue_script('contacts_anim', get_template_directory_uri(  ).'/assets/js/contacts/contacts_anim.js', array('contacts'), null, 'footer');
        }
        if(is_page_template('service.php')){
            wp_enqueue_script('service', get_template_directory_uri(  ).'/assets/js/service/service.js', array('app'), null, 'footer');
            wp_enqueue_script('service_anim', get_template_directory_uri(  ).'/assets/js/service/service_anim.js', array('service'), null, 'footer');
        }
        if(is_page_template('techraider.php')){
            wp_enqueue_script('techraider', get_template_directory_uri(  ).'/assets/js/techraider/techraider.js', array('app'), null, 'footer');
            wp_enqueue_script('techraider_anim', get_template_directory_uri(  ).'/assets/js/techraider/techraider_anim.js', array('app'), null, 'footer');
        }

        // *external styles
        //*========================
        wp_enqueue_style( 'plyrCSS', get_template_directory_uri(  ).'/assets/css/plyr.css', array());
        wp_enqueue_style( 'slicksliderCSS', get_template_directory_uri(  ).'/assets/css/slickslider.css', array());
        wp_enqueue_style( 'slicksliderthemeCSS', get_template_directory_uri(  ).'/assets/css/slicksliderTheme.css', array());


        // *libs styles
        //*========================
        wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri(  ).'/assets/css/owl.carousel.min.css', array());
        wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri(  ).'/assets/css/owl.theme.default.min.css', array('owl-carousel-min'));



        // *developer styles
        //*========================
        wp_enqueue_style( 'preloaderCss', get_template_directory_uri(  ).'/assets/css/preloader.css', array(), rand(111,9999), 'all');

        wp_enqueue_style( 'style', get_stylesheet_uri(), array('owl-carousel-min','owl-carousel-theme', 'plyrCSS'), rand(111,9999), 'all' );
    }


    // add_filter("wpcf7_ajax_json_echo", function ($response, $result) {


    //     $response["message"] = "a custom message";


    //     return $response;

    // });

    function so48515097_cf7_select_values($tag)
{
    if ($tag['basetype'] != 'select') {
        return $tag;
    }

    $values = [];
    $labels = [];
    foreach ($tag['raw_values'] as $raw_value) {
        $raw_value_parts = explode('|', $raw_value);
        if (count($raw_value_parts) >= 2) {
            $values[] = $raw_value_parts[1];
            $labels[] = $raw_value_parts[0];
        } else {
            $values[] = $raw_value;
            $labels[] = $raw_value;
        }
    }
    $tag['values'] = $values;
    $tag['labels'] = $labels;

    // Optional but recommended:
    //    Display labels in mails instead of values
    //    You can still use values using [_raw_tag] instead of [tag]
    $reversed_raw_values = array_map(function ($raw_value) {
        $raw_value_parts = explode('|', $raw_value);
        return implode('|', array_reverse($raw_value_parts));
    }, $tag['raw_values']);
    $tag['pipes'] = new \WPCF7_Pipes($reversed_raw_values);

    return $tag;
}
add_filter('wpcf7_form_tag', 'so48515097_cf7_select_values', 10);




// add_action( 'wp_enqueue_scripts', 'wp_enqueue_scripts_func' );
// *         polylang register strings
// *=================================================================================================================

    // *==========   INDEX ====================================
    //          * group: Intro
    // =========================================
    pll_register_string(
        'intro_text',
        'Intro text',
        'Intro',
        false
    );

    //          * group: Benefits
    // =========================================

    pll_register_string(
        'benefits_title_1',
        'Benefits title 1',
        'Benefits',
        false
    );
    pll_register_string(
        'benefits_title_2',
        'Benefits title 2',
        'Benefits',
        false
    );
    pll_register_string(
        'benefits_text_1',
        'Benefits text 1',
        'Benefits',
        true
    );
    pll_register_string(
        'benefits_text_2',
        'Benefits text 2',
        'Benefits',
        true
    );
    pll_register_string(
        'benefits_text_3',
        'Benefits text 3',
        'Benefits',
        true
    );
    pll_register_string(
        'benefits_text_4',
        'Benefits text 4',
        'Benefits',
        true
    );
    pll_register_string(
        'benefits_text_5',
        'Benefits text 5',
        'Benefits',
        true
    );
    pll_register_string(
        'benefits_text_6',
        'Benefits text 6',
        'Benefits',
        true
    );
    pll_register_string(
        'benefits_btn_text',
        'Benefits btn text',
        'Benefits',
        false
    );
    pll_register_string(
        'benefits_carousel_text1',
        'Benefits carousel text1',
        'Benefits',
        true
    );
    pll_register_string(
        'benefits_carousel_text2',
        'Benefits carousel text2',
        'Benefits',
        true
    );
    //          * group: People
    // =========================================
    pll_register_string(
        'people_slider_name1',
        'People slider name1',
        'People',
        false
    );
    pll_register_string(
        'people_slider_text1',
        'People slider text1',
        'People',
        true
    );
    pll_register_string(
        'people_slider_social1',
        'People slider social1',
        'People',
        false
    );
    pll_register_string(
        'people_slider_name2',
        'People slider name2',
        'People',
        false
    );
    pll_register_string(
        'people_slider_text2',
        'People slider text2',
        'People',
        true
    );
    pll_register_string(
        'people_slider_social2',
        'People slider social2',
        'People',
        false
    );
    pll_register_string(
        'people_slider_name3',
        'People slider name3',
        'People',
        false
    );
    pll_register_string(
        'people_slider_text3',
        'People slider text3',
        'People',
        true
    );
    pll_register_string(
        'people_slider_social3',
        'People slider social3',
        'People',
        false
    );
    pll_register_string(
        'people_slider_name4',
        'People slider name4',
        'People',
        false
    );
    pll_register_string(
        'people_slider_text4',
        'People slider text4',
        'People',
        true
    );
    pll_register_string(
        'people_slider_social4',
        'People slider social4',
        'People',
        false
    );
    pll_register_string(
        'people_slider_name5',
        'People slider name5',
        'People',
        false
    );
    pll_register_string(
        'people_slider_text5',
        'People slider text5',
        'People',
        true
    );
    pll_register_string(
        'people_slider_social5',
        'People slider social5',
        'People',
        false
    );
    pll_register_string(
        'people_slider_name6',
        'People slider name6',
        'People',
        false
    );
    pll_register_string(
        'people_slider_text6',
        'People slider text6',
        'People',
        true
    );
    pll_register_string(
        'people_slider_social6',
        'People slider social6',
        'People',
        false
    );
    //          * group: Clients
    // =========================================
    pll_register_string(
        'clients_title',
        'Clients title',
        'Clients',
        false
    );
    pll_register_string(
        'clients_subtitle',
        'Clients subtitle',
        'Clients',
        false
    );
    pll_register_string(
        'clients_text',
        'Clients text',
        'Clients',
        true
    );
    pll_register_string(
        'clients_btn',
        'Clients btn',
        'Clients',
        false
    );
    //          * group: Cassett
    // =========================================
    pll_register_string(
        'cassette_adress',
        'Cassette adress',
        'Cassette',
        false
    );
    pll_register_string(
        'cassette_email',
        'Cassette email',
        'Cassette',
        false
    );
    pll_register_string(
        'cassette_phone',
        'Cassette phone',
        'Cassette',
        false
    );
    // *==========   porfolio ====================================
    //          * group: portfolio
    // =========================================
    pll_register_string(
        'portfolio_title',
        'Portfolio title',
        'Portfolio',
        false
    );
    pll_register_string(
        'portfolio_player',
        'Portfolio player',
        'Portfolio',
        false
    );
    // *==========   Service ====================================
    //          * group: service
    // =========================================
    pll_register_string(
        'service_service_title',
        'Service service title',
        'Service',
        false
    );
    pll_register_string(
        'service_service_text',
        'Service service text',
        'Service',
        true
    );
    pll_register_string(
        'service_order',
        'Service order',
        'Service',
        false
    );
    pll_register_string(
        'service_open',
        'Service open',
        'Service',
        false
    );
    pll_register_string(
        'service_close',
        'Service close',
        'Service',
        false
    );
    pll_register_string(
        'service_service1_title',
        'Service service1 title',
        'Service',
        false
    );
    pll_register_string(
        'service_service2_title',
        'Service service2 title',
        'Service',
        false
    );
    pll_register_string(
        'service_service3_title',
        'Service service3 title',
        'Service',
        false
    );
    pll_register_string(
        'service_service4_title',
        'Service service4 title',
        'Service',
        false
    );
    pll_register_string(
        'service_service5_title',
        'Service service5 title',
        'Service',
        false
    );
    pll_register_string(
        'service_service1_service1',
        'Service service1 service1',
        'Service',
        false
    );
    pll_register_string(
        'service_service1_price1',
        'Service service1 price1',
        'Service',
        false
    );
    pll_register_string(
        'service_service2_service1',
        'Service service2 service1',
        'Service',
        false
    );
    pll_register_string(
        'service_service2_price1',
        'Service service2 price1',
        'Service',
        false
    );
    pll_register_string(
        'service_service2_service2',
        'Service service2 service2',
        'Service',
        false
    );
    pll_register_string(
        'service_service2_price2',
        'Service service2 price2',
        'Service',
        false
    );

    pll_register_string(
        'service_service3_service1',
        'Service service3 service1',
        'Service',
        false
    );
    pll_register_string(
        'service_service3_price1',
        'Service service3 price1',
        'Service',
        false
    );
    pll_register_string(
        'service_service3_service2',
        'Service service3 service2',
        'Service',
        false
    );
    pll_register_string(
        'service_service3_price2',
        'Service service3 price2',
        'Service',
        false
    );
    pll_register_string(
        'service_service4_service1',
        'Service service4 service1',
        'Service',
        false
    );
    pll_register_string(
        'service_service4_price1',
        'Service service4 price1',
        'Service',
        false
    );
    pll_register_string(
        'service_service4_service2',
        'Service service4 service2',
        'Service',
        false
    );
    pll_register_string(
        'service_service4_price2',
        'Service service4 price2',
        'Service',
        false
    );
    pll_register_string(
        'service_service4_service3',
        'Service service4 service3',
        'Service',
        false
    );
    pll_register_string(
        'service_service4_price3',
        'Service service4 price3',
        'Service',
        false
    );
    pll_register_string(
        'service_service5_service1',
        'Service service5 service1',
        'Service',
        false
    );
    pll_register_string(
        'service_service5_price1',
        'Service service5 price1',
        'Service',
        false
    );
    pll_register_string(
        'service_service5_service2',
        'Service service5 service2',
        'Service',
        false
    );
    pll_register_string(
        'service_service5_price2',
        'Service service5 price2',
        'Service',
        false
    );
    pll_register_string(
        'service_service5_service3',
        'Service service5 service3',
        'Service',
        false
    );
    pll_register_string(
        'service_service5_price3',
        'Service service5 price3',
        'Service',
        false
    );
    pll_register_string(
        'service_service12_name',
        'Service service12 name',
        'Service',
        false
    );
    pll_register_string(
        'service_service12_price',
        'Service service12 price',
        'Service',
        false
    );
    // *==========   Contacts ====================================
    //          * group: contactform
    // =========================================
    pll_register_string(
        'contacts_title',
        'Contacts title',
        'Contacts',
        false
    );
    // *==========   techraider ====================================
    //          * group: techraider
    // =========================================
    pll_register_string(
        'techraider_title',
        'Techraider title',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_category_microphones',
        'Techraider category_microphones',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_name1',
        'Techraider microphone_name1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_text1',
        'Techraider microphone_text1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_name2',
        'Techraider microphone_name2',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_text2',
        'Techraider microphone_text2',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_name3',
        'Techraider microphone_name3',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_text3',
        'Techraider microphone_text3',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_name4',
        'Techraider microphone_name4',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_text4',
        'Techraider microphone_text4',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_name5',
        'Techraider microphone_name5',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_text5',
        'Techraider microphone_text5',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_name6',
        'Techraider microphone_name6',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_text6',
        'Techraider microphone_text6',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_name7',
        'Techraider microphone_name7',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_text7',
        'Techraider microphone_text7',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_name8',
        'Techraider microphone_name8',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_microphone_text8',
        'Techraider microphone_text8',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_category_instruments',
        'Techraider category_instruments',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_instruments_name1',
        'Techraider instruments_name1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_instruments_text1',
        'Techraider instruments_text1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_instruments_name2',
        'Techraider instruments_name2',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_instruments_text2',
        'Techraider instruments_text2',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_category_audiocards',
        'Techraider category_audiocards',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_audiocards_name1',
        'Techraider audiocards_name1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_audiocards_text1',
        'Techraider audiocards_text1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_audiocards_name2',
        'Techraider audiocards_name2',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_audiocards_text2',
        'Techraider audiocards_text2',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_audiocards_name3',
        'Techraider audiocards_name3',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_audiocards_text3',
        'Techraider audiocards_text3',
        'Techraider',
        false
    );

    pll_register_string(
        'techraider_category_mixer',
        'Techraider category_mixer',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_mixer_name1',
        'Techraider mixer_name1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_mixer_text1',
        'Techraider mixer_text1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_category_preamp',
        'Techraider category_preamp',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_preamp_name1',
        'Techraider preamp_name1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_preamp_text1',
        'Techraider preamp_text1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_preamp_name2',
        'Techraider preamp_name2',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_preamp_text2',
        'Techraider preamp_text2',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_preamp_name3',
        'Techraider preamp_name3',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_preamp_text3',
        'Techraider preamp_text3',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_preamp_name4',
        'Techraider preamp_name4',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_preamp_text4',
        'Techraider preamp_text4',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_preamp_name5',
        'Techraider preamp_name5',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_preamp_text5',
        'Techraider preamp_text5',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_category_monitoring',
        'Techraider category_monitoring',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_monitoring_name1',
        'Techraider monitoring_name1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_monitoring_text1',
        'Techraider monitoring_text1',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_monitoring_name2',
        'Techraider monitoring_name2',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_monitoring_text2',
        'Techraider monitoring_text2',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_monitoring_name3',
        'Techraider monitoring_name3',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_monitoring_text3',
        'Techraider monitoring_text3',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_monitoring_name4',
        'Techraider monitoring_name4',
        'Techraider',
        false
    );
    pll_register_string(
        'techraider_monitoring_text4',
        'Techraider monitoring_text4',
        'Techraider',
        false
    );
    // *==========   about us ====================================
    //          * group: text

    pll_register_string(
        'aboutus Title1',
        'AboutUs Title1',
        'AboutUs',
        false
    );
    pll_register_string(
        'aboutus Title2',
        'AboutUs Title2',
        'AboutUs',
        false
    );
    pll_register_string(
        'aboutus Title3',
        'AboutUs Title3',
        'AboutUs',
        false
    );
    pll_register_string(
        'aboutus Title4',
        'AboutUs Title4',
        'AboutUs',
        false
    );
    pll_register_string(
        'aboutus Title5',
        'AboutUs Title5',
        'AboutUs',
        false
    );
    pll_register_string(
        'aboutus Title6',
        'AboutUs Title6',
        'AboutUs',
        false
    );
    pll_register_string(
        'aboutus Title7',
        'AboutUs Title7',
        'AboutUs',
        false
    );
    pll_register_string(
        'aboutus_text1_1',
        'AboutUs text1_1',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text1_2',
        'AboutUs text1_2',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text1_3',
        'AboutUs text1_3',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text2_1',
        'AboutUs text2_1',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text2_2',
        'AboutUs text2_2',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text2_3',
        'AboutUs text2_3',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text3_1',
        'AboutUs text3_1',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text3_2',
        'AboutUs text3_2',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text3_3',
        'AboutUs text3_3',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text3_4',
        'AboutUs text3_4',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text4_1',
        'AboutUs text4_1',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text4_2',
        'AboutUs text4_2',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text5_1',
        'AboutUs text5_1',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text5_2',
        'AboutUs text5_2',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text5_3',
        'AboutUs text5_3',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text5_4',
        'AboutUs text5_4',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text5_5',
        'AboutUs text5_5',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text5_6',
        'AboutUs text5_6',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text6_1',
        'AboutUs text6_1',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text7_1',
        'AboutUs text7_1',
        'AboutUs',
        true
    );
    pll_register_string(
        'aboutus_text7_2',
        'AboutUs text7_2',
        'AboutUs',
        true
    );






// *==========   works ====================================
    //          * group: videos

    pll_register_string(
        'works_video1_name',
        'Works Video1 Name',
        'Works',
        false
    );
    pll_register_string(
        'works_video1_link',
        'Works Video1 Link',
        'Works',
        false
    );
    pll_register_string(
        'works_video2_name',
        'Works Video2 Name',
        'Works',
        false
    );
    pll_register_string(
        'works_video2_link',
        'Works Video2 Link',
        'Works',
        false
    );
    pll_register_string(
        'works_video3_name',
        'Works Video3 Name',
        'Works',
        false
    );
    pll_register_string(
        'works_video3_link',
        'Works Video3 Link',
        'Works',
        false
    );
    pll_register_string(
        'works_video4_name',
        'Works Video4 Name',
        'Works',
        false
    );
    pll_register_string(
        'works_video4_link',
        'Works Video4 Link',
        'Works',
        false
    );
    pll_register_string(
        'works_video5_name',
        'Works Video5 Name',
        'Works',
        false
    );
    pll_register_string(
        'works_video5_link',
        'Works Video5 Link',
        'Works',
        false
    );
    pll_register_string(
        'works_video6_name',
        'Works Video6 Name',
        'Works',
        false
    );
    pll_register_string(
        'works_video6_link',
        'Works Video6 Link',
        'Works',
        false
    );
    pll_register_string(
        'works_video7_name',
        'Works Video7 Name',
        'Works',
        false
    );
    pll_register_string(
        'works_video7_link',
        'Works Video7 Link',
        'Works',
        false
    );
    pll_register_string(
        'works_video8_name',
        'Works Video8 Name',
        'Works',
        false
    );
    pll_register_string(
        'works_video8_link',
        'Works Video8 Link',
        'Works',
        false
    );
    // *==========   cf7 datetime ====================================
    //          * group: videos

    pll_register_string(
        'datetime_month_jan',
        'datetime month jan',
        'datetime',
        false
    );
    pll_register_string(
        'datetime_month_jan_small',
        'datetime month jan small',
        'datetime',
        false
    );

?>