<?php 
class Validar{
    public function ValidarEntero($data)
    {
        if(ctype_digit($data)){
            $data = (int)$data ;
            if(is_int($data)){
                $ent =  (filter_var($data, FILTER_SANITIZE_NUMBER_INT));
                return $ent;
            }else{
                return "false";
            }
        }else{
            return "este numero no es un entero";
        }
    }
    public function ValidarInt($data)
    {
        if (ctype_digit($data)) {
            $data = (int)$data;
            if (is_int($data)) {
                $ent = (filter_var($data, FILTER_SANITIZE_NUMBER_INT));
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
