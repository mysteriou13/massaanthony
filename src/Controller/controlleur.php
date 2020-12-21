<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

 class controlleur extends AbstractController{
 
 public function index(){
  $pieces = explode("index.php", $this->hote());

  $url = $pieces[0]."index.php";

  return $this->template();
  }

 public function page($id){


  $pieces = explode("index.php", $this->hote());

 $url = $pieces[0]."index.php";

   
return  $this->template();

  }

     public function hote(){

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
{
    $url = "https";
}
else
{
    $url = "http"; 
}  
$url .= "://"; 
$url .= $_SERVER['HTTP_HOST']; 
$url .= $_SERVER['PHP_SELF']; 

return  $url;
 
   }

   public function template(){

  $pieces = explode("index.php", $this->hote());

 $url = $pieces[0]."index.php";

  return  $this->render('./base.html',["index"=> $url, "project" => $url."/project", "propos"=> $url."/propos", 
 "contact" => $url."/contact" ]);

  }
}
?>
