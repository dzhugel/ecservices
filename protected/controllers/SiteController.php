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
		$this->pageTitle = '{ec}services | решения для интернет-бизнеса';
        $this->render('index');    
	}

	public function actionAbout()
	{
		$this->pageTitle = '{ec}services | о нас';
		$this->render('about');
	}		
	
	public function actionServices()
	{
		$this->pageTitle = '{ec}services | услуги';
		$this->render('services');
	}		
	
	public function actionPortfolio()
	{
		$this->pageTitle = '{ec}services | портфолио';
		$this->render('portfolio');
	}		
	
	public function actionBlog()
	{
		$this->pageTitle = '{ec}services | блог';
		$this->render('blog');
	}
	
	public function actionContacts()
	{
		$this->pageTitle = '{ec}services | контакты';
		$this->render('contacts');
	}		
	
}