<?php


namespace HOMEWORKERS;


class HomeWork2
{
    public function __construct()
    {
    }

    private function offset()
    {
        echo PHP_EOL . PHP_EOL;
        echo "##### END MODULE #####";
        echo PHP_EOL . PHP_EOL . PHP_EOL;
    }

    public function Task1PrintDegrees($input = 10000)
    {
        $current_degree = 2;
        $count = 1;
        while ($current_degree < $input)
        {
            echo "Degree: 2^" . $count . " = " . $current_degree . PHP_EOL;
            $count++;
            $current_degree *= 2;
        }
        $this->offset();
    }

    public function Task2PrintReverse($input)
    {
        if ($input !== null){
            //echo strrev(($this->base_string);   // :-]
            echo $input . PHP_EOL;
            echo "transform...." . PHP_EOL;
            $count = 0;
            $Res = "";
            while (isset($input[$count]))
            {
                $Res = $input[$count] . $Res;
                $count++;
            }
            echo $Res . PHP_EOL;
            echo "Finish!" . PHP_EOL;
        }
        $this->offset();
    }

    public function Task3SummArray($input_array)
    {
        if (isset($input_array[2]) && isset($input_array[5]) && isset($input_array[7])){
            if (gettype($input_array[2]) !== "string" &&
                gettype($input_array[5]) !== "string" &&
                gettype($input_array[7]) !== "string"){
                echo "RESULT = ". ($input_array[2] + $input_array[5] + $input_array[7]) . PHP_EOL;
            } else {
                echo "Achtung! Achtung! 3 OR 6 OR 8 ELEMENT STRING!" . PHP_EOL;
            }
        } else {
            echo "ERROR! 3 OR 6 OR 8 ELEMENT UNDEFINED!" . PHP_EOL;
        }
        $this->offset();
    }

    public function Task4AllMonday()
    {
        $date = strtotime( "1 August 2019");
        if (date("D", $date) !== "Mon") {
            $date = strtotime(date("d-m-Y", $date) . " next Monday");
        }
        while (date("M", $date) === "Aug"){
            echo date("D d-m-Y", $date) . PHP_EOL;
            $date = strtotime(date("d-m-Y", $date) . " next Monday");
        }
    }

    public function Task5StrCatArray($array, $str)
    {
        if ($str === "" || count($array) === 0){
            return false;
        }
        foreach ($array as $key => $value){
            $array[$key] = "" . $value . $str;
        }
        return $array;
    }

    public function check_Task5($input)
    {
         if (!$input){
             echo "FALSE!" . PHP_EOL;
         } else {
             foreach ($input as $value){
                 echo $value . PHP_EOL;
             }
         }
        $this->offset();
    }

    public function Task6AllTuesday($year, $month)
    {
        if ($year > 0 && $year <= intval(date("Y", strtotime("now")))){
            $date = strtotime( "1 $month $year");
            $barrier_month = date("M", $date);
            if (date("D", $date) !== "Tue") {
                $date = strtotime(date("d-m-Y", $date) . " next Tuesday");
            }
            while (date("M", $date) === $barrier_month){
                echo date("D d-m-Y", $date) . PHP_EOL;
                $date = strtotime(date("d-m-Y", $date) . " next Tuesday");
            }
        } else {
            echo "ERROR! INPUT YEAR INCORRECT!" . PHP_EOL;
        }
        $this->offset();
    }

    public function Task7TheDevilTask()
    {
        $currentNumber = 0;
        while (!$this->checkAll($currentNumber) && $currentNumber < 10000000000){
            $currentNumber++;
        }
        echo $currentNumber . PHP_EOL;
//        while($currentNumber < 100){
//            echo $currentNumber;
//            if ($this->checkSummFeature3and7($currentNumber)){
//                echo " TRUE! \n";
//            } else {
//                echo " FALSE! \n";
//            }
//            $currentNumber++;
//        }
    }

    private function checkAll($number)
    {
        if ($this->checkNumberNumbers($number)){
            if ($this->checkFeature3($number)){
                if ($this->checkFeature7($number)){
                    if ($this->checkSummFeature3and7($number)){
                        return true;
                    }
                }
            }
        }
        return false;
    }

    private function checkSummFeature3and7($number)
    {
        $summ = $this->getSummNumber($number);
        if ($this->checkFeature3($summ) && $this->checkFeature7($summ)){
            return true;
        } else {
            return false;
        }
    }

    private function checkFeature7($number)
    {
        if ((intval($number / 10) - (($number % 10) * 2)) % 7 === 0){
            return true;
        } else {
            return false;
        }
    }

    private function checkFeature3($number)
    {
        if ($this->getSummNumber($number) % 3 === 0){
            return true;
        } else {
            return false;
        }
    }

    private function getSummNumber($number)
    {
        $summ = 0;
        while ($number > 0){
            $summ += $number % 10;
            $number = intval($number / 10);
        }
        return $summ;
    }

    private function checkNumberNumbers($number){
        $availability3 = false;
        $availability7 = false;
        while ($number > 0){
            $temp_number = $number % 10;
            if ($temp_number !== 3 && $temp_number !== 7) {
                return false;
            }
            if(!$availability3){
                if ($temp_number === 3){
                    $availability3 = true;
                }
            }
            if(!$availability7){
                if ($temp_number === 7){
                    $availability7 = true;
                }
            }
            $number = intval($number / 10);
        }
        if ($availability3 && $availability7){
            return true;
        }
        return false;
    }
}