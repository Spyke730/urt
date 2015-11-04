<?php
namespace EstadatSAS\Models;
use Phalcon\Mvc\Model;

class Registro extends Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $id_user;

    /**
     *
     * @var string
     */
    public $user;

    /**
     *
     * @var string
     */
    public $completo;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'id_user' => 'id_user', 
            'user' => 'user', 
            'completo' => 'completo', 
            'created_at' => 'created_at'
        );
    }

}
