<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function questions()
    {
        return $this->hasMany('App\Question');
        
    }
}

# $area = Area::find(1); ＄areaはAreaクラスから生成されたオブジェクト
# $areaオブジェクトはpublic function questionsを呼び出せる -> $area->questions(); ができる
