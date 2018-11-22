<?php

namespace app\admin\controller;


class Url extends Common
{
    public function index(){
    	$code = input('code');
    	if (! $code){
    		$this->error('参数错误');
		}
		$map = [];
    	$map['shorturl'] = $code;
    	$url = db('shorturl')->where($map)->value('url');
    	if(!$url){
    		$this->error('原始地址错误！');
		}
		$this->redirect($url);
	}

}
