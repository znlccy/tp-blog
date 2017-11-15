<?php
namespace app\home\controller;

use app\home\controller\BaseController;
use app\home\model\Article;

class IndexController extends BaseController
{

	public function index(){
		$article = new Article;
		$articles = $article->getAllArticle();
		$this->assign('articles',$articles);
		$this->assign('cur','cur');
		return $this->fetch();
	}
}
