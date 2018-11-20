<html>
    <body>
        <form action="" method="post">
            <input type="text" id="txt" name="txt" onpaste="return false" oncopy="return false" autocomplete="off" onkeypress="return fun_AllowOnlyAmountAndDot(this.id);">
        <input type="submit" name="submit" id="submit">
        </form>
        <script type="text/javascript">

 function fun_AllowOnlyAmountAndDot(txt)
        {  
           
            if(event.keyCode > 47 && event.keyCode < 58 || event.keyCode == 46)
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
                              alert("Two decimal places only allowed");
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

    </body>
</html>
