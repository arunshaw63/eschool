
// Ajax call for student login verification

function checkAdminLogin(){
     
    var adminLogemail= $("#adminLogemail").val();
    var adminLogpass= $("#adminLogpass").val();

    $.ajax({
        url:'admin/admin.php',
        method :'POST',
        data:{
                checkLogemail :"checkLogemail",
                adminLogemail: adminLogemail,
                adminLogpass:adminLogpass            
        },
        success: function(data){
            if(data == 0){
                $("#statusAdminLogMsg").html('<small class="alert alert-danger">Invalid email ID or Password !</small>');
            }
            else{
                $("#statusAdminLogMsg").html('<small class="alert alert-success">Success Loading... !</small>');

            }
            setTimeout(()=>{
                window.location.href="admin/dashboard.php";
                },1000);
        },

    });
}