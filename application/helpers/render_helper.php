<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('draw_Text')){
    function draw_Text($id,$maxLength){
        if($id && $maxLength){
            $controlHtml='<input type="text" id="'.$id.'" name="'.$id.'" maxlength="'.$maxLength.'" />';
            return $controlHtml;
        }
    }
}

if(!function_exists('draw_Integer')){
    function draw_Integer($id,$maxLength){
           if($id && $maxLength){
            $controlHtml='<input type="number" id="'.$id.'" name="'.$id.'" maxlength="'.$maxLength.'" />';
            return $controlHtml;
        }
    }
}

if(!function_exists('draw_Percentage')){
    function draw_Percentage($id){
           if($id){
            $controlHtml='<input type="text" id="'.$id.'" name="'.$id.'" />';
            return $controlHtml;
        }
    }
}

if(!function_exists('draw_Decimal')){
    function draw_Decimal($id,$maxLength,$decimalPlaces){
           if($id && $maxLength && decimalPlaces){
            $controlHtml='<input type="number" id="'.$id.'" name="'.$id.'" maxlength="'.$maxLength.'" />';
            return $controlHtml;
        }
    }
}

if(!function_exists('draw_Currency')){
    function draw_Currency($id,$maxLength,$decimalPlaces){
           if($id && $maxLength && decimalPlaces){
            $controlHtml='<input type="number" id="'.$id.'" name="'.$id.'" maxlength="'.$maxLength.'" />';
            return $controlHtml;
        }
    }
}

if(!function_exists('draw_Date')){
    function draw_Date($id){
        if($id){
            $controlHtml='<input type="text" id="'.$id.'" name="'.$id.'" />';
            return $controlHtml;
        }
    }
}

if(!function_exists('draw_Date_Time')){
    function draw_Date_Time($id){
        if($id){
            $controlHtml='<input type="text" id="'.$id.'" name="'.$id.'" />';
            return $controlHtml;
        }
    }
}

if(!function_exists('draw_Email')){
    function draw_Email($id){
        if($id){
            $controlHtml='<input type="email" id="'.$id.'" name="'.$id.'" />';
            return $controlHtml;
        }
    }
}

if(!function_exists('draw_Phone')){
    function draw_Phone($id,$maxLength){
        if($id && $maxLength){
            $controlHtml='<input type="text" id="'.$id.'" name="'.$id.'" maxlength="'.$maxLength.'" />';
            return $controlHtml;
        }
    }
}