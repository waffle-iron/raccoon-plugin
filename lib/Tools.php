<?php
/**
 * Tools & utilities methods
 *
 * PHP version 5
 *
 * @category Core
 * @package  Raccoon
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License 3.0
 * @link     https://github.com/hiwelo/raccoon-plugin
 * @since    1.0.0
 */
namespace Hiwelo\Raccoon;

/**
 * Tools & utilities methods
 *
 * PHP version 5
 *
 * @category Tools
 * @package  Raccoon
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License 3.0
 * @link     https://github.com/hiwelo/raccoon-plugin
 * @since    1.0.0
 */
class Tools
{
    /**
     * Parse a string to return a real boolean for "true" or "false"
     *
     * @param string|boolean $value string or boolean to parse
     *
     * @return boolean
     *
     * @since  1.0.0
     * @static
     */
    public static function parseBooleans($value)
    {
        return ($value === 'false') ? false : (bool) $value;
    }
}
