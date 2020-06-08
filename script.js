function getForm() {
  //event.preventDefault();
  message();
}


////////////////////////////////////

function message() {
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'message.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  let a = textValue();
  xhr.send(a);


  xhr.onreadystatechange = handleFunc;



  function handleFunc() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.response);
    }
  }
}

function textValue() {
  var a = document.getElementById('text').value;
  return a
}

$(function() {
    $('#goFile').click(function(){

        var data = jQuery('#form').find('input').serialize();

        var fd = new FormData();
        fd.append('file', $('#file')[0].files[0]);

        $.ajax({
            type: 'POST',
            url: 'file.php',
            data: fd,
            processData: false,
            contentType: false,
            dataType: "text",
        });
    });
});
