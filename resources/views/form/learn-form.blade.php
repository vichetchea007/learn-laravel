<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
            $provinces = App\Model\ProvinceModel::all();
            $province_list = $provinces->lists("province_name_e", "province_id");
        ?>
        {{Form::open()}}
        
        {{ Form::select('age', $province_list) }}
        {{Form::date('name', \Carbon\Carbon::now()) }}
        {{Form::close()}}
    </body>
</html>
