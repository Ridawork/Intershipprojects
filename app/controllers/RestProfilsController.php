<?php
namespace controllers;

use models\Profil;
use Ubiquity\orm\DAO;
use Ubiquity\utils\http\URequest;
/**
 * Rest Controller RestProfilsController
 * @route("/rest/profils","inherited"=>true,"automated"=>true)
 * @rest("resource"=>"models\Profil")
 */
class RestProfilsController extends \Ubiquity\controllers\rest\RestController {
    /**
     * @route("methods"=>["get"])
     */
    public function getAll(){
        parent::get();
    }
    /**
     * @route("methods"=>["post"])
     */
    public function addProfil(){
        $testPro = new Profil();
        URequest::setPostValuesToObject($testPro);
        if(DAO::insert($testPro)){
            echo $this->_getResponseFormatter()->getOne($testPro);
        }else{
            echo "Profil not inserted!";
        }
    }

    /**
     * @route("methods"=>["put"])
     */
    public function updateProfil(){
        $values = URequest::getInput();
        $testPro = DAO::getOne($this->model, $values['idProfil']);
        if($testPro != null){
            URequest::setValuesToObject($testPro, $values);
            if(DAO::update($testPro)){
                echo $this->_getResponseFormatter()->getOne($testPro);
            }else{
                echo "Error ";
            }
        }else{
            echo "Profil not Found!";
        }
    }

}
