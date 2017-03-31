<?php

$obj = new ClearPar();
$obj->build('((()');

class ClearPar
{
	function build ($string)
	{
		echo 'Input: '.$string.'<br>';

		$array_input=str_split($string);
		$lenght=count($array_input);
		$array_output=[];

		for ($i=0;$i<$lenght;$i++)
		{
			if($array_input[$i] == '(')
			{
				if($i==$lenght-1) { }
				else
				{
					if($array_input[$i+1]==')')
					{
						array_push($array_output, $array_input[$i]);
						array_push($array_output, $array_input[$i+1]);
					}
				}
			}
		}
		echo "Output: ".implode("", $array_output);
	}
}
?>