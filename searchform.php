<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
    <div class="form-wrapper-header">
        <span>
          <button type="submit">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/srch.svg" alt=""></button>
        </span>
        <span>
            <input class="form-control" type="text" value="<?php echo get_search_query() ?>" name="s" id="s"
                   placeholder="Поиск"/>
<!--            <input type="hidden" value="" name="post_type"/>-->
        </span>
    </div>
</form>
