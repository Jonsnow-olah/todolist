<?php
function createId($qtd){
    $Caracteres = '23456789';
    $QuantidadeCaracteres = strlen($Caracteres);
    $QuantidadeCaracteres--;
    $Hash=NULL;
    for($x=1;$x<=$qtd;$x++){
    $Posicao = rand(0,$QuantidadeCaracteres);
    $Hash .= substr($Caracteres,$Posicao,1);
     }
    return $Hash;
}
$userid =  createId(5);

function set_flash($msg,$type)
	{
		$_SESSION['flash'] = "<div class='alert alert-".$type."'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$msg."</div>";
	}

	function flash()
	{
		if(isset($_SESSION['flash']))
		{
			echo $_SESSION['flash'];
			unset($_SESSION['flash']);
		}
	}



    function set_logins($msg,$type){
        $_SESSION["logins"] = "<div class='alert alert-".$type."'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$msg."</div>";
    }
    function set_signup($msg,$type){
        $_SESSION["signup"] = "<div class='alert alert-".$type."'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$msg."</div>";
    }

?>