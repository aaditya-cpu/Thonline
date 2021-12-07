<?php

require_once('FormProcessor.php');
 $processor = new FormProcessor('');

	if (!function_exists('write_log')) {

		function write_log($log) {
			if (true === WP_DEBUG) {
				if (is_array($log) || is_object($log)) {
					error_log(print_r($log, true));
				} else {
					error_log($log);
				}
			}
		}

	}

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'aaditya.goenka@mrsoftwares.in',
    'to' => 'admission.treehousehighschool@gmail.com'
    ),
    'fields' => array(
    'Student-Name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Student-Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Student-Name\' is required.'
    )
    ),
    'GRADE' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'GRADE',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'GRADE\' is required.'
    )
    ),
    'Your-Name' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Your-Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Your-Name\' is required.'
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
    'select' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'select',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'select\' is required.'
    )
    ),
    )
    );
	
	write_log('SHANTANU WAS HERE !');
	write_log($form);

	//die($processor->_getErrorResponse("End of popp"));
    $processor->process($form);



    ?>