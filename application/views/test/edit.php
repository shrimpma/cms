<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title>phpcms V9 - 后台管理中心</title>
    <link href="/statics/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="/statics/css/zh-cn-system.css" rel="stylesheet" type="text/css" />
    <link href="/statics/css/table_form.css" rel="stylesheet" type="text/css" />
    <link href="/statics/css/dialog.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="/statics/js/dialog.js"></script>
    <link rel="stylesheet" type="text/css" href="/statics/css/style/zh-cn-styles1.css" title="styles1" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/statics/css/style/zh-cn-styles2.css" title="styles2" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/statics/css/style/zh-cn-styles3.css" title="styles3" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/statics/css/style/zh-cn-styles4.css" title="styles4" media="screen" />
    <script language="javascript" type="text/javascript" src="/statics/js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="/statics/js/admin_common.js"></script>
    <script language="javascript" type="text/javascript" src="/statics/js/styleswitch.js"></script>
    <script type="text/javascript">
        window.focus();
        var pc_hash = 'fDvAsg';
        window.onload = function(){
            var html_a = document.getElementsByTagName('a');
            var num = html_a.length;
            for(var i=0;i<num;i++) {
                var href = html_a[i].href;
                if(href && href.indexOf('javascript:') == -1) {
                    if(href.indexOf('?') != -1) {
                        html_a[i].href = href+'&pc_hash='+pc_hash;
                    } else {
                        html_a[i].href = href+'?pc_hash='+pc_hash;
                    }
                }
            }

            var html_form = document.forms;
            var num = html_form.length;
            for(var i=0;i<num;i++) {
                var newNode = document.createElement("input");
                newNode.name = 'pc_hash';
                newNode.type = 'hidden';
                newNode.value = pc_hash;
                html_form[i].appendChild(newNode);
            }
        }
    </script>
</head>
<body>
<style type="text/css">
    html{_overflow-y:scroll}
</style><script language="javascript" type="text/javascript" src="/statics/js/member_common.js"></script>
<script language="javascript" type="text/javascript" src="/statics/js/formvalidator.js" charset="UTF-8"></script>
<script language="javascript" type="text/javascript" src="/statics/js/formvalidatorregex.js" charset="UTF-8"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
        $("#password").formValidator({empty:true,onshow:"不修改密码请留空。",onfocus:"密码应该为6-20位之间"}).inputValidator({min:6,max:20,onerror:"密码应该为6-20位之间"});
        $("#pwdconfirm").formValidator({empty:true,onshow:"不修改密码请留空。",onfocus:"两次密码不同。",oncorrect:"密码输入一致"}).compareValidator({desid:"password",operateor:"=",onerror:"两次密码不同。"});
        $("#point").formValidator({tipid:"pointtip",onshow:"请输入积分点数，积分点数将影响会员用户组",onfocus:"积分点数应该为1-8位的数字"}).regexValidator({regexp:"^\\d{1,8}$",onerror:"积分点数应该为1-8位的数字"});
        $("#email").formValidator({onshow:"请输入邮箱",onfocus:"邮箱格式错误",oncorrect:"邮箱格式正确"}).regexValidator({regexp:"email",datatype:"enum",onerror:"邮箱格式错误"}).ajaxValidator({
            type : "get",
            url : "",
            data :"m=member&c=member&a=public_checkemail_ajax&phpssouid=3",
            datatype : "html",
            async:'false',
            success : function(data){
                if( data == "1" ) {
                    return true;
                } else {
                    return false;
                }
            },
            buttons: $("#dosubmit"),
            onerror : "邮箱已存在",
            onwait : "请稍候..."
        }).defaultPassed();
        $("#nickname").formValidator({onshow:"请输入昵称",onfocus:"昵称应该为2-20位之间"}).inputValidator({min:2,max:20,onerror:"昵称应该为2-20位之间"}).regexValidator({regexp:"ps_username",datatype:"enum",onerror:"昵称格式错误"}).ajaxValidator({
            type : "get",
            url : "",
            data :"m=member&c=index&a=public_checknickname_ajax&userid=3",
            datatype : "html",
            async:'false',
            success : function(data){
                if( data == "1" ) {
                    return true;
                } else {
                    return false;
                }
            },
            buttons: $("#dosubmit"),
            onerror : "用户名已经存在",
            onwait : "请稍候..."
        }).defaultPassed();
    });
