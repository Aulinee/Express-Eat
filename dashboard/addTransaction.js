function validateForm() {
    var paymentID = document.forms["createPayment"]["checknum"].value;
    var customerID = document.forms["createPayment"]["customerID"].value;
    var paymentDate = document.forms["createPayment"]["paymentdate"].value;
    var totalAmount = document.forms["createPayment"]["amount"].value;
    var count;

    //Validate the emptiness in form
    const emptyForm = [
        paymentID == "",
        customerID == "",
        paymentDate == "",
        totalAmount == "",
    ]

    for (count = 0; count < 4; count++){
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


