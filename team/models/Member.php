<?php namespace Alexcorp\Team\Models;

use Model;

/**
 * Member Model
 */
class Member extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'alexcorp_team_members';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'photo' => 'System\Models\File'
    ];
    public $attachMany = [];

    public function scopeIsPublished($query)
    {
        return $query->where('published', true);
    }
}
