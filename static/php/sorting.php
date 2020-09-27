<?php
    function get_today_code (){
        return (date('Y')*10000)+(date('m')*100)+date('d') ;
    }
    function get_date_code ($a){
        return ($a->DATE_YEAR*10000)+($a->DATE_MONTH*100)+$a->DATE_DAY;
    }
    function sort_func($a,$b){
        $r = get_date_code($a) - get_date_code($b);
        if (( get_date_code($a) > get_today_code() and get_date_code($b) > get_today_code() ) or ( get_date_code($a) < get_today_code() and get_date_code($b) < get_today_code() ))
            $r= -$r;
        return $r;
    }
    function db_sorting($array){
        usort($array, 'sort_func');
        return $array;
    }
?>
