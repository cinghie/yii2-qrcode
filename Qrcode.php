<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-carriers
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @package yii2-carriers
 * @version 0.2.0
 */

namespace cinghie\qrcode;

use Yii;
use yii\base\Module;
use yii\i18n\PhpMessageSource;

/**
 * Class Qrcode
 */
class Qrcode extends Module
{
    /**
     * @var array
     */
    public $modelMap = [];

    /**
     * @var string[]
     */
    public $roles = ['admin'];

	/**
	 * @var bool
	 */
	public $showTitles = false;

	/**
     * @var array
     */
	public $slugifyOptions = [
		'separator' => '-',
		'lowercase' => true,
		'trim' => true,
		'rulesets'  => [
			'default'
		]
	];

	/**
	 * @var string
	 */
	public $tabMenu = '@vendor/cinghie/yii2-qrcode/views/default/_menu.php';

	/**
	 * Carriers init
	 */
	public function init()
	{
		$this->registerTranslations();

		parent::init();
	}

	/**
	 * Translating module message
	 */
	public function registerTranslations()
	{
		if (!isset(Yii::$app->i18n->translations['traits*']))
		{
			Yii::$app->i18n->translations['traits*'] = [
				'class' => PhpMessageSource::class,
				'basePath' => '@vendor/cinghie/yii2-traits/messages',
			];
		}
	}
}
