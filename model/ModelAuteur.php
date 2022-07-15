<?php

   class ModelAuteur extends CRUD{
       protected $table = 'auteur';
       protected $primaryKey = 'idAuteur';
       protected $fillable = ['idAuteur', 'nom', 'prenom', 'nationnalite', 'dateNaissance'];
   } 

?>