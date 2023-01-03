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
    private function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    private function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    public function input($name)
    {
        return $this->surround('<input typ="text" name"' . $name . '"  value="' . $this->getValue($name) . '">');
    }



    public function submit()
    {
        return  $this->surround('<button typ="submit">Envoyer</button>');
    }
}
