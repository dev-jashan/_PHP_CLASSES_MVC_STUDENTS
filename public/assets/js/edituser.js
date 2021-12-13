(function(){

    /* get id of all the elements */
    function init(){
 
        document.getElementById('formUsers').style.display='none';

        document.querySelectorAll(".btnedit").forEach(function(item){
            item.addEventListener("click", function(e){
                document.getElementById('formUsers').style.display='block';
               console.log('edit button is clicked');

               bookId=document.getElementById('userId');
               bookId.readOnly = true;
               let tds=e.target.parentNode.parentNode.children;
               console.log(tds);
               for (let td of tds) {
                   let dataDiv = td.firstChild;
                   console.log(dataDiv);
                   let columnValue = dataDiv.innerText;
                   console.log(columnValue);
                   let formInputNameToGet = dataDiv.dataset.name;
                   //console.log(formInputNameToGet);
                   let formInputElem = document.querySelector("[name='" + formInputNameToGet + "']");
                   if(formInputElem !== null && formInputElem.type !== "file")
                       formInputElem.value = columnValue;
               
               }
            })
        })

        $('#formUsers').on('submit',function(e){
            e.preventDefault();
            console.log('we are submitting the form');

            /* to get which button was clicked*/  

            let submittedBtnName = e.originalEvent.submitter.name;
            console.log(submittedBtnName);
            
            /* includes action when a certain button is clicked */
            switch (submittedBtnName) {

                case 'read':

                    /* refresh the page*/
                    window.location.reload();
                    console.log('read btn clicked');

                break;
                case 'delete':

                    /* sending form input values to php file (url) using AJAX */
                    let formDataDelete = new FormData(document.getElementById('formUsers'));
                    formDataDelete.append(submittedBtnName,'');
                    $.ajax({
                        cache: false,
                        processData: false,
                        contentType: false,
                        type: "POST",
                        url: 'http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/edituser/handleEdit',
                        data: formDataDelete,
                        success: function(data){
                            if(data=='user deleted'){
                                document.getElementById('formErr').style.color='black';
                                document.getElementById('formErr').style.backgroundColor='green';
                                document.getElementById('formErr').innerHTML=data;
                                setTimeout(function(){ window.location.reload(); }, 2000);
                            }
                            
                            console.log(data);
                        },
                        error: function(xhr, status, error){
                            console.error(xhr);
                        }
                    });
            
                    
                    console.log('delete btn clicked');
                break;
                case 'update':
                    /* sending form input values to php file (url) using AJAX */
                    let formData = new FormData(document.getElementById('formUsers'));
                    formData.append(submittedBtnName,'');
                    $.ajax({
                        cache: false,
                        processData: false,
                        contentType: false,
                        type: "POST",
                        url: 'http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/edituser/handleEdit',
                        data: formData,
                        success: function(data){
                            if(data=='user is updated'){
                                document.getElementById('formErr').style.color='black';
                                document.getElementById('formErr').style.backgroundColor='green';
                                document.getElementById('formErr').innerHTML=data;
                                setTimeout(function(){ window.location.reload(); }, 2000);
                            }
                        
                        },
                        error: function(xhr, status, error){
                            console.error(xhr);
                        }
                    });
                
                    console.log('update btn clicked');
                break;
                case 'deleteAll':
                   /* sending form input values to php file (url) using AJAX */ 
                    let formDeleteAll = new FormData(document.getElementById('formBooks'));
                    formDeleteAll.append(submittedBtnName,'');
                    $.ajax({
                        cache: false,
                        processData: false,
                        contentType: false,
                        type: "POST",
                        url: 'http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/edituser/handleEdit',
                        data: formDeleteAll,
                        success: function(data){
                            if(data=='deleted all users'){
                                document.getElementById('formErr').style.color='black';
                                document.getElementById('formErr').style.backgroundColor='green';
                                document.getElementById('formErr').innerHTML=data;
                                setTimeout(function(){ window.location.reload(); }, 2000);
                            }
                            
                        },
                        error: function(xhr, status, error){
                            console.error(xhr);
                        }
                    });

                        console.log('deleteAll btn clicked');
                break;
            }
           
        
        });
        /* submitting the form */ 
     
	}
    
    document.addEventListener("DOMContentLoaded", function (){
        init();
    });
})();
