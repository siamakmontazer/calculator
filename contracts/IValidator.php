<?php

interface IValidator
{
    public function validate(int $firstOperand, int $secondOperand): bool;
}