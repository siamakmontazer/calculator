<?php

class NumericValidator implements IValidator
{
    public function validate($firstOperand, $secondOperand): bool
    {
        return is_numeric($firstOperand) && is_numeric($secondOperand);
    }
}