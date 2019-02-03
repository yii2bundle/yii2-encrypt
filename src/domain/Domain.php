<?php

namespace yii2module\encrypt\domain;

use yii2rails\app\domain\helpers\EnvService;

/**
 * Class Domain
 * 
 * @package yii2module\encrypt\domain
 *
 * @property \yii2module\encrypt\domain\services\CoderService $coder
 */
class Domain extends \yii2rails\domain\Domain {

	public function config() {
		return [
			'services' => [
				'coder' => [
					'profiles' => EnvService::get('encrypt.profiles'),
				],
			],
		];
	}

}