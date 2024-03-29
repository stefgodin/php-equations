<?php


namespace Stefmachine\Equations\Value;



class Value implements EquationValueInterface
{
    protected $value;
    
    public function __construct(float $_value)
    {
        $this->value = $_value;
    }
    
    public function toString(array $_values = array(), array $_options = array()): string
    {
        return (string)$this->value;
    }
    
    public function eval(array $_values = array(), array $_options = array()): float
    {
        return $this->value;
    }
}