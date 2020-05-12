<?php
    class Kalkulator extends CI_Controller{
        function tambah($a, $b){
            echo "$a+$b = ";
            echo $a+$b;
        }

        function kurang($a, $b){
            echo "$a-$b = ";
            echo $a-$b;
        }

        function kali($a, $b){
            echo "$a*$b = ";
            echo $a*$b;
        }

        function bagi($a, $b){
            echo "$a/$b = ";
            echo $a/$b;
        }
    }