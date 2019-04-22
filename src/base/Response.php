<?php
namespace so\base;

/**
 * Class Response
 * @package so\base
 */
class Response extends Component
{
    /**
     * @var int the exit status. Exit statuses should be in the range 0 to 254.
     * The status 0 means the program terminates successfully.
     */
    public $exitStatus = 0;
}