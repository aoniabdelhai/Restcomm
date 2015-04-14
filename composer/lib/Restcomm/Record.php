<?php namespace Restcomm;
/**
 * Class Record
 *
 * @package Restcomm
 *
 *
 * The <Record> verb records the caller's voice and returns to you the URL of a file containing the audio recording.
 *
 * @method.The 'method' attribute takes the value 'GET' or 'POST'. This tells RestComm whether
 * to request the URL via HTTP GET or POST
 *
 * @timeout.The 'timeout' attribute tells RestComm to end the recording after a number of seconds of silence has passed.
 *
 * @finishOnKey:The 'finishOnKey' attribute lets you choose a set of digits that end the recording
 * when entered. For example, if you set 'finishOnKey' to '#' and the caller presses '#', RestComm
 * will immediately stop recording and submit 'RecordingUrl', 'RecordingDuration', and the '#' as
 * parameters in a request to the 'action' URL. The allowed values are the digits 0-9, '#' and '*'. Unlike
 * <Gather>, you may specify more than one character as a 'finishOnKey' value.
 *
 * @maxLength:The 'maxLength' attribute lets you set the maximum length for the recording in seconds.
 *
 * @transcribe:The 'transcribe' attribute tells RestComm that you would like a text representation of the audio of the recording.
 *
 *
 * @transcribeCallback:The 'transcribeCallback' attribute is used in conjunction with the
 * transcribe' attribute. It allows you to specify a URL to which RestComm will make an asynchronous
 * POST request when the transcription is complete.
 */
class Record extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array('action','method','timeout','finishOnKey','maxLength','transcribe','transcribeCallback','transcribeCallback','playBeep');

}