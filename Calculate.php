<?php
class Calculate
{
    public function multiplo($number, $divisor)
    {
        $total = null;
        $retorno = "";
        $arry = is_array($divisor);
        switch ($arry){
            case false:
                switch ($divisor){
                    case 3:
                        $total = fmod($number, 3);
                        $termino = "Falabella";
                        break;
                    case 5:
                        $total = fmod($number, 5);
                        $termino = "IT";
                        break;
                }
                break;
            case true:
                $total1 = fmod($number, 3);
                $total3 = fmod($number, 5);
                $total = $total1 + $total3;
                $termino = "Integraciones";
                break;
        }

        if ($total == 0){
            $retorno = $termino;
        }
        return $retorno;
    }

    public function process(){
        $j = 0;
        $divisores = [3,5,[3,5]];
        foreach ($divisores as $row){
            for ($i = 1; $i <= 100; $i++){
                $resulta = $this->multiplo($i, $row);
                echo $resulta;
            }
        }
        return true;
    }
}