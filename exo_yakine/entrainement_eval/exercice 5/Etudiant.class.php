<?php

class Etudiant
{
	private $prenom; 
	private $nom;
	private $email;
    private $telephone;
    


    // Getter et sette de Prenom :
    public function setPrenom($arg){
		if(is_string($arg) && strlen($arg) >= 4 && strlen($arg) <= 30){
			$this -> prenom = $arg;
			return $this;
		}
	}
	public function getPrenom(){
		return $this -> prenom;
	}
    
    
    // Getter et sette de Nom :
	public function setNom($arg){
		if(is_string($arg) && strlen($arg) >= 5 && strlen($arg) <= 30){
			$this -> nom = $arg;
			return $this;
		}
	}
	public function getNom(){
		return $this -> nom;
    }


    // Getter et sette de Email : 
    public function setEmail($email) {
        if(FILTER_VAR($email, FILTER_VALIDATE_EMAIL)) {
            $this -> email = $email;
        }
    } 

    public function getEmail() {
        return $this -> email;
    }

    
    // Getter et sette de Telephone :
    public function setTelephone($arg){
		if(is_numeric($arg) && strlen($arg) == 10){
			$this -> telephone = $arg;
			return $this;
		}
	}
	public function getTelephone(){
		return $this -> telephone;
	}



    //----------------
	public function getInfos(){
		$infos = array();
		$infos['prenom'] = $this -> getPrenom();
		$infos['nom'] = $this -> getNom();
		$infos['email'] = $this -> getEmail();
		$infos['telephone'] = $this -> getTelephone();
		
		return $infos;
	}

}
	