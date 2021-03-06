<?php

class feed_controller extends appcontroller {

	private $conf;
	
	public function __construct() {
		parent::__construct();
		$conf = new configuration();
		$this->conf = $conf->getBlogConfiguration();
	}
	
	public function index($id=NULL) {
		$this->redirect('feed/rss');
	}
	
	public function rss($id=NULL){
		$this->plugin->call('feed_header');

		$post = new post();
		$this->view->conf = $this->conf;

		$this->view->setLayout("feed");
		$posts = $post->findAll("ID,urlfriendly,title,IF(POSITION('<!--more-->' IN content)>0,MID(content,1,POSITION('<!--more-->' IN content)-1),content) as content, created", "ID DESC", $this->conf['blog_posts_per_page'], "WHERE status = 'publish'");
		$temp = array();
		foreach($posts as $a_post){
			$temp[$a_post['ID']] = $a_post;
			$temp[$a_post['ID']]['tags'] = $post->getTags($a_post['ID'],'string');
		}
		$this->view->posts = $temp;
		$this->render("rss");
	}
}