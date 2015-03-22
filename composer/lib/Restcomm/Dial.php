<?php
namespace Restcomm;
/**
 * Class Dial
 *
 * The <Dial> verb connects the current caller to another phone. If the called party picks up, the two parties are connected and can communicate until one hangs up.
 * If the called party does not pick up, if a busy signal is received, or if the number doesn’t exist, the dial verb will finish.
 *
 * @package Restcomm
 *
 *
 */
class Dial extends Element
{
    protected $nestables = array('Number', 'Client', 'Sip');

    protected $valid_attributes = array('action', 'method', 'timeout',
        'timeLimit', 'callerId');

    function __construct($attributes = array())
    {
        parent::__construct(NULL, $attributes);
    }
}