<html>
    <body>
        <form action="/course/store" method="post">
            {{ csrf_field() }}
            <label>Course Code</label>
            <input type="text" name="course_code">

            <label>Course Name</label>
            <input type="text" name="course_name">

            <label>Course Cluster</label>
            <input type="text" name="cluster">

            <button type="submit">
                Simpan
            </button>
        </form>
    </body>
</html>