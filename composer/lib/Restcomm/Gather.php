<?php namespace Restcomm;
/**
 * Class Gather
 * The <Gather> verb "gathers" digits that a caller enters into his or her telephone keypad
 * @package Restcomm
 *
 * Gather Verb  Attributes
 *
 * @action.The 'action' attribute takes an absolute or relative URL as a value. When the caller has
 * finished entering digits RestComm will make a GET or POST request to this URL including the
 * parameters below. If no 'action' is provided, RestComm will by default make a POST request to
 * the current document's URL
 *
 * @method.The 'method' attribute takes the value 'GET' or 'POST'. This tells RestComm whether to request the 'action' URL via HTTP GET or POST.
 *
 *
 *
 *
 * @timeout.The 'timeout' attribute sets the limit in seconds that RestComm will wait for the caller
 * to press another digit before moving on and making a request to the 'action' URL. For example,
 * if 'timeout' is '10', RestComm will wait ten seconds for the caller to press another key before
 * submitting the previously entered digits to the 'action' URL. RestComm waits until completing the
 * execution of all nested verbs before beginning the timeout period.
 *
 * @todo: here we have question to George what is the default timeout limit;
 *
 *
 * @finishOnKey he 'finishOnKey' attribute lets you choose one value that submits the received data when entered. For example, if you set 'finishOnKey' to '#' and the user enters '1234#',
 * RestComm will immediately stop waiting for more input when the '#' is received and will submit
 * "Digits=1234" to the 'action' URL.
 * Note that the 'finishOnKey' value is not sent. The allowed
 * values are the digits 0-9, '#' , '*' and the empty string (set 'finishOnKey' to ''). If the empty string
 * is used, <Gather> captures all input and no key will end the <Gather> when pressed. In this
 * case RestComm will submit the entered digits to the 'action' URL only after the timeout has been
 * reached. The value can only be a single character.
 *
 */
class Gather extends Element
{
    protected $nestables = array('Say','Play','Pause');

    protected $valid_attributes = array('action','method','timeout','finishOnKey','numDigits');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body)
        {
            throw new RestcommException("No Gather text set for " . $this->getName());
        }
    }
}