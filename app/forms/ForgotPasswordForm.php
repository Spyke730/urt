<?php
namespace EstadatSAS\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Submit;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;

class ForgotPasswordForm extends Form
{

    public function initialize()
    {
        $email = new Text('email', array(
            'placeholder' => 'Correo electrónico'
        ));

        $email->addValidators(array(
            new PresenceOf(array(
                'message' => 'El correo electrónico es obligatorio'
            )),
            new Email(array(
                'message' => 'El correo electrónico no es válido'
            ))
        ));

        $this->add($email);

        $this->add(new Submit('Enviar', array(
            'class' => 'btn btn-primary'
        )));
    }
}
