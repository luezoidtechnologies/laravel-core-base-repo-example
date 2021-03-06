<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Minion
 *
 * @property int $id
 * @property string $name
 * @property int $total_eyes
 * @property string $favourite_sound
 * @property bool $has_hairs
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Mission $leading_mission
 * @property Collection|Mission[] $missions
 *
 * @package App\Models
 */
class Minion extends Model
{
    public $filterable = [
        'total_eyes',
        'has_hairs',
        'created_at',
        'updated_at'
    ];
    public $createExcept = [
        'id'
    ];
    public $updateExcept = [
        'total_eyes',
        'has_hairs'
    ];
    protected $table = 'minions';
    protected $casts = [
        'total_eyes' => 'int',
        'has_hairs' => 'bool'
    ];
    protected $fillable = [
        'name',
        'total_eyes',
        'favourite_sound',
        'has_hairs'
    ];

    public function leading_mission()
    {
        return $this->hasOne(Mission::class, 'lead_by_id');
    }

    public function missions()
    {
        return $this->belongsToMany(Mission::class, 'minion_mission_mapping')
            ->withPivot('id')
            ->withTimestamps();
    }
}
