<?php


class Play extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array('loop');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body)
        {
            throw new Exception("No Play File set for " . $this->getName());
        }
    }
}