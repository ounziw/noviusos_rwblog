<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

        foreach ($categorylist as $category) {
            $categories[$category->url()] = $category->cat_title;
        }
        $categories_str = implode(', ', array_map(function($href, $title) {
            return '<li><a href="'.$href.'">'.e($title).'</a></li>';
        }, array_keys($categories), array_values($categories)));
        echo strtr(__('<h3 class="widget-title"><span>カテゴリー</span></h3><ul> {{categories}}</ul>'), array('{{categories}}' => $categories_str));



