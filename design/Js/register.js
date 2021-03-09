function rname(e)
{
    var reg = /[`~!@#$%^&*()_\-+=<>?:"{}|,.\/;'\\[\]·~！@#￥%……&*（）——\-+={}|《》？：“”【】、；‘'，。、]/;  
    var name=document.getElementById('rgname').value;
   var flag = reg.test(name);  
    if(name==""||name==null)       
      {  
        document.getElementById('rgname').setAttribute("placeholder", "用户名不可为空");
         document.getElementById('rgname').focus();
         document.getElementById('rgname').style.borderColor="red";      
    
         return false;       
        }
       else if(flag)
        {
          document.getElementById('rgname').value="";
          document.getElementById('rgname').setAttribute("placeholder", "用户名只可由汉字、数字或英文组成");
          document.getElementById('rgname').focus();
          document.getElementById('rgname').style.borderColor="red";  
          return false;  
        }
        else 
        {
            document.getElementById('rgname').style.borderColor="#78909C";  
            return true
        }
}
function rpwd(e)
{
  var reg = /[0-9]|[a-zA-Z]{6,20}$/;  
    var pwd=new String(document.getElementById('rgpwd').value);
    var flag = reg.test(pwd);  
    if(pwd==""||pwd==null)       
      {   
        document.getElementById('rgpwd').setAttribute("placeholder", "密码不可为空");
         document.getElementById('rgpwd').focus();
         document.getElementById('rgpwd').style.borderColor="red";        
         return false;       
        }
        else if(pwd.length<6)
         {        
           alert("您的密码小于了6位数");
          document.getElementById('rgpwd').style.borderColor="red";    
          return false;       
                
         }
         else if(!flag)
         {
           document.getElementById('rgpwd').value="";
           document.getElementById('rgpwd').setAttribute("placeholder", "密码只可由数字及英文组成");
           document.getElementById('rgpwd').focus();
           document.getElementById('rgpwd').style.borderColor="red";  
           return false;       
          }
         
        
        else
        {
            document.getElementById('rgpwd').style.borderColor="#78909C";  
            return true;
        }
}
function regpwd(e)
{
    var rpwd=document.getElementById('rgrepwd').value;
    var pwd=document.getElementById('rgpwd').value;
    if(rpwd==""||rpwd==null)       
      {   
        document.getElementById('rgrepwd').setAttribute("placeholder", "确认密码不可为空");
         document.getElementById('rgrepwd').focus();
         document.getElementById('rgrepwd').style.borderColor="red";        
         return false;       
        }
        else if(pwd!=rpwd)
        {
       
          document.getElementById('rgrepwd').value="";
          document.getElementById('rgrepwd').setAttribute("placeholder", "两次密码不同");
          document.getElementById('rgrepwd').style.borderColor="red";   
          return false;
        }
        else if(pwd==rpwd)
        {
          document.getElementById('rgrepwd').style.borderColor="#78909C"; 
          return true; 
        }
  
}

function ryear(e)
{
    var reg=/^(19|20)\d{2}/;
    var year=document.getElementById('year').value;
    var flag = reg.test(year);
    if(year==""||year==null)       
      {   
         document.getElementById('year').focus();
         document.getElementById('year').style.borderColor="red";        
         return false;       
      }
      else if(!flag)
      {        
        alert("请填写正确的年份信息");
       document.getElementById('mbirth').style.borderColor="red";  
       return false;       
     }  
    
        else
        {
            document.getElementById('year').style.borderColor="#78909C";  
            return true
        }
}
function rmonth(e)
{
    var reg=/(^0?[0-9]$|^1[0-2]$)/;
    var month=document.getElementById('month').value;
    var flag = reg.test(month);
    if(month==""||month==null)       
      {   
         document.getElementById('month').focus();
         document.getElementById('month').style.borderColor="red";        
         return false;       
      }
      else if(!flag)
      {        
        alert("请填写正确的月份信息");
       document.getElementById('month').style.borderColor="red";  
       return false;       
     }  
        
        else
        {
            document.getElementById('month').style.borderColor="#78909C";  
            return true
        }
}
function rday(e)
{
  var reg=/(^0?[1-9]$|[1-2][0-9]$|3[0-1]$)/;
    var day=document.getElementById('day').value;
    var flag = reg.test(day);
    if(day==""||day==null)       
      {   
         document.getElementById('day').focus();
         document.getElementById('day').style.borderColor="red";        
         return false;       
      }
      else if(!flag)
      {        
        alert("请填写正确的日期信息");
       document.getElementById('day').style.borderColor="red";  
       return false;       
     }  
        
        else
        {
            document.getElementById('day').style.borderColor="#78909C";  
            return true
        }
}

function rtel(e)
{
  var reg = /[0-9]$/;  
    var tel=new String(document.getElementById('tel').value);
    var flag = reg.test(tel);  
    if(tel==""||tel==null)       
      {   
        document.getElementById('tel').setAttribute("placeholder", "电话不可为空");
         document.getElementById('tel').focus();
         document.getElementById('tel').style.borderColor="red";        
         return false;       
        }
        else if(tel.length<11||!flag)
         {        
           alert("您的电话小于了11位数或含有非法字符");
          document.getElementById('tel').style.borderColor="red";  
          return false;       
        }           
        //  else if(tel)
        //  {
        //    document.getElementById('rgpwd').value="";
        //    document.getElementById('rgpwd').setAttribute("placeholder", "密码只可由数字及英文组成");
        //    document.getElementById('rgpwd').focus();
        //    document.getElementById('rgpwd').style.borderColor="red";  
        //    return false;       
          
        //  } 
        else
        {
            document.getElementById('tel').style.borderColor="#78909C";  
            return true;
        }
}
function remail(e)
{
  var reg=/^\w+@[a-z0-9]+\.[a-z]{2,4}$/;  
    var email=document.getElementById('email').value;
    var flag = reg.test(email);  
    if(email==""||email==null)       
      {   
        document.getElementById('email').setAttribute("placeholder", "邮箱信息不可为空");
         document.getElementById('email').focus();
         document.getElementById('email').style.borderColor="red";        
         return false;       
        }
        else if(!flag)
         {        
           alert("请填写正确的邮箱格式");
          document.getElementById('email').style.borderColor="red";  
          return false;       
        }           
        //  else if(tel)
        //  {
        //    document.getElementById('rgpwd').value="";
        //    document.getElementById('rgpwd').setAttribute("placeholder", "密码只可由数字及英文组成");
        //    document.getElementById('rgpwd').focus();
        //    document.getElementById('rgpwd').style.borderColor="red";  
        //    return false;       
          
        //  } 
        else
        {
            document.getElementById('email').style.borderColor="#78909C";  
            return true;
        }
}

function checkall(e)
{
return rname()&&rpwd()&&regpwd()&&ryear()&&rmonth()&&rday()&&rtel()&&remail();
}