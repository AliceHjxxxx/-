function check(e)
{    var reg = /[0-9]$/;  
    var tel=new String(document.getElementById('rcvtel').value);
    var flag = reg.test(tel);  
    var name=document.getElementById('rcvname').value;
    if(name==""||name==null)       
      {   
        document.getElementById('rcvname').setAttribute("placeholder", "用户名不可为空");
         document.getElementById('rcvname').focus();
         document.getElementById('rcvname').style.borderColor="red";        
         return false;       
        }

   else if(tel==""||tel==null)       
      {   
        document.getElementById('rcvtel').setAttribute("placeholder", "电话不可为空");
         document.getElementById('rcvtel').focus();
         document.getElementById('rcvtel').style.borderColor="red";        
         return false;       
        }
  else  if(tel.length<11||!flag)
         {        
           alert("您的电话小于了11位数或含有非法字符");
          document.getElementById('rcvtel').style.borderColor="red";  
          return false;       
        }           
        else
        {
            document.getElementById('rcvtel').style.borderColor="#78909C"; 
            document.getElementById('rcvname').style.borderColor="#78909C"; 
            alert("确认支付？")
            return true;  
        }
        
}
