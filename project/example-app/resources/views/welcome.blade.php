<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criar usuario</title>
</head>
<body>
    <form action="/users" method="post">
        @csrf
        <label for="name">nome</label>
        <input type="text" name="name">
        
        <label for="cpf">CPF</label>
        <input type="text" name="cpf">
        
        <label for="text">email</label>
        <input type="text" name="email">
        
        <input type="submit" value="salvar">
    </form>
</body>
</html>