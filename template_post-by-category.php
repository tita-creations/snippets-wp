<?php

add_filter('template_include','template_type_by_cat');
function template_type_by_cat( $template ) {
  if ( is_single() && in_category( 'categorie1' )  ) {
        $new_template = locate_template( array( 'single-categorie1.php' ) );
        if ( '' != $new_template ) {
            return $new_template ;
        }
    }    
    elseif ( is_single() && in_category( 'categorie2' )  ) {
        $new_template = locate_template( array( 'single-categorie2.php' ) );
        if ( '' != $new_template ) {
            return $new_template ;
        }
    }    
	elseif ( is_single() && in_category( 'categorie3' )  ) {
		$new_template = locate_template( array( 'single-categorie3.php' ) );
        if ( '' != $new_template ) {
            return $new_template ;
		}
	}
  return $template;
  }
 ?>