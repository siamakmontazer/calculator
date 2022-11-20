<?php

class NullOperation extends AbstractOperation
{
    public function operate(): int
    {
        return -1;
    }
}