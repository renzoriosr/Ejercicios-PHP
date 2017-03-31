<?php

$obj = new CompleteRange();
$obj->build('2,4,9');

class CompleteRange
{

		function build($string)
		{
			echo 'Input: '.$string.'<br>';

			$array_input=explode(',', $string);
			sort($array_input);

			$array_output=[];
			
			$first_value=reset($array_input);
			$last_value=end(array_values($array_input));
			
			array_push($array_output, $first_value);

			for ($j=1; $j<(($last_value-$first_value)+1);$j++)
			{
				array_push($array_output, ($first_value+$j) );
			}
			echo "Output: ".implode(",", $array_output);
		}
}
?>