@extends('layouts.mylayout')

@section('content')
<a class="btn btn-primary" href="/course/create">Add New Course</a>
                <br>
                <table class="table table-hover table-sm mt-4">
                    <thead>
                        <tr>
                            <th>Bil</th>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Cluster</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $course->course_code  }}</td>
                                <td>{{ $course->course_name }}</td>
                                <td>{{ $course->cluster }}</td>
                                <td>
                                    <a class="btn btn-primary" href="/course/edit/{{ $course->id }}">edit</a>
                                    <form method="POST" action="/course/delete/{{ $course->id }}">
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
@endsection
