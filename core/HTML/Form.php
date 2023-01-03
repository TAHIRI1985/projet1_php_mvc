<?php

namespace Core\HTML;

class Form
{

    private $data;
    public $surround = 'p';


    public function __construct($data = array())
    {
        $this->data = $data;
    }
    protected function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    protected function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    public function input($name, $label, $options = [])
    {
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround('<input typ="' . $type . '" name"' . $name . '"  value="' . $this->getValue($name) . '">');
    }



    public function submit()
    {
        return  $this->surround('<button typ="submit">Envoyer</button>');
    }
}
