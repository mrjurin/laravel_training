<html>
    <body>
        <form action="/course/update" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $course->id }}">

            <label>Course Code</label>
            <input type="text" name="course_code" value="{{ $course->course_code }}">

            <label>Course Name</label>
            <input type="text" name="course_name" value="{{ $course->course_name }}">

            <label>Course Cluster</label>
            <input type="text" name="cluster" value="{{ $course->cluster }}">

            <button type="submit">
                Simpan
            </button>
        </form>
    </body>
</html>