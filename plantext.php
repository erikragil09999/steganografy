<?php 
      function strToBin($input)
    {
        if (!is_string($input))
            return false;
        $value = unpack('H*', $input);
        return base_convert($value[1], 16, 2);
    }
    echo (strToBin($_POST["name"])); 
 ?>   