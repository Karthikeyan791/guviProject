$(document).ready(function(){
    $("#save").click(function(){
        let firstName=$("#firstName").val();
        let lastName=$("#lastName").val();
        let mobile=$("#mobile").val();
        let password=$("#password").val();
        let confirmPassword=$("#confirmPassword").val();
        let email=$("#email").val();
        $.post("register.php",{
            firstName:firstName,
            lastName:lastName,
            mobile:mobile,
            password:password,
            confirmPassword:confirmPassword,
            email:email
        } ,function(data){
            alert(data);
        });
       

    });
});