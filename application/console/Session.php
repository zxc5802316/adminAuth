<?php
	/**
 * Created by PhpStorm.
 * User: asdf
 * Date: 2018/11/22
 * Time: 11:06
	 *
	 * 自定义命令
 */

	namespace app\console;

	use think\console\Command;
	use think\console\Input;
	use think\console\input\Option;
	use think\console\Output;

	class Session extends Command
	{


		protected function configure()
		{
			/**addOption(

			 * clear 选项
			 * d 别名
			 * Option::VALUE_NONE 类型
			 * 'clear all sesssion' 描述
			 * null 默认值
			 *)
			 *Option::VALUE_NONE         值对应没有输入值
			 * Option::VALUE_REQUIRED    输入值必须
			 * Option::VALUE_OPTIONAL    输入值可选
			 * Option::VALUE_IS_ARRAY    数组输入值
			 */
			$this->setName('session')->addOption('clear','d',Option::VALUE_NONE,'clear all sesssion',null)->setDescription('Clear Session file');
		}

		protected function execute(Input $input, Output $output)
		{
			$path = $input->getOption('clear');

			if($path){
				unset($_SESSION);
				$output->writeln('Clear Session Successed');
			}else{
				$output->writeln('Clear Nothing');
			}
		}

	}