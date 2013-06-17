
<!-- ↓entry↓ -->
<article class="post">
<header class="entry-header">


<h2 class="entry-title">
<p><a href="<?= $item->url() ?>" title=""><?= e($item->post_title) ?></a></p>
</h2>
<time class="entry-date" datetime=""><?= e(Date::forge(strtotime($item->post_created_at))->format('%Y/%m/%d')); ?></time>

</header><!-- .entry-header -->

<div class="entry-content">
    <p><?= e($item->summary) ?>
    <a href="<?= $item->url() ?>" title="">&rarr;続きを読む</a></p>
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