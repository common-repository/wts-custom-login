<?php
/**
 * On the fly page.
 *
 * @since 1.2.0
 *
 * @package WTS_Custom_Login_Plugin
 * @author  WTS Team
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//Define class
if (!class_exists('WCL_PAGE_ON_THE_FLY')){
    /**
    * WCL_PAGE_ON_THE_FLY
    * @author WTS Team
    * @since 1.2.0
    * Class to create pages "On the FLY"
    * Usage: 
    *   $args = array(
    *       'slug' => 'fake_slug',
    *       'post_title' => 'Fake Page Title',
    *       'post content' => 'This is the fake page content'
    *   );
    *   new WCL_PAGE_ON_THE_FLY($args);
    */
    class WCL_PAGE_ON_THE_FLY
    {

        public $slug ='';
        public $id ='';
        public $args = array();
        /**
         * __construct
         * @param array $arg post to create on the fly
         * @author WTS Team 
         * 
         */
        function __construct($args){ 
            add_filter('the_posts',array($this,'wcl_fly_page'));
            $this->args = $args;
            $this->id = $args['ID'];
            $this->slug = $args['slug'];
        }

        /**
         * wcl_fly_page 
         * the main function which catches the request and returns the page as if it was retrieved from the database
         * @param  array $posts 
         * @return array 
         * @author WTS Team
         */
        public function wcl_fly_page($posts){
            global $wp,$wp_query;
            $page_slug = $this->slug;
            $page_id = $this->id;
			
			if( empty( $page_slug ) ) {
				return false;
			}
			
			if( empty( $page_id ) ) {
				return false;
			}
			
            //check if user is requesting our fake page
            if( count($posts) == 0 && ( strtolower($wp->request) == $page_slug || ( !empty( $wp->query_vars['page_id'] ) && $wp->query_vars['page_id'] == $page_slug ) ) ){

                //create a fake post
                $post = new stdClass;
                $post->post_author = 1;
                $post->post_name = $page_slug;
                $post->guid = get_bloginfo('wpurl' . '/' . $page_slug);
                $post->post_title = 'page title';
                //put your custom content here
                //$post->post_content = "Fake Content";
                $post->post_content = "[wts_clp_user_login]";
                //just needs to be a number - negatives are fine
                //$post->ID = -42;
                $post->ID = $page_id;
                $post->post_status = 'static';
                $post->comment_status = 'closed';
                $post->ping_status = 'closed';
                $post->comment_count = 0;
                //dates may need to be overwritten if you have a "recent posts" widget or similar - set to whatever you want
                $post->post_date = current_time('mysql');
                $post->post_date_gmt = current_time('mysql',1);

                $post = (object) array_merge((array) $post, (array) $this->args);
                $posts = NULL;
                $posts[] = $post;

                $wp_query->is_page = true;
                $wp_query->is_singular = true;
                $wp_query->is_home = false;
                $wp_query->is_archive = false;
                $wp_query->is_category = false;
                unset($wp_query->query["error"]);
                $wp_query->query_vars["error"]="";
                $wp_query->is_404 = false;
            }

            return $posts;
        }
    }//end class
}//end if


//On the fly login page.		
$loginPageId	= get_option( 'wts_clp_login_page_id' );
$loginPageSlug	= get_option( 'wts_clp_login_page_name' );	

$loginPageTitle		= 'Custom Login Page-By WTS';
$loginPageContent	= 'Custom login page content.';

$args	= array(
	'ID'			=> $loginPageId,
	'slug'			=> $loginPageSlug,
	'post_title' 	=> $loginPageTitle,
	'post content'	=> $loginPageContent
);

//echo 'Test:';print_r( $args );

new WCL_PAGE_ON_THE_FLY( $args );