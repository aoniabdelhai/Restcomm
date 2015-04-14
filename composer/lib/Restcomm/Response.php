<?php
namespace Restcomm;
class Response extends Element
{
    protected $nestables = array('Say', 'Play', 'Gather', 'Record',
        'Dial', 'Redirect', 'Pause', 'Hangup',
        'Reject', 'Redirect', 'Sms', 'Fax','Conference');

}