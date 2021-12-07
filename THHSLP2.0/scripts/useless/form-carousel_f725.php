<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => ''
    ),
    'fields' => array(
    'name-1' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'name-1',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name-1\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 3,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'phone' => array(
    'order' => 4,
    'type' => 'tel',
    'label' => 'phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'phone\' is required.'
    )
    ),
    'select' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'select',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'select\' is required.'
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