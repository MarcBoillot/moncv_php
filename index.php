<?php  
$var = filter_input(INPUT_GET,'page', FILTER_SANITIZE_URL);
$var1 = filter_input(INPUT_GET,'page', FILTER_SANITIZE_SPECIAL_CHARS);
if($_SERVER['REQUEST_METHOD'] === $_POST){
            
}
if ($_GET ['page'] === 'acceuil'){
    require ('acceuil.php');
}
elseif($_GET['page']=== 'contact'){
   require ('contact.php');
}
elseif($_GET['page'] === 'hobbies'){
    require ('hobbies.php');
}else{
    require ('404.php');
    echo " vous avez recherché $var1 merci de refaire votre recherche";
}
?>
