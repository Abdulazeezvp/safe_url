<?php

namespace App\Http\Controllers\Url;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UrlController extends Controller
{
    public function index(Request $request)
    {
        return view('index',$request->all());
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'url' => 'required|url'
            ]
        );
        $key = dechex(Carbon::now()->format('YmdHis') . rand(1, 10));
        $added = Cache::add($key, $request->url, now()->addDay());

        return redirect()->route('index',[ 'status' => $added,
        'shrt_url' => $added == true ? 'http://127.0.0.1:8000/u/' . $key : '']);
    }

    public function goto(Request $request){
        $key=$request->key;
        if(isset($key)&&$key){
            $url=Cache::pull($key);
            if($url){
                return redirect($url);
            }else{
                //incase want to redirect custom page, can be replced this in future.
                return response('not found',404);
            }
        }
    }
}
