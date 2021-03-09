
   function s1()
   { 
      document.getElementById("smg").style.display="none";
      document.getElementById("album").style.display="none";
      document.getElementById("around").style.display="none";
      document.getElementById("sanctuary").style.display="block";
   }
  function s2()
  { 
      document.getElementById("smg").style.display="none";
      document.getElementById("album").style.display="block";
      document.getElementById("sanctuary").style.display="none";
      document.getElementById("around").style.display="none";
  }
  function s3()
  { 
      document.getElementById("smg").style.display="block";
      document.getElementById("album").style.display="none";
      document.getElementById("sanctuary").style.display="none";
      document.getElementById("around").style.display="none";
  }
  function s4()
  { 
      document.getElementById("smg").style.display="none";
      document.getElementById("album").style.display="none";
      document.getElementById("sanctuary").style.display="none";
      document.getElementById("around").style.display="block";
  }
function test(element){
   var goodsid=element.name;
   $.ajax({
     url:'../php/addgoods.php',//php文件路径
     data:{"goodsid":goodsid},
    // 'clicknum':cnum},
     type: 'POST',
     dataType: 'text',
     success: function(e) {
        $('#count').load(document.URL +  ' #count');
        // window.location.reload(); 
        
    },
    error:function(e){
        // alert(goodsid); 
    }
     })
    //  console.log($.ajax);
//  window.location.href='../php/shoppingcartsql.php?goodsid=' +goodsid;
    }