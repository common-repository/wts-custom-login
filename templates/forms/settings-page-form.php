<?php
/**
 * The form template for custom login plugin settings page.
 *
 * @since 1.0.0
 *
 * @package WTS_Custom_Login_Plugin
 * @author  WTS Team
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>


<div class="wrap loginwrap">
	<div class="row">
		<div class="col-sm-12">
			<?php settings_errors(); ?>
			<?php wts_clp_show_error_messages(); ?>
			<?php do_action( 'wts_customize_loginpage_before_custom_wts_clp_loginpageSettings_form_form' ); ?>
			
			<h1 class="wtscustom_plgtitle"><?php _e( 'WTS Custom Login', 'wts-custom-login' ); ?></h1>
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-7 settingsdiv">
			
			<form id="wts_clp_loginpageSettings_form" action="options.php" name="wts_clp_settings_form" class="wts-clp-settings-form" method="POST" role="form" enctype="multipart/form-data">
			
				<?php settings_fields( 'wts_clp_options_group' );
					  do_settings_sections( 'wts_clp_options_group' );
				?>
			
				<div class="form-inner clearfix">			
					
					 
					<?php 
					/**
					* First check which theme selected then show checked that theme's checkbox
					*/
					$wts_clp_login_selected_theme	= get_option('wts_clp_login_selected_theme');
					$is_theme1_checked='';
					$is_theme2_checked='';
					$is_theme3_checked='';
					$is_theme4_checked='';
					$is_theme5_checked='';
					$is_theme6_checked='';
					
					if(get_option('wts_clp_login_selected_theme')=='theme1') {
						$is_theme1_checked		= 'checked';
						$theme1_area_active_cls	= 'active';
					} else if(get_option('wts_clp_login_selected_theme')=='theme2') {
						$is_theme2_checked	= 'checked';
						$theme2_area_active_cls	= 'active';
					} else if(get_option('wts_clp_login_selected_theme')=='theme3') {
						$is_theme3_checked		= 'checked';
						$theme3_area_active_cls	= 'active';
					} else if(get_option('wts_clp_login_selected_theme')=='theme4') {
						$is_theme4_checked		= 'checked';
						$theme4_area_active_cls	= 'active';
					} else if(get_option('wts_clp_login_selected_theme')=='theme5') {
						$is_theme5_checked		= 'checked';
						$theme5_area_active_cls	= 'active';
					} else if(get_option('wts_clp_login_selected_theme')=='theme6') {
						$is_theme6_checked		= 'checked';
						$theme6_area_active_cls	= 'active';
					} else {
						$is_theme1_checked		= 'checked'; //by default
						$theme1_area_active_cls	= 'active'; //by default
					}
					?>
					<div for="wts_clp_login_selected_theme" class="row sctnhdng"><?php _e( 'Pick a theme for your default wordpress login page and customize using below options', 'wts-custom-login-plugin' ); ?></div>
					<div class="row  form-group">
						<div class="col-sm-4 rmleft">
							<div class="radio_boxp_thm <?php echo $theme1_area_active_cls; ?>">
								<img src="<?php echo plugin_dir_url( wts_clp()->file ) .'/assets/themes/theme1/images/theme_image.jpeg'; ?>" alt="theme1" class="stngpg-thminpt-img">
								<?php			
								echo wts_clp()->fields->get_field( array(
										'type'		=> 'radio',
										'id'		=> 'wts_clp_login_selected_theme1',
										'name'		=> 'wts_clp_login_selected_theme',
										'value'		=> 'theme1',
										'required'	=> 'off',			
										'checked'	=> $is_theme1_checked,
										'extras'	=> 'style="display: none"',
										));	
								?>
							</div>
							<label for="wts_clp_login_selected_theme1" class="col-sm-9 stngpg-lblthm"><?php _e( 'Saline', 'wts-custom-login-plugin' ); ?></label>
							
						</div>

						<div class="col-sm-4 rmleft">						
							<div class="radio_boxp_thm <?php echo $theme2_area_active_cls; ?>">
								<img src="<?php echo plugin_dir_url( wts_clp()->file ) .'/assets/themes/theme2/images/theme_image.jpeg'; ?>" alt="theme2" class="stngpg-thminpt-img">
								<?php			
								echo wts_clp()->fields->get_field( array(
										'type'		=> 'radio',
										'id'		=> 'wts_clp_login_selected_theme2',
										'name'		=> 'wts_clp_login_selected_theme',
										'value'		=> 'theme2',
										'required'	=> 'off',			
										'checked'	=>$is_theme2_checked,
										'extras'	=> 'style="display: none"',
										));	
								?>
							</div>
							<label for="wts_clp_login_selected_theme2" class="col-sm-9 stngpg-lblthm"><?php _e( 'Brine', 'wts-custom-login-plugin' ); ?></label>
						</div>
						
						<div class="col-sm-4 rmleft">						
							<div class="radio_boxp_thm <?php echo $theme3_area_active_cls; ?>">
								<img src="<?php echo plugin_dir_url( wts_clp()->file ) .'/assets/themes/theme3/images/theme_image.jpeg'; ?>" alt="theme3" class="stngpg-thminpt-img">
								<?php			
								echo wts_clp()->fields->get_field( array(
										'type'		=> 'radio',
										'id'		=> 'wts_clp_login_selected_theme3',
										'name'		=> 'wts_clp_login_selected_theme',
										'value'		=> 'theme3',
										'required'	=> 'off',			
										'checked'	=> $is_theme3_checked,
										'extras'	=> 'style="display: none"',
										));	
								?>
							</div>
							<label for="wts_clp_login_selected_theme3" class="col-sm-9 stngpg-lblthm"><?php _e( 'Alkali', 'wts-custom-login-plugin' ); ?></label>
						</div>
					</div>
					<div class="row  form-group">					
						<div class="col-sm-4 rmleft">						
							<div class="radio_boxp_thm <?php echo $theme4_area_active_cls; ?>">
								<img src="<?php echo plugin_dir_url( wts_clp()->file ) .'/assets/themes/theme4/images/theme_image.jpeg'; ?>" alt="theme4" class="stngpg-thminpt-img">
								<?php			
								echo wts_clp()->fields->get_field( array(
										'type'		=> 'radio',
										'id'		=> 'wts_clp_login_selected_theme4',
										'name'		=> 'wts_clp_login_selected_theme',
										'value'		=> 'theme4',
										'required'	=> 'off',			
										'checked'	=>$is_theme4_checked,
										'extras'	=> 'style="display: none"',
										));	
								?>
							</div>
							<label for="wts_clp_login_selected_theme4" class="col-sm-9 stngpg-lblthm"><?php _e( 'Celico', 'wts-custom-login-plugin' ); ?></label>
						</div>
						<div class="col-sm-4 rmleft">
							
							<div class="radio_boxp_thm <?php echo $theme5_area_active_cls; ?>">
								<img src="<?php echo plugin_dir_url( wts_clp()->file ) .'/assets/themes/theme5/images/theme_image.jpeg'; ?>" alt="theme5" class="stngpg-thminpt-img">	
								<?php			
								echo wts_clp()->fields->get_field( array(
										'type'		=> 'radio',
										'id'		=> 'wts_clp_login_selected_theme5',
										'name'		=> 'wts_clp_login_selected_theme',
										'value'		=> 'theme5',
										'required'	=> 'off',			
										'checked'	=>$is_theme5_checked,
										'extras'	=> 'style="display: none"',
										));	
								?>
							</div>
							<label for="wts_clp_login_selected_theme5" class="col-sm-9 stngpg-lblthm"><?php _e( 'Flair', 'wts-custom-login-plugin' ); ?></label>
						</div>
						<div class="col-sm-4 rmleft">
							
							<div class="radio_boxp_thm <?php echo $theme6_area_active_cls; ?>">
								<img src="<?php echo plugin_dir_url( wts_clp()->file ) .'/assets/themes/theme6/images/theme_image.jpeg'; ?>" alt="theme6" class="stngpg-thminpt-img">
								<?php			
								echo wts_clp()->fields->get_field( array(
										'type'		=> 'radio',
										'id'		=> 'wts_clp_login_selected_theme6',
										'name'		=> 'wts_clp_login_selected_theme',
										'value'		=> 'theme6',
										'required'	=> 'off',			
										'checked'	=>$is_theme6_checked,
										'extras'	=> 'style="display: none"',
										));	
								?>
							</div>
							<label for="wts_clp_login_selected_theme6" class="col-sm-9 stngpg-lblthm"><?php _e( 'Glam', 'wts-custom-login-plugin' ); ?></label>
						</div>
					</div>
					 
					<div class="row form-group">
						<label for="wts_clp_loginPage_name" class="col-sm-3"><?php _e( 'Login Page Url', 'wts-custom-login-plugin' ); ?><span class="required-field">*</span></label>
						<div class="col-sm-9 input_boxp">
						<?php
							//check isset login page name by settings or directly at time of plugin creation					
							$login_page_name='';
							if( get_option( 'wts_clp_login_page_name_bySettingsPage' ) == '' ) {
								//fill default name for login page
								$login_page_name=get_option('wts_clp_login_page_name');
							} else {
								$login_page_name=get_option('wts_clp_login_page_name_bySettingsPage');
							}
							echo wts_clp()->fields->get_field( array(
								'type'		=> 'text',
								'id'		=> 'wts_clp_login_page_name_bySettingsPage',
								'name'		=> 'wts_clp_login_page_name_bySettingsPage',
								'value'		=> $login_page_name,
								'required'	=> 'on'
							) );
						?>
						<span class="clurls">Please <a href="javascript:void(0)" id="wtsSaveMyUrl" data-toggle="tooltip" title="Copying..." >click here</a> to copy or bookmark custom login url.<input type="text"  class="urlme" id="urlme"  value="<?php echo esc_url( site_url( $login_page_name ) );?>" /></span>							
                        </div>						
					</div>
					
					
					<!---- choose text or image to use as logo starts here -------------->
					<!---------login form logo area ends here --------->
					<div class="login_area_logo_set_section">
					<?php 					
					$wts_clp_text_or_image_aslogo	= get_option( 'wts_clp_text_or_image_aslogo' ); 
					
					//default
					$is_imgas_logo_ckd	= 'checked';
					$is_txtas_logo_ckd	= '';
					$is_imgas_logo_input_area_style	= 'display:block';
					$is_txtas_logo_input_area_style	= 'display:none';

					if( $wts_clp_text_or_image_aslogo == 'text' ) {
						$is_imgas_logo_ckd	= '';
						$is_txtas_logo_ckd	= 'checked';

						$is_imgas_logo_input_area_style	= 'display:none';
						$is_txtas_logo_input_area_style	= 'display:block';
					
					}
					?>
					<div class="row  form-group putmarginb">
						<label for="wts_clp_text_or_image_aslogo" class="col-sm-3"><?php _e( 'Use Text/Image As Logo:', 'wts-custom-login-plugin' ); ?></label>
						<div class="col-sm-2 rmleft">						
							<div class="radio_boxp">
							<?php			
							echo wts_clp()->fields->get_field( array(
									'type'		=> 'radio',
									'id'		=> 'wts_clp_text_or_image_aslogo_img',
									'name'		=> 'wts_clp_text_or_image_aslogo',
									'value'		=> 'image',
									'required'	=> 'off',			
									'checked'	=> $is_imgas_logo_ckd,
									));	
							?>
							</div>
							<label for="wts_clp_text_or_image_aslogo_img" class="col-sm-9 rmleft"><?php _e( 'Image', 'wts-custom-login-plugin' ); ?></label>
						</div>	

						<div class="col-sm-2 rmleft">						
							<div class="radio_boxp">
							<?php			
							echo wts_clp()->fields->get_field( array(
									'type'		=> 'radio',
									'id'		=> 'wts_clp_text_or_image_aslogo_txt',
									'name'		=> 'wts_clp_text_or_image_aslogo',
									'value'		=> 'text',
									'required'	=> 'off',			
									'checked'	=> $is_txtas_logo_ckd,
									));	
							?>
							</div>
							<label for="wts_clp_text_or_image_aslogo_txt" class="col-sm-9 rmleft"><?php _e( 'Text', 'wts-custom-login-plugin' ); ?></label>
						</div>	
						
					</div>					
					<!---- choose text or image to use as logo ends here-------------->
					
					<div class="row form-group img_aslogo_inptarea" style="<?php echo $is_imgas_logo_input_area_style; ?>" >
						<label for="wts_clp_logo" class="col-sm-3"><?php _e( 'Login Area Logo:', 'wts-custom-login-plugin' ); ?></label>
						<div class="col-sm-6 input_boxp">
						<?php			
							echo wts_clp()->fields->get_field( array(
								'type'		=> 'text',
								'id'		=> 'wts_clp_logo',
								'name'		=> 'wts_clp_logo',
								'value'		=> esc_url( get_option('wts_clp_logo') ),
								'class'		=> 'wts-clp-image-picker logo',
								'required'	=> 'off',
							) );
						?>
						</div>
						<div class="col-sm-3 uplodbtn">
						   <button class="wts-clp-image-picker-button button-secondary" data-for="#wts_clp_logo">Upload Logo</button>		
					    </div>
					</div>
					
					<div class="row form-group txt_aslogo_inptarea" style="<?php echo $is_txtas_logo_input_area_style; ?>" >
						<label for="wts_clp_text_aslogo" class="col-sm-3"><?php _e( 'Use This Text As Logo:', 'wts-custom-login-plugin' ); ?></label>
						<div class="col-sm-6 input_boxp">
						<?php
							$wts_clp_text_aslogo	= get_option('wts_clp_text_aslogo');
							echo wts_clp()->fields->get_field( array(
								'type'		=> 'text',
								'id'		=> 'wts_clp_text_aslogo',
								'name'		=> 'wts_clp_text_aslogo',
								'value'		=> $wts_clp_text_aslogo,
								'required'	=> 'off',
								'extras'	=> 'maxlength="100"'
							) );
						?>
						</div>
					</div>
					
					</div>					
					<!---------login form logo area ends here --------->
					
					<!--Admin bar logo upload area starts here-->		
					<div class="row form-group">
						<label for="wts_clp_adminbar_logo" class="col-sm-3"><?php _e( 'Admin Bar Logo:', 'wts-custom-login-plugin' ); ?></label>
						<div class="col-sm-6 input_boxp">
						<?php			
							echo wts_clp()->fields->get_field( array(
								'type'		=> 'text',
								'id'		=> 'wts_clp_adminbar_logo',
								'name'		=> 'wts_clp_adminbar_logo',
								'value'		=> esc_url( get_option('wts_clp_adminbar_logo') ),
								'class'		=> 'wts-clp-image-picker logo',
								'required'	=> 'off',
							) );
						?>
						</div>
						<div class="col-sm-3 uplodbtn">
						   <button class="wts-clp-image-picker-button button-secondary" data-for="#wts_clp_adminbar_logo">Upload Logo</button>		
					    </div>
					</div>					
					<!--Admin bar logo upload area ends here-->		
					
					
 
					<div class="row form-group">
						<label for="wts_clp_background_img" class="col-sm-3"><?php _e( 'Background Image:', 'wts-custom-login-plugin' ); ?></label>
						<div class="col-sm-6 input_boxp">
						<?php			
							echo wts_clp()->fields->get_field( array(
								'type'		=> 'text',
								'id'		=> 'wts_clp_background_img',
								'name'		=> 'wts_clp_background_img',
								'value'		=> esc_url( get_option('wts_clp_background_img') ),
								'class'		=> 'wts-clp-image-picker background_img',
								'required'	=> 'off',
							) );
						?>
						</div>
						<div class="col-sm-3 uplodbtn">
						   <button class="wts-clp-image-picker-button button-secondary" data-for="#wts_clp_background_img">Upload Image</button>		
					    </div>
					</div>
 
					<div class="row form-group">
						<label for="wts_clp_page_bgcolor" class="col-sm-3"><?php _e( 'Background Color:', 'wts-custom-login-plugin' ); ?></label>
						<div class="col-sm-9 input_boxpc">
						<?php			
							echo wts_clp()->fields->get_field( array(
								'type'		=> 'text',
								'id'		=> 'wts_clp_page_bgcolor',
								'name'		=> 'wts_clp_page_bgcolor',
								'value'		=> sanitize_hex_color( get_option('wts_clp_page_bgcolor') ),
								'class'		=> 'wts-clp-color-picker wp-color-picker',
								'required'	=> 'off',
							) );
						?>
						</div>
					</div>
 
					<div class="row form-group">
						<label for="wts_clp_login_background_img" class="col-sm-3"><?php _e( 'Login Box Background Image:', 'wts-custom-login-plugin' ); ?></label>
						<div class="col-sm-6 input_boxp">
						<?php			
							echo wts_clp()->fields->get_field( array(
								'type'		=> 'text',
								'id'		=> 'wts_clp_login_background_img',
								'name'		=> 'wts_clp_login_background_img',
								'value'		=> esc_url( get_option('wts_clp_login_background_img') ),
								'class'		=> 'wts-clp-image-picker ',
								'required'	=> 'off',
							) );
						?>
						</div>
						<div class="col-sm-3 uplodbtn">
						    <button class="wts-clp-image-picker-button button-secondary" data-for="#wts_clp_login_background_img">Upload Image</button>		
					    </div>
					</div>

					 
					<div class="row form-group">
						<label for="wts_clp_login_bgcolor" class="col-sm-3"><?php _e( 'Login Box Background Color:', 'wts-custom-login-plugin' ); ?></label>
						<div class="col-sm-9 input_boxpc">
						<?php			
							echo wts_clp()->fields->get_field( array(
								'type'		=> 'text',
								'id'		=> 'wts_clp_login_bgcolor',
								'name'		=> 'wts_clp_login_bgcolor',
								'value'		=> sanitize_hex_color( get_option('wts_clp_login_bgcolor') ),
								'class'		=> 'wts-clp-color-picker wp-color-picker',
								'required'	=> 'off',
							) );
						?>
						</div>
					</div>	
					 
					<div class="row form-group">
						<label for="wts_clp_color" class="col-sm-3"><?php _e( 'Color:', 'wts-custom-login-plugin' ); ?></label>
						<div class="col-sm-9 input_boxpc">
						<?php			
							echo wts_clp()->fields->get_field( array(
								'type'		=> 'text',
								'id'		=> 'wts_clp_color',
								'name'		=> 'wts_clp_color',
								'value'		=> sanitize_hex_color( get_option('wts_clp_color') ),
								'class'		=> 'wts-clp-color-picker wp-color-picker',
								'required'	=> 'off',
							) );
						?>
						</div>
					</div>
 
	
					<div class="row sctnhdng morespacetop">Secure Login</div>
					<div class="row captchabox">
						<?php
						$checked='';
						$disable='on';
						$checkboxValue=0;
						$activeClassCaptchaContainer = '';
						if( get_option( 'wts_clp_login_IsCaptchaRequired' ) == 1 )
						{
							$checkboxValue=1;
							$checked='checked';
							$disable='';
							$activeClassCaptchaContainer = 'active';	
						}
						
						echo wts_clp()->fields->get_field( array(
								'type'		=> 'checkbox',
								'id'		=> 'wts_clp_login_IsCaptchaRequired',
								'name'		=> 'wts_clp_login_IsCaptchaRequired',
								'value'		=> $checkboxValue,
								'required'	=> 'off',			
								'checked'	=>$checked,
							) );
						?>
						<label for="wts_clp_login_IsCaptchaRequired"><?php _e( 'Click here to enable reCaptcha on login screen', 'wts-custom-login' ); ?><br><span class="wts_clp_info">(<a target="_blank" href="<?php echo esc_url( 'https://www.google.com/recaptcha/admin#list' ); ?>"><?php _e( 'Click here', 'wts-custom-login' ); ?></a><?php _e( ' to get your API keys for Google ReCaptcha', 'wts-custom-login' ); ?> )</span></label>
						
					</div>
					 			
					<div id="wts_clp_captcha_keys_container" class="wts_clp_captcha_keys_container <?php echo $activeClassCaptchaContainer; ?>">
											
						<div class="row form-group">
							<label for="wts_clp_gcaptcha_publicKey" class="col-sm-3"><?php _e( 'Site Key', 'wts-custom-login-plugin' ); ?><span class="required-field">*</span></label>
							<div class="col-sm-9 input_boxp">
							<?php
								echo wts_clp()->fields->get_field( array(
									'type'		=> 'text',
									'id'		=> 'wts_clp_gcaptcha_publicKey',
									'name'		=> 'wts_clp_gcaptcha_publicKey',
									'value'		=> sanitize_text_field( get_option('wts_clp_gcaptcha_publicKey') ),
									'required'	=> 'off',				
								) );
							?>
							</div>
						</div>
						 
						<div class="row form-group">
							<label for="wts_clp_gcaptcha_privateKey" class="col-sm-3"><?php _e( 'Secret Key', 'wts-custom-login-plugin' ); ?><span class="required-field">*</span></label>
							<div class="col-sm-9 input_boxp">
							<?php			
								echo wts_clp()->fields->get_field( array(
									'type'		=> 'text',
									'id'		=> 'wts_clp_gcaptcha_privateKey',
									'name'		=> 'wts_clp_gcaptcha_privateKey',
									'value'		=> sanitize_text_field( get_option('wts_clp_gcaptcha_privateKey') ),
									'required'	=> 'off',
								) );
							?>
							</div>
						</div>
					</div>
					
					<!--wordpress update controller starts here--->	
					<?php
					$all_update_option = get_option( 'wts_clp_all_updates_enable_disable' );
					if( $all_update_option == 'enable' ) {
						$class_all_enable = 'btn_active';
						$class_all_disable = '';
					}
					else if( $all_update_option == 'disable' ){
						$class_all_enable = '';
						$class_all_disable = 'btn_active';						
					}
					else {
						//by defult
						$class_all_enable = 'btn_active';
						$class_all_disable = '';
						//and set input box value also
						$all_update_option = 'enable';	
					}
					?>					
					<div class="update_cntrl morespacetop">
						<div class="row sctnhdng">
							<?php _e( 'Wordpress Update Control', 'custom-login-plugin' ); ?>
							
						</div>
						<div class="row infobox"><?php _e( 'Automatic updates are great for WordPress security because many users never update their plugins or their WordPress installs. But due to cusomization in site, auto updates can break your site. Using below options you can disable automatic updates in WordPress )','wts-custom-login' ); ?></div>
						<div class="row form-group morespacetop">
							<label class="col-sm-3"><?php _e( 'All Automatic Updates', 'custom-login-plugin' ); ?></label>
							<div class="col-sm-9 li_btns">
								<li id="enable_all_updates" class="en_dis_btns <?php echo $class_all_enable; ?>" data-option="enable" data-input="#wts_clp_all_updates_enable_disable" data-opponent="#disable_all_updates"><?php _e( 'Enable' ); ?></li>
								<li id="disable_all_updates" class="en_dis_btns <?php echo $class_all_disable; ?>" data-option="disable" data-input="#wts_clp_all_updates_enable_disable" data-opponent="#enable_all_updates"><?php _e( 'Disable' ); ?></li>
								<input type="hidden" name="wts_clp_all_updates_enable_disable" id="wts_clp_all_updates_enable_disable" value="<?php echo $all_update_option; ?>"/>
								<p class="infobox"><?php _e( 'This will enable/disable all automatic WordPress updates.' ); ?></p>
							</div>
						</div>
												
						<!--wordpress plugin updates section starts here--->
						<?php
						$plugin_update_option = get_option( 'wts_clp_plugin_updates_enable_disable' );
						if( $plugin_update_option == 'enable' ) {
							$class_pl_enable	= 'btn_active';
							$class_pl_disable	= '';
						}
						else if( $plugin_update_option == 'disable' ){
							$class_pl_enable = '';
							$class_pl_disable = 'btn_active';						
						}
						else {
							//by defult
							$class_pl_enable = 'btn_active';
							$class_pl_disable = '';
							//and set input box value also
							$plugin_update_option = 'enable';	
						}						
						?>						
						<div class="row form-group">
							<label class="col-sm-3">
								<?php _e( 'Plugin Updates', 'custom-login-plugin' ); ?>
							</label>
							<div class="col-sm-9 li_btns">
								<li id="enable_plugin_updates" class="en_dis_btns <?php echo $class_pl_enable; ?>" data-option="enable" data-input="#wts_clp_plugin_updates_enable_disable" data-opponent="#disable_plugin_updates"><?php _e( 'Enable' ); ?></li>
								<li id="disable_plugin_updates" class="en_dis_btns <?php echo $class_pl_disable; ?>" data-option="disable" data-input="#wts_clp_plugin_updates_enable_disable" data-opponent="#enable_plugin_updates"><?php _e( 'Disable' ); ?></li>
								<input type="hidden" name="wts_clp_plugin_updates_enable_disable" id="wts_clp_plugin_updates_enable_disable" value="<?php echo $plugin_update_option; ?>"/><p class="infobox"><?php _e( 'This will enable/disable all plugin updates.' ); ?></p>
							</div>
						</div>
						
						<!---wordpress plugin updates section ends here--->

						<!---wordpress theme updates section ends here--->
						<?php
						$theme_update_option = get_option( 'wts_clp_theme_updates_enable_disable' );
						
						if( $theme_update_option == 'enable' ) {
							$class_th_enable = 'btn_active';
							$class_th_disable = '';
						}
						else if( $theme_update_option == 'disable' ){
							$class_th_enable = '';
							$class_th_disable = 'btn_active';						
						}
						else {
							//by defult
							$class_th_enable = 'btn_active';
							$class_th_disable = '';
							//and set input box value also
							$theme_update_option = 'enable';	
						}
												
						?>
						<div class="row form-group">
							<label class="col-sm-3">
								<?php _e( 'Theme Updates', 'custom-login-plugin' ); ?>
							</label>
							<div class="col-sm-9 li_btns">
								<li id="enable_theme_updates" class="en_dis_btns <?php echo $class_th_enable; ?>" data-option="enable" data-input="#wts_clp_theme_updates_enable_disable" data-opponent="#disable_theme_updates"><?php _e( 'Enable' ); ?></li>
								<li id="disable_theme_updates" class="en_dis_btns <?php echo $class_th_disable; ?>" data-option="disable" data-input="#wts_clp_theme_updates_enable_disable" data-opponent="#enable_theme_updates"><?php _e( 'Disable' ); ?></li>
								<input type="hidden" name="wts_clp_theme_updates_enable_disable" id="wts_clp_theme_updates_enable_disable" value="<?php echo $theme_update_option; ?>"/><p class="infobox"><?php _e( 'This will enable/disable all theme updates.' ); ?></p>
							</div>
						</div>
						
						<!---wordpress theme updates section ends here--->
					</div>
					<!--wordpress update controller ends here--->	
					
					<div class="row submit_btnwtsp">
						<p class="submit">
										<?php
								echo wts_clp()->fields->get_field( array(
									'type'		=> 'submit',
									'id'		=> 'wts_clp_settings_submit',
									'name'		=> 'submit_settings',
									'value'		=> __( 'Save Settings', 'wts-custom-login' ),
									'required'	=> 'on'
								) );
							?>	
						</p>
					</div>
				</div>	
			</form>
			<?php do_action( 'wts_customize_loginpage_before_custom_wts_clp_loginpageSettings_form_form' ); ?>
		</div>
		<!---------------------preview part starts here----------------------->
