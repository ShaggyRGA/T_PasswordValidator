<?php

interface ValidatorInterface
{
    public function checkPassword(string $password): bool;
}