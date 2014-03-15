<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace Dompdf\Frame\Reflower;

/**
 * Reflows table rows
 *
 * @access private
 * @package dompdf
 */
class TableRow extends AbstractReflower
{


    function __construct(\Dompdf\Frame\Decorator\TableRow $frame)
    {
        parent::__construct($frame);
    }

    //........................................................................

    function reflow(\Dompdf\Frame\Decorator\Block $block = null)
    {
        $page = $this->_frame->get_root();

        if ($page->is_full())
            return;

        $this->_frame->position();
        $style = $this->_frame->get_style();
        $cb = $this->_frame->get_containing_block();

        foreach ($this->_frame->get_children() as $child) {

            if ($page->is_full())
                return;

            $child->set_containing_block($cb);
            $child->reflow();

        }

        if ($page->is_full())
            return;

        $table = \Dompdf\Frame\Decorator\Table::find_parent_table($this->_frame);
        $cellmap = $table->get_cellmap();
        $style->width = $cellmap->get_frame_width($this->_frame);
        $style->height = $cellmap->get_frame_height($this->_frame);

        $this->_frame->set_position($cellmap->get_frame_position($this->_frame));

    }

    //........................................................................

    function get_min_max_width()
    {
        throw new \DOMPDF_Exception("Min/max width is undefined for table rows");
    }
}
