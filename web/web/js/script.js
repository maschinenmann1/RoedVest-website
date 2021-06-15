$(document).ready(function(){
    var url=window.location.href;
    var arrUrl=url.split("/");
    for(let i=0;i<arrUrl.length;i++){
        switch(arrUrl[i]){
            case "index.php?ctl=inicio":
                $("header nav li a").removeClass("active");
                $("#inicio").addClass("active");
                break;
            case "index.php?ctl=portfolio":
                $("header nav li a").removeClass("active");
                $("#portfolio").addClass("active");
                break;
            case "index.php?ctl=contacto":
                $("header nav li a").removeClass("active");
                $("#contact").addClass("active");
                break;
            case "index.php?ctl=visor3d":
                $("header nav li a").removeClass("active");
                $("#portfolio3d").addClass("active");
                break;
            default:
        }
    }


    $("#clean").click(function(){
        $("#contact-form .field").val("");
    });
    
})

