<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

class txtBB_textCAPTCHA {
	
	var $question;
	var $answers;
	
	function txtBB_textCAPTCHA(){
		
		$text_captcha_url_with_api_key="http://api.textcaptcha.com/dlolu9yfwu0wg444swwgco884be565gh";
		$captcha_string = file_get_contents($text_captcha_url_with_api_key);
		
		$question = $this->stringBetweenTwoStrings($captcha_string, '<question>', '</question>');

		$answers = array();
		do{
			$ans = $this->stringBetweenTwoStrings($captcha_string, '<answer>', '</answer>');
			if($ans!==''){
				$search = '<answer>' . $ans . '</answer>';
				$captcha_string = str_replace($search, '', $captcha_string);
				array_push($answers, $ans);
			}
		}while($ans != '');
		
		$this->question = $question;
		$this->answers = $answers;
	}//function txtBB_textCAPTCHA()
	
	function stringBetweenTwoStrings($string, $start, $end){
		$string = ' '.$string;
		$ini = strpos($string,$start);
		if ($ini == 0) return '';
		$ini += strlen($start);   
		$len = strpos($string,$end,$ini) - $ini;
		return substr($string,$ini,$len);
	}//function stringBetweenTwoStrings($string, $start, $end)
	
	function compareAnswerToCaptcha($ans, $arr){
		if(!isset($arr)) $arr = $this->answers;
		$ans = strtolower(trim($ans));
		$ans = md5($ans);
		foreach($arr as $a){
			if($a == $ans) return TRUE;
		}
		return FALSE;
	}//function compareAnswerToCaptcha($ans)

}//class txtBB_textCAPTCHA 

?>
