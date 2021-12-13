(function(){

    /* get id of all the elements */

    function getElementById(id){
        let element=document.getElementById(id).value;
        console.log(element);
        return element;
    }
   
    function init(){
 
        
        //we dont want user to change the id of the book
        document.getElementById('showId').style.display='none';
        

        document.querySelectorAll(".btnedit").forEach(function(item){
            item.addEventListener("click", function(e){
               console.log('edit button is clicked');

               //to show the book id to the user
                document.getElementById('showId').style.display='block';
                /*if form is not empty remove the error*/

                let formErr=document.getElementById('formErr');
                formErr.innerHTML='';

                /*readonly property is enabled so that user cannot overrite the book id field when edit button is clicked*/

                bookId=document.getElementById('id');
                bookId.readOnly = true;

                let tds=e.target.parentNode.parentNode.children;
                //console.log(tds);
                for (let td of tds) {
                    let dataDiv = td.firstChild;
                    //console.log(dataDiv);
                    let columnValue = dataDiv.innerText;
                    //console.log(columnValue);
                    let formInputNameToGet = dataDiv.dataset.name;
                    //console.log(formInputNameToGet);
                    let formInputElem = document.querySelector("[name='" + formInputNameToGet + "']");
                    if(formInputElem !== null && formInputElem.type !== "file")
                        formInputElem.value = columnValue;
                
                }
            })

        })

        /* submitting the form */ 
        $('#formBooks').on('submit',function(e){
            e.preventDefault();
            console.log('we are submitting the form');

            /* to get which button was clicked*/  

            let submittedBtnName = e.originalEvent.submitter.name;
            console.log(submittedBtnName);
            
            /* includes action when a certain button is clicked */

            switch (submittedBtnName) {

                case 'create':
                    console.log('create btn clicked');

                    /* fetching all the data inputs using their id */  
                    let bookId=getElementById('id');
                    let bookTitle=getElementById('title');
                    let bookPrice=getElementById('price');
                    let bookCover=getElementById('cover');
                    let bookPages=getElementById('pages');
                    let bookLink=getElementById('link');
                    let bookDesc=getElementById('desc');
                    let bookDate=getElementById('date');

                   
                    /* to check if the form inputs are empty */

                    if(bookDate==""||bookDesc==""||bookId==""||bookPages==""||bookLink==""||bookTitle==""||bookPrice==""){
                        let formErr=document.getElementById('formErr');
                        formErr.innerHTML='please fill all the forms';
                    }else{


                        console.log(bookId);
                        console.log(bookTitle);
                        console.log(bookPrice);
                        console.log(bookCover);
                        console.log(bookPages);
                        console.log(bookLink);
                        console.log(bookDate);
                        console.log(bookDesc);

                        /* sending form input values to php file (url) using AJAX */
                        let formData = new FormData(document.getElementById('formBooks'));
                        formData.append(submittedBtnName,'');
                        $.ajax({
                            cache: false,
                            processData: false,
                            contentType: false,
                            type: "POST",
                            url: 'http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/admin/handleRequest',
                            data: formData,
                            success: function(data){
                                if(data=='New book created'){
                                    document.getElementById('formErr').style.color='black';
                                    document.getElementById('formErr').style.backgroundColor='green';
                                    document.getElementById('formErr').innerHTML=data;
                                    setTimeout(function(){ window.location.reload(); }, 2000);
                                }else{
                                
                                    document.getElementById('formErr').innerHTML=data;
                                }
                                
                                
                               // setTimeout(function(){  document.getElementById('formErr').innerHTML=data; }, 3000);
                                console.log(data);
                            },
                            error: function(xhr, status, error){
                                console.error(xhr);
                            }
                        });
                    }
                    
                break;
                case 'read':

                    /* refresh the page*/
                    window.location.reload();
                    console.log('read btn clicked');

                break;
                case 'delete':

                    /* sending form input values to php file (url) using AJAX */
                    let formDataDelete = new FormData(document.getElementById('formBooks'));
                    formDataDelete.append(submittedBtnName,'');
                    $.ajax({
                        cache: false,
                        processData: false,
                        contentType: false,
                        type: "POST",
                        url: 'http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/admin/handleRequest',
                        data: formDataDelete,
                        success: function(data){
                            if(data=='Book deleted'){
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
                    let formData = new FormData(document.getElementById('formBooks'));
                    formData.append(submittedBtnName,'');
                    $.ajax({
                        cache: false,
                        processData: false,
                        contentType: false,
                        type: "POST",
                        url: 'http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/admin/handleRequest',
                        data: formData,
                        success: function(data){

                            if(data=='Book is updated'){
                                document.getElementById('formErr').style.color='black';
                                document.getElementById('formErr').style.backgroundColor='green';
                                document.getElementById('formErr').innerHTML=data;
                                setTimeout(function(){ window.location.reload(); }, 2000);
                            }else{
                            
                                document.getElementById('formErr').innerHTML=data;
                            }
                            console.log(data);
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
                        url: 'http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/admin/handleRequest',
                        data: formDeleteAll,
                        success: function(data){
                        
                            console.log(data);
                        },
                        error: function(xhr, status, error){
                            console.error(xhr);
                        }
                    });

                        console.log('deleteAll btn clicked');
                break;
            }
        
        });
	}
    
    document.addEventListener("DOMContentLoaded", function (){
        init();
    });
})();
