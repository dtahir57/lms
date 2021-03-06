<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use DB;
use App\Models\UserEnrollInCourse;
use Auth;
use App\Models\Lesson;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;
use App\Models\Reply;

class CourseController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->orderBy('id', 'DESC')->paginate(10);
        return view('client.course.index', compact('courses'));
    }

    public function enroll($course_id)
    {
        $user_enroll_in_course = new UserEnrollInCourse;
        $user_enroll_in_course->user_id = Auth::user()->id;
        $user_enroll_in_course->course_id = $course_id;
        $user_enroll_in_course->save();
        return redirect()->route('course.index');
    }

    public function show($course_id)
    {
        $course = Course::find($course_id);
        return view('client.course.show', compact('course'));
    }

    public function lesson_view($course_id, $lesson_id)
    {
        $lesson = Lesson::find($lesson_id);
        $course = Course::find($course_id);
        return view('client.course.lesson_view', compact('lesson', 'course'));
    }

    public function comment(CommentRequest $request, $lesson_id)
    {
        $lesson = Lesson::find($lesson_id);
        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->lesson_id = $lesson_id;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back();
    }

    public function reply(Request $request, $comment_id)
    {
        $comment = Comment::find($comment_id);
        $reply = new Reply;
        $reply->user_id = Auth::user()->id;
        $reply->comment_id = $comment_id;
        $reply->reply = $request->reply;
        $reply->save();
        return redirect()->back();
    }
}
