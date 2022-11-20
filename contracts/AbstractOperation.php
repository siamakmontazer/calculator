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
        if((new NumericValidator($this->firstOperand, $this->secondOperand))->validate()){
            return $this;
        }

        throw new NumberFormatException();
    }

    // Notes: another option is to validate in this function withouth throwing exception,
    // I separated validation from operate function, and I used exceptions to give it more flexibility in terms of SRP, OCP principales
    // and client error handling
    public abstract function operate(): int;
}