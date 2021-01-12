<?php 

    namespace App\classes;

    class calculator{

        private $firstNumber;
        private $secondNumber;
        private $oprator;
        private $result;


        public function __construct($data)


        {
            $this->firstNumber = $data ['first_number'];
            $this->secondNumber = $data ['second_number'];
            $this->operator    = $data['btn'];
        }

        public function mycalculator()
        {
               
                switch($this->operator)
                {
                    case '+':
                        $this->result = $this->addition();
                        break;
                    case '-':
                        $this->result = $this->subtraction();
                        break;
                    case '*':
                        $this->result = $this->multiplication();
                        break;
                    case '/':
                        $this->result = $this->division();
                        break;
                }
                return $this->result;
                }
                private function addition()
                {
                    return $this->firstNumber + $this->secondNumber;
                }
                private function subtraction()
                {
                    return $this->firstNumber - $this->secondNumber;

        }
                 private function multiplication()
                {
                    return $this->firstNumber * $this->secondNumber;

        }
        private function division()
        {
            return $this->firstNumber / $this->secondNumber;

}


    }

?>