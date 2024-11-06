<?php

class TriangleGenerator
{
    
    public function generateTriangle(int $altura): string
    {
        $resultado = "<pre>";
       

        for ($i = 1; $i <= $altura; $i++) {
           
            for ($j = $altura; $j > $i; $j--) {
                $resultado .= " "; 
            }
            
            for ($k = 1; $k <= (2 * $i - 1); $k++) {
                $resultado .= "*"; 
            }
            
            $resultado .= "<br>";
        }
        $resultado .= "</pre>";
        return $resultado; 
    }
    }
