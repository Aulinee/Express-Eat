function validateFormUpdate() {
    var searchData = document.forms["search-table"]["search-data"].value;
    var replaceData = document.forms["search-table"]["replace-data"].value;
    var count;

    //Validate the emptiness in form
    const emptyForm = [
        searchData == "",
        replaceData == "",
    ]

    for (count = 0; count < 2; count++){
        if (emptyForm[count]) {
            alert("The form cannot be empty");
            return false;
        }
        else{
            count++;
        }
    }
}

function validateFormDelete(){
    var deleteData = document.forms["search-table"]["user-data"].value;

    if (deleteData == "") {
        alert("The form cannot be empty");
        return false;
    }
}