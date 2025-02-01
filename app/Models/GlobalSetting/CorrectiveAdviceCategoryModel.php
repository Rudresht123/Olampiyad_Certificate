<?php

namespace App\Models\GlobalSetting;

use App\Models\Record;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CorrectiveAdviceCategoryModel extends Record
{
    use SoftDeletes;
    protected $table="corrective_advice_category";
    protected $fillable=[
        'financial_year',
        'category_name',
        'position',
        'description',
        'is_active',
        'user_id'
    ];
}
