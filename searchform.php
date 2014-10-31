<form class="searchform form-inline" role="form" method="get" action="<?php echo trailingslashit( esc_url( home_url() ) ); ?>">
  <div class="form-group">
    <label class="sr-only" for="s"><?php _e( 'Cerca per:', 'future' ); ?></label>
    <input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Cerca', 'future' ); ?>">
  </div>  
  <button type="submit" class="btn btn-primary"><?php esc_html_e( 'Cerca', 'future' ); ?></button>
</form>
