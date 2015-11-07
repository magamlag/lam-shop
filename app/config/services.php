<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => array(
		'domain' => '',
		'secret' => '',
	),

	'mandrill' => array(
		'secret' => '',
	),

	'stripe' => [
		'model'  => 'User',
		'secret' => getenv('STRIPE_SECRET'),
	],

	'github' => [
			'client_id' => getenv('GITHUB_CLIENT_ID'),
			'client_secret' => getenv('GITHUB_CLIENT_SECRET'),
			'redirect' => getenv('CALLBACK_REDIRECT'),
	],

);
