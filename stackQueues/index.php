<?php
/**
 * User: Sergij
 * Date: 06.11.13
 * Time: 20:54
 * To change this template use File | Settings | File Templates.
 */

class Stack_Queues
{
    protected $stack;
    protected $stackType;
    protected $stackForGetting;
    protected $limit;

    public function __construct($limit = 10)
    {
        session_start();
        $this->stackType = 'filo';
        if (isset ($_POST['stack_type'])) {
            $this->stackType = $_POST['stack_type'];
        }
        if (!isset($_SESSION['stack'])) {
            $_SESSION['stack'] = array();
        }
        $this->stack = &$_SESSION['stack'];
        $this->limit = $limit;
    }

    public function setElement($element)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $element);
            $_SESSION['stackForGetting'] = $this->stack;

            return $this->stack;
        } else {
            return false;
        }
    }

    public function getElement()
    {
        if (!isset($_SESSION['stackForGetting']) || empty ($_SESSION['stackForGetting']) ) {
          $_SESSION['stackForGetting'] = $this->stack;
         echo 'It was a last Element';
        } else {
            switch ($this->stackType) {
                case 'lifo' : return array_shift( $_SESSION['stackForGetting']);
                break;
                case 'queues' : return array_pop( $_SESSION['stackForGetting']);
                break;
            }

        }
    }

}

$stack = new Stack_Queues();
if (isset ($_POST['clear'])) {
    $_SESSION = array();
}
include 'form.phtml';
