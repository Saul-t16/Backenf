<?php
namespace common\components;
use Yii;
use yii\base\Component;
use yii\base\Widget;
use yii\bootstrap4\ButtonDropdown;
use yii\helpers\Url;
use yii\web\Cookie;

class languageSwitcher extends Widget {
	public $languages = [
		'en' => 'English',
		'es' => 'Castellano',
	];

	public function init() {
		if( php_sapi_name() === 'cli' ) {
			return TRUE;
		}
		parent::init();
		$languageNew = Yii::$app->request->get('language');
		if($languageNew) {
			if(isset($this->languages[$languageNew])) {
				Yii::$app->language = $languageNew;
				$cookie = new Cookie(['name' => 'language', 'value' => $languageNew, 'httpOnly' => true]);
				Yii::$app->getResponse()->getCookies()->add($cookie);
			}
		} elseif(Yii::$app->getRequest()->getCookies()->has('language')) {
			Yii::$app->language = \Yii::$app->getRequest()->getCookies()->getValue( 'language' );
		}
	}

	public function run(){
		$languages = $this->languages;
		$current = $languages[Yii::$app->language];
		unset($languages[Yii::$app->language]);
		$items = [];
		foreach($languages as $code => $language) {
			$temp = [];
			$temp['label'] = $language;
			$temp['url'] = Url::current(['language' => $code]);
			array_push($items, $temp);
		}
		echo ButtonDropdown::widget(['label' => $current, 'dropdown' => ['items' => $items]]);
	}

}