<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */

use \DomPdf\Frame\Decorator\AbstractDecorator as Decorator;

/**
 * Positions table rows
 *
 * @access private
 * @package dompdf
 */
class Table_Row_Positioner extends Positioner
{

    function __construct(Decorator $frame)
    {
        parent::__construct($frame);
    }

    //........................................................................

    function position()
    {

        $cb = $this->_frame->get_containing_block();
        $p = $this->_frame->get_prev_sibling();

        if ($p)
            $y = $p->get_position("y") + $p->get_margin_height();

        else
            $y = $cb["y"];

        $this->_frame->set_position($cb["x"], $y);

    }
}
