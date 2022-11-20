<?php

class OperationFactory
{
    CONST PERMITTED_OPERATIONS = [
        '+' => 'Plus',
        '-' => 'Minus',
        '*' => 'Multiply',
        '/' => 'Divide'
    ];

    public static function createOperation(string $operator): AbstractOperation
    {
        $operator = !in_array($operator, self::PERMITTED_OPERATIONS) ? 'Null' : self::PERMITTED_OPERATIONS[$operator];
        $operationClass = "{$operation}Operation";

        // Please note that we can also create validation chain or validation builder and use it here to add operation
        // validators according to the operator strategy, for now I kept it simple

        return new $operationClass();
    }
}