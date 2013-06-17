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

class Model_Tag extends \Nos\BlogNews\Model_Tag
{
    protected static $_primary_key = array('tag_id');
    protected static $_table_name = 'nos_rwblog_tag';

    public static function _init()
    {
        parent::_init();
        static::$_behaviours['Nos\Orm_Behaviour_Urlenhancer']['enhancers'][] = 'noviusos_rwblog';
    }
    public static function get_query($params)
    {
        $query = static::query($params);

        $posts = $query->get();
        return $posts;
    }}
