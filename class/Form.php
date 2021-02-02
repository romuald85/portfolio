<?php

class Form
{
    private $datas = [];

    public function __construct($datas = [])
    {
        $this->datas = $datas;
    }

    private function getValue($name)
    {
        if (isset($this->datas[$name])) {
            return $this->datas[$name];
        } else {
            return '';
        }
    }

    private function input($type, $name, $label)
    {
        $value = $this->getValue($name);

        if ($type == 'textarea') {
            $input = "<textarea name=\"$name\" id=\"input$name\" cols=\"30\" rows=\"10\" class=\"form-control\" required>$value</textarea>";
        } else {
            $input = "<input type=\"$type\" name=\"$name\" id=\"input$name\" class=\"form-control\" value=\"$value\" required>";
        }
        return "<div class=\"form-group\">
            <label for=\"input$name\">$label</label>
            $input
        </div>";
    }

    public function text($name, $label)
    {
        return $this->input('text', $name, $label);
    }

    public function email($name, $label)
    {
        return $this->input('email', $name, $label);
    }

    public function textarea($name, $label)
    {
        return $this->input('textarea', $name, $label);
    }

    public function submit($type, $label)
    {
        return "<div class=\"form-group\">
        <button class=\"btn btn-primary btn-block\" type=\"$type\">$label</button>
    </div>";
    }
}
