

function saveFile () {
    let first_name = document.getElementById("txtFirstName");
    let second_name = document.getElementById("txtSecondName");
    let email = document.getElementById("txtEmail");
    let phone_numb = document.getElementById("txtPhoneNumber");
  // (A) CREATE BLOB OBJECT
  
  let CONTENT = "\n Name: " + first_name.value + " " + "Surname: " + second_name.value + " " + "Email: " + email.value + "  " + "Phone Number: " + phone_numb.value;
  
    
  var myBlob = new Blob([CONTENT], {type: "text/plain"});

    first_name.value = '';
    second_name.value = '';
    email.value = '';
    phone_numb.value = '';

  // (B) FORM DATA
  var data = new FormData();
  data.append("upfile", myBlob);

    

  // (C) AJAX UPLOAD TO SERVER
   fetch("http://testmedia.local/wp-content/themes/test_media/assets/process.php", {
    method: "POST",
    body: data,
    


  })
  

  
}


    