<?php

abstract class AbstractOperation
{
    protected int $firstOperand;
    protected int $secondOperand;

    public function setFirstOperand(int $firstOperand): self
    {
        $this->firstOperand = $firstOperand;
        return $this;
    }

    public function setSecondOperand(int $secondOperand): self
    {
        $this->secondOperand = $secondOperand;
        return $this;
    }

    protected function getFirstOperand(): int
    {
        return $this->firstOperand;
    }

    protected function getSecondOperand(): int
    {
        return $this->secondOperand;
    }

    public function validate(): self
    {
        if((new NumericValidation($this->firstOperand, $this->secondOperand))->validate()){
            return $this;
        }

        throw new NumberFormatException();
    }

    public abstract function operate(): int;
}