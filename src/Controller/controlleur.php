<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

 class controlleur extends AbstractController{
 
 public function index(){
  $pieces = explode("index.php", $this->hote());

  $url = $pieces[0]."index.php";

  return $this->template("index");
  }

 public function page($id){


  $pieces = explode("index.php", $this->hote());

 $url = $pieces[0]."index.php";

   
return  $this->template($id);

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

   public function template($page){

  $pieces = explode("index.php", $this->hote());

 $url = $pieces[0]."index.php";
 $page= "./".$page.".html";

 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {

 $linkcss = "https://css.massaanthony.xyz/dist/css/bootstrap.min.css";
 
 $linkscript = "https://css.massaanthony.xyz/dist/js/bootstrap.min.js";
 
 }else{
 
  $linkcss = "https://css.massaanthony.xyz/dist/css/bootstrap.min.css";
 
  $linkscript = "https://css.massaanthony.xyz/dist/js/bootstrap.min.js";
  
   }

  return  $this->render($page ,["index"=> $url, "project" => $url."/project", "propos"=> $url."/propos", 
 "contact" => $url."/contact", "linkcss"=> $linkcss, "linkscript" => $linkscript ]);

  }

 public function lien(){

 }

}
?>
