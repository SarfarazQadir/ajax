<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Add Data</title>
</head>
<body>

<form id="form">

<input type="text" required placeholder="Enter your name" id="name" ><br><br>
<input type="number" required placeholder="Enter your age" id="age" ><br><br>
<input type="button" id="btnadd" value="add">
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#btnadd").on("click",function(e) {
            var student_name = $("#name").val();
            var student_age = $("#age").val();

            $.ajax({
                url: "insert.php",
                type: "POST",
                data: {stdname:student_name,stdage:student_age},
                success: function(data){
                    alert("Data Added Successfully");
                    }
            })
        })
    })
</script>
</body>
</html>