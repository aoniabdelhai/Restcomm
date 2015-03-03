<?php namespace Restcomm;
class Number extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array('sendDigits', 'url');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body) {
            throw new Exception("No number set for " . $this->getName());
        }
    }
}
