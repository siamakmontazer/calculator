<?php

class AdditionOperation extends AbstractOperation
{
    public function operate(): int
    {
        return $this->getFirstOperand() + $this->getSecondOperand();
    }
}