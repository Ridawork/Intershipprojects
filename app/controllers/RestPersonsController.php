<?php
namespace controllers;

use models\Person;
use Ubiquity\orm\DAO;
use Ubiquity\utils\http\URequest;
/**
 * Rest Controller RestPersonsController
 * @route("/rest/persons","inherited"=>true,"automated"=>true)
 * @rest("resource"=>"models\Person")
 */
class RestPersonsController extends \Ubiquity\controllers\rest\RestController {
    /**
     * @route("methods"=>["get"])
     */
    public function getAll(){
        parent::get();
    }
    /**
     * @route("methods"=>["post"])
     */
    public function addPerson(){
        $testPer = new Person();
        URequest::setPostValuesToObject($testPer);
        if(DAO::insert($testPer)){
            echo $this->_getResponseFormatter()->getOne($testPer);
        }else{
            echo " person not inserted!";
        }
    }

    /**
     * @route("methods"=>["put"])
     */
    public function updatePerson(){
        $values = URequest::getInput();
        $testPerson = DAO::getOne($this->model, $values['idPerson']);
        if($testPerson != null){
            URequest::setValuesToObject($testPerson, $values);
            if(DAO::update($testPerson)){
                echo $this->_getResponseFormatter()->getOne($testPerson);
            }else{
                echo "Error ";
            }
        }else{
            echo "Person not Found!";
        }
    }
}
