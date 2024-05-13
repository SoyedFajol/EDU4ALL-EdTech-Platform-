function editfunc() {
    let id = document.querySelector('input[name="id"]').value;
    let coursename = document.querySelector('input[name="coursename"]').value;
    let duration = document.querySelector('input[name="duration"]').value;
    let price = document.querySelector('input[name="price"]').value;

    if (coursename == '' || duration == '' || price == '') {
        document.getElementById('warning').innerHTML = "Please fill in all fields";
        return false;
    } else {
        let formData = {
            id: id,
            coursename: coursename,
            duration: duration,
            price: price
        };

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    document.getElementById('warning').innerHTML = this.responseText;
                } else {
                    document.getElementById('warning').innerHTML = "Error: " + this.statusText;
                }
            }
        };
        xhttp.open('POST', '../controllers/editcourse.php', true);
        xhttp.setRequestHeader("Content-type", "application/json");
        xhttp.send(JSON.stringify(formData));
        return false; 
    }
}
