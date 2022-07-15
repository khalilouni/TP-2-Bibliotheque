<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    
    
        
    

    <header>    
        <h1>Ajouter un livre</h1>
        <div>
            <button><a href="list">Retour a la liste</a></button>
        </div>
        
    </header>

    

    <div class="ajout">

        <div class="form_ajout">

            <form action="../livre/storeAuteur" method="POST">

                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" maxlenght="30">

                <label for="prenom">Prenom</label>
                <input type="text"  id="prenom" name="prenom" maxlenght="45">

                <label for="nationnalite">Nationnalite</label>
                <input type="text" id="nationnalite" name="nationnalite" maxlenght="40">

                <label for="dateNaissance">Date de Naissance</label>
                <input type="date" id="dateNaissance" name="dateNaissance" maxlenght="20">


                <input type="submit" value="Submit">

            </form>
        </div>
            
    </div>
</body>
</html>