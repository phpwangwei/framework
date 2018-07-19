<?php 
namespace Home\Controller;  
use think\Controller;  // 
class MsgController extends Controller {
   public function index(){
   		$msgs=M('msg')->select();
   		$this->assign('msgs',$msgs);
    	$this->display('index');
    }
    public function add(){
	     	#1.判断提交方式 TODO.待会说IS_POST封装原理
	    if (IS_POST) {
	        #2.接受数据
	        $postData = I('post.');
	        $postData['created_at'] = $postData['updated_at'] = time();
	        #3.入库
	        $rs = M('msg')->add($postData);
	        #4.判断
	        if ($rs) {
	            $this->success('操作成功', U('msg/index'));
	        } else {
	            $this->error('操作失败', U('msg/index'));
	        }
	    }
   	} 

}