function loginpop(e) {
    document.getElementById('log').style.visibility = "visible";
    document.getElementById('index').style.visibility = "hidden";


}
function regpop(e) {
    document.getElementById('reg').style.visibility = "visible";
    document.getElementById('index').style.visibility = "hidden";
    // document.getElementsByTagName('body').style.filter='blur(5px)';
}
function returnin(e) {
    document.getElementById('reg').style.visibility = "hidden";
    document.getElementById('index').style.visibility = "visible";
    document.getElementById('log').style.visibility = "hidden";
    }

function uname(e)
{
    var name=document.getElementById('loname').value;
    if(name==""||name==null)       
      {   
        document.getElementById('loname').setAttribute("placeholder", "用户名不可为空");
         document.getElementById('loname').focus();
         document.getElementById('loname').style.borderColor="red";        
         return false;       
        }
        
        else
        {
            document.getElementById('loname').style.borderColor="#151D4C"; 
            return true;  
        }
        
}
function upwd(e)
{
    var pwd=document.getElementById('lopwd').value;
    
    if(pwd==""||pwd==null)       
      {   
        document.getElementById('lopwd').setAttribute("placeholder", "密码不可为空");
         document.getElementById('lopwd').focus();
         document.getElementById('lopwd').style.borderColor="red";        
         return false;    
        }
        else
        {
            document.getElementById('lopwd').style.borderColor="#151D4C";  
            return true;       
        }
}
function lcheckall(e)
{
return uname()&&upwd();
}