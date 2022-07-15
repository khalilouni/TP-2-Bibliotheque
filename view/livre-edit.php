<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Modifier Client</title>
</head>

<body>
    <header>

        <h1>Ajouter un livre</h1>
        <div>
            <button><a href="formulaireAjoutAuteur.php">Ajouter un auteur</a></button>
            <button><a href="list">Retour a la liste</a></button>
        </div>
        
    </header>
    <div class="ajout">

        <div class="form_ajout">
            <form action="../modifier" method="POST">

                <input type="hidden" name="idLivre" value="{{ livre.idLivre }}">

                <label for="titre">Titre</label>
                <input type="text" id="titre" name="Titre" maxlenght="30" value="{{ livre.Titre }}">

                <label for="langueLivre">Langue</label>
                <input type="text"  id="langueLivre" name="langueLivre" maxlenght="45" value="{{ livre.langueLivre }}">

                <label for="anneeSortie">Annee Sortie</label>
                <input type="date" id="anneeSortie" name="anneeSortie" maxlenght="20" value="{{ livre.anneeSortie }}">

                <label for="nbPages">Nombre Pages</label>
                <input type="text" id="nbPages" name="nbPages" maxlenght="20" value="{{ livre.nbPages }}">

                <label for="anneeParution">Annee Parution</label>
                <input type="date" id="anneeParution" name="anneeParution" maxlenght="20" value="{{ livre.anneeParution }}">

                <label for="image">Image</label>
                <input type="text" id="image" name="image" maxlenght="20" value = "../img/Capture-3.jpg" value="{{ livre.image }}">

                <label for="auteur_idAuteur">Auteur</label>
                <select name="auteur_idAuteur" id="auteur_idAuteur">

                    {% for auteur in Auteurs %}
                    <option value="{{ auteur.idAuteur }}">{{ auteur.idAuteur}} - {{ auteur.nom}} {{ auteur.prenom}}</option>
                    {% endfor %}

                </select>

                <label for="categorie_idCategorie">Categorie</label>
                <select name= "categorie_idCategorie" id= "categorie_idCategorie">
                  {% for categorie in categories %}
                  <option value="{{ categorie.idCategorie }}" {% if categorie.idCategorie==livre.categorie_idCategorie %} selected {% endif %}>{{ categorie.idCategorie }} - {{ categorie.nomCategorie}} </option>
                  {% endfor %}
                </select>
                <input type="submit" value="Modifier">
            </form>
        </div>
</body>
</html>