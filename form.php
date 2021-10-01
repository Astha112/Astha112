
<?php
    include 'config.php'; 
 ?>

<html>
<head>
  <title>Form</title>

      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script  src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script> 
   
</head>

<body>
<div class="container p-3">

    <div class="panel panel-default">
    <div class="panel-heading">FORM</div>
    <div class="panel-body">

<form  method="POST" enctype="multipart/form-data" id="form" >    

<div class="form-group">
<input type="hidden" name="id">
</div>

<div class="form-group">
     <label for="title">Title</label>
         <input type="text" name="title" id="title">
     </textarea>
  </div>

  <div class="form-group">
         <label for="image">Image</label>
          <input type="file"  name="image" id="image">
      </div>
  

  <div class="form-group">
     <label for="content">Content</label>
     <textarea  name="ckeditor" id="editor" cols="50" rows="4">
     </textarea>
  </div>

   <div class="form-group">
      <!-- <input class="btn btn-primary" type="submit"  value="submit" id="submit"> -->
      <button class="btn btn-primary" type="button" onclick="adddata()" >submit</button>
  </div>

</form>
</body>
</html>

<script>

  CKEDITOR.replace('editor',{

    filebrowserUploadUrl: 'ck_upload.php',
    filebrowserUploadMethod:'form'

  });

    function adddata()
{
        var myform = new FormData($('#form')[0]);
          myform.append("ckeditor", CKEDITOR.instances['editor'].getData());
          myform.append('image', 'image'); //append file to formData object
           var editor = CKEDITOR.instances.editor.getData();

             if(editor == "")
   {
       alert("Content can't be Blank");
       $("#editor").focus();
   }

   else
   {
    $.ajax({
            url:"insert.php",
            type:'POST',
            data: myform,
            contentType: false,
            processData: false, 
         success:function(response)
            {
              alert(response);
            }
         });
   }
}

</script>





 