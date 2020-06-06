<?php
namespace models;
/**
 * @table('profil')
*/
class Profil{
	/**
	 * @id
	 * @column("name"=>"idProfil","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idProfil;

	/**
	 * @column("name"=>"code","nullable"=>false,"dbType"=>"varchar(30)")
	 * @validator("length","constraints"=>array("max"=>30,"notNull"=>true))
	**/
	private $code;

	/**
	 * @column("name"=>"libelle","nullable"=>false,"dbType"=>"varchar(30)")
	 * @validator("length","constraints"=>array("max"=>30,"notNull"=>true))
	**/
	private $libelle;

	 public function getIdProfil(){
		return $this->idProfil;
	}

	 public function setIdProfil($idProfil){
		$this->idProfil=$idProfil;
	}

	 public function getCode(){
		return $this->code;
	}

	 public function setCode($code){
		$this->code=$code;
	}

	 public function getLibelle(){
		return $this->libelle;
	}

	 public function setLibelle($libelle){
		$this->libelle=$libelle;
	}

	 public function __toString(){
		return ($this->libelle??'no value').'';
	}

}