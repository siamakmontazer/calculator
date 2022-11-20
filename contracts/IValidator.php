<?php

interface IValidator
{
    public function validate($firstOperand, $secondOperand): bool;
}