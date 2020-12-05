//....................................FORM VALIDATE.........................................//

function validateForm()

{

    //....................................gender.........................................//
    if (document.form1.gender.value == "") {
        var gen = document.getElementsByName("gender");
        var formValid = false;

        var i = 0;
        while (!formValid && i < gen.length) {
            if (gen[i].checked) formValid = true;
            i++;
        }

        if (!formValid) alert("Check the Gender Option");

        return formValid;
    }


    //....................................scholar.........................................//

    if (document.form1.scholar.value == "") {
        var scholar = document.form1.scholar.value;
        var formValid = false;

        var i = 0;
        while (!formValid && i < scholar.length) {
            if (scholar[i].checked) formValid = true;
            i++;
        }

        if (!formValid) alert("Check the Scholar Option");
        return formValid;
    }

    //....................................mobile number.........................................//
    if (document.form1.phone.value == "" || isNaN(document.form1.phone.value) ||
        document.form1.phone.value.length != 10) {

        alert("Please enter the valid Mobile Number");
        document.form1.phone.focus();
        return false;
    }
    //....................................year& branch.........................................//
    if (document.form1.year.value == "" || isNaN(document.form1.year.value) ||
        document.form1.year.value.length != 1 || document.form1.year.value >= 5) {

        alert("Please enter the correct year");
        document.form1.year.focus();
        return false;
    }
    //........................................Room No.........................................//
    if (document.form1.roomno.value == "" || isNaN(document.form1.roomno.value) ||
        document.form1.roomno.value.length >= 4) {

        alert("Please enter the valid Room_Number");
        document.form1.roomno.focus();
        return false;
    }
    //........................................Date.........................................//
    function getDate() {
        var today = new Date();

        document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


    }
























    return true;
}