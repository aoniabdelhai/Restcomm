<?php
namespace Restcomm;
/**
 * Class Conference
 * The <Conference> noun allows you to connect to a named conference room and talk with the other callers who have also connected to that room. The name of the room is up to you and is namespaced to your account.
 * @package Restcomm
 *
 * @muted: The ‘muted’ attribute lets you specify whether a participant can speak in the conference. If this attribute is set to ‘true’, the participant will only be able to listen to people in the conference.
 *
 * @beep: The ‘beep’ attribute lets you specify whether a notification beep is played to the conference when a participant joins or leaves the conference.
 *
 * @startConferenceOnEnter: This attribute tells a conference to start when this participant joins the conference,
 * if it is not already started. If this is false and the participant joins a conference that has not started,
 * they are muted and hear background music until a participant joins where startConferenceOnEnter is true. This is useful for implementing moderated conferences.
 *
 * @endConferenceOnExit:If a participant has this attribute set to ‘true’, then when that participant leaves, the conference ends and all other participants drop out.
 * This is useful for implementing moderated conferences that bridge two calls and allow either call leg to continue executing RCML if the other hangs up.
 *
 * @waitUrl:The ‘waitUrl’ attribute lets you specify a URL for music that plays before the conference has started.
 * The URL may be a WAV or a RCML document that uses <Play> or <Say> for content. This defaults to a selection of Creative Commons licensed background music,
 * but you can replace it with your own music and messages. If the ‘waitUrl’ responds with RCML, RestComm will only process <Play>, <Say>, and <Redirect> verbs.
 * If you do not wish anything to play while waiting for the conference to start, specify the empty string (set ‘waitUrl’ to ”).
 *
 * @waitMethod:This attribute indicates which HTTP method to use when requesting ‘waitUrl’. It defaults to ‘POST’.
 * Be sure to use ‘GET’ if you are directly requesting static audio files such as WAV files so that RestComm properly caches the files.
 *
 * @maxParticipants:This attribute indicates the maximum number of participants you want to allow within a named conference room.
 * The default maximum number of participants is 40. The value must be a positive integer less than or equal to 100.
 */
class Conference extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array('muted', 'beep', 'startConferenceOnEnter', 'endConferenceOnExit', 'waitUrl', 'waitMethod', 'maxParticipants');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body)
        {
            throw new Exception("No Conference room set for " . $this->getName());
        }
    }
}