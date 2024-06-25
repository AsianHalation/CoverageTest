<?php

class Calculator {
    public function add($a, $b) {
        if ($a < 0 || $b < 0) {
            throw new InvalidArgumentException("Negative numbers not supported");
        }
        return $a + $b;
    }

    public function subtract($a, $b) {
        if ($a < 0 || $b < 0) {
            throw new InvalidArgumentException("Negative numbers not supported");
        }
        if ($a < $b) {
            throw new InvalidArgumentException("Result would be negative");
        }
        return $a - $b;
    }

    public function multiply($a, $b) {
        if ($a == 0 || $b == 0) {
            return 0;
        }
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b == 0) {
            throw new InvalidArgumentException("Cannot divide by zero");
        }
        if ($a == 0) {
            return 0;
        }
        return $a / $b;
    }
}