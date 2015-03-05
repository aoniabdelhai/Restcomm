<?php
namespace Restcomm;
/**
 * Class Hangup
 *
 * @package Restcomm
 *
 * In Restcomm Communication Language (RCML) <Hangup> verb ends a call.Nesting. The Hangup verb can not have any other verbs or nouns nested.
 */
class Hangup extends Element
{
    protected $nestables = array();

    protected $valid_attributes = array();

    function __construct($attributes = array())
    {
        parent::__construct(NULL, $attributes);
    }
}