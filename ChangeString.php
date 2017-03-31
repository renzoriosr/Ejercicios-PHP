<?php 

$obj = new ChangeString();
$obj->build('**Casa 52Z');

class ChangeString{

	function build($string)
	{
		echo 'Input: '.$string;
		echo "<br>";

		$array_input = str_split($string);

		$letters ='abcdefghijklmnopqrstuvwxyz';
		$array_letters=str_split($letters);
		
		$array_output=[];
		$key;
		$new_key;

		$lenght=count($array_input);
		echo ' longitud: '.$lenght;
		echo "<br>";

		for($i=0;$i<$lenght;$i++)
		{
			
			if (is_numeric($array_input[$i]))
			{
				$key=array_search($array_input[$i], $array_letters);
				array_push($array_output, $array_input[$i]);
			}
			else
			{
				if(!preg_match('/[A-Za-z0-9]+/', $array_input[$i]))
				{
					array_push($array_output, $array_input[$i]);
				}
				else
				{
					if (ctype_upper($array_input[$i]))
					{
						if($array_input[$i]=='Z')
						{
							array_push($array_output, 'A');
						}
						else
						{
							$key=array_search(strtolower($array_input[$i]), $array_letters);
							$new_key=$key+1;
							array_push($array_output, strtoupper($array_letters[$new_key]));
						}
					}
					else
					{
						if($array_input[$i]=='z')
						{
							array_push($array_output, 'a');
						}
						else
						{
							$key=array_search($array_input[$i], $array_letters);
							$new_key=$key+1;
							array_push($array_output, $array_letters[$new_key]);
						}
					}
				}
			}

		}
		echo "Output: ".implode("", $array_output);
	}
}
?>