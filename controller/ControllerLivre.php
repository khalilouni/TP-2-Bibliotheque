<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('livre');
RequirePage::requireModel('Categorie');
RequirePage::requireModel('Auteur');
RequirePage::requireLibrary('Validation');



class ControllerLivre{

    public function index(){

      return Twig::render('livre-list.php');

    }

    public function list(){

        $livre = new ModelLivre;
        $select = $livre->select();

        return Twig::render('livre-list.php', ['livres' => $select]);
        
    }
    public function auteur(){

      return Twig::render('auteur-insert.php');
      
  }

    public function create(){

      $categories = new ModelCategorie;
      $categories = $categories->select();

      $Auteurs = new ModelAuteur;
      $Auteurs = $Auteurs->select();

      return Twig::render('livre-insert.php', ['categories'=> $categories, 'auteurs' => $Auteurs]);

    }
    
    public function store(){
      //$validation = new Validation;
      //Array ( [nom] => Peter [adresse] => abc [phone] => 544878 [ville_id] => 1 [pays] => Canada ) 
        
      // $validation->name('nom')->value($nom)->pattern('alpha')->required()->max(30);
      // $validation->name('adresse')->value($adresse)->pattern('alphanum')->max(45);
      // $validation->name('phone')->value($phone)->pattern('tel')->max(20);
      // $validation->name('ville_id')->value($ville_id)->pattern('int')->required();
      // $validation->name('pays')->value($pays)->pattern('alpha')->max(20);
      // //print_r($_POST);
      // if($validation->isSuccess()){

        extract($_POST);
        $livre = new ModelLivre;
        $insert = $livre->insert($_POST);

        //return Twig::render('livre-list.php', ['post' => $_POST]);
        //print_r($insert);
        RequirePage::redirect('../livre/list');

        //return Twig::render('livre-insert.php', ['livress' => $_POST]);

      // }else{
      //  // var_dump($validation->getErrors());
      //    $errors =  $validation->displayErrors();
      //    $villes = new ModelVille;
      //    $villes = $villes->select('nom');
      //   return Twig::render('client-insert.php', ['errors' => $errors, 'villes'=> $villes, 'client' => $_POST]);
      // }
    }
    
    public function modifier(){

      //$validation = new Validation;
      //Array ( [nom] => Peter [adresse] => abc [phone] => 544878 [ville_id] => 1 [pays] => Canada ) 
        
      // $validation->name('nom')->value($nom)->pattern('alpha')->required()->max(30);
      // $validation->name('adresse')->value($adresse)->pattern('alphanum')->max(45);
      // $validation->name('phone')->value($phone)->pattern('tel')->max(20);
      // $validation->name('ville_id')->value($ville_id)->pattern('int')->required();
      // $validation->name('pays')->value($pays)->pattern('alpha')->max(20);
      // //print_r($_POST);
      // if($validation->isSuccess()){

        extract($_POST);
        $livre = new ModelLivre;

        $insert = $livre->update($_POST);

        //return Twig::render('livre-list.php', ['post' => $_POST]);
        //print_r($insert);
        RequirePage::redirect('../livre/list');

        //return Twig::render('livre-insert.php', ['livress' => $_POST]);

      // }else{
      //  // var_dump($validation->getErrors());
      //    $errors =  $validation->displayErrors();
      //    $villes = new ModelVille;
      //    $villes = $villes->select('nom');
      //   return Twig::render('client-insert.php', ['errors' => $errors, 'villes'=> $villes, 'client' => $_POST]);
      // }
    }

    

    public function edit($value){

      $livre = new ModelLivre;
      $selectId = $livre->selectId($value);

      $categories = new ModelCategorie;
      $categories = $categories->select();

      $Auteurs = new ModelAuteur;
      $Auteurs = $Auteurs->select();

      return Twig::render('livre-edit.php', ['livre' => $selectId, 'categories' => $categories, 'Auteurs' => $Auteurs]);

    }

    public function delete($id){

      $livre = new ModelLivre;
      $delete = $livre->delete($id);

      RequirePage::redirect('../list'); 
  }

  public function storeAuteur(){
    //$validation = new Validation;
    //Array ( [nom] => Peter [adresse] => abc [phone] => 544878 [ville_id] => 1 [pays] => Canada ) 
      
    // $validation->name('nom')->value($nom)->pattern('alpha')->required()->max(30);
    // $validation->name('adresse')->value($adresse)->pattern('alphanum')->max(45);
    // $validation->name('phone')->value($phone)->pattern('tel')->max(20);
    // $validation->name('ville_id')->value($ville_id)->pattern('int')->required();
    // $validation->name('pays')->value($pays)->pattern('alpha')->max(20);
    // //print_r($_POST);
    // if($validation->isSuccess()){

      extract($_POST);
      $auteur = new ModelAuteur;
      $insert = $auteur->insert($_POST);

      //return Twig::render('livre-list.php', ['post' => $_POST]);
     // print_r($insert);
      RequirePage::redirect('../livre/list');

      //return Twig::render('livre-insert.php', ['livress' => $_POST]);

    // }else{
    //  // var_dump($validation->getErrors());
    //    $errors =  $validation->displayErrors();
    //    $villes = new ModelVille;
    //    $villes = $villes->select('nom');
    //   return Twig::render('client-insert.php', ['errors' => $errors, 'villes'=> $villes, 'client' => $_POST]);
    // }
  }

}




