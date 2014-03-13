<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace DomPdf\Frame\Positioner;

use \DomPdf\Frame\Decorator\AbstractDecorator as Decorator;

/**
 * Base Positioner class
 *
 * Defines postioner interface
 *
 * @access private
 * @package dompdf
 */
abstract class AbstractPositioner
{

    /**
     * @var Decorator
     */
    protected $_frame;

    //........................................................................

    function __construct(Decorator $frame)
    {
        $this->_frame = $frame;
    }

    /**
     * Class destructor
     */
    function __destruct()
    {
        clear_object($this);
    }

    //........................................................................

    abstract function position();

    function move($offset_x, $offset_y, $ignore_self = false)
    {
        list($x, $y) = $this->_frame->get_position();

        if (!$ignore_self) {
            $this->_frame->set_position($x + $offset_x, $y + $offset_y);
        }

        foreach ($this->_frame->get_children() as $child) {
            $child->move($offset_x, $offset_y);
        }
    }
}
