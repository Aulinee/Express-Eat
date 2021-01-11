function validateForm() {
    var codeNumber = document.forms["createItem"]["codenumber"].value;
    var itemName = document.forms["createItem"]["itemname"].value;
    var descriptionItem = document.forms["createItem"]["description"].value;
    var quantityItem = document.forms["createItem"]["itemquantity"].value;
    var priceItem = document.forms["createItem"]["itemprice"].value;
    var count;

    //Validate the emptiness in form
    const emptyForm = [
        codeNumber == "",
        itemName == "",
        descriptionItem == "",
        quantityItem == "",
        priceItem == "",
    ]

    for (count = 0; count < 6; count++){
        if (emptyForm[count]) {
            alert("The form cannot be empty");
            return false;
        }
        else{
            count++;
        }
    }

}

//To clear all input
function clearForm(){
    location.reload();
    return false;
}


