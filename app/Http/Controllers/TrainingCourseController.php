<?php

namespace App\Http\Controllers;

use App\Models\TrainingCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TrainingCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = TrainingCourse::all();
        return view('view_courses', compact('courses'));
    }

    public function moveToTrash(Request $request)
    {
        $id = $request->delete;
        TrainingCourse::findOrFail($id)->delete();

        Session::flash('message', 'Course Moved to Trash');
        return redirect()->route('course.index');
    }

    public function showTrash()
    {
        $trash_course = TrainingCourse::onlyTrashed()->get();

        return view('trashed_courses', compact('trash_course'));
    }

    public function restore(Request $request)
    {
        $id = $request->restore;
        $data = TrainingCourse::withTrashed()->find($id);
        if (!is_null($data)) {
            $data->restore();
            Session::flash('message', 'Course restored');
        }

        return redirect()->route('show.trashed');
    }

    public function forceDelete(request $request)
    {
        $id = $request->delete;

        $data = TrainingCourse::withTrashed()->find($id);
        if (!is_null($data)){
            $data->forceDelete();
            Session::flash('message', 'Course deleted');
        }
        return redirect()->route('show.trashed');
    }
}
