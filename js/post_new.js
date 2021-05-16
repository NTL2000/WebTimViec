// menu
$(".menu_left").on("click",".left_part3-item",function(){
    if( $(this).next().css('display') == 'none' && $(this).next().is("div"))
    {
        // $(this).find("img").attr("src","./css/image/dot_w.png")
        $(this).next().css("display","block");
        $(this).find("img").attr("src","./css/image/open.svg");
    }
    else{
        if($(this).closest("li").next().is("div")){
            $(this).find("img").attr("src","./css/image/close.svg");
            $(this).next().css("display","none");
        }
    }
});
$(".menu_left").on("click",".left_part3-item",function(){
    $(".left_part3-item").css({"background-color":"transparent"});
    $(this).css("background-color","rgb(39, 87, 160)")
});
$(".menu_left").on("click",".idc_item",function(){
    if($(this).find("img").attr("src")=="./css/image/dot_w.png")
    {
        $(".idc_item").find("img").attr("src","./css/image/dot_w.png");
        $(this).find("img").attr("src","./css/image/dot_g.png");
    }
});

// form

// row 1
$(document).ready(function() {
    $("select").select2();
});
// validate

$.validator.addMethod("countwords50", function (value, element) {
    var text=value;
    var arr=text.split(/\b\S+\b/);
    console.log(arr.length)
    return (arr.length-1)>=50;
}, "Phải nhập tối thiểu 50 ký tự !");
