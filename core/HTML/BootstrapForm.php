<?php

namespace Core\HTML;

class BootstrapForm extends Form
{

    protected function surround($html)
    {
        return
            "<div class=\"form-group\">{$html}</div>";
    }



    public function input($name, $label, $options = [])
    {
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = '<label >  ' . $label . '</label>';
        $input = '<input type="' . $type . '"    name"' . $name . '"  class="form-control" value="' . $this->getValue($name) . '">';
        return $this->surround($label . $input);
    }

    public function select($name, $label, $options)
    {
        $label = '<label >' . $label . '</label>';
        $input = '<select class="from-control" name="' . $name . '">';
        foreach ($options as $k => $v) {
            $attributes = '';

            if ($k == $this->getValue($name)) {
                $attributes = 'selected';
            }
            $input .= "<option value='$k'$attributes>$v</option>";
        }

        $input .= '</select>';
        return $this->surround($label . $input);
    }

    public function submit()
    {

        return $this->surround('<button type="submit" class=" btn btn-primary">Envoyer</button>');
    }
}
