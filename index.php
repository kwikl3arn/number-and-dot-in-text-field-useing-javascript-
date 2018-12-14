<html>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<body>  
<input type="text" name="emp_id" id="emp_id" placeholder="employ Id" class="numeric"  onkeypress="return fun_AllowOnlyAmountAndDot(this.id)" >
<span id="error"></span> 
</body>
   <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        $(function (e) {
		
		//disabled  mouse interactions below lines
          
            $(".numeric").bind("paste", function (e) {
                return false;
            });
            $(".numeric").bind("drop", function (e) {
                return false;
            });
			 $(".numeric").bind("cut", function (e) {
                return false;
            });
			 $(".numeric").bind("copy", function (e) {
                return false;
            });
			
			
        });
    </script>


         <script type="text/javascript">
 function fun_AllowOnlyAmountAndDot(txt)
        {  
           
            if((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || (event.keyCode === 46))
            {
               var amount = document.getElementById(txt).value;
               var present=0;
               var count=0;
               
               if(amount.indexOf(".",present)||amount.indexOf(".",present+1));
               {
             
               }
                 do
               {
               present=amount.indexOf(".",present);
               if(present!=-1)
                {
                 count++;
                 present++;
                 }
               }
               while(present!=-1);
               if(present==-1 && amount.length==0 && event.keyCode == 46)
               {
                    event.keyCode=0;
                    alert("Wrong position of decimal point not  allowed !!");
                    return false;
               }
               if(count>=1 && event.keyCode == 46)
               {
                    event.keyCode=0;
                   
                    return false;
               }
               if(count==1)
               {
                var lastdigits=amount.substring(amount.indexOf(".")+1,amount.length);
                if(lastdigits.length>=3)
                            {
                              alert("3 decimal places only allowed after dot");
                              event.keyCode=0;
                              return false;
                              }
               }
                    return true;
            }
            else
            {
                    event.keyCode=0;
                    alert("Only Numbers with dot allowed !!");
                    return false;
            }
        }
    </script>

</html>
