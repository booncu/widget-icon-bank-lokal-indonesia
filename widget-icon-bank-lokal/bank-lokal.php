<?php
/*
Plugin Name: Bank lokal icon
Plugin URI: http://booncu.com
Description: widget icon bank lokal khusus indonesia untuk toko online.
Version:  1.0
Author: yusna maulana
Author URI: http://booncu.com
License: GNU General Public License v2.0 
License URI: http://www.opensource.org/licenses/gpl-license.php
*/

/* Define the extensions of image supported by this plugin */
define("BANK_LOKAL_BASE_DIR", "bank-lokal/");
define("BANK_LOKAL_DIR", "wp-content/plugins/" . BANK_LOKAL_BASE_DIR);
define("BANK_LOKAL_IMG_DIR", BANK_LOKAL_DIR . "images/");

///style css
add_action( 'wp_enqueue_scripts', 'stylesheet' );

/**
 * Enqueue plugin style-file
 */
function stylesheet() {
    // Respects SSL, Style.css is relative to the current file
    wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'prefix-style' );
}
///
class wp_bank_lokal extends WP_Widget {

	// constructor
	function wp_bank_lokal() {
		parent::WP_Widget(false, $name = __('Widget icon bank lokal', 'wp_bank_lokal') );
	}

	// widget form creation
	function form($instance) {	
	
	// Check values
if( $instance) {
     $title = esc_attr($instance['title']);
     $bca = esc_attr($instance['bca']);
     $mandiri = esc_attr($instance['mandiri']);
	 $bni = esc_attr($instance['bni']);
	 $bri = esc_attr($instance['bri']);
	 $bii = esc_attr($instance['bii']);
	 $cimb = esc_attr($instance['cimb']);
	 $dana = esc_attr($instance['dana']);
	 $pan = esc_attr($instance['pan']);
	 $perma = esc_attr($instance['perma']);
	 $btn = esc_attr($instance['btn']);
	 $mua = esc_attr($instance['mua']);
	 //$image_bca = esc_attr($instance['image_bca']);
} else {
     $title = '';
     $bca = '';
     $mandiri = '';
	 $bni ='';
	 $bri = '';
	 $bii = '';
	 $cimb = '';
	 $dana = '';
	 $pan = '';
	 $perma = '';
	 $btn = '';
	 $mua ='';
	 
}

?>

<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p><i><?php _e('contoh :1234567891 a/n booncu','wp_bank_lokal'); ?></i></p>	
<p>
<label for="<?php echo $this->get_field_id('bca'); ?>"><?php _e('No Rek BCA: ', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('bca'); ?>" name="<?php echo $this->get_field_name('bca'); ?>" type="text" value="<?php echo $bca; ?>" />
</p>

<label for="<?php echo $this->get_field_id('mandiri'); ?>"><?php _e('No Rek Mandiri:', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('mandiri'); ?>" name="<?php echo $this->get_field_name('mandiri'); ?>" type="text" value="<?php echo $mandiri; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('bni'); ?>"><?php _e('No Rek BNI:', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('bni'); ?>" name="<?php echo $this->get_field_name('bni'); ?>" type="text" value="<?php echo $bni; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('bri'); ?>"><?php _e('No Rek BRI:', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('bri'); ?>" name="<?php echo $this->get_field_name('bri'); ?>" type="text" value="<?php echo $bri; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('bii'); ?>"><?php _e('No Rek BII:', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('bii'); ?>" name="<?php echo $this->get_field_name('bii'); ?>" type="text" value="<?php echo $bii; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('cimb'); ?>"><?php _e('No Rek CIMB:', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('bni'); ?>" name="<?php echo $this->get_field_name('cimb'); ?>" type="text" value="<?php echo $cimb; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('dana'); ?>"><?php _e('No Rek Danamon:', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('dana'); ?>" name="<?php echo $this->get_field_name('dana'); ?>" type="text" value="<?php echo $dana; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('pan'); ?>"><?php _e('No Rek PaninBank:', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('pan'); ?>" name="<?php echo $this->get_field_name('pan'); ?>" type="text" value="<?php echo $pan; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('perma'); ?>"><?php _e('No Rek PermataBank:', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('perma'); ?>" name="<?php echo $this->get_field_name('perma'); ?>" type="text" value="<?php echo $perma; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('btn'); ?>"><?php _e('No Rek BTN:', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('btn'); ?>" name="<?php echo $this->get_field_name('btn'); ?>" type="text" value="<?php echo $btn; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('mua'); ?>"><?php _e('No Rek Bank Muamalat:', 'wp_bank_lokal'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('mua'); ?>" name="<?php echo $this->get_field_name('mua'); ?>" type="text" value="<?php echo $mua; ?>" />
</p>

		
<?php
	}

	// widget update
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
      // Fields
      $instance['title'] = strip_tags($new_instance['title']);
      $instance['bca'] = strip_tags($new_instance['bca']);
	  $instance['mandiri'] = strip_tags($new_instance['mandiri']);
	  $instance['bni'] = strip_tags($new_instance['bni']);
      $instance['bri'] = strip_tags($new_instance['bri']);
	  $instance['bii'] = strip_tags($new_instance['bii']);
	  $instance['cimb'] = strip_tags($new_instance['cimb']);
	  $instance['dana'] = strip_tags($new_instance['dana']);
	  $instance['pan'] = strip_tags($new_instance['pan']);
	  $instance['perma'] = strip_tags($new_instance['perma']);
	  $instance['btn'] = strip_tags($new_instance['btn']);
	  $instance['mua'] = strip_tags($new_instance['mua']);
	  //$instance['image_bca'] = strip_tags($new_instance['image_bca']);
     return $instance;

	}

	// widget display
	function widget($args, $instance) {
		extract( $args );
   // these are the widget options
   $title = apply_filters('widget_title', $instance['title']);
   $bca = $instance['bca'];
   $mandiri = $instance['mandiri'];
   $bni = $instance['bni'];
   $bri = $instance['bri'];
   $bii = $instance['bii'];
   $cimb = $instance['cimb'];
   $dana = $instance['dana'];
   $pan = $instance['pan'];
   $perma = $instance['perma'];
   $btn = $instance['btn'];
   $mua = $instance['mua'];
   //$image_bca = $instance['image_bca'];
   echo $before_widget;
   // Display the widget
   echo '<div class="widget-text wp_bank_lokal_box">';

   // Check if title is set
   if ( $title ) {
      echo $before_title . $title . $after_title;
   }

   
   if( $bca ) {
     echo '<div id="inner"><div class="img-bca"><div class="norek">'.$bca.'</div></div></div>';
   }
   
   if( $mandiri ) {
     
     echo '<div id="inner"><div class="img-mandiri"><div class="norek">'.$mandiri.'</div></div></div>';
   }
   
   if( $bni ) {
     
     echo '<div id="inner"><div class="img-bni"><div class="norek">'.$bni.'</div></div></div>';
   }
   
   if( $bri ) {
     
     echo '<div id="inner"><div class="img-bri"><div class="norek">'.$bri.'</div></div></div>';
   }
   
   if( $bii ) {
     
     echo '<div id="inner"><div class="img-bii"><div class="norek">'.$bii.'</div></div></div>';
   }
   
   if( $cimb ) {
     
     echo '<div id="inner"><div class="img-cimb"><div class="norek">'.$cimb.'</div></div></div>';
   }
   
   if( $dana ) {
     
     echo '<div id="inner"><div class="img-dana"><div class="norek">'.$dana.'</div></div></div>';
   }
   
   if( $pan ) {
     
     echo '<div id="inner"><div class="img-pan"><div class="norek">'.$pan.'</div></div></div>';
   }
   
   if( $perma ) {
     
     echo '<div id="inner"><div class="img-per"><div class="norek">'.$perma.'</div></div></div>';
   }
   
   if( $btn ) {
     
     echo '<div id="inner"><div class="img-btn"><div class="norek">'.$btn.'</div></div></div>';
   }
   
   if( $mua ) {
     
     echo '<div id="inner"><div class="img-mua"><div class="norek">'.$mua.'</div></div></div>';
   }
   
   echo '</div>';
   echo $after_widget;

	}
}

// register widget
//add_action('widgets_init', create_function('', 'return register_widget("wp_bank_lokal");'));

add_action( 'widgets_init', 'bank_lokal_widget' );
/**
 * Widget Registration.
 *
 * Register Simple Social Icons widget.
 *
 */
function bank_lokal_widget() {

	register_widget( 'wp_bank_lokal' );

}

?>
