$(function(){
    $(".form-horizontal").validate({
        rules:{
           uname:{
                required:true,
                minlegth: 5
            },
            pass:{
                required:true,
                minlegth:8
            }
        },
        messages:{
            uname:{
                required: "用户名没有填写",
                minlegth: "要符合用户名规则"
            },
            pass:{
                required:"没有填写密码"
            }
        }
    })
})