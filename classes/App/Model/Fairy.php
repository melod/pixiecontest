<?php
namespace App\Model;
 
//PHPixie will guess the name of the table
//from the class name
class Fairy extends \PHPixie\ORM\Model {

    //If the fairy belongs to a single role
    //you can use the belongs_to relationship
    protected $belongs_to=array('role');
 
    //If you want each fairy to have multiple
    //roles you need to use the many-to-many relationship
    protected $has_many=array('role'=>array('through'=>'fairies_roles'));
}