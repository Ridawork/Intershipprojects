<?php
namespace models;

use OpenApi\Annotations as OA;
/**
 * @table('user')
 * @OA\Schema()
*/
class User{
	/**
	 * @id
	 * @column("name"=>"idUser","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
     * @OA\Property(type="integer")
	**/
	private $idUser;

	/**
	 * @column("name"=>"Login","nullable"=>false,"dbType"=>"varchar(20)")
	 * @validator("length","constraints"=>array("max"=>20,"notNull"=>true))
     * @OA\Property(type="varchar(20)")
	**/
	private $Login;

	/**
	 * @column("name"=>"Password","nullable"=>false,"dbType"=>"varchar(20)")
	 * @validator("length","constraints"=>array("max"=>20,"notNull"=>true))
     * @OA\Property(type="varchar(20)")
	**/
	private $Password;

	 public function getIdUser(){
		return $this->idUser;
	}

	 public function setIdUser($idUser){
		$this->idUser=$idUser;
	}

	 public function getLogin(){
		return $this->Login;
	}

	 public function setLogin($Login){
		$this->Login=$Login;
	}

	 public function getPassword(){
		return $this->Password;
	}

	 public function setPassword($Password){
		$this->Password=$Password;
	}

	 public function __toString(){
		return ($this->Password??'no value').'';
	}

}