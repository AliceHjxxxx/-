
var muname,goodsid,clicknum=0;
$("input[type='button']").bind('click', function () {
    if ($(this).attr("var") == "11") {
         muname='圣所'; 
         $.ajax({
            url: '../php/music_sample.php',//php文件路径
            data: {"muname":muname},
            type: 'POST',
            dataType:'text',   
            success: function(e) {
            //   alert("成功");
            // $('#count').load(document.URL +  ' #count');
            }
             })
        
    }
    if ($(this).attr("var") == "1") {
        muname='伟大的渺小';
        $.ajax({
            url: '../php/music_sample.php',//php文件路径
            data: {"muname":muname},
            type: 'POST',
            dataType:'text',   
            success: function(e) {
            //   alert("成功");
            // $('#count').load(document.URL +  ' #count');
            }
             })
    }
    if ($(this).attr("var") == "2") {
        muname='穿越';
        $.ajax({
            url: '../php/music_sample.php',//php文件路径
            data: {"muname":muname},
            type: 'POST',
            dataType:'text',   
            success: function(e) {
            //   alert("成功");
            // $('#count').load(document.URL +  ' #count');
            }
             })
    }
    if ($(this).attr("var") == "3") {
        muname='四点四十四';
        $.ajax({
            url: '../php/music_sample.php',//php文件路径
            data: {"muname":muname},
            type: 'POST',
            dataType:'text',   
            success: function(e) {
            //   alert("成功");
            // $('#count').load(document.URL +  ' #count');
            }
             })
    }
    if ($(this).attr("var") == "4") {
        muname='我继续';
        $.ajax({
            url: '../php/music_sample.php',//php文件路径
            data: {"muname":muname},
            type: 'POST',
            dataType:'text',   
            success: function(e) {
            //   alert("成功");
            // $('#count').load(document.URL +  ' #count');
            }
             })
    }
    if ($(this).attr("var") == "5") {
        muname='剪云者';
        $.ajax({
            url: '../php/music_sample.php',//php文件路径
            data: {"muname":muname},
            type: 'POST',
            dataType:'text',   
            success: function(e) {
            //   alert("成功");
            // $('#count').load(document.URL +  ' #count');
            }
             })
    }
    if ($(this).attr("var") == "6") {
        muname='黑夜问白天';
        $.ajax({
            url: '../php/music_sample.php',//php文件路径
            data: {"muname":muname},
            type: 'POST',
            dataType:'text',   
            success: function(e) {
            //   alert("成功");
            // $('#count').load(document.URL +  ' #count');
            }
             })
    }
    if ($(this).attr("var") == "7") {
        muname='丹宁执着';
        $.ajax({
            url: '../php/music_sample.php',//php文件路径
            data: {"muname":muname},
            type: 'POST',
            dataType:'text',   
            success: function(e) {
            //   alert("成功");
            // $('#count').load(document.URL +  ' #count');
            }
             })
    }
    if ($(this).attr("var") == "8") {
        muname='身为风帆';
        $.ajax({
            url: '../php/music_sample.php',//php文件路径
            data: {"muname":muname},
            type: 'POST',
            dataType:'text',   
            success: function(e) {
            //   alert("成功");
            // $('#count').load(document.URL +  ' #count');
            }
             })
    }
    if ($(this).attr("var") == "9") {
        muname='小瓶子';
        $.ajax({
            url: '../php/music_sample.php',//php文件路径
            data: {"muname":muname},
            type: 'POST',
            dataType:'text',   
            success: function(e) {
            //   alert("成功");
            // $('#count').load(document.URL +  ' #count');
            }
             })
    }
    if ($(this).attr("var") == "10") {
        muname='Until The Day';  
        $.ajax({
        url: '../php/music_sample.php',//php文件路径
        data: {"muname":muname},
        type: 'POST',
        dataType:'text',   
        success: function(e) {
        //   alert("成功");
        // $('#count').load(document.URL +  ' #count');
        }
         })

    }
    if ($(this).attr("var") == "12"){
        goodsid='14'; 
        // cnum++;         // alert(clicknum);    
      $.ajax({
        url:'../php/addgoods.php',//php文件路径
        data:{"goodsid":goodsid},
        // 'clicknum':cnum},
        type: 'POST',
        dataType: 'text',
         success: function(e) {
            alert("添加购物车成功"); 
        }
       
         })
 console.log($.ajax);
 } 
    // window.location.href='music_sample.php?muname=' +muname;
});
