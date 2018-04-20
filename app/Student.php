<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;
use App\Tag;
use App\Lab;

class Student extends Model
{
    protected $fillable = ['first_name', 'last_name', 'major', 'gpa',
        'bio', 'year', 'email', 'linkedin_user', 'belongs_to_lab_id', 'profilepic_path'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function skills() {
        return $this->belongsToMany('App\Skill', 'skill_student');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag', 'student_tag');
    }

    public function labs() {
        return $this->belongsToMany('App\Lab', 'lab_student');
    }

    public function applications() {
        return $this->hasMany('App\Application');
    }

    public function school_courses()
    {
        return $this->belongsToMany('App\SchoolCourse', 'school_course_student');
    }

    public function experiences() {
        return $this->hasMany('App\Experience');
    }

    public function responses() {
        return $this->hasMany('App\ApplicationResponse');
    }
}
