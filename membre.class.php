<?php
class Membre {
    private $pseudo;
    private $email;
    private $siganture ;
    private $actif;

public function envoyeremail($titre,$message)
{
    mail($this->email,$titre,$message); 

}
public function bannir () {
    $this->actif=false;
    $this->envoyeremail('vous etes bannis ','ne revenez plus!');
}
public function getpseudo ()
{
    return $this->pseudo;
}
public function setpseudo($nvpseudo)
{
    if(!empty($nvpseudo)AND strlen($nvpseudo)<15){
        $this->pseudo=$nvpseudo;

    }

}
    
}

?>