<?php

class NumericValidation implements IValidation
{
    public function validate(int $firstOperand, int $secondOperand): bool
    {
        return is_numeric($firstNumber) && is_numeric($secondNumber);
    }
}