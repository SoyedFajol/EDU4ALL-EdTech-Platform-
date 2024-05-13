function checkDuplicateCourseName() {
    let coursename = document.getElementById('coursename').value;
    let currentCourseName = document.getElementById('currentCourseName').value;

    if (coursename == currentCourseName) {
        document.getElementById('isNewCourseNameValid').value = "True";
    }

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/checkDuplicateCourseName.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText);
            if (response.message == 'True') {
                alert(`Course Name: ${coursename} Already Exists`);
                document.getElementById('isNewCourseNameValid').value = "False";
                document.getElementById('courseError').innerHTML = "Course name already exists";
            } else {
                document.getElementById('isNewCourseNameValid').value = "True";
                document.getElementById('courseError').innerHTML = "";
            }
        }
    }
    xhttp.send('coursename=' + coursename);
}