<?php
    require "libs/db_connect.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="libs/bootstrap.min">
    <title>BUYDIV</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 22.5px;
        }
        header {
            height: 80px;
            background-color: #aaaaaa;
        }
        div.header {
            padding-top: 25px;
        }
        a.a_head {
            text-shadow: 0px 0px 10px white;
            text-decoration: none;
            color: white;
        }
        main {
            text-align: center;
            display: block;
            height: 500px;
        }
        a.a_main {
            text-shadow: 0px 0px 10px white;
            text-decoration: none;
            color: white;
        }
        a.add {
            margin-top: 3%;
            font-size: 20px;
            text-shadow: 0px 0px 10px white;
            text-decoration: none;
            color: white;
            display: inline-block;
            background: #aaaaaa;  
            padding: 1rem 1.5rem; 
            text-decoration: none; 
            border-radius: 3px;
        }
        div.main_butt {
            text-align: center;
        }
        th {
            text-shadow: 0px 0px 10px white;
            text-decoration: none;
            color: white; 
            font-size: 20px;
        }
        tr {
            border: 1px solid white;
            background-color: #aaaaaa;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
            <a href="" style="margin-left: 80px;" class="a_head">Товары</a>
            <a href="" style="margin-left: 1400px;" class="a_head">Профиль</a>
        </div>
    </header>
    
    <main>  
        <div>
            <table width="100%">
                <tr>
                    <th>№</th>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>
            </table>
        </div> 
        <a href="add_product.php" class="add">Добавить товар</a>
    </main>
</body>
</html>