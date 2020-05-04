<?php
namespace vsmartcode\KeywordRank\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
	protected $fillable = [
        'keyword',
        'url',
        'user_id',
        'website_id'
    ];

    public function website() {
        return $this->belongsTo('vsmartcode\KeywordRank\Models\Website');
    }

    public function rankings() {
        return $this->hasMany('vsmartcode\KeywordRank\Models\Ranking');
    }
}