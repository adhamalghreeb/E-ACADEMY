<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\SiteContent;
use App\Trainer;
use App\Student;
use App\Test;

class HomepageController extends Controller
{
    public function index()
    {
        $data['banner'] = SiteContent::select('content')->where('name','banner')->first();
        $data['courses'] = Course::select('id','name','small_desc','cat_id','trainer_id','img','price')
        ->orderBy('id','desc')
        ->take(3)
        ->get();

        $data['courses_count'] = Course::count();
        $data['trainers_count'] = Trainer::count();
        $data['students_count'] = Student::count();
        $data['tests'] = Test::select('name','spec','desc','img')->get();

        return view('Front.index')->with($data);
    }
}
