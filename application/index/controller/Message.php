<?php

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Log;
use think\Request;

class Message extends Controller
{
    public function list(Request $request)
    {
        // 留言列表
//if($request->method('post')){
//    $data=$request->param();
//    var_dump($data);die;
//    $is_validate=$this->validate($data,[
//        'captcha|验证码'=>'require|captcha']);
//    echo $is_validate;
//}
       $res= Db::table('gf_member')
                ->alias('e')
                ->join('gf_manager a','a.id = e.member_id')
                ->field('a.*,e.member_truename')
                ->paginate(5);
//       var_dump($res);die;
//        return view,return $this->fetch(),return $this->display()
//        $res=Db::query("select * from sy_member where member_id=38");
//        $this->assign('res',$res);
//        $this->assign('name','ThinkPHP');
$arr=$res;
//var_dump($arr);
        $this->assign(
            'data',$arr
            );
        return $this->fetch('hehe');
//        $view->assign('data',$data);  //代替数组输出
//return $this->display($content, [
//        'name'  => 'ThinkPHP',
//        'email' => 'thinkphp@qq.com'
//       ]);




        return $this->fetch('hehe',$res);
    }

    public function add()
    {
        // 创建留言页面
    }

    public function create()
    {
        // 创建留言
    }

    public function edit(Request $request)
    {

        return $this->fetch('index');
        $id=$request->param();
        $id=$id['id'];
//        $res=Db::table('member')->where('member_id','=',$id);
//        $view->assign('data',$data);   数组输出 可以

        $res=Db::query("select * from sy_member where member_id=$id");

//        error_log('the arr is:'.print_r($res,1));
//        Log::write(print_r($res,1));
//        $bool=Log::write('zzzzz','log','true');
//        var_dump($bool);die;
//        echo $id;die;
        // 编辑留言页面
    }

    public function update()
    {
        // 保存留言内容
    }

    public function delete()
    {
        // 删除留言
    }

}
