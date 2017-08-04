$('#credsForm').submit(function (e) {
    let note = $('#note').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    if (!phone || !note || !email) {
        swal({ title: "Error!",
          text: "Please provide a note, an email and a phone number!",
          type: "error",
          confirmButtonText: "Cool"
        });
        return false;
    } else {
        return true;
    }

});
