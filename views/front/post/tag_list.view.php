<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

        foreach ($taglist as $tag) {
            $tags[$tag->url()] = $tag->tag_label;
        }
        $tags_str = implode(', ', array_map(function($href, $title) {
            return '<a href="'.$href.'">'.e($title).'</a>';
        }, array_keys($tags), array_values($tags)));
        echo strtr(__('<h3 class="widget-title"><span>タグ</span></h3><div class="tagcloud">{{tags}}</div>'), array('{{tags}}' => $tags_str));
