<?php

namespace App\Http\Controllers;
use App\Area;
use App\Question;
use Illuminate\Http\Request;

    
    class QuestionsController extends Controller
    {
      
        public function index($area_id)
        {
            
            $questions = Area::find($area_id) # $area_id = 1場合、id=1(主キー)のareaを1つ取得する
                           ->questions; # ↑で取得したareaにひもづくquestionsを取得 ex: area:東京 -> 東京のquestions
                        //    ->first(); # 複数あるquestionsから先頭の1つを取得
                        //    ->name; # 先頭のquestionのnameを取得できる
            // dd($questions);
            $titles = Area::find($area_id);
    
            //controllerからviewへの変数の受け渡し
            //view('blade.phpの前についてる名前', 使いたい配列)
            return view('quiztitle',compact('questions','titles'));
        }
}



