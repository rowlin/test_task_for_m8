<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function sendMessage($code, $message, Data $data = null)
    {
        return response()->json(['code' => $code, 'mess' => $message, 'data' => $data], $code);
    }

    public function get_data($id){
        $data = Data::find($id);
        if($data != null)
            return $this->sendMessage(200, 'OK', $data);
        else
            return $this->sendMessage(404, 'not_found', $data);
    }


    public function index()
    {
        $data = Data::all();
        return view('welcome', compact('data'));
    }

    public function save(Request $request)
    {
        $data = new Data();
        $data->name1 = $request->name1;
        $data->name2 = $request->name2;
        $data->name3 = $request->name3;
        $data->save();
        return $this->sendMessage('200', 'add', $data);
    }



    public  function edit($id, Request $request){
        $data =  Data::find($id);
        $data->name1 = $request->name1;
        $data->name2 = $request->name2;
        $data->name3 = $request->name3;
        $data->save();
        return $this->sendMessage('200','updated', $data );
    }

    public function delete($id)
    {
        $data = Data::find($id);
        if (!$data) {
            return $this->sendMessage('404', 'Data not found');
        }
        $data->delete($data->id);
        return $this->sendMessage('200', 'OK' );
    }



}
