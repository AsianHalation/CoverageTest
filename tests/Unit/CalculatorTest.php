<?php

require_once __DIR__ . '\..\..\src\Calculator.php';

class CalculatorTest extends TestCase {
    public function testAdd() {
        // Arrange
        $calculator = new Calculator();
        print("Testing addition...\n");

        // Act
        $result = $calculator->add(2, 3);
        print("2 + 3 = $result\n");

        // Assert
        $this->assertEquals(5, $result);
        print("Addition test passed.\n");
    }

    public function testAddWithNegativeNumbers() {
        // Arrange
        $calculator = new Calculator();
        print("Testing addition with negative numbers...\n");

        // Act & Assert
        $this->expectException(InvalidArgumentException::class);
        $calculator->add(-2, 3);
        print("Expected exception for negative numbers.\n");
    }

    public function testSubtract() {
        // Arrange
        $calculator = new Calculator();
        print("Testing subtraction...\n");

        // Act
        $result = $calculator->subtract(8, 3);
        print("8 - 3 = $result\n");

        // Assert
        $this->assertEquals(5, $result);
        print("Subtraction test passed.\n");
    }

    // Additional tests with detailed output
    public function testMultiply() {
        // Arrange
        $calculator = new Calculator();
        print("Testing multiplication...\n");

        // Act
        $result = $calculator->multiply(4, 5);
        print("4 * 5 = $result\n");

        // Assert
        $this->assertEquals(20, $result);
        print("Multiplication test passed.\n");
    }

    public function testDivide() {
        // Arrange
        $calculator = new Calculator();
        print("Testing division...\n");

        // Act
        $result = $calculator->divide(10, 2);
        print("10 / 2 = $result\n");

        // Assert
        $this->assertEquals(5, $result);
        print("Division test passed.\n");
    }

    public function testDivideByZero() {
        // Arrange
        $calculator = new Calculator();
        print("Testing division by zero...\n");

        // Act & Assert
        $this->expectException(InvalidArgumentException::class);
        $calculator->divide(10, 0);
        print("Expected exception for division by zero.\n");
    }
}