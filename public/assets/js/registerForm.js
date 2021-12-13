(function(){

    /* get id of all the elements */
    function getElementById(id){
        let element=document.getElementById(id).value;
        console.log(element);
        return element;
    }
    function formData(){

        $('#createForm').on('submit',function(e){
            e.preventDefault();
            console.log('we are submitting the form register');
            let submittedBtnName = e.originalEvent.submitter.name;
            console.log(submittedBtnName);

            let userName=getElementById('userCreate');
            let password=getElementById('createPass');
           // let radioValue=document.querySelector('input[name="radio"]:checked').value;
            //console.log(radioValue);
         

            if(userName==""||password==""){
                console.log('system not found');
    
            }else{
                //console.log(radioValue);
                let loginData = new FormData(document.getElementById('registerForm'));
                console.log(loginData);
                $.ajax({
                    cache: false,
                    processData: false,
                    contentType: false,
                    type: "POST",
                    url: 'http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/register/handelCreate',
                    data: loginData,
                    success: function(data){
                        console.log(data);
                        let loginError=document.getElementById('showUser');
                        data=JSON.parse(data)
                        loginError.style.color='black';
                                loginError.style.backgroundColor='green';
                                loginError.innerHTML= data.status;
                                setTimeout(function(){window.location.replace('http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/index/index');
                                }, 2000);
                    },
                    error: function(xhr, status, error){
                        console.error(xhr);
                    }
                });

                
            }

        });

    }
    document.addEventListener("DOMContentLoaded", function (){
        formData();
    });
})();
