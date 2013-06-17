<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'name'    => 'RWBlog',
    'version' => 'chiba.1',
    'provider' => array(
        'name' => 'Fumito MIZUNO',
    ),
    'namespace' => 'Nos\BlogNews\Rwblog',
    'permission' => array(

    ),
    'requires' => array('noviusos_blognews', 'noviusos_comments'),
    'i18n_file' => 'noviusos_rwblog::metadata',
    'launchers' => array(
        'noviusos_rwblog' => array(
            'name'    => 'RWBlog',
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/noviusos_rwblog/appdesk',
                ),
            ),
        ),
    ),
    'enhancers' => array(
        'noviusos_rwblog' => array(
            'title' => 'RWBlog',
            'desc'  => '',
            'urlEnhancer' => 'noviusos_rwblog/front/main',
            'iconUrl' => 'static/apps/noviusos_rwblog/img/blog-16.png',
            'dialog' => array(
                'contentUrl' => 'admin/noviusos_rwblog/application/popup',
                'width' => 370,
                'height' => 400,
                'ajax' => true,
            ),
        ),
    ),
    'data_catchers' => array(
        'noviusos_rwblog' => array(
            'title' => 'RWBlog',
            'description'  => '',
            'iconUrl' => 'static/apps/noviusos_rwblog/img/blog-16.png',
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/noviusos_rwblog/post/insert_update/?context={{context}}&title={{urlencode:'.\Nos\DataCatcher::TYPE_TITLE.'}}&summary={{urlencode:'.\Nos\DataCatcher::TYPE_TEXT.'}}&thumbnail={{urlencode:'.\Nos\DataCatcher::TYPE_IMAGE.'}}',
                    'label' => __('Add a post'),
                    'iconUrl' => 'static/apps/noviusos_rwblog/img/blog-16.png',
                ),
            ),
            'onDemand' => true,
            'specified_models' => false,
            'required_data' => array(
                \Nos\DataCatcher::TYPE_TITLE,
            ),
            'optional_data' => array(
                \Nos\DataCatcher::TYPE_TEXT,
                \Nos\DataCatcher::TYPE_IMAGE,
            ),
        ),
    ),
    'icons' => array(
        16 => 'static/apps/noviusos_rwblog/img/blog-16.png',
        32 => 'static/apps/noviusos_rwblog/img/blog-32.png',
        64 => 'static/apps/noviusos_rwblog/img/blog-64.png',
    ),
);
