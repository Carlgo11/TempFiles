$("#upload-form").submit(a=>{a.preventDefault();let b=new FormData;""!==$("#password").val()&&b.append("password",$("#password").val()),b.append("file",$("input[type=file]")[0].files[0]),$.ajax({type:"POST",url:"https://api.tempfiles.download/upload/",dataType:"JSON",cache:!1,processData:!1,contentType:!1,data:b,success:a=>{$("#upload-form").hide(),$("#title").text("File uploaded"),$("#success").show(),$("#url").val(a.url),$("#deletion-password").val(a.deletepassword),"password"in a?$("#server-password").val(a.password):$("#server-password").parent().hide(),$("#url").select(),document.execCommand("copy")}})});