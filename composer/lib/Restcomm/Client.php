<?php
namespace Restcomm;

class Client extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array();

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body)
        {
            throw new Exception("No Client set for " . $this->getName());
        }
    }
}