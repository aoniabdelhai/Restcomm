<?php
namespace Restcomm;
class Response extends Element
{
    protected $nestables = array('Say', 'Play', 'Gather', 'Record',
        'Dial', 'Redirect', 'Pause', 'Hangup',
        'Reject', 'Redirect', 'Sms', 'Fax');

    function __construct()
    {
        parent::__construct(NULL);
    }

    public function toXML($header = TRUE)
    {
        $xml = parent::toXML($header);
        return $xml;
    }
}