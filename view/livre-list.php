<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>listes de livres</h1>
        <div>
            <button>
                <a href="create">Ajouter un livre</a>
            </button>
        </div>
    </header>
    
    <div class="container">
        
        {% for livre in livres %}
            <div class="item_container">
                <div class="item_detail">
                    <ul>
                        <li>Titre : {{ livre.Titre }}</li>
                        <li>Nombre de Page : {{ livre.nbPages }}</li>
                        <li>Parution : {{ livre.anneeParution }}</li>
                        <li>Auteur : {{ livre.auteur_idAuteur }}</li>
                        <li>Categorie : {{ livre.categorie_idCategorie }}</li>
                    </ul>
                </div>
                <div class="item_option">
                    <button><a href="../livre/delete/{{ livre.idLivre }}">Supprimer</a></button>
                    <button><a href="../livre/edit/{{ livre.idLivre }}">Modifier</a></button>
                </div>
                <div class="item_image">
                        <img src="{{livre.image}}" alt="image">
                </div>
            </div>

        {% endfor %}
    </div>

   
</body>
</html>
