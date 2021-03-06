<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;
use App\Tag;
use App\Lab;

class Student extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'year',
                            'bio', 'major', 'gpa',
                            'classes', 'experiences',
                            'linkedin_link', 'website_link',
                            'belongs_to_lab_id', 'faculty_endorsements',
                            'profilepic_path', 'resume_path'];

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
