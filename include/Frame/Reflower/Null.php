<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace Dompdf\Frame\Reflower;

/**
 * Dummy reflower
 *
 * @access private
 * @package dompdf
 */
class Null extends AbstractReflower
{

    function __construct(\Frame $frame)
    {
        parent::__construct($frame);
    }

    function reflow(\Dompdf\Frame\Decorator\Block $block = null)
    {
        return;
    }

}
