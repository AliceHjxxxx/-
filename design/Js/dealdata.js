function del(element){
    var goodsid=element.name;
    // alert(goodsid);
    $.ajax({
      url:'../php/delgoods.php',//php文件路径
      data:{"goodsid":goodsid},
     // 'clicknum':cnum},
      type: 'POST',
      dataType: 'text',
      success: function(e) {
        //  alert(goodsid); 
        window.location.reload(); 
     },
     error:function(e){
         // alert(goodsid); 
     }
      })
      
    //  //  console.log($.ajax);
 //  window.location.href='../php/shoppingcartsql.php?goodsid=' +goodsid;
     }

     function minus(element)
     {
        var goodsid=element.name;
        // alert(goodsid);
        $.ajax({
          url:'../php/minusgoods.php',//php文件路径
          data:{"goodsid":goodsid},
         // 'clicknum':cnum},
          type: 'POST',
          dataType: 'text',
          success: function(e) {
            // window.location.reload(); 
            $('#count').load(document.URL +  ' #count');
            $('#count2').load(document.URL +  ' #count2');
         },
         error:function(e){
             // alert(); 
         }
          })

     }
  function plus(element)
  {
    var goodsid=element.name;
    // alert(goodsid);
    $.ajax({
      url:'../php/plusgoodsnum.php',//php文件路径
      data:{"goodsid":goodsid},
      type: 'POST',
      dataType: 'text',
      success: function(e) {
        //  alert(goodsid); 
        // $('#buy').load(document.URL +  ' #buy');
        // window.location.reload(); 
        $('#count').load(document.URL +  ' #count');
        $('#count2').load(document.URL +  ' #count2');
     },
     error:function(e){
     }
      })
  }
