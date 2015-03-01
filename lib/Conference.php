<?php

class Conference extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array('muted', 'beep', 'startConferenceOnEnter', 'endConferenceOnExit', 'waitUrl', 'waitMethod', 'maxParticipants');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body) {
            throw new Exception("No Conference room set for " . $this->getName());
        }
    }
}