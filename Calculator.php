<?php

class Calculator
{
    protected AbstractOperation $operation;

    public function __construct(int $firstOperand, int $secondOperand, string $operator)
    {
        $this->operation = OperationFactory::createOperation($operator)
            ->setFirstOperand($firstOperand)
            ->setSecondOperand($secondOperand);
    }

    public function calculate(): int
    {
        if($this->operation instanceof NullOperation){
            return 0;
        }

        try {
            return $this->operation->validate()->operate();
        } catch (NumberFormatException $exception){
            return 0;
        } catch (UndefinedResultException $exception){
            return -1;
        }
    }
}


function main($firstOperand, $secondOperand, $operator)
{
    return (new Calculator($firstOperand, $secondOperand, $operator))->calculate();
}