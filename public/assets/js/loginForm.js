(function(){

    /* get id of all the elements */
    function getElementById(id){
        let element=document.getElementById(id).value;
        console.log(element);
        return element;
    }
    function formData(){

        console.log('this is the login page ');
        $('#loginForm').on('submit',function(e){
            e.preventDefault();
            console.log('we are submitting the form');
            let submittedBtnName = e.originalEvent.submitter.name;
            console.log(submittedBtnName);

            let userName=getElementById('userName');
            let password=getElementById('password');
           // let radioValue=document.querySelector('input[name="radio"]:checked').value;
            //console.log(radioValue);
         

            if(userName==""||password==""){
                console.log('system not found');
    
            }else{
                //console.log(radioValue);
                let loginData = new FormData(document.getElementById('userForm'));
                console.log(loginData);
                $.ajax({
                    cache: false,
                    processData: false,
                    contentType: false,
                    type: "POST",
                    url: 'http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/login/handelLogin',
                    data: loginData,
                    success: function(data){
                        let loginError=document.getElementById('loginShow');
                        console.log(data);
                        data=JSON.parse(data)
                        console.log(data.status);
                        //console.log(data.status);
                            if(data.status=='true'){
                                
                                loginError.style.color='black';
                                loginError.style.backgroundColor='green';
                                loginError.innerHTML= data.role;
                                setTimeout(function(){window.location.replace(data.url);
                                }, 2000);
                                //window.location.replace("http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/index/index");
                            }else if(data.status=='false'){
                                loginError.style.color='black';
                                loginError.style.backgroundColor='red';
                                loginError.innerHTML='INCORRECT USER OR PASSWORD';
                                
                            }
                           
                      
                       // setTimeout(function(){  document.getElementById('formErr').innerHTML=data; }, 3000);
                       
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
