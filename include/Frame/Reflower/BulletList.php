<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace Dompdf\Frame\Reflower;

use Dompdf\Frame\Decorator\AbstractDecorator as Decorator;

/**
 * Reflows list bullets
 *
 * @access private
 * @package dompdf
 */
class BulletList extends AbstractReflower
{

    function __construct(Decorator $frame)
    {
        parent::__construct($frame);
    }

    //........................................................................

    function reflow(\Dompdf\Frame\Decorator\Block $block = null)
    {
        $style = $this->_frame->get_style();

        $style->width = $this->_frame->get_width();
        $this->_frame->position();

        if ($style->list_style_position === "inside") {
            $p = $this->_frame->find_block_parent();
            $p->add_frame_to_line($this->_frame);
        }

    }
}
