<?php

add_filter( 'arte_theme_mods', 'arte_mods_default', 10, 1 );

function arte_mods_default( $options ){

  /** Remove Defaults */
  $options[] = array(
  	'type'		=> 'remove',
  	'id'		=> 'header_textcolor'
  );
  $options[] = array(
  	'type'		=> 'remove',
  	'id'		=> 'background_color'
  );
  $options[] = array(
  	'type'		=> 'remove',
  	'id'		=> 'display_header_text'
  );

  /** Update Defaults */
  $options[] = array(
  	'type'		=> 'update_section',
  	'id'		=> 'colors',
  	'panel'		=> 'panel_colors',
  	'title'		=> esc_html__( 'Global Colors', 'arte' ),
  	'priority'	=> 0
  );
  $options[] = array(
  	'type'		=> 'update_section',
  	'id'		=> 'header_image',
  	'panel'		=> 'panel_header',
  	'priority'	=> 30
  );
  $options[] = array(
  	'type'		=> 'update_section',
  	'id'		=> 'background_image',
  	'priority'	=> 130
  );


  return $options;

}

?>
