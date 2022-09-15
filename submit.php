<?php 
if(isset($_POST['number'])){
    
    
    $number = $_POST['number']; 
    $message = $_POST['message']; 
   
    $messageArray = explode(' ',$message); 
     
     $removeSpace = join('%20',$messageArray);
   
    
    $whatAppLink = 'https://api.whatsapp.com/send?phone='.$number.'&text='.$removeSpace;
    
    echo $whatAppLink; 
}

?>

