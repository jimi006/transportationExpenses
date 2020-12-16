<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    protected $table = 'traffic_info';
    protected $dates = ['created_at'];

    const STATUS = [
        1 => [ 'label' => '申請中', 'class' => 'label-warning' ],
        2 => [ 'label' => '確認中', 'class' => 'label-primary' ],
        3 => [ 'label' => '完了', 'class' => 'label-success' ],
        4 => [ 'label' => '未承認', 'class' => 'label-danger' ],
    ];

    /**
     * 状態のラベル
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        // 状態値
        $status = $this->attributes['traffic_request_status'];

        // 定義されていなければ空文字を返す
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['label'];
    }

    public function getStatusClassAttribute()
    {
        // 状態値
        $status = $this->attributes['traffic_request_status'];
        
        // 定義されていなければ空文字を返す
        if (!isset(self::STATUS[$status])) {
            return '';
        }
        
        return self::STATUS[$status]['class'];
    }
}
