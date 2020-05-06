<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Товар</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        form {
            margin-top: 17rem;
            text-align: center;
        }
        input {
            padding: 0.5rem;
            margin-top: 1rem;
        }
        button.submit {
            margin-top: 1rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            width: 11rem;
        }
        a {
            font-size: 1.25rem;
            text-decoration: none;
            color: black;
            margin-left: 99%;
        }
    </style>
</head>
<body> 
    <a href="index.php">x</a>
    <form action="" method="post">
        <input type="text" placeholder="Название" name="name">
        <br>
        <input type="text" placeholder="Цена" name="price">
        <br>
        <input type="text" placeholder="Количество" name="quantity">
        <br>
        <button class="submit">Добавить</button>
    </form>
</body>
</html>