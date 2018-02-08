<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;

class Message extends Controller
{
    public function list()
    {
        // 留言列表
        echo 1111;
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
        $id=$request->param();
        $id=$id['id'];
//        $res=Db::table('member')->where('member_id','=',$id);

        $res=Db::query("select * from sy_member where member_id=$id");
        error_log('the arr is:'.print_r($res,1));
        var_dump($res);
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
