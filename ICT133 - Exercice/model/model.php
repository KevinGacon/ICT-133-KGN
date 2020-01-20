<?php
function checkLogin($data)
{
    @$current_file = file_get_contents("model/dataBase.json");
    $parsed = json_decode($current_file);
    foreach ($parsed as $item => $value)
    {
        if ($value->User == $data['uname'])
        {
            if (@$data['psw'] == $value->Password && (@$data['uname'] == $value->User))
                return true;
            else
                return false;
        }
    }
}
