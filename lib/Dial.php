<?php


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