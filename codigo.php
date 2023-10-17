<?php

    class Edad_Perro
    {

        var $edad=0;

        function set_edad($edad)
        {
            $this->edad = $edad;
        }

        function get_edad()
        {
            return $this->edad;
        }

        function calcular_edad()
        {
            return $this->get_edad() * 7;
        }
    }

?>
