<?php

class PageController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		return View::make('index');
	}

	public function getExceptsKeywords()
	{
		return View::make('excepts_keywords');
	}

	public function getAdsGroup()
	{
		return View::make('ads_group');
	}

	public function getAddAds()
	{
		return View::make('add_ads');
	}


}
