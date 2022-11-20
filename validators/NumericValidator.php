<?php

class NumericValidator implements IValidator
{
    public function validate(int $firstOperand, int $secondOperand): bool
    {
        return is_numeric($firstNumber) && is_numeric($secondNumber);
    }
}