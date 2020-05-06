<?php
    require "libs/db_connect.php";
    $products = R::findAll('products');
    
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = 'elecstyle';

    $link = mysqli_connect($host, $user, $password, $db_name);

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
            
        $product = "DELETE FROM products WHERE id=$id";
        $result = mysqli_query($link, $product) or die("Ошибка " . mysqli_error($link));  
        header("Refresh:0; url=index.php");
    } 

    $data = $_POST;
    if(isset($data['button']))
    {   
        $errors = array();
        if(trim($data['name']) == '')
        {
            $errors[] = 'Введите имя';
        }
        $errors = array();
        if(trim($data['price']) == '')
        {
            $errors[] = 'Введите цену';
        }
        $errors = array();
        if(trim($data['quantity']) == '')
        {
            $errors[] = 'Введите число';
        }
        if (empty($errors)) 
        {
            $product = R::dispense('products');
            $product->name = $data['name'];
            $product->price = $data['price'];
            $product->quantity = $data['quantity'];
            R::store($product);
        } header('refresh: 0');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="libs/bootstrap.min">
    <link rel="stylesheet" href="style.css">
    <title>BUYDELL</title>
</head>
<body>
    
    <header>
        <div class="header">
            <img class="logo" src="img/logo.png" alt="logo">
            <div class="first_header_1"><a class="text_header" href="index.php">ТОВАРЫ</a></div>
            <div class="header_1"><a class="text_header" href="" >ЗАКАЗЫ</a></div>
        </div>
        <div class="header">
            <div class="header_2"><a class="text_header" href="" >ЛИЧНЫЙ КАБИНЕТ</a></div>
        </div>
    </header>
    <main>  
        <div class="main"> 
            <table>
                <tr>
                    <th>#</th>
                    <th>Название продукта</th>
                    <th>Цена</th>
                    <th>Количество</th>
                    <th>Удалить</th>
                </tr>
                <?php foreach ($products as $product):?>
                    <tr>
                        <td><?= $product->id ?></td>
                        <td><?= $product->name ?></td>
                        <td><?= $product->price ?></td>
                        <td><?= $product->quantity ?></td>
                        <td><a style="text-decoration: none; color: white;" href="?del=<?= $product->id ?>">x</a></td>
                    </tr>
            <?php endforeach; ?> 
            </table>
        </div>
        <button class="button_product" onclick="show('block')" >Добавить товар</button>
        <div id="filter" onclick="show('none')"></div>
        <div id="modal_form">
            <form action="index.php" method="POST">
                <a class="text_modal">Добавить товар</a>
                <input class="top_input" type="text" placeholder="Название" name="name" required autocomplete="off">
                <br>
                <input type="number" placeholder="Цена" name="price" required pattern="^[ 0-9]+$" autocomplete="off">
                <br>
                <input type="number" placeholder="Количество" name="quantity" required pattern="^[ 0-9]+$" autocomplete="off">
                <br>
                <button class="submit" name="button" href="index.php" >Добавить</button>
            </form>
        </div>
        <script src="modal.js"></script>
    </main>
</body>
</html>