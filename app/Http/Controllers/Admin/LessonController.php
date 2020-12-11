<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Lesson;
use App\Models\Course;
use App\Http\Requests\LessonRequest;
use Session;
use Storage;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course_id)
    {
        $course = Course::find($course_id);
        $lessons = Lesson::where('course_id', $course->id)->latest()->get();
        return view('admin.lesson.index', compact('lessons', 'course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($course_id)
    {
        $course = Course::find($course_id);
        return view('admin.lesson.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LessonRequest $request, $course_id)
    {
        $lesson = new Lesson;
        $lesson->course_id = $course_id;
        $lesson->lesson_title = $request->lesson_title;
        $lesson->lesson_content = $request->lesson_content;
        $lesson->video_url = $request->video_url;
        $lesson->save();
        Session::flash('created', 'New Lesson Added Successfully!');
        return redirect()->route('admin.course.lesson.index', $course_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($course_id, $lesson_id)
    {
        $lesson = Lesson::find($lesson_id);
        return view('admin.lesson.show', compact('lesson', 'course_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($course_id, $lesson_id)
    {
        $lesson = Lesson::find($lesson_id);
        return view('admin.lesson.edit', compact('lesson', 'course_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LessonRequest $request, $course_id, $lesson_id)
    {
        $lesson = Lesson::find($lesson_id);
        $lesson->lesson_title = $request->lesson_title;
        $lesson->lesson_content = $request->lesson_content;
        $lesson->video_url = $request->video_url;
        $lesson->update();
        Session::flash('updated', 'Lesson Updated Successfully!');
        return redirect()->route('admin.course.lesson.index', $course_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($course_id, $lesson_id)
    {
        $lesson = Lesson::find($lesson_id);
        Storage::delete($lesson->video_url);
        $lesson->delete();
        Session::flash('deleted', 'Lesson Deleted Successfully!');
        return redirect()->route('admin.course.lesson.index', $course_id);
    }
}
