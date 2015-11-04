<?php
namespace EstadatSAS\Models;

use Phalcon\Mvc\Model;

/**
 * EstadatSAS\Models\Profiles
 * All the profile levels in the application. Used in conjenction with ACL lists
 */
class Profiles extends Model
{

    /**
     * ID
     * @var integer
     */
    public $id;

    /**
     * Name
     * @var string
     */
    public $name;

    /**
     * Define relationships to Users and Permissions
     */
    public function initialize()
    {
        $this->hasMany('id', 'EstadatSAS\Models\Users', 'profilesId', array(
            'alias' => 'users',
            'foreignKey' => array(
                'message' => 'El perfil no puede ser eliminado porque es usado por un usuario'
            )
        ));

        $this->hasMany('id', 'EstadatSAS\Models\Permissions', 'profilesId', array(
            'alias' => 'permissions'
        ));
    }
}
