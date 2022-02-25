<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;
use App\Course;

class CourseController extends Controller
{
    public function cat($id)
    {
        $data['cat'] = Cat::findOrFail($id);
        $data['courses'] = Course::where('cat_id',$id)->paginate(3);

        return view('Front.courses.cat')->with($data);
    }
    public function show($id, $c_id)
    {
        $data['course'] = Course::findOrFail($c_id);
        return view('Front.courses.show')->with($data);
    }
}
