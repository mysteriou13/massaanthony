<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

 class controlleur extends AbstractController{
 
 public function index($id){

   return  $this->render('./base.html');


  }

}

?>
