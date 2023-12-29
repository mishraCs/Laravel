<?php
    /* 
      A regular expression => it is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.
      1. preg_match()
      2. preg_match_all()
      syntax:-
      preg_match(pattern,string,array)

      ==> case-sensitive
      ==> if you want to make it case-insensitive use i
    */

    $line = "PHP stands for hypertext php 22 the preprocessor 45 php the";
    // $exp = preg_match("/php/i",$line);
    // $exp = preg_match_all("/php|for|the/i",$line,$arr);
    // $exp = preg_match_all("/p|f|t/i",$line,$arr);
    // $exp = preg_match_all("/22|45/",$line,$arr);
    // $exp = preg_match_all("/[srt]/",$line,$arr); //will only find s,r and t
    // $exp = preg_match_all("/[^srt]/",$line,$arr); //except s,r and t
    // $exp = preg_match_all("/[4-9]/",$line,$arr); 
    $exp = preg_match_all("/[A-Za-z]/",$line,$arr); 
    // \n == newline , \t == tab 
    // /\d+[-]\d+[-]\d+/  ===  122-232-2132
     // /\d+.\d+.\d+/  ===  122*232*2132

    // * ===> 0 or more 
    // + ===> 1 or more
    // ? ===> 0 or one 
    // {3} ===> Exact number
    // {3,5} ===> range of numbers {minimum,maximum}
    // {3,}  ===> minimum to infinite 





    if($exp)
    {
        echo "data is found";
    }
    else
    {
        echo"data is not found";
    }
    echo "<pre>";
    print_r($arr);
    echo"</pre>";
    // echo $arr[0][3];
?>



