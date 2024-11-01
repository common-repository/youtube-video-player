<?php

    /*#################### Hire an Expert page ########################*/
	
class youtube_embed_hire_expert{

    /*############ Construct Function ##################*/
	
	function __construct($params){
		// Set the plugin URL
		if(isset($params['plugin_url']))
			$this->plugin_url=$params['plugin_url'];
		else
			$this->plugin_url=trailingslashit(dirname(plugins_url('',__FILE__)));
		// Set the plugin path
		if(isset($params['plugin_path']))
			$this->plugin_path=$params['plugin_path'];
		else
			$this->plugin_path=trailingslashit(dirname(plugin_dir_path('',__FILE__)));
		/*Ajax parameters*/
	}
	/*#################### Function for the Hire an Expert services ########################*/	
	
	public function controller_page(){
		$plugins_array=array(
			'custom_site_dev'=>array(
				'image_url'		=>	$this->plugin_url.'admin/styles/images/hire_expert/1.png',
				'title'			=>	'Custom WordPress Development',
				'description'	=>	'Hire a WordPress developer and he will do any custom development you need for you WordPress website.'
			),
			'custom_plug_dev'=>array(
				'image_url'		=>	$this->plugin_url.'admin/styles/images/hire_expert/2.png',
				'title'			=>	'WordPress Plugin Development',
				'description'	=>	'Our developers can create any WordPress plugin. They can also customize any plugin and add any functionality you need.'
			),
			'custom_theme_dev'=>array(
				'image_url'		=>	$this->plugin_url.'admin/styles/images/hire_expert/3.png',
				'title'			=>	'WordPress Theme Development',
				'description'	=>	'If you need a unique theme or any customization for a ready-made theme, our developers are ready to do it.'
			),
			'custom_theme_inst'=>array(
				'image_url'		=>	$this->plugin_url.'admin/styles/images/hire_expert/4.png',
				'title'			=>	'WordPress Theme Installation and Customization',
				'description'	=>	'If you need to install and customize a theme, just let us know, our specialists will customize it.'
			),
			'gen_wp_speed'=>array(
				'image_url'		=>	$this->plugin_url.'admin/styles/images/hire_expert/5.png',
				'title'			=>	'General WordPress Support',
				'description'	=>	'Our developers can provide general support. If you have any problems with your site, then our experts are ready to help.'
			),
			'speed_op'=>array(
				'image_url'		=>	$this->plugin_url.'admin/styles/images/hire_expert/6.png',
				'title'			=>	'WordPress Speed Optimization',
				'description'	=>	'Hire an expert from WpDevArt and let him take care of your website speed optimization.'
			),
			'mig_serv'=>array(
				'image_url'		=>	$this->plugin_url.'admin/styles/images/hire_expert/7.png',
				'title'			=>	'WordPress Migration Services',
				'description'	=>	'Our specialists can migrate websites from any platform to WordPress.'
			),
			'page_seo'=>array(
				'image_url'		=>	$this->plugin_url.'admin/styles/images/hire_expert/8.png',
				'title'			=>	'WordPress SEO',
				'description'	=>	'Hire SEO specialists and they will take care of the search engine optimization of your site.'
			)
		);
		$content='';
		
		$content.='<h1 class="wpdev_hire_exp_h1"> Hire an Expert from WpDevArt </h1>';
		$content.='<div class="hire_expert_main">';		
		foreach($plugins_array as $key=>$plugin) {
			$content.='<div class="wpdevart_hire_main"><a target="_blank" class="wpdev_hire_buklet" href="https://wpdevart.com/hire-wordpress-developer-dedicated-experts-are-ready-to-help/">';
			$content.='<div class="wpdevart_hire_image"><img src="'.$plugin["image_url"].'"></div>';
			$content.='<div class="wpdevart_hire_information">';
			$content.='<div class="wpdevart_hire_title">'.$plugin["title"].'</div>';			
			$content.='<p class="wpdevart_hire_description">'.$plugin["description"].'</p>';
			$content.='</div></a></div>';		
		} 
		$content.='<div><a target="_blank" class="wpdev_hire_button" href="https://wpdevart.com/hire-wordpress-developer-dedicated-experts-are-ready-to-help/">Hire an Expert</a></div>';
		$content.='</div>';
		
		echo $content;
	
	}
	
}


 ?>