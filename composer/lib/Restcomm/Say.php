<?php namespace Restcomm;
/**
 * Class Say
 *
 * @package Restcomm
 *
 * @description The <Say> verb is used to synthesize text to speech and play it to the remote party. The voices
 * supported depends on the TTS Service provider plug-in. Below are the voices for our default TTS
 * service provider plug-in which uses Acapela Voice as a Service
 * @voice Attributes voice man, woman Default man
 *
 * @language Attributes bf, bp, en, en-gb,cf, cs, dan, fi es, fr, de, el, it, nl, no, pl, pt,ru, ar, ca, sv, tr Default:en
 *
 * @loop The 'loop' attribute (loop >1 Default:1 ) specifies how many times you'd like the text repeated. Specifying '0'
 * will cause the the <Say> verb to loop until the call is hung up.
 *
 * rss voice . akabila
 *
 */
class Say extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array('voice', 'language', 'loop');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body) {
            throw new Exception("No text set for " . $this->getName());
        }
    }
}