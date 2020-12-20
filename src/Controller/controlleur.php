<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

 class controlleur extends AbstractController{
 
 public function index(){

   return  $this->render('./index.html');


  }

 public function page($id){

   return  $this->render('./'.$id.'.html');


  }


}

?>
