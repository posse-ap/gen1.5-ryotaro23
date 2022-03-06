<?php

namespace App\Http\Controllers;
use App\Area;
use App\Choice;
use App\Question;
use Illuminate\Http\Request;

// CRUD
use App\Http\Requests\StoreArea;
use Illuminate\Support\Facades\DB;

// 問題表示
    class QuestionsController extends Controller
    {
      
        public function quiz($area_id)
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

// CRUD

// 管理者画面
public function index()
{
    $areas = Area::all();
    return view('area.index', compact('areas'));
}
// 新規作成ページへ
public function create()
{
    return view('area.create');
}
// 新規作成
public function store(Request $request)
{
    Area::create($request->all());
    return redirect()->route('post.index')->with('success', '新規登録完了しました^^');
}
// 詳細表示
public function show($post_id)
{
    $area = Area::find($post_id);
    return view('area.show', compact('area'));
}
// タイトル編集へ
public function edit($post_id)
{
    $areas = Area::find($post_id);
    return view('area.edit', compact('areas'));
}
// 編集
public function update(Request $request, $post_id)
{
    $update = [
        'name' => $request->name,
    ];
    Area::where('id', $post_id)->update($update);
    return back()->with('success', '編集完了しました');
}
// 削除
public function destroy($id)
{
    Area::where('id', $id)->delete();
    return redirect()->route('post.index')->with('success', '削除完了しました');
}


// 選択肢一覧管理画面表示
public function choice($index_id)
{
    $titles = Area::find($index_id);
    $questions = Area::find($index_id) ->questions;
    return view('choice.index', compact('titles','questions'));
}
// 大問削除
public function choicedestroy($post_id)
{
    dd($post_id);
    Question::where('id', $post_id)->delete();
    return redirect()->route('post.index')->with('success', '削除完了しました');
}
// 大問編集
public function choiceupdate(Request $request, $post_id)
{
    $update = [
        'name' => $request->name,
        'name' => $request->name,
        'name' => $request->name,
        'name' => $request->name,
    ];
    Area::where('id', $post_id)->update($update);
    return back()->with('success', '編集完了しました');
}
// 大問追加保存
public function choicestore(Request $request)
{
    $request->validate([
        'img' => 'required'
    ]);
    $img_name=$request->area_number.'-'.$request->question_number .'.png';

     if(request('img')){
    
        $request->file('img')->storeAs('public',"img/$img_name");
    
    }

    $question = new Question();
    
    $question->img =$request->area_number.'-'.$request->question_number .'.png';
    $question->area_id = $request->area_number;
    $question->name = $request->correct_choice;
    $question->question_number = $request->question_number;
    $question->commentary = $request->question_number;
    $question->timestamps = false;    // タイムテーブル無効
    $question->save();
    

// テーブルに複数のデータを登録するときはinsert
    $datum = [
        ['name' => $request->correct_choice, 'question_id' => $request->area_id, 'valid' =>1 ],
        ['name' => $request->incorrect_choice1, 'question_id' => $request->area_id, 'valid' => 0],
        ['name' => $request->incorrect_choice2, 'question_id' => $request->area_id, 'valid' => 0]
      ];
       DB::table('choices')->insert($datum);

    return redirect()->route('post.index')->with('success', '新規大問登録完了しました^^');
}
// 新規作成ページへ
public function choicecreate($post_id)
{
    $titles = Area::find($post_id);
    $questions = Area::find($post_id) ->questions->max('id')+1;
    return view('choice.create', compact('titles','questions'));
}
// 選択肢追加画面へ
public function addshow($post_id)
{
    $id=$post_id;
    $questions = Question::find($post_id);
    return view('choice.choiceadd', compact('questions','id'));
}
// 選択肢追加
public function newchoicestore(Request $request)
{
    $question = new Choice();
    // あたらしいカラムをつくる
    $question->name = $request->newchoice;
    $question->question_id = $request->quiestion_id;
    $question->valid = $request->valid;
    $question->timestamps = false;    // タイムテーブル無効
    $question->save();

    $this->validate($request, Member::$rules);

    if ($file = $request->profile_img) {
        $fileName = time() . $file->getClientOriginalName();
        $target_path = public_path('uploads/');
        $file->move($target_path, $fileName);
    } else {
        $fileName = "";
    }
    return redirect()->route('post.index')->with('success', '新規登録完了しました^^');
}
}



