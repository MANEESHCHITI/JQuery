<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
    $(document).ready(function(){
        $("#btn1").click(function(){
            var firstname2=$("#firstname1").val();
            var lastname2=$("#lastname1").val();
            if(firstname2=="" || lastname2==""){
               alert("enter all fields");
            }
            else{
                // alert("entered else");
                $.ajax({
                    url:'AjaxMethodSup.php',
                    type:'post',
                    data:{firstname3:firstname2,lastname3:lastname2},
                    beforeSend:function(){
                        $("#loading1").show();
                    },
                    success:function(result,status,xhr){
                        $("#para1").text(result);  
                        $("#para1").text("maneesh");            // some mistake with this line if i print normally below line it prints 
                        // alert(result);
                        // alert(status);
                        // alert(xhr);
                        $("#loading1").hide();
                    },
                    error:function(xhr,status,result){
                        $("#para1").text(result);                      //not found if error
                        // alert(status);
                    },
                    complete:function(xhr,status){
                        // alert(status);
                    }
                });
            }
        });
    });

    
    </script>
    <style>
        #loading1{
            display:none;
        }
        </style>

    </head>
    <body>
       <form action="" id="form1">
        <input type="text" placeholder="Enter firstname" name="firstname" id="firstname1">
        <input type="text" placeholder="Enter lastname" name="lastame" id="lastname1">
        <input type="button" value="click me" id="btn1">
       </form>
       <p id="para1"></p>
       <div id="loading1">
        <img src="loading.gif"  height="100" width="100"alt="loading">
    </div>
    </body>
</html>