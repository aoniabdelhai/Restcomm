<?php
namespace Restcomm;
use \SimpleXMLElement;

class Element
{
    protected $nestables = array();

    protected $valid_attributes = array();

    protected $attributes = array();

    protected $name;

    protected $body = NULL;

    protected $childs = array();

    function __construct($body = '', $attributes = array())
    {
        $this->attributes = $attributes;
        if ((!$attributes) || ($attributes === null))
        {
            $this->attributes = array();
        }
        $this->name = get_class($this);
        $this->body = $body;

        foreach ($this->attributes as $key => $value)
        {
            if (!in_array($key, $this->valid_attributes)) {
                throw new RestcommException("invalid attribute " . $key . " for " . $this->name);
            }

            if(is_bool($value))
                $value = ($value === true) ? 'true' : 'false';

            $this->attributes[$key] =($value === null) ? 'null' : $value;
        }
    }

    function __call($verb,array $arguments)
    {

        list($body, $attributes) = $arguments + array('', array());

        $verb=__NAMESPACE__.'\\'.ucfirst($verb);

        if(!class_exists($verb))
            throw new RestcommException("Invalid RCML Verb " . $verb);

        return $this->add(new $verb($body, $attributes));
    }


    protected function add($element)
    {

        if (!in_array($element->getName(), $this->nestables)) {
            throw new \Restcomm\RestcommException($element->getName() . " not nestable in " . $this->getName());
        }
        $this->childs[] = $element;
        return $element;
    }

    public function getName()
    {

        list($namespace,$name)=explode('\\',$this->name);
        return $name;
    }



    public function asChild($xml)
    {
        if ($this->body)
        {
            $decoded = html_entity_decode($this->body, ENT_COMPAT, 'UTF-8');
            $normalized = htmlspecialchars($decoded, ENT_COMPAT, 'UTF-8', false);
            $child_xml = $xml->addChild(ucfirst($this->getName()),$normalized);
        } else
        {
            $child_xml = $xml->addChild(ucfirst($this->getName()));
        }
        $this->setAttributes($child_xml);
        foreach ($this->childs as $child)
        {
            $child->asChild($child_xml);
        }
    }

    public function setAttributes($xml)
    {
        foreach ($this->attributes as $name => $value) {
            if (is_bool($value))
            {
                $value = ($value === true) ? 'true' : 'false';
            }
            $xml->addAttribute($name, $value);
        }
    }

    public function __toString()
    {
        return $this->toXML();
    }

    public function toXML($header = FALSE)
    {
        if (!(isset($xmlstr))) {
            $xmlstr = '';
        }

        if ($this->body) {
            $xmlstr .= "<" . $this->getName() . ">" . htmlspecialchars($this->body) . "</" . $this->getName() . ">";
        } else {
            $xmlstr .= "<" . $this->getName() . "/>";
        }
        if ($header === TRUE) {
            $xmlstr = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>" . $xmlstr;
        }
        $xml = new SimpleXMLElement($xmlstr);
        $this->setAttributes($xml);
        foreach ($this->childs as $child) {
            $child->asChild($xml);
        }
        return $xml->asXML();
    }

}