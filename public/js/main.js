window.onload = function (){
    // alert("tu")

    function checkLogin(e){
        alert("tu2")
        e.preventDefault()
        $usernameReg = /[A-z]{5,}\d*/;
        $passwordReg = /[A-z]{5,}\d*/;

        $username = $('#username').val();
        alert($username);
    }
}