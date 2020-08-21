$(function () {
    $(".form-horizontal").validate({
        rules: {
            uname: {
                required: true,
                minlegth: 5,
                remote: {
                    url: 'admin/reg/checkName',
                    type: "post",
                    data: {
                        uname: function (){
                            return $("input[name=uname]").val();
                        }
                    }
                }
            },
            pass: {
                required: true,
                rangelength: [5, 15],
                equalTo: "#pass1"
            },
            pass1: {
                required: true,
                rangelength: [5, 15],
                equalTo: "#pass"

            }

        },
        messages: {
            uname: {
                required: "用户名没有填写",
                minlegth: "要符合用户名规则",
                remote: "用户名已经存在"
            },
            pass: {
                required: "没有填写密码",
                rangelength: "密码在5到15位",

            },
            pass1: {
                required: "必须填写",
                equalTo: "两次输入的密码要保持一致"
            }

        }
    })
})