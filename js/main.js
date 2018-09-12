function check_in_date_check() {
    var selectedText = document.getElementById('check_in_date').value;
    var selectedDate = new Date(selectedText);
    var now = new Date();
    if (selectedDate <= now) {
        alert("Date must be in the future");
    }
}

function check_out_date_check() {
    var selectedText = document.getElementById('check_in_date').value;
    var check_in_date = new Date(selectedText);

    var selectedText = document.getElementById('check_out_date').value;
    var check_out_date = new Date(selectedText);

    //alert(check_out_date);

    //var now = new Date();
    if (check_in_date >= check_out_date) {
        alert("Check out Date must be in the future");
    }
}