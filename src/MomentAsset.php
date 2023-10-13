<?php

namespace darcorm\fullcalendar;

/**
 * Class MomentAsset
 * @package darcorm\fullcalendar
 */
class MomentAsset extends \yii\web\AssetBundle
{
	/** @var  array  The javascript file for the Moment library */
	public $js = [
		'moment.js',
	];
	/** @var  string  The location of the Moment.js library */
	public $sourcePath = '@npm/moment';
}