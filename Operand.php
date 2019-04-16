<?php


class Operand
{
    public $first;
    public $second;
    public $select;

    public function __construct($first, $second, $select)
    {
        $this->first = $first;
        $this->second = $second;
        $this->select = $select;
    }

    public function calculate()
    {
        if (empty($this->first) && empty($this->second)) {
            echo "Empty";
        } else if ($this->select == "-") {
            $tru = $this->first - $this->second;
            echo "<hr/>";
            echo "<h1>Result:</h1>";
            echo $this->first . " - " . $this->second . " = " . $tru;
        } else if ($this->select == "+") {
            $tong = $this->first + $this->second;
            echo "<hr/>";
            echo "<h1>Result:</h1>";
            echo $this->first . " + " . $this->second . " = " . $tong;
        } else if ($this->select == "X") {
            $X = $this->first * $this->second;
            echo "<hr/>";
            echo "<h1>Result:</h1>";
            echo $this->first . " x " . $this->second . " = " . $X;
        } else if ($this->select == "/" && $this->second != 0) {
            $Division = $this->first / $this->second;
            echo "<hr/>";
            echo "<h1>Result:</h1>";
            echo $this->first . " / " . $this->second . " = " . $Division;
        } else {
            echo "fail";
        }
    }
}