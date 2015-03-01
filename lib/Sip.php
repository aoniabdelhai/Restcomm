<?php


class Sip extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array('username', 'password', 'method', 'url');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body) {
            throw new Exception("No Sip set for " . $this->getName());
        }
    }
}