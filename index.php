<?php  
if ($_GET['page'] === 'acceuil'){
    require ('acceuil.php');
}
elseif($_GET['page']=== 'contact'){
   require ('contact.php');
}
elseif($_GET['page'] === 'hobbies'){
    require ('hobbies.php');
}else{
    require ('404.php');}
?>
