<?php
interface iTemplate{
    public function setVariable($name, $var);
    public function getHtml($template);
}

//triển khải interface itemplate
// thực hiên đúng , mã không có lỗi
class Template implements itemplate{
    private array $vars = [];
    public function setVariable($name, $var){
        $this->vars[$name] = $var;
    }
    public function getHtml($template){
        foreach 
    }
}