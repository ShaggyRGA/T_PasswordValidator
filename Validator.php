<?php declare(strict_types=1);

require_once './ValidatorInterface.php';

class Validator implements ValidatorInterface
{
    public function checkPassword(string $password): bool
    {
        return match (false) {
            $this->isValidLength($password),
            $this->isValidUpperChar($password),
            $this->isValidLowerChar($password),
            $this->isValidNumChar($password),
            $this->isValidSpaceChar($password) => false,

            default => true,
        };
    }

    private function isValidLength(string $password): bool
    {
        return strlen($password) <= 20 && strlen($password) >= 8;
    }

    private function isValidUpperChar(string $password): bool
    {
        foreach (str_split($password) as $char) {
            if (ctype_upper($char))
                return true;
        }
        return false;
    }

    private function isValidLowerChar(string $password): bool
    {
        foreach (str_split($password) as $char) {
            if (ctype_lower($char))
                return true;
        }
        return false;
    }

    private function isValidNumChar(string $password): bool
    {
        foreach (str_split($password) as $char) {
            if (is_numeric($char))
                return true;
        }
        return false;
    }

    private function isValidSpaceChar(string $password): bool
    {
        foreach (str_split($password) as $char) {
            if (ctype_space($char))
                return false;
        }
        return true;
    }
}