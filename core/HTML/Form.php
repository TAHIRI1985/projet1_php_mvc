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
        if (is_object($this->data)) {
            return $this->data->$index;
        } else {

            return isset($this->data[$index]) ? $this->data[$index] : null;
        }
    }

    protected function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    public function input($name, $label, $options = [])
    {
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = '<label >' . $label . '</label>';
        $input = '<input type="' . $type . '" name"' . $name . '"  value="' . $this->getValue($name) . '">';
        return $this->surround($label . $input);
    }



    public function submit()
    {
        return  $this->surround('<button typ="submit">Envoyer</button>');
    }
}
