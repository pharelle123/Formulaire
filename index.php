<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    

    <header>
            <h1>Complèter le code PHP suivant</h1>
    </header>

    <main>



    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login =$_POST['login'] ?? '';
        $password =$_POST['password'] ?? '';
       
        $admin = isset($_POST['admin']) ? 1 : 0;

       

        print "<p>Valeur à enregistrer en base : " . $admin."</p>";
        
        echo "Login : $login <br>";
        echo "Mot de passe : $password <br>";
    }
?>


        <section>
                <fieldset>
                    <legend>Remplir les champs</legend>
                    
                    <form action="index.php" method="post">
                        <label for="login">Login</label>
                        <input type="text"
                        id="login" 
                        name="login" 
                        placeholder="Votre Login" 
                        required="true" 
                        autofocus> 

                        <label for="password">Mot De Passe</label>
                        <input type="password"
                        id="password"
                        name="password"
                        placeholder="Votre Mot De Passe"
                       required="true"
                        > 
                        
                        <input type="checkbox"
                        id="admin"
                        name="admin"
                        >  <label for="admin">Vous etes admin</label>
                       
                         

                        <input type="submit" value="Envoyer">

                    </form>
                </fieldset>
        </section>
    </main>

    <footer>
        <strong>
            &copy; - MIT - 2025</strong> 
    </footer>


</body>
</html>