<script type="text/javascript">
    $(document).ready(function() {
        $('#redisTab a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });

    });

</script>
<div>
    <ul class="nav nav-tabs" id="redisTab">
        <li class="active">
            <a href="#keys">Keys</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="keys">
            <legend>Search keys</legend>
            <div class="alert alert-warning">
                <a class="close" data-dismiss="alert" href="#">×</a>
                Since this doesn't support pagination yet, try to limit your search. Otherwise your browser might crash
            </div>
            <form class="form-search" action="<?=$this->router->url?>/keys/search/<?= $this->app->current['serverId'] . '/' . $this->app->current['database'] ?>" method="get">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-key"></i></span>
                    <input type="text" placeholder="Key" name="key">
                </div>
                <button type="submit" class="btn"><i class="icon-search"></i> Search</button>
            </form>
            <div class="alert alert-success">
                <a class="close" data-dismiss="alert" href="#">×</a>
                Supported search patterns:
                <ul>
                    <li>h?llo matches hello, hallo and hxllo</li>
                    <li>h*llo matches hllo and heeeello</li>
                    <li>h[ae]llo matches hello and hallo, but not hillo</li>
                    <li>* matches the all keys</li>
                </ul>
                Use \ to escape special characters if you want to match them verbatim.
            </div>
        </div>
    </div>
</div>
