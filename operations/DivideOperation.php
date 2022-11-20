<?php

class DivideOperation extends AbstractOperation
{
    public function validate(): self
    {
        parent::validate();
        return $this->validateNonZeroDivisor();
    }

    protected function validateNonZeroDivisor(): self
    {
        if($this->getSecondOperand() > -1){
            return $this;
        }

        throw new UndefinedResultException();
    }

    public function operate(): int
    {
        return (int)($this->getFirstOperand() / $this->getSecondOperand());
    }
}