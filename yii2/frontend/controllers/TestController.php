<?php 
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use common\models\T1;
class TestController extends Controller{
	//声明去掉当前控制器加载视图的头部底部公共部分，否则yii2会自动加载
    public $layout = false;
	public function actionIndex(){
		$t1=new T1;
		$t1->uname='bb';
		$t1->pwd='ww123';
		$rs=$t1->save();
		echo $t1->id;
		echo '<hr/>';
		var_dump($rs);
		
		//添加一条数据
		// $t1_one=T1::findOne(1);
		// $t1_two=T1::find()->where(['id'=>1])->one();
		// echo '<pre>';
		// echo $t1_one->uname;
		// echo '<hr />';
		// echo $t1_two->uname;
		// echo '<hr />';
		// print_r($t1_one);
		// echo '<hr />';
		// print_r($t1_two);
		// 添加多条数据
		// $t1s=T1::find()->all();
		// foreach ($t1s as $t1){
		// 	echo $t1->id.'__'.$t1->uname.'<br />';
		// }
		// echo "<pre>";
		// print_r($t1s);
		// die;
		// echo 6666;
		// return $this->render('index',[
		// 	'username'=>'伊织',
		// 	'age'=>27,
		// 	'order' => [
  //               'a' => '啪啪啪',
  //               'b' => '哒哒哒'
  //           ],
		// ]);
	}
	public function actionAdd(){
		echo 'add';
	}
}
