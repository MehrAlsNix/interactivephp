<?php

namespace MehrAlsNix\InteractivePhp\Action;

use Zend\Form\Form;

class CommandExecutorFormFactory extends Form
{
    protected $captcha;

    public function __construct()
    {

        parent::__construct();

        // add() can take either an Element/Fieldset instance,
        // or a specification, from which the appropriate object
        // will be built.

        $this->add(array(
            'name' => 'name',
            'options' => array(
                'label' => 'Your name',
            ),
            'type' => 'Text',
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Email',
            'name' => 'email',
            'options' => array(
                'label' => 'Your email address',
            ),
        ));
        $this->add(array(
            'name' => 'subject',
            'options' => array(
                'label' => 'Subject',
            ),
            'type' => 'Text',
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Textarea',
            'name' => 'message',
            'options' => array(
                'label' => 'Message',
            ),
        ));
        $this->add(array(
            'name' => 'send',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Submit',
            ),
        ));

        // We could also define the input filter here, or
        // lazy-create it in the getInputFilter() method.
    }
}