</script>
<div class="pad-10">
    <div class="common-form">
        <form name="myform" action="?m=member&c=member&a=edit" method="post" id="myform">
            <input type="hidden" name="info[userid]" id="userid" value="3"></input>
            <input type="hidden" name="info[username]" value="abc"></input>
            <fieldset>
                <legend>基本信息</legend>
                <table width="100%" class="table_form">
                    <tr>
                        <td width="80">用户名</td>
                        <td>abc<img title="锁定" src="/statics/images/icon/vip.gif"></td>
                    </tr>
                    <tr>
                        <td>头像</td>
                        <td><img src="/phpsso_server/uploadfile/avatar/1/1/3/90x90.jpg" onerror="this.src='/statics/images/member/nophoto.gif'" height=90 width=90><input type="checkbox" name="delavatar" id="delavatar" class="input-text" value="1" ><label for="delavatar">删除头像</label></td>
                    </tr>
                    <tr>
                        <td>密码</td>
                        <td><input type="password" name="info[password]" id="password" class="input-text"></input></td>
                    </tr>
                    <tr>
                        <td>确认密码</td>
                        <td><input type="password" name="info[pwdconfirm]" id="pwdconfirm" class="input-text"></input></td>
                    </tr>
                    <tr>
                        <td>昵称</td>
                        <td><input type="text" name="info[nickname]" id="nickname" value="abc_fool" class="input-text"></input></td>
                    </tr>
                    <tr>
                        <td>邮箱</td>
                        <td>
                            <input type="text" name="info[email]" value="abc@126.com" class="input-text" id="email" size="30"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>手机号码</td>
                        <td>
                            <input type="text" name="info[mobile]" value="18518456789" class="input-text" id="mobile" size="15"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>会员组</td>
                        <td>
                            <select name="info[groupid]"><option value="8" >游客</option><option value="2" selected>新手上路</option><option value="6" >注册会员</option><option value="4" >中级会员</option><option value="5" >高级会员</option><option value="1" >禁止访问</option><option value="7" >邮件认证</option></select> <div class="onShow">非vip会员用户组与积分绑定，如只修改会员组请设置该会员为vip</div>
                        </td>
                    </tr>
                    <tr>
                        <td>积分点数</td>
                        <td>
                            <input type="text" name="info[point]" value="200" class="input-text" id="point" size="10"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>会员模型</td>
                        <td>
                            <select name="info[modelid]" onchange="changemodel($(this).val())"><option value="10" selected>普通会员</option></select>			</td>
                    </tr>
                    <tr>
                        <td>vip会员</td>
                        <td>
                            是否为vip会员 <input type="checkbox" name="info[vip]" value=1 checked/>
                            过期时间 <link rel="stylesheet" type="text/css" href="/statics/js/calendar/jscal2.css"/>
                            <link rel="stylesheet" type="text/css" href="/statics/js/calendar/border-radius.css"/>
                            <link rel="stylesheet" type="text/css" href="/statics/js/calendar/win2k.css"/>
                            <script type="text/javascript" src="/statics/js/calendar/calendar.js"></script>
                            <script type="text/javascript" src="/statics/js/calendar/lang/en.js"></script><input type="text" name="info[overduedate]" id="overduedate" value="2015-10-03 10:46:00" size="21" class="date" readonly>&nbsp;<script type="text/javascript">
                                Calendar.setup({
                                    weekNumbers: true,
                                    inputField : "overduedate",
                                    trigger    : "overduedate",
                                    dateFormat: "%Y-%m-%d %H:%M:%S",
                                    showTime: true,
                                    minuteStep: 1,
                                    onSelect   : function() {this.hide();}
                                });
                            </script>			</td>
                    </tr>
                </table>
            </fieldset>
            <div class="bk15"></div>
            <fieldset>
                <legend>详细信息</legend>
                <table width="100%" class="table_form">
                    <tr>
                        <td width="80">生日</td>
                        <td><link rel="stylesheet" type="text/css" href="/statics/js/calendar/jscal2.css"/>
                            <link rel="stylesheet" type="text/css" href="/statics/js/calendar/border-radius.css"/>
                            <link rel="stylesheet" type="text/css" href="/statics/js/calendar/win2k.css"/>
                            <script type="text/javascript" src="/statics/js/calendar/calendar.js"></script>
                            <script type="text/javascript" src="/statics/js/calendar/lang/en.js"></script><input type="text" name="info[birthday]" id="birthday" value="" size="10" class="date" readonly>&nbsp;<script type="text/javascript">
                                Calendar.setup({
                                    weekNumbers: true,
                                    inputField : "birthday",
                                    trigger    : "birthday",
                                    dateFormat: "%Y-%m-%d",
                                    showTime: false,
                                    minuteStep: 1,
                                    onSelect   : function() {this.hide();}
                                });
                            </script></td>
                    </tr>
                </table>
            </fieldset>

            <div class="bk15"></div>
            <input name="dosubmit" id="dosubmit" type="submit" value="提交" class="dialog">
        </form>
    </div>
</div>
</body>
<script language="JavaScript">
    <!--
    function changemodel(modelid) {
        redirect('?m=member&c=member&a=edit&userid=3&modelid='+modelid+'&pc_hash=fDvAsg');
    }
    //-->
</script>
</html>