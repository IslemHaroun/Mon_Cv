<?php




function bddconnect(){ 

    $connect = mysqli_connect("localhost","root","","cv_islem_haroun");
    mysqli_query($connect,"SET NAMES 'utf-8'");

    return $connect;

}

function Rsql($champs){
      
    if(isset($_REQUEST[$champs])){
    
        $val=mysqli_real_escape_string(bddconnect(),$_REQUEST[$champs]);
    }
    else {
        $val=null;
    
    }
        return $val;
        
    }




function recup($champs) {
    if(isset($_REQUEST[$champs])) 
    {$val=nl2br(htmlentities(htmlspecialchars($_REQUEST[$champs]),ENT_QUOTES,"utf-8"));
    } 
    else {$val=NULL;}
    return $val;
}

  




?>

