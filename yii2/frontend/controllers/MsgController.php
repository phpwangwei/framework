<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use common\models\Msg;
class MsgController extends Controller{
	 //不加载layout
    public $layout = false;
    //关闭csrf攻击
    public $enableCsrfValidation = false;
	public function actionIndex(){
		$msgs=Msg::find()->all();
		return $this->render('index',compact('msgs'));
	}
	public function actionAdd(){
		 if(Yii::$app->request->ispost){
		 	$uname= Yii::$app->request->post('uname');
		 	$content=Yii::$app->request->post('content');
		 	$msg=new Msg;
		 	$msg->uname=$uname;
		 	$msg->content=$content;
		 	$msg->created_at=$msg->updated_at=time();
		 	$rs=$msg->save();
		 	return $this->redirect(['./msg']);
		 }
	}
}