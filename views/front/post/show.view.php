<?php
foreach ($posts as $post) {
    echo \View::forge('noviusos_rwblog::front/post/summary', array('item' => $post), false);
}
/*
echo $pagination->create_links(
    function($page) use ($type, $item) {

        if ($type == 'main') {
            $main_controller = \Nos\Nos::main_controller();
            $url = parse_url($main_controller->getContextUrl(), PHP_URL_PATH).$main_controller->getPageUrl();
            return $page == 1 ? $url : str_replace('.html', '/', $url).'page/'.$page.'.html';
        } else {
            return $item->url(array('page' => $page));
        }
    }
);
*/
?>
<?php 
/*
<!-- ↓nav↓ -->
<nav id="nav-below" class="navigation clearfix" role="navigation">
<div class="nav-previous alignleft"><a href="#"><span class="meta-nav">←</span> 過去の投稿</a></div>
<div class="nav-next alignright"><a href="#">新しい投稿 <span class="meta-nav">→</span></a></div>
</nav>
<!-- ↑nav↑ -->
*/