<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Commodity;
class CommodityController extends Controller
{
    /**
     * Display a listing of the resource.
     *列表页展示
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
     $data=Commodity::all();
      $data=Commodity::get();
     //dd($data);
       return view('commodity.index',['data'=>$data]); 
    }

    /**
     * Show the form for creating a new resource.
     *添加页面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('commodity.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *执行添加
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->except('_token');
        //dd($data);
        //文件上传
        if($request->hasFile('head')){
            $data['head']=$this->upload('head');
           // dd($img);
        }
    
        $res=Commodity::insert($data);
       // dd($res);
        if($res){
            return redirect('/commodity');
        }
    }
    /**上传文件
     * [upload description]
     * @param  [type] $filename [description]
     * @return [type]           [description]
     */
        public function upload($filename){
            //判断上传过程有误错误
            if(request()->file($filename)->isValid()){
            //介绍值
            $photo= request()->file($filename);
            //上传
            $store_result=$photo->store('uploads');
            return $store_result;
            }
            exit('未获取到上传文件或者上传过程出错');
        }
    /**
     * Display the specified resource.
     *预留详情页
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *编辑页面
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
          $user=Commodity::where('c_id',$id)->first();
     return view('commodity.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *执行编辑
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //echo $id;
        $user =$request->except('_token');
       // dd($user);
          if($request->hasFile('head')){
            $user['head']=$this->upload('head');
           // dd($img);
        }
      
      $res=Commodity::where('c_id',$id)->update($user);
        if($res!==false){
            return redirect('/commodity');
        } 
        
    }

    /**
     * Remove the specified resource from storage.
     *删除方法
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
      $res=Commodity::destroy($id);
      if($res){
        return redirect('/commodity');
      }
    }
}
