<?php


namespace Stefmachine\Equations\Operation;


use Stefmachine\Equations\EquationInterface;
use Stefmachine\Equations\Helper\EqHelper;
use Stefmachine\Equations\Helper\EvalCatchTrait;

class Absolute implements EquationOperationInterface
{
    use EvalCatchTrait;
    
    protected $value;
    
    public function __construct(EquationInterface $_value)
    {
        $this->value = $_value;
    }
    
    public function toString(array $_values = array(), array $_options = array()): string
    {
        return EqHelper::join(['|', EqHelper::wrap($this->value), '|'], $_values, $_options);
    }
    
    protected function tryEval(array $_values = array(), array $_options = array()): float
    {
        return abs($this->value->eval($_values, $_options));
    }
}