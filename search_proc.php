<?php

$mysql = new mysqli("localhost","root","","data_m");

#$query = "select * from news where news_cleaned like '%".$_POST['bool1_txt']." %' ".$_POST['condition_cmb']."  news_cleaned like '%".$_POST['bool2_txt']." %'  ;";
$query = "select * from news ;";

#echo $query;
$res = $mysql->query($query);

while($result = $res->fetch_array()){
    $return = false;

    if($_POST['radio']=="bool"){

        if($_POST['condition_cmb']=="and"){
            $pattern = "/\b".$_POST['bool1_txt']."\b/i";
            if(preg_match( $pattern, $result['news_cleaned'] )){
                $pattern = "/\b".$_POST['bool2_txt']."\b/i";
                if(preg_match( $pattern, $result['news_cleaned'] )){
                    $return = true;
                }
            }
        }

        if($_POST['condition_cmb']=="or"){
            $pattern = "/(\b".$_POST['bool1_txt']."\b|\b".$_POST['bool2_txt']."\b)/i";
            if(preg_match( $pattern, $result['news_cleaned'] )){
                $return = true;
            }
        }

        if($_POST['condition_cmb']=="not"){
            $pattern = "/\b".$_POST['bool1_txt']."\b/i";
            if(preg_match( $pattern, $result['news_cleaned'] )){
                $pattern = "/\b".$_POST['bool2_txt']."\b/i";
                if(!preg_match( $pattern, $result['news_cleaned'] )){
                    $return = true;
                }
            }
        }
    }


    if($_POST['radio']=="biword"){
        $array = explode(" ",$_POST['biword_txt']);
        if(count($array)>1)
            $pattern = "/\b".$array[0]."\b \b".$array[1]."\b/i";
        else
            $pattern = "/\b".$array[0]."\b/i";
        if(preg_match( $pattern, $result['news_cleaned'] )){
            $return = true;
        }
    }

    if($_POST['radio']=="wild"){
        $subPattern = str_replace("*","\S*",$_POST['wildcard_txt']);
        $pattern = "/\b$subPattern\b/i";

        if(preg_match( $pattern, $result['news_cleaned'] )){
            $return = true;
        }
    }




    if($return) {
        echo "<div style='text-align: justify; font-size: 12px; font-family: Tahoma'>";
        echo "<span style='font-weight: bold; color: #0d71bb;'>News ID : " . $result['id'] . "</span><br><br>";
        echo $result['news_cleaned'] . "<br><br></div><hr><br>";

    }


}

