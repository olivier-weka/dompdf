<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */

use \DomPdf\Frame\Decorator\AbstractDecorator as Decorator;

/**
 * Positions table cells
 *
 * @access private
 * @package dompdf
 */
class Table_Cell_Positioner extends Positioner
{

    function __construct(Decorator $frame)
    {
        parent::__construct($frame);
    }

    //........................................................................

    function position()
    {

        $table = \DomPdf\Frame\Decorator\Table::find_parent_table($this->_frame);
        $cellmap = $table->get_cellmap();
        $this->_frame->set_position($cellmap->get_frame_position($this->_frame));

    }
}
