<?php

namespace app\admin\controller;


class News extends Common
{
	public function index(){
		$id = input('id');
		if (! $id){
			$this->error('参数错误');
		}
		$map = [];
		$map['id'] = $id;
		$info = db('news')->where($map)->find();
		if (! $info){
			$this->error('数据为空！');
		}
		dump(shorturl($this->request->url(true)));
		halt($info);

	}
}
