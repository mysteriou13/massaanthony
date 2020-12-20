<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

 class controlleur extends AbstractController{
 
 public function index($id = "index"){
   return  $this->render('./base.html');


  }

}

?>
