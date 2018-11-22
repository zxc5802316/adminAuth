<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

if(!function_exists('code62')){
	/**地址码生成方法
	 * @param $x
	 * @return string
	 */
	function code62($x){
		$show = '';
		while ($x>0){
			$s = $x % 62;
			if($s>35){
				$s = chr($s + 61);
			}elseif($s>9&&$s<=35){
				$s = chr($s + 55);
			}
			$show .= $s;
			$x = floor($x/62);
			dump($x);
		}
		return $show;
	}
}

if (!function_exists('shorturl')){
	/**生成短地址
	 * @param $url
	 * @return string
	 * @throws \think\db\exception\DataNotFoundException
	 * @throws \think\db\exception\ModelNotFoundException
	 * @throws \think\exception\DbException
	 */
	function shorturl($url){
		$old_url = $url;
		//crc32 把地址转换成 整数
		$url = crc32($url);
		$result = sprintf("%u",$url);
		if($result){
			$map=[];
			$map['shorturl'] = code62($result);
			$info = db('shorturl')->where($map)->find();
			if($info === null){
				$data = [];
				$data['shorturl']=code62($result);
				$data['url'] = $old_url;
				$insertResult = db('shorturl')->insert($data);
				if ($insertResult === null){
					abort(500,'url信息入库失败');
				}
			}

		}
		return 'http://'.$_SERVER['HTTP_HOST'].'/min/'.code62($result);
	}
}