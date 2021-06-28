function addstu() {

    var reg = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();

    // Checking form Field on submission 
    if (stuname.trim() == "") {
        $("#statusMsg1").html('<span>Please Enter Name !</span>');
        $("#stuname").focus();
    } else if (stuemail.trim() == "") {
        $("#statusMsg2").html('<span>Please Enter Email !</span>');
        $("#stuemail").focus();

    } else if (stuemail.trim() !== "" && !reg.test(stuemail)) {
        $("#statusMsg2").html('<span>Please Enter Valid Email !</span>');
    }
    else if (stupass.trim() == "") {
        $("#statusMsg3").html('<span>Please Enter Password !</span>');
        $("#stupass").focus();

    } else {

        $.ajax({
            url: 'student/addstudent.php',
            method: 'POST',
            dataType: 'json',
            data: {
                stusignup: "stusignup",
                stuname: stuname,
                stuemail: stuemail,
                stupass: stupass
            },
            success: function (data) {
                if (data == "OK") {
                    $("#successMsg").html('<span>Registratin successfull</span>');
                    clearStuRegField();
                    
                } else {
                    $("#successMsg").html('<span>Registratin Failed</span>');
                }
                setTimeout(() => {
                    window.location.href = "index.php";
                }, 1000);
            }

        })
    }
}
//  Empty Form Field
function clearStuRegField() {
    $("#stuRegForm").trigger("reset");
    $("#successMsg1").html("");
    $("#successMsg2").html("");
    $("#successMsg3").html("");
}

// Email already exists in database
$(document).ready( function() {
    $( "#stuemail" ).on( "keypress blur", function () {
        var reg = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        var stuemail  = $( "#stuemail" ).val();
        
        $.ajax({
            url : 'student/addstudent.php',
            method : 'POST',
            data : {
                checkemail : "checkemail",
                stuemail : stuemail
            },
            success : function(data){
                console.log(data);
                if( data != 0){
                    $("#statusMsg2").html(
                        '<small style="color:red;">Email already exists !<small>'
                    );
                    $("#signup").attr("disabled", true);
                }  else if(data == 0 && reg.test(stuemail)){
                    $("#statusMsg2").html(
                        '<small style="color:green;">There you go  !<small>'
                    );
                    $("#signup").attr("disabled", false);
                } else if(!reg.test(stuemail)){
                    $("#statusMsg2").html(
                        '<small style="color:red"> Please enter valid email !   </small>'
                    );
                    $("#signup").attr("disabled", true);

                } if( stuemail == " "){
                    $("#statusMsg2").html(
                        '<small style="color:red"> Please enter email !   </small>'
                    );
                }
            },
        });
    });
});


// Ajax call for student login verification

function checkStuLogin() {

    var stuLogemail = $("#stuLogemail").val();
    var stuLogpass = $("#stuLogpass").val();

    $.ajax({
        url: 'student/addstudent.php',
        method: 'POST',
        data: {
            checkLogemail: "checkLogemail",
            stuLogemail: stuLogemail,
            stuLogpass: stuLogpass
        },
        success: function (data) {
            if (data == 0) {
                $("#statusLogMsg").html('<small class="alert alert-danger">Invalid email ID or Password !</small>');
            }
            else {
                $("#statusLogMsg").html('<div class="spinner-border text-success" role="status"></div>');

            }
            setTimeout(() => {
                window.location.href = "index.php";
            }, 1000);
        },

    })

}