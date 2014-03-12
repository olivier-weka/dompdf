<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace DomPdf\Frame\Decorator;

/**
 * Decorates Frames for table row layout
 *
 * @access private
 * @package dompdf
 */
class TableRow extends AbstractDecorator
{

    // protected members

    function __construct(\Frame $frame, \DOMPDF $dompdf)
    {
        parent::__construct($frame, $dompdf);
    }

    //........................................................................

    /**
     * Remove all non table-cell frames from this row and move them after
     * the table.
     */
    function normalise()
    {

        // Find our table parent
        $p = Table::find_parent_table($this);

        $erroneous_frames = array();
        foreach ($this->get_children() as $child) {
            $display = $child->get_style()->display;

            if ($display !== "table-cell")
                $erroneous_frames[] = $child;
        }

        //  dump the extra nodes after the table.
        foreach ($erroneous_frames as $frame)
            $p->move_after($frame);
    }


}
