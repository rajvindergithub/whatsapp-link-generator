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



https://api.whatsapp.com/send?phone=9999845182&text=Hello%20friend%20how%20are%20you%20dasdf%20adf%20asdf%20asdf%20asf%20asf%20asf%20asf%20asf%20asdf%20



