<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- ↓entry↓ -->
<article class="post">
<header class="entry-header">


<h1 class="entry-title">
<p><a href="<?= e($item->url()) ?>" title=""><?= e($item->post_title) ?></a></p>
</h1>
<time class="entry-date" datetime=""><?= e(Date::forge(strtotime($item->post_created_at))->format('%Y/%m/%d')); ?></time>
<div class="social"><span class="twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></span><div class="fb-like" data-href="<?= e($item->url()) ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div><span><a href="http://b.hatena.ne.jp/entry/<?= e($item->url()) ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="レスキューワーク" data-hatena-bookmark-layout="simple" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a></span><span><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async></script><script type="text/javascript" src="http://static.evernote.com/noteit.js"></script>
<a href="<?= e($item->url()) ?>" onclick="Evernote.doClip({providerName:'レスキューワーク',suggestNotebook:'<?= e($item->post_title) ?>', url:'<?= e($item->url()) ?>'}); return false;"><img src="http://static.evernote.com/article-clipper-jp.png" alt="Clip to Evernote" align="top" border="0"></a></span><span><a href="<?= e($item->url()) ?>" title=""><img src="static/apps/noviusos_templates_rw/blog/img/icon_print.gif" alt="" onclick="window.print();" /></a></span></div>



</header><!-- .entry-header -->

<div class="entry-content">
    <?= \Nos\Nos::parse_wysiwyg($item->wysiwygs->content) ?>
    <div class="fb-comments" data-href="http://www.rescuework.jp" data-width="640" data-num-posts="10"></div>
</div>
<footer class="entry-meta">
<?php
    // category
    if (count($item->categories) > 0) {
        $categories = array();
        foreach ($item->categories as $category) {
            $categories[$category->url()] = $category->cat_title;
        }
        $categories_str = implode(', ', array_map(function($href, $title) {
            return '<a href="'.$href.'">'.e($title).'</a>';
        }, array_keys($categories), array_values($categories)));
        echo strtr(__('<p><strong>カテゴリー名:</strong> {{categories}}</p>'), array('{{categories}}' => $categories_str));
    }
    
    // tag
    if (count($item->tags) > 0) {
        $tags = array();
        foreach ($item->tags as $tag) {
            $tags[$tag->url()] = $tag->tag_label;
        }
        $tags_str = implode(', ', array_map(function($href, $title) {
            return '<a href="'.$href.'">'.e($title).'</a>';
        }, array_keys($tags), array_values($tags)));
        echo strtr(__('<p><strong>タグ:</strong> {{tags}} </p>'), array('{{tags}}' => $tags_str));
    }
?>

</footer>
</article>
<!-- ↑entry↑ -->