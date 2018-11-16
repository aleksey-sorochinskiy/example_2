<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumSection extends Model
{
    /**
     * Using table name
     *
     * @var string
     */
    protected $table = 'forum_sections';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['position', 'reps_id', 'name', 'title', 'description', 'is_active', 'is_general', 'user_can_add_topics'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Relations. Sections topics
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function topics()
    {
        return $this->hasMany('App\ForumTopic', 'section_id');
    }

    /**
     * Relations. Sections topics
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news_topics()
    {
        return $this->hasMany('App\ForumTopic', 'section_id')->where('news',1);
    }

    /**
     * @return mixed
     */
    public static function active()
    {
        return $general_forum = ForumSection::where('is_active',1)->orderBy('position');
    }

    /**
     * @return mixed
     */
    public static function general_active()
    {
        return $general_forum = ForumSection::where('is_active',1)->where('is_general', 1)->orderBy('position');
    }
}
