<form action="<?php echo home_url('/'); ?>" method="get" class="form-inline">
    <fieldset style="width:100%;" class="mb-3">
        <div class="input-group">
            <input type="text" name="s" id="search" placeholder="<?php the_search_query(); ?>" class="form-control" />
            <span class="input-group-btn">
                <button type="submit" class="btn btn-light btn-cerca">Cerca</button>
            </span>
        </div>
    </fieldset>
</form>