<?php
function checkLogin($data)
{
    @$current_file = file_get_contents("model/dataBase.json");
    $obj = json_decode($current_file);
    foreach ($obj as $item => $value)
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

function dataBaseShop()
{
    /** @var  $current_file * transform data of json file to variable php */
    $current_file = file_get_contents("model/dataBaseShop.json");
    /** affected @var $parsed_snowData * with decoding of content of @var $current_file  */
    $parsed_snowData = json_decode($current_file);
    /** @var $array_data * this array content element of snowDatabase  */
    $array_data[] = $parsed_snowData;
    return $array_data;/** return a snow element  */
}