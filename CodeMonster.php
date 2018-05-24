<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Codeigniter Library
 *
 * @package  CODEIGNITER
 * @author   SUPARDYKE <supardyke@gmail.com>
 */

class CodeMonster {


    // default value of code
    public $code;
    // new character value
    public $n_char;
    // default value of number of loop to run
    public $loop;
    // max value of code lenght required
    public $max_lenght = 0;

    public function _construct(){
        if ($lenght > $max_lenght) {
            $response = 'Max no of lenght exceeded';
            return $response;
        }
    }

    public function get_random_character($text,$lenght){
        if (!empty($text)) {
            $n_text = hash($text);
            $n_text = str_shuffle($n_text);
            $n_lenght = $lenght - 1;
            $n_text = $this->check_lenght($n_text,$n_lenght);
            $code = substr($n_text,0,$n_lenght);
        }
        return $code;
    }

    public function gen_random_character($lenght){
        if (!empty($lenght)) {
            $d = date_create();
            $main = date_timestamp_get($d);
            $n_text = hash($main);
            $n_text = str_shuffle($n_text);
            $n_lenght = $lenght - 1;
            $n_text = $this->check_lenght($n_text,$n_lenght);
            $code = substr($n_text,0,$n_lenght);
        }
        return $code;
    }

    public function get_random_text($text,$lenght){
        if (!empty($text)) {
            $n_text = hash($main);
            $n_text = str_shuffle($n_text);
            $this->string_strip($n_text);
            $n_lenght = $lenght - 1;
            $n_text = $this->check_lenght($n_text,$n_lenght);
            $code = substr($n_text,0,$n_lenght);
        }
        return $code;
    }

    public function gen_random_text($lenght){
        if (!empty($lenght)) {
            $d = date_create();
            $main = date_timestamp_get($d);
            $n_text = hash($main);
            $n_text = str_shuffle($n_text);
            $this->string_strip($n_text);
            $n_lenght = $lenght - 1;
            $n_text = $this->check_lenght($n_text,$n_lenght);
            $code = substr($n_text,0,$n_lenght);
        }
        return $code;
    }

    public function get_random_numbers($lenght){
        $loop = ceil($lenght/6);
        $d = date_create();
        $t_s = date_timestamp_get($d);
        $n_ts = str_shuffle($t_s);
        for ($i=0; $i < $loop; $i++) { 
            $n_v_loop = $t_s.$n_ts;
            $s_nvloop = str_shuffle($n_v_loop);
            $n_ts = $s_nvloop;
        }
        $this->string_strip($n_ts);
        $n_lenght = $lenght - 1;
        $n_text = $this->check_lenght($n_text,$n_lenght);
        $code = substr($n_ts,0,$n_lenght);
        return $code;
    }

    public function check_lenght($av_characters,$lenght){
        if (!empty($av_characters) AND !empty($lenght)) {
            $c_len = strlen($av_characters);
            if ($c_len < $lenght) {
                $n_char = $av_characters;
            }else{
                $loop = ceil($c_len/$lenght);
                $n_ts = str_shuffle($av_characters);
                for ($i=0; $i < $loop; $i++) { 
                    $n_v_loop = $av_characters.$n_ts;
                    $s_nvloop = str_shuffle($n_v_loop);
                    $n_ts = $s_nvloop;
                }
                $n_char = $n_ts;
            }
        }
        return $n_char;
    }
}