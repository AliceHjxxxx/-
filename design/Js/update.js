function upname(e)
{
    var reg = /[`~!@#$%^&*()_\-+=<>?:"{}|,.\/;'\\[\]·~！@#￥%……&*（）——\-+={}|《》？：“”【】、；‘'，。、]/;  
    var name=document.getElementById('mname').value;
   var flag = reg.test(name);  
    if(name==""||name==null)       
      {  
        document.getElementById('mname').setAttribute("placeholder", "用户名不可为空");
         document.getElementById('mname').focus();
         document.getElementById('mname').style.borderColor="red";      
    
         return false;       
        }
       else if(flag)
        {
          document.getElementById('mname').value="";
          document.getElementById('mname').setAttribute("placeholder", "用户名只可由汉字、数字或英文组成");
          document.getElementById('mname').focus();
          document.getElementById('mname').style.borderColor="red";  
          return false;  
        }
        else 
        {
            document.getElementById('mname').style.borderColor="#78909C";  
            return true
        }
}
function upgender(e)
{
    var gender=document.getElementById('mgender').value;
    var str1="LFJJ";
    var str2="LFGG";
    if(gender==""||gender==null)       
      {   
        document.getElementById('mgender').setAttribute("placeholder", "性别不可为空");
         document.getElementById('mgender').focus();
         document.getElementById('mgender').style.borderColor="red";        
         return false;       
        }
        else if(gender!=str1&&gender!=str2)
         {            
        document.getElementById('mgender').value="";
         document.getElementById('mgender').setAttribute("placeholder", "请按格式输入性别");
          document.getElementById('mgender').focus();
          document.getElementById('mgender').style.borderColor="red";  
          return false;       
        }           
        else
        {
            document.getElementById('mgender').style.borderColor="#78909C";  
            return true;
        }
}
function uptel(e)
{
  var reg = /[0-9]$/;  
    var tel=new String(document.getElementById('mtel').value);
    var flag = reg.test(tel);  
    if(tel==""||tel==null)       
      {   
        document.getElementById('mtel').setAttribute("placeholder", "电话不可为空");
         document.getElementById('mtel').focus();
         document.getElementById('mtel').style.borderColor="red";        
         return false;       
        }
        else if(tel.length<11||!flag)
         {        
           alert("您的电话小于了11位数或含有非法字符");
          document.getElementById('mtel').style.borderColor="red";  
          return false;       
        }           
        else
        {
            document.getElementById('tel').style.borderColor="#78909C";  
            return true;
        }
}
function upmail(e)
{
  var reg=/^\w+@[a-z0-9]+\.[a-z]{2,4}$/;  
    var email=document.getElementById('mail').value;
    var flag = reg.test(email);  
    if(email==""||email==null)       
      {   
        document.getElementById('mail').setAttribute("placeholder", "邮箱信息不可为空");
         document.getElementById('mail').focus();
         document.getElementById('mail').style.borderColor="red";        
         return false;       
        }
        else if(!flag)
         {        
           alert("请填写正确的邮箱格式");
          document.getElementById('mail').style.borderColor="red";  
          return false;       
        }           
        else
        {
            document.getElementById('mail').style.borderColor="#78909C";  
            return true;
        }
}
function upbirth(e)
{
  var reg=/^(19|20)\d{2}-(1[0-2]|0?[1-9])-(0?[1-9]|[1-2][0-9]|3[0-1])$/;  
  var birth=document.getElementById('mbirth').value;
  var flag = reg.test(birth);  
  if(birth==""||birth==null)       
    {   
      document.getElementById('mbirth').setAttribute("placeholder", "生日信息不可为空");
       document.getElementById('mbirth').focus();
       document.getElementById('mbirth').style.borderColor="red";        
       return false;       
      }
      else if(!flag)
       {        
         alert("请填写正确的生日信息");
        document.getElementById('mbirth').style.borderColor="red";  
        return false;       
      }           
      else
      {
          document.getElementById('mbirth').style.borderColor="#78909C";  
          return true;
      }
}
function updatechk()
{
    return upname(e)&&upgender(e)&&uptel(e)&&upmail(e);

}
