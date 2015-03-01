<?php

class Response extends Element
{
    protected $nestables = array('Say', 'Play', 'Gather', 'Record',
        'Dial', 'Redirect', 'Pause', 'Hangup',
        'Reject', 'Redirect', 'Sms', 'Fax');

    function __construct()
    {
        parent::__construct(NULL);
    }

    public function toXML()
    {
        $xml = parent::toXML($header = TRUE);
        return $xml;
    }
}