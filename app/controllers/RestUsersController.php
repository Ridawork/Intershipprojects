<?php
namespace controllers;

use models\User;
use Ubiquity\orm\DAO;
use Ubiquity\utils\http\URequest;
/**
 * Rest Controller RestUsersController
 * @route("/rest/users","inherited"=>true,"automated"=>true)
 * @rest("resource"=>"models\User")
 */
class RestUsersController extends \Ubiquity\controllers\rest\RestController {

    /**
     * @route("methods"=>["get"])
     */
    public function getAll(){
        parent::get();
    }
    /**
     * @route("methods"=>["post"])
     */
    public function addUser(){
        $testUser = new User();
        URequest::setPostValuesToObject($testUser);
        if(DAO::insert($testUser)){
            echo $this->_getResponseFormatter()->getOne($testUser);
        }else{
            echo " User not inserted!";
        }
    }
    /**
     * @route("methods"=>["put"])
     */
    public function updateUser(){
        $values = URequest::getInput();
        $testUser = DAO::getOne($this->model, $values['idUser']);
        if($testUser != null){
            URequest::setValuesToObject($testUser, $values);
            if(DAO::update($testUser)){
                echo $this->_getResponseFormatter()->getOne($testUser);
            }else{
                echo "Error ";
            }
        }else{
            echo "User not Found!";
        }
    }

}