<?php
/**
* This will be used to show changes on login screen container.
*
*/
$selected_theme				= get_option('wts_clp_login_selected_theme');

$loginArea_logo				= get_option('wts_clp_logo');

if(empty(get_option('wts_clp_login_selected_theme')))
{
	//load content according theme1 by default
	$selected_theme='theme1';
}

//Login area logo image or text as logo
$wts_clp_text_or_image_aslogo	= get_option('wts_clp_text_or_image_aslogo');
$loginArea_logo					= get_option('wts_clp_logo');
$wts_clp_text_aslogo			= get_option('wts_clp_text_aslogo');
$isTextToUseAsLogo	= false;

if( $wts_clp_text_or_image_aslogo == "text" ) {
	//use given text as logo
	$isTextToUseAsLogo	= true;	
} else {
	if(empty(get_option('wts_clp_logo'))) {
		//set defult logo
		$loginArea_logo	= plugin_dir_url( wts_clp()->file ) .'assets/images/wts-clp-logo.png';
	}
	else {
		//set custom logo url
		$loginArea_logo = get_option( 'wts_clp_logo' );
	}
}


?>
		<div class="col-sm-5">
		<div class="boxpreview">
		
				<div class="col-sm-12 settings-preview-container">
					<div class="row bg settings-preview-login-screen theme<?php echo $selected_theme; ?>">
					<div class="wts-clp-login logo_img">
						<?php $blog_title = get_bloginfo( 'name' ); ?>
						<a class="site_logo" href="<?php echo esc_url( site_url() ); ?>" title="<?php echo esc_html( $blog_title ); ?>" tabindex="-1">
							<?php if( $isTextToUseAsLogo ) { ?>
								<span class="wts-clp-txtaslogo"><?php echo $wts_clp_text_aslogo; ?></span>
							<?php } else {?>
								<img src="<?php echo esc_url( $loginArea_logo ); ?>" >
							<?php } ?>
						</a>
					</div>					
					<form class="backdes " disabled>
						<div class="input-group margin-bottom-sm">
							  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
							  <input class="form-control" type="text" placeholder="Login" disabled>
						</div>
						<div class="input-group">
						  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
						  <input class="form-control" type="password" placeholder="Password" disabled>
						
						</div>					
						<div class="input-group wts-clp-captcha-preview">
						<?php if(get_option('wts_clp_login_IsCaptchaRequired') == 1 )//captcha to be shown
						{
						?>
							<div class="input-group wts-clp-captcha-container">
							<?php 
								//this will renders google recatpcha field with given public key
								$publickey = get_option( 'wts_clp_gcaptcha_publicKey' );		
								echo '<div class="g-recaptcha" data-sitekey="'.$publickey.'"></div>'; 		
							?>
							</div>
						<?php 
						}
						?>
						</div>
						<div class="second submitbn">	
						
							<input type="button" id="wts_clp_login_submit" name="submit" value="Login" class="wts-clp-field  required" style="width:100%;" disabled>
						</div>						
						<div class="forgot_themeopt">
							<span class="remember-user">
							<input type="checkbox" id="wts_clp_login_remember" name="remember_me" value="1" class="wts-clp-field "><label for="wts_clp_login_remember">Remember Me?</label>
							</span>
						   <span class="forgot"><a disabled href="javascript:void(0)">Forgot Password</a></span>
						</div>
					</form>
					
					</div>
				</div>
			<h3 class="wtscustom_plgtitle">Preview</h3>
		</div>

</div>