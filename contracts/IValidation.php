<?php

interface IValidation
{
    public function validate(int $firstOperand, int $secondOperand): bool;
}