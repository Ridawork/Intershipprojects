<?php
namespace models;
/**
 * @table('person')
*/
class Person{
	/**
	 * @id
	 * @column("name"=>"idPerson","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idPerson;

	/**
	 * @column("name"=>"name","nullable"=>false,"dbType"=>"varchar(30)")
	 * @validator("length","constraints"=>array("max"=>30,"notNull"=>true))
	**/
	private $name;

	/**
	 * @column("name"=>"email","nullable"=>false,"dbType"=>"varchar(50)")
	 * @validator("email","constraints"=>array("notNull"=>true))
	 * @validator("length","constraints"=>array("max"=>50))
	**/
	private $email;

	/**
	 * @column("name"=>"phone","nullable"=>false,"dbType"=>"varchar(20)")
	 * @validator("length","constraints"=>array("max"=>20,"notNull"=>true))
	**/
	private $phone;

	 public function getIdPerson(){
		return $this->idPerson;
	}

	 public function setIdPerson($idPerson){
		$this->idPerson=$idPerson;
	}

	 public function getName(){
		return $this->name;
	}

	 public function setName($name){
		$this->name=$name;
	}

	 public function getEmail(){
		return $this->email;
	}

	 public function setEmail($email){
		$this->email=$email;
	}

	 public function getPhone(){
		return $this->phone;
	}

	 public function setPhone($phone){
		$this->phone=$phone;
	}

	 public function __toString(){
		return ($this->phone??'no value').'';
	}

}