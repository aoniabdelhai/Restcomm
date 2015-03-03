<?php namespace Restcomm;

class Say extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array('voice', 'language', 'loop');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body) {
            throw new Exception("No text set for " . $this->getName());
        }
    }
}