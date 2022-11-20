<?php

class MultiplyOperation extends AbstractOperation
{
    public function operate(): int
    {
        return $this->getFirstOperand() * $this->getSecondOperand();
    }
}