<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

namespace Nos\BlogNews\Rwblog;

class Controller_Front extends \Nos\BlogNews\Controller_Front
{

    /**
     * Display a single item (outside a list context)
     *
     * @param  type            $item_id
     * @return \Fuel\Core\View
     */
    public function display_item()
    {
        list($item_virtual_name) = $this->enhancerUrl_segments;
        $post = $this->_get_post(array(
            'where' => array(
                array('post_virtual_name', '=', $item_virtual_name),
                array('post_context', '=', $this->page_from->page_context),
            ),
        ));
        if (empty($post)) {
            throw new \Nos\NotFoundException();
        }


        if ($this->app_config['comments']['enabled'])
        {
            $this->main_controller->addMeta('<link rel="alternate" type="application/rss+xml" title="'.htmlspecialchars(static::_html_entity_decode(strtr(__('{{post}}: Comments list'), array('{{post}}' => $post->post_title)))).'" href="'.$this->main_controller->getContextUrl().$this->main_controller->getEnhancedUrlPath().'rss/comments/'.urlencode($post->post_virtual_name).'.html">');
        }

        $page = $this->main_controller->getPage();
        $this->main_controller->setTitle($page->page_title.' - '.$post->post_title);
        if (!empty($post->summary)) {
            $this->main_controller->setMetaDescription($post->summary);
        }
        if (count($post->tags) > 0) {
            $data = array();
            foreach ($post->tags as $tag) {
                $data[] = $tag->tag_label;
            }
            $data = implode(', ',$data);
            $this->main_controller->setMetaKeywords($data);
        }
        $page->page_title = $post->post_title;
        $add_comment_success = 'none';
        if ($this->app_config['comments']['enabled'] && $this->app_config['comments']['can_post']) {
            if ($this->app_config['comments']['use_recaptcha']) {
                \Package::load('fuel-recatpcha', APPPATH.'packages/fuel-recaptcha/');
            }
            $add_comment_success = $this->_add_comment($post);
        }

        return \View::forge(
            $this->config['views']['item'],
            array(
                'add_comment_success' => $add_comment_success,
                'item' => $post,
            ),
            false
        );
    }
}
