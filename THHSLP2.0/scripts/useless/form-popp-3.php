<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'noreply@treehousehighschool.com',
    'to' => 'admission.treehousehighschool@gmail.com'
    ),
    'fields' => array(
    'name-stuie' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'name-stuie',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name-stuie\' is required.'
    )
    ),
    'GRADE&#x2F;CLASS' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'GRADE&#x2F;CLASS',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'GRADE&#x2F;CLASS\' is required.'
    )
    ),
    'name-1' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'name-1',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name-1\' is required.'
    )
    ),
    'email' => array(
    'order' => 4,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'phone' => array(
    'order' => 5,
    'type' => 'tel',
    'label' => 'phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'phone\' is required.'
    )
    ),
    'message' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>