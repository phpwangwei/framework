<?php
/**
 * @name TestController
 * @author win10-805172027\administrator
 * @desc 测试控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class TestController extends Yaf_Controller_Abstract 
{
	public function indexAction(){
		$t4 = new T4Model();
		#插入数据
		$rs = $t4->add('insert into t4 (uname,pwd) values ("aaa", "bbb")');
		var_dump($rs);
		die;
		$t4s=$t4->get("select * from t4");
		foreach ($t4s as $t4) {
    		echo $t4['id'] . '__' . $t4['uname'] .'___'.$t4['pwd']. '<br />';
		}
		echo '<pre>';
		print_r($t4s);
		die;
		$data1 = '张三'; 
		$data2 =[ 'name' => '李四', 'age'  => 18, 'sex'  => '男'];
		$data3 =[
   				 	[ 'name' => '李四1', 'age'  => 181, 'sex'  => '男1'],
   				 	[ 'name' => '李四2', 'age'  => 182, 'sex'  => '男2'],
    				[ 'name' => '李四3', 'age'  => 183, 'sex'  => '男3']
				];
		$this->getView()->assign('data1',$data1);
		$this->getView()->assign('data2',$data2);
		$this->getView()->assign('data3',$data3);
		return $this->getView()->render('test/index.phtml');	
		return false;
	}
	
	public function addAction(){
		echo 8888;
		return false;

	}
}