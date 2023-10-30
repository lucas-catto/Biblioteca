<style>
    @import url('./Views/CSS/Login/style.css');
</style>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | CosmusX</title>
        <link rel="stylesheet" href="./Views/CSS/Login/style.css">
        <link rel="stylesheet" href="./Views/CSS/global.css">
    </head>
    <body>
        <div class="container">
            <header class="header">
                <a href="./.."><img src="./Views/img/arrow-left.png"></a>
            </header>
    
            <main>
                <h2>Login</h2>
    
                <form id="form" action="/logar" method="post"> <!-- redirect for the same page -->
                    <input  type="email"    name="email"    placeholder="Email">
                    <input  type="password" name="password" placeholder="Senha">
                    <button type="submit"   name="submit">Logar</button>
                </form>
            </main>
    
            <?php include './Views/footer/footer.php'; ?>
        </div>
    </body>
</html>
