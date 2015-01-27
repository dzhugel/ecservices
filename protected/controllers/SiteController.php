<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
    /**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
        $this->render('index');    
	}

	public function actionAbout()
	{
		$this->render('about');
	}		
	
	public function actionServices()
	{
		$this->render('services');
	}		
	
	public function actionPortfolio()
	{
		$this->render('portfolio');
	}		
	
	public function actionBlog()
	{
		$this->render('blog');
	}
	
	public function actionContacts()
	{
		$this->render('contacts');
	}		
	
}