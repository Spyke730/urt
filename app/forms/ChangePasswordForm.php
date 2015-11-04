<?php
namespace EstadatSAS\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Password;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Confirmation;

class ChangePasswordForm extends Form
{

    public function initialize()
    {
        // Password
        $password = new Password('password');

        $password->addValidators(array(
            new PresenceOf(array(
                'message' => 'La contraseña es obligatoria'
            )),
            new StringLength(array(
                'min' => 4,
                'messageMinimum' => 'La contraseña debe tener mínimo 4 caracteres'
            )),
            new Confirmation(array(
                'message' => 'El texto no coincide con la contraseña',
                'with' => 'confirmPassword'
            ))
        ));

        $this->add($password);

        // Confirm Password
        $confirmPassword = new Password('confirmPassword');

        $confirmPassword->addValidators(array(
            new PresenceOf(array(
                'message' => 'El confirmar la contraseña es obligatorio'
            ))
        ));

        $this->add($confirmPassword);
    }
}
