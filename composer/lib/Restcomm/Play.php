<?php namespace Restcomm;
/**
 * Class Play
 *
 * @package Restcomm
 *
 * The <Play> verb is used to play an audio file to the remote party.
 *
 * @loop :The 'loop' attribute (loop >1 Default:1 ) specifies how many times you'd like the text repeated. Specifying '0'
 * will cause the the <Say> verb to loop until the call is hung up.
 *
 * Supported Audio Formats
 * audio/wav
 * audio/wave
 * audio/x-wav
 */
class Play extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array('loop');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body)
        {
            throw new RestcommException("No Play File set for " . $this->getName());
        }
    }
}