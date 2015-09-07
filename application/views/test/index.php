<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title>phpcms V9 - 后台管理中心</title>
    <link href="/statics/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="/statics/css/zh-cn-system.css" rel="stylesheet" type="text/css" />
    <link href="/statics/css/table_form.css" rel="stylesheet" type="text/css" />
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
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <a class="add fb" href="javascript:window.top.art.dialog({id:'add',iframe:'?m=member&c=member&a=add', title:'添加会员', width:'700', height:'500', lock:true}, function(){var d = window.top.art.dialog({id:'add'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'add'}).close()});void(0);"><em>添加会员</em></a>　    <a href='javascript:;' class="on"><em>会员管理</em></a>    </div>
</div>
<style type="text/css">
    html{_overflow-y:scroll}
</style><div class="pad-lr-10">
    <form name="searchform" action="" method="get" >
        <input type="hidden" value="member" name="m">
        <input type="hidden" value="member" name="c">
        <input type="hidden" value="search" name="a">
        <input type="hidden" value="879" name="menuid">
        <table width="100%" cellspacing="0" class="search-form">
            <tbody>
            <tr>
                <td>
                    <div class="explain-col">

                        注册时间：
                        <link rel="stylesheet" type="text/css" href="/statics/js/calendar/jscal2.css"/>
                        <link rel="stylesheet" type="text/css" href="/statics/js/calendar/border-radius.css"/>
                        <link rel="stylesheet" type="text/css" href="/statics/js/calendar/win2k.css"/>
                        <script type="text/javascript" src="/statics/js/calendar/calendar.js"></script>
                        <script type="text/javascript" src="/statics/js/calendar/lang/en.js"></script><input type="text" name="start_time" id="start_time" value="" size="10" class="date" readonly>&nbsp;<script type="text/javascript">
                            Calendar.setup({
                                weekNumbers: true,
                                inputField : "start_time",
                                trigger    : "start_time",
                                dateFormat: "%Y-%m-%d",
                                showTime: false,
                                minuteStep: 1,
                                onSelect   : function() {this.hide();}
                            });
                        </script>-
                        <input type="text" name="end_time" id="end_time" value="2015-09-07" size="10" class="date" readonly>&nbsp;<script type="text/javascript">
                            Calendar.setup({
                                weekNumbers: true,
                                inputField : "end_time",
                                trigger    : "end_time",
                                dateFormat: "%Y-%m-%d",
                                showTime: false,
                                minuteStep: 1,
                                onSelect   : function() {this.hide();}
                            });
                        </script>								<select name="siteid"><option value='' selected>所有站点</option><option value="1" >默认站点</option></select>
                        <select name="status">
                            <option value='0' >状态</option>
                            <option value='1' >锁定</option>
                            <option value='2' >正常</option>
                        </select>
                        <select name="modelid"><option value='' selected>会员模型</option><option value="10" >普通会员</option></select>				<select name="groupid"><option value='' selected>会员组</option><option value="8" >游客</option><option value="2" >新手上路</option><option value="6" >注册会员</option><option value="4" >中级会员</option><option value="5" >高级会员</option><option value="1" >禁止访问</option><option value="7" >邮件认证</option></select>
                        <select name="type">
                            <option value='1' >用户名</option>
                            <option value='2' >用户ID</option>
                            <option value='3' >邮箱</option>
                            <option value='4' >注册ip</option>
                            <option value='5' >昵称</option>
                        </select>

                        <input name="keyword" type="text" value="" class="input-text" />
                        <input type="submit" name="search" class="button" value="搜索" />
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </form>

    <form name="myform" action="?m=member&c=member&a=delete" method="post" onsubmit="checkuid();return false;">
        <div class="table-list">
            <table width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th  align="left" width="20"><input type="checkbox" value="" id="check_box" onclick="selectall('userid[]');"></th>
                    <th align="left"></th>
                    <th align="left">用户ID</th>
                    <th align="left">用户名</th>
                    <th align="left">昵称</th>
                    <th align="left">邮箱</th>
                    <th align="left">会员组</th>
                    <th align="left">注册ip</th>
                    <th align="left">最后登录</th>
                    <th align="left">金钱总数</th>
                    <th align="left">积分点数</th>
                    <th align="left">操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td align="left"><input type="checkbox" value="3" name="userid[]"></td>
                    <td align="left"></td>
                    <td align="left">3</td>
                    <td align="left"><img src="/phpsso_server/uploadfile/avatar/1/1/3/30x30.jpg" height=18 width=18 onerror="this.src='/statics/images/member/nophoto.gif'"><img title="vip会员" src="/statics/images/icon/vip.gif">abc<a href="javascript:member_infomation(3, '10', '')"><img src="/statics/images/admin_img/detail.png"></a></td>
                    <td align="left">abc_fool</td>
                    <td align="left">abc@126.com</td>
                    <td align="left">新手上路</td>
                    <td align="left">127.0.0.1</td>
                    <td align="left">2015-09-06 10:47:27</td>
                    <td align="left">0.00</td>
                    <td align="left">200</td>
                    <td align="left">
                        <a href="javascript:edit(3, 'abc')">[修改]</a>
                    </td>
                </tr>
                <tr>
                    <td align="left"><input type="checkbox" value="2" name="userid[]"></td>
                    <td align="left"></td>
                    <td align="left">2</td>
                    <td align="left"><img src="/phpsso_server/uploadfile/avatar/1/1/2/30x30.jpg" height=18 width=18 onerror="this.src='/statics/images/member/nophoto.gif'"><img title="vip会员" src="/statics/images/icon/vip.gif">shrimssaa<a href="javascript:member_infomation(2, '10', '')"><img src="/statics/images/admin_img/detail.png"></a></td>
                    <td align="left">shrimpma</td>
                    <td align="left">mataozhang@126.com</td>
                    <td align="left">新手上路</td>
                    <td align="left">127.0.0.1</td>
                    <td align="left">2015-09-06 10:46:33</td>
                    <td align="left">0.00</td>
                    <td align="left">30</td>
                    <td align="left">
                        <a href="javascript:edit(2, 'shrimssaa')">[修改]</a>
                    </td>
                </tr>
                <tr>
                    <td align="left"><input type="checkbox" value="1" name="userid[]"></td>
                    <td align="left"></td>
                    <td align="left">1</td>
                    <td align="left"><img src="/phpsso_server/uploadfile/avatar/1/1/1/30x30.jpg" height=18 width=18 onerror="this.src='/statics/images/member/nophoto.gif'">shrimss<a href="javascript:member_infomation(1, '10', '')"><img src="/statics/images/admin_img/detail.png"></a></td>
                    <td align="left">shrimpma</td>
                    <td align="left">matao@126.com</td>
                    <td align="left">新手上路</td>
                    <td align="left">127.0.0.1</td>
                    <td align="left">2015-09-06 10:45:36</td>
                    <td align="left">0.00</td>
                    <td align="left">30</td>
                    <td align="left">
                        <a href="javascript:edit(1, 'shrimss')">[修改]</a>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="btn">
                <label for="check_box">全选/取消</label> <input type="submit" class="button" name="dosubmit" value="删除" onclick="return confirm('您确定要删除吗？')"/>
                <input type="submit" class="button" name="dosubmit" onclick="document.myform.action='?m=member&c=member&a=lock'" value="锁定"/>
                <input type="submit" class="button" name="dosubmit" onclick="document.myform.action='?m=member&c=member&a=unlock'" value="解锁"/>
                <input type="button" class="button" name="dosubmit" onclick="move();return false;" value="移动"/>
            </div>

            <div id="pages"></div>
        </div>
    </form>
