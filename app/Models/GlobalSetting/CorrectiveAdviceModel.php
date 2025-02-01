<?php

namespace App\Models\GlobalSetting;

use App\Models\Record;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CorrectiveAdviceModel extends Record
{
    use SoftDeletes;
    protected $table="corrective_advice";
    protected $fillable=[
        'position',
        'corrective_advice_category',
        'corrective_advice',
        'user_id',
        'is_active',
        'financial_year'
    ];

    public function correctiveAdviceCategory(){
        return $this->belongsTo(CorrectiveAdviceCategoryModel::class,'corrective_advice_category','id');
    }
}
