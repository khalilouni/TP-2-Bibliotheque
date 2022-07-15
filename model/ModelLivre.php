<?php

   class ModelLivre extends CRUD{
       protected $table = 'livre';
       protected $primaryKey = 'idLivre';

       protected $fillable = ['idLivre', 'Titre', 'LangueLivre', 'anneeSortie', 'nbPages', 'anneeParution', 'image', 'auteur_idAuteur', 'categorie_idCategorie'];

   } 


?>