</div>
<script type="text/javascript">
    <!--
    function edit(id, name) {
        window.top.art.dialog({id:'edit'}).close();
        window.top.art.dialog({title:'修改会员《'+name+'》',id:'edit',iframe:'index.php?c=test&m=edit&a=edit&userid='+id,width:'700',height:'500'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;d.document.getElementById('dosubmit').click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
    }
    function move() {
        var ids='';
        $("input[name='userid[]']:checked").each(function(i, n){
            ids += $(n).val() + ',';
        });
        if(ids=='') {
            window.top.art.dialog({content:'请选择会员',lock:true,width:'200',height:'50',time:1.5},function(){});
            return false;
        }
        window.top.art.dialog({id:'move'}).close();
        window.top.art.dialog({title:'移动会员',id:'move',iframe:'?m=member&c=member&a=move&ids='+ids,width:'700',height:'500'}, function(){var d = window.top.art.dialog({id:'move'}).data.iframe;d.$('#dosubmit').click();return false;}, function(){window.top.art.dialog({id:'move'}).close()});
    }

    function checkuid() {
        var ids='';
        $("input[name='userid[]']:checked").each(function(i, n){
            ids += $(n).val() + ',';
        });
        if(ids=='') {
            window.top.art.dialog({content:'请选择会员',lock:true,width:'200',height:'50',time:1.5},function(){});
            return false;
        } else {
            myform.submit();
        }
    }

    function member_infomation(userid, modelid, name) {
        window.top.art.dialog({id:'modelinfo'}).close();
        window.top.art.dialog({title:'个人信息',id:'modelinfo',iframe:'?m=member&c=member&a=memberinfo&userid='+userid+'&modelid='+modelid,width:'700',height:'500'}, function(){var d = window.top.art.dialog({id:'modelinfo'}).data.iframe;d.document.getElementById('dosubmit').click();return false;}, function(){window.top.art.dialog({id:'modelinfo'}).close()});
    }

    //-->
</script>
</body>
</html>