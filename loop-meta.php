<?php if ( is_category() ) : ?>

<section class="loop-meta">
  <div class="container">
    <div class="row">    
      <div class="col-lg-12">
        <div class="loop-meta-title"><?php printf( __( '%s', 'future' ), '<span class="loop-meta-subtitle">' . ucwords( strtolower ( single_cat_title( '', false ) ) ) . '</span>' ); ?></div>
        <div class="loop-meta-description"><?php echo category_description(); ?></div>          
      </div>
    </div>
  </div>
</section>

<?php elseif ( is_tag() ) : ?>

<section class="loop-meta">
  <div class="container">
    <div class="row">    
      <div class="col-lg-12">
        <div class="loop-meta-title"><?php printf( __( '%s', 'future' ), '<span class="loop-meta-subtitle">' . ucwords( strtolower ( single_tag_title( '', false ) ) ) . '</span>' ); ?></div>
        <div class="loop-meta-description"><?php echo tag_description(); ?></div>          
      </div>
    </div>
  </div>
</section>

<?php 
elseif ( is_author() ) :
$user_id = get_query_var( 'author' );
?>

<section class="loop-meta">
  <div class="container">
    <div class="row">    
      <div class="col-lg-12">
        <div class="loop-meta-title"><?php printf( __( '%s', 'future' ), '<span class="loop-meta-subtitle">' . ucwords( strtolower ( get_the_author_meta( 'display_name', $user_id ) ) ) . '</span>' ); ?></div>
        <div class="loop-meta-description"><?php echo wpautop( get_the_author_meta( 'description', $user_id ) ); ?></div>          
      </div>
    </div>
  </div>
</section>

<?php elseif ( is_search() ) : ?>

<section class="loop-meta">
  <div class="container">
    <div class="row">    
      <div class="col-lg-12">
        <div class="loop-meta-title"><?php printf( __( '%s', 'future' ), '<span class="loop-meta-subtitle">' . ucwords( strtolower ( esc_attr ( get_search_query() ) ) ) . '</span>' ); ?></div>
        <div class="loop-meta-description"><?php printf( __( 'Estàs buscant entrades arxivades filtrades que continguin: %s', 'future' ), esc_attr( get_search_query() ) ); ?></div>          
      </div>
    </div>
  </div>
</section>

<?php elseif ( is_day() ) : ?>

<section class="loop-meta">
  <div class="container">
    <div class="row">    
      <div class="col-lg-12">
        <div class="loop-meta-title"><?php printf( __( '%s', 'future' ), '<span class="loop-meta-subtitle">' . get_the_date() . '</span>' ); ?></div>
        <div class="loop-meta-description"><?php _e( 'Estàs buscant entrades arxivades filtrades per data.', 'future' ); ?></div>          
      </div>
    </div>
  </div>
</section>

<?php elseif ( is_month() ) : ?>

<section class="loop-meta">
  <div class="container">
    <div class="row">    
      <div class="col-lg-12">
        <div class="loop-meta-title"><?php printf( __( '%s', 'future' ), '<span class="loop-meta-subtitle">' . get_the_date( 'F Y' ) . '</span>' ); ?></div>
        <div class="loop-meta-description"><?php _e( 'Estàs buscant entrades arxivades filtrades per mes.', 'future' ); ?></div>          
      </div>
    </div>
  </div>
</section>

<?php elseif ( is_year() ) : ?>

<section class="loop-meta">
  <div class="container">
    <div class="row">    
      <div class="col-lg-12">
        <div class="loop-meta-title"><?php printf( __( '%s', 'future' ), '<span class="loop-meta-subtitle">' . get_the_date( 'Y' ) . '</span>' ); ?></div>
        <div class="loop-meta-description"><?php _e( 'Estàs buscant entrades arxivades filtrades per any.', 'future' ); ?></div>          
      </div>
    </div>
  </div>
</section>

<?php elseif ( is_archive() ) : ?>

<section class="loop-meta">
  <div class="container">
    <div class="row">    
      <div class="col-lg-12">
        <div class="loop-meta-title"><?php _e( 'Archives', 'future' ); ?></div>
        <div class="loop-meta-description"><?php _e( 'Estàs buscant entrades arxivades', 'future' ); ?></div>          
      </div>
    </div>
  </div>
</section>

<?php elseif ( is_404() ) : ?>

<section class="loop-meta">
  <div class="container">
    <div class="row">    
      <div class="col-lg-12">
        <div class="loop-meta-title"><?php _e( '404', 'future' ); ?></div>
        <div class="loop-meta-description"><?php _e( 'Sembla que la pàgina que estàs buscant no està disponible. Revisa la URL si us plau.', 'future' ); ?></div>          
      </div>
    </div>
  </div>
</section>

<?php 
elseif ( is_singular() ) :
?>

<!--
<section class="loop-meta">
  <div class="container">
    <div class="row">    
      <div class="col-lg-12">
        <div class="loop-meta-title"><?php _e( 'Blog', 'future' ); ?></div>          
      </div>
    </div>
  </div>
</section>
-->

<?php
endif;
