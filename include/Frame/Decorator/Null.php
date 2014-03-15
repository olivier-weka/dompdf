<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace Dompdf\Frame\Decorator;

/**
 * Dummy decorator
 *
 * @access private
 * @package dompdf
 */
class Null extends AbstractDecorator
{

    function __construct(\Frame $frame, \DOMPDF $dompdf)
    {
        parent::__construct($frame, $dompdf);
        $style = $this->_frame->get_style();
        $style->width = 0;
        $style->height = 0;
        $style->margin = 0;
        $style->padding = 0;
    }

}
