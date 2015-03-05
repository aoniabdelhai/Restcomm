<?php namespace Restcomm;
/**
 * Class Fax
 * The <Fax> verb sends a fax to some a fax machine.
 * @package Restcomm
 *
 * @to The 'to' attribute takes a valid E.164 phone number
 *
 * @from.The 'from' attribute takes a valid E.164 phone number as an argument.
 *
 * @action :The 'action' attribute takes a URL as an argument. After processing the <Fax> verb,
 * RestComm will make a GET or POST request to this URL with the form parameters 'FaxStatus'
 * and 'FaxSid'.
 *
 */
class Fax extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array('to','from','action','method','statusCallback');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);

        if (!$body)
        {
            throw new RestcommException("No Play File set for " . $this->getName());
        }
    }
}