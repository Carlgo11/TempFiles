$("#download-form").submit(a=>{a.preventDefault(),window.location.replace(`https://d.tempfiles.download/${$("#id").val()}/?p=${$("#password").val()}`)});