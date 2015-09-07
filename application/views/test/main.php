<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="off">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
    <title>人人车管理后台--newUI</title>
    <link href="http://test.local/phpcms/statics/css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="http://test.local/phpcms/statics/css/zh-cn-system.css" rel="stylesheet" type="text/css"/>
    <link href="http://test.local/phpcms/statics/css/dialog.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="http://test.local/phpcms/statics/css/style/zh-cn-styles1.css"
          title="styles1" media="screen"/>
    <link rel="alternate stylesheet" type="text/css" href="http://test.local/phpcms/statics/css/style/zh-cn-styles2.css"
          title="styles2" media="screen"/>
    <link rel="alternate stylesheet" type="text/css" href="http://test.local/phpcms/statics/css/style/zh-cn-styles3.css"
          title="styles3" media="screen"/>
    <link rel="alternate stylesheet" type="text/css" href="http://test.local/phpcms/statics/css/style/zh-cn-styles4.css"
          title="styles4" media="screen"/>
    <script language="javascript" type="text/javascript"
            src="http://test.local/phpcms/statics/js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript"
            src="http://test.local/phpcms/statics/js/styleswitch.js"></script>
    <script language="javascript" type="text/javascript" src="http://test.local/phpcms/statics/js/dialog.js"></script>
    <script language="javascript" type="text/javascript" src="http://test.local/phpcms/statics/js/hotkeys.js"></script>
    <script language="javascript" type="text/javascript"
            src="http://test.local/phpcms/statics/js/jquery.sgallery.js"></script>
    <script type="text/javascript">
        var pc_hash = 'fDvAsg'
    </script>
    <style type="text/css">
        .objbody {
            overflow: hidden
        }

        .btns {
            background-color: #666;
        }

        .btns {
            position: absolute;
            top: 116px;
            right: 30px;
            z-index: 1000;
            opacity: 0.6;
        }

        .btns2 {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 2px;
            border-radius: 3px;
            box-shadow: 0px 0px 2px #333;
            padding: 0px 6px;
            border: 1px solid #ddd;
        }

        .btns:hover {
            opacity: 1;
        }

        .btns h6 {
            padding: 4px;
            border-bottom: 1px solid #666;
            text-shadow: 0px 0px 2px #000;
        }

        .btns .pd4 {
            padding-top: 4px;
            border-top: 1px solid #999;
        }

        .pd4 li {
            border-radius: 0px 6 spx 0px 6px;
            margin-top: 2px;
            margin-bottom: 3px;
            padding: 2px 0px;
        }

        .btns .pd4 li span {
            padding: 0px 6px;
        }

        .pd {
            padding: 4px;
        }

        .ac {
            background-color: #333;
            color: #fff;
        }

        .hvs {
            background-color: #555;
            cursor: pointer;
        }

        .bg_btn {
            background: url(http://test.local/phpcms/statics/images/admin_img/icon2.jpg) no-repeat;
            width: 32px;
            height: 32px;
        }
    </style>
</head>
<body scroll="no" class="objbody">
<div class="btns btns2" id="btnx">
    <!--<div class="bg_btn"></div>
    <h6>面板切换</h6>-->
    <ul id="Site_model" class="pd4">
        <!--<li onclick="_Site_M();" class="ac"><span>全功能</span></li>
        <li onclick="_Site_M('project1');"><span>经典模式</span></li> -->
    </ul>
</div>
<div id="dvLockScreen" class="ScreenLock" style="display:none">
    <div id="dvLockScreenWin" class="inputpwd">
        <h5><b class="ico ico-info"></b><span id="lock_tips">锁屏状态，请输入密码解锁</span></h5>

        <div class="input">
            <label class="lb">密码：</label><input type="password" id="lock_password" class="input-text" size="24">
            <input type="submit" class="submit" value="&nbsp;" name="dosubmit"
                   onclick="check_screenlock();return false;">
        </div>
    </div>
</div>
<div class="header">
    <div class="logo lf"><a href="http://test.local/phpcms/" target="_blank"><span class="invisible">PHPCMS内容管理系统</span></a>
    </div>
    <div class="rt-col">
        <div class="tab_style white cut_line text-r"><a href="javascript:;" onclick="lock_screen()">
                <!--<img
                    src="http://test.local/phpcms/statics/images/icon/lockscreen.png"> 锁屏</a><span>|</span><a
                href="http://www.phpcms.cn" target="_blank">PHPCMS</a><span>|</span><a
                href="http://www.phpcms.cn/license/license.php" target="_blank">授权</a><span>|</span><a
                href="http://bbs.phpcms.cn" target="_blank">支持论坛</a><span>|</span><a href="http://v9.help.phpcms.cn/"
                                                                                     target="_blank">帮助？</a>
            <ul id="Skin">
                <li class="s1 styleswitch" rel="styles1"></li>
                <li class="s2 styleswitch" rel="styles2"></li>
                <li class="s3 styleswitch" rel="styles3"></li>
                <li class="s4 styleswitch" rel="styles4"></li>
            </ul>-->
        </div>
    </div>
    <div class="col-auto">
        <div class="log white cut_line">您好！UserName [超级管理员]<span>|</span><a
                href="?m=admin&c=index&a=public_logout">[退出]</a><span>|</span>
            <!-- <a href="http://test.local/phpcms/" target="_blank" id="site_homepage">站点首页</a><span>|</span>
            <a href="?m=member" target="_blank">会员中心</a><span>|</span>
            <a href="?m=search" target="_blank" id="site_search">搜索</a> -->
        </div>
        <ul class="nav white" id="top_menu">
            <li id="_M10" class="on top_menu"><a href="javascript:_M(10,'?m=admin&c=index&a=public_main')"
                                                 hidefocus="true" style="outline:none;">我的面板</a></li>
            <li id="_M1" class="top_menu"><a href="javascript:_M(1,'?m=admin&c=setting&a=init')" hidefocus="true"
                                             style="outline:none;">设置</a></li>
            <li id="_M2" class="top_menu"><a href="javascript:_M(2,'?m=admin&c=module&a=init')" hidefocus="true"
                                             style="outline:none;">模块</a></li>
            <li id="_M4" class="top_menu"><a href="javascript:_M(4,'?m=content&c=content&a=init')" hidefocus="true"
                                             style="outline:none;">内容</a></li>
            <li id="_M5" class="top_menu"><a href="javascript:_M(5,'?m=member&c=member&a=init')" hidefocus="true"
                                             style="outline:none;">用户</a></li>
            <li id="_M6" class="top_menu"><a href="javascript:_M(6,'?m=template&c=style&a=init')" hidefocus="true"
                                             style="outline:none;">界面</a></li>
            <li id="_M7" class="top_menu"><a href="javascript:_M(7,'?m=admin&c=extend&a=init_extend')" hidefocus="true"
                                             style="outline:none;">扩展</a></li>
            <li class="tab_web"><a href="javascript:;"><span>默认站点</span></a></li>
        </ul>
    </div>
</div>
<div id="content">
    <div class="col-left left_menu">
        <div id="Scroll">
            <div id="leftMain" style="display:none;"></div>
        </div>
        <a href="javascript:;" id="openClose" style="outline-style: none; outline-color: invert; outline-width: medium;"
           hideFocus="hidefocus" class="open" title="展开与关闭"><span class="hidden">展开</span></a>
    </div>
    <div class="col-1 lf cat-menu" id="display_center_id" style="display:none" height="100%">
        <div class="content">
            <iframe name="center_frame" id="center_frame" src="" frameborder="false" scrolling="auto"
                    style="border:none" width="100%" height="auto" allowtransparency="true"></iframe>
        </div>
    </div>
    <div class="col-auto mr8">
        <div class="crumbs">
            <div class="shortcut cu-span">
                <!--<a href="?m=content&c=create_html&a=public_index&pc_hash=fDvAsg"
                                             target="right">
                    <span>生成首页</span></a><a
                    href="?m=admin&c=cache_all&a=init&pc_hash=fDvAsg" target="right"><span>更新缓存</span></a><a
                    href="javascript:art.dialog({id:'map',iframe:'?m=admin&c=index&a=public_map', title:'后台地图', width:'700', height:'500', lock:true});void(0);"><span>后台地图</span></a> -->
            </div>
            当前位置：<span id="current_pos"></span></div>
        <div class="col-1">
            <div class="content" style="position:relative; overflow:hidden">
                <iframe name="right" id="rightMain" src="index.php?c=test&m=index" frameborder="false" scrolling="auto"
                        style="border:none; margin-bottom:30px" width="100%" height="auto"
                        allowtransparency="true"></iframe>
                <div class="fav-nav">
                    <div id="panellist">
                    </div>
                    <div id="paneladd"></div>
                    <input type="hidden" id="menuid" value="">
                    <input type="hidden" id="bigid" value=""/>

                    <div id="help" class="fav-help"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-web-panel hidden" style="position:absolute; z-index:999; background:#fff">
    <ul>
        <li style="margin:0"><a href="javascript:site_select(1, '默认站点', 'http://test.local/phpcms/', '1')">默认站点</a></li>
    </ul>
</div>
<div class="scroll"><a href="javascript:;" class="per" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(1);"></a><a
        href="javascript:;" class="next" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(2);"></a></div>
<script type="text/javascript">
    if (!Array.prototype.map)
        Array.prototype.map = function (fn, scope) {
            var result = [], ri = 0;
            for (var i = 0, n = this.length; i < n; i++) {
                if (i in this) {
                    result[ri++] = fn.call(scope, this[i], i, this);
                }
            }
            return result;
        };

    var getWindowSize = function () {
        return ["Height", "Width"].map(function (name) {
            return window["inner" + name] ||
                document.compatMode === "CSS1Compat" && document.documentElement["client" + name] || document.body["client" + name]
        });
    }
    window.onload = function () {
        if (!+"\v1" && !document.querySelector) { // for IE6 IE7
            document.body.onresize = resize;
        } else {
            window.onresize = resize;
        }
        function resize() {
            wSize();
            return false;
        }
    }
    function wSize() {
        //这是一字符串
        var str = getWindowSize();
        var strs = new Array(); //定义一数组
        strs = str.toString().split(","); //字符分割
        var heights = strs[0] - 150, Body = $('body');
        $('#rightMain').height(heights);
        //iframe.height = strs[0]-46;
        if (strs[1] < 980) {
            $('.header').css('width', 980 + 'px');
            $('#content').css('width', 980 + 'px');
            Body.attr('scroll', '');
            Body.removeClass('objbody');
        } else {
            $('.header').css('width', 'auto');
            $('#content').css('width', 'auto');
            Body.attr('scroll', 'no');
            Body.addClass('objbody');
        }

        var openClose = $("#rightMain").height() + 39;
        $('#center_frame').height(openClose + 9);
        $("#openClose").height(openClose + 30);
        $("#Scroll").height(openClose - 20);
        windowW();
    }
    wSize();
    function windowW() {
        if ($('#Scroll').height() < $("#leftMain").height()) {
            $(".scroll").show();
        } else {
            $(".scroll").hide();
        }
    }
    windowW();
    //站点下拉菜单
    $(function () {
        var offset = $(".tab_web").offset();
        var tab_web_panel = $(".tab-web-panel");
        $(".tab_web").mouseover(function () {
            tab_web_panel.css({"left": +$(this).offset().left + 4, "top": +offset.top + $('.tab_web').height()});
            tab_web_panel.show();
            if (tab_web_panel.height() > 200) {
                tab_web_panel.children("ul").addClass("tab-scroll");
            }
        });
        $(".tab_web span").mouseout(function () {
            hidden_site_list_1()
        });
        $(".tab-web-panel").mouseover(function () {
            clearh();
            $('.tab_web a').addClass('on')
        }).mouseout(function () {
            hidden_site_list_1();
            $('.tab_web a').removeClass('on')
        });
        //默认载入左侧菜单
        $("#leftMain").load("?m=admin&c=index&a=public_menu_left&menuid=10");

        //面板切换
        $("#btnx").removeClass("btns2");
        $("#Site_model,#btnx h6").css("display", "none");
        $("#btnx").hover(function () {
            $("#Site_model,#btnx h6").css("display", "block");
            $(this).addClass("btns2");
            $(".bg_btn").hide();
        }, function () {
            $("#Site_model,#btnx h6").css("display", "none");
            $(this).removeClass("btns2");
            $(".bg_btn").show();
        });
        $("#Site_model li").hover(function () {
            $(this).toggleClass("hvs");
        }, function () {
            $(this).toggleClass("hvs");
        });
        $("#Site_model li").click(function () {
            $("#Site_model li").removeClass("ac");
            $(this).addClass("ac");
        });
    })
    //站点选择
    function site_select(id, name, domain, siteid) {
        $(".tab_web span").html(name);
        $.get("?m=admin&c=index&a=public_set_siteid&siteid=" + id, function (data) {
            if (data == 1) {
                window.top.right.location.reload();
                window.top.center_frame.location.reload();
                $.get("?m=admin&c=index&a=public_menu_left&menuid=0&parentid=" + $("#bigid").val(), function (data) {
                    $('.top_menu').remove();
                    $('#top_menu').prepend(data)
                });
            }
        });
        $('#site_homepage').attr('href', domain);
        $('#site_search').attr('href', 'index.php?m=search&siteid=' + siteid);
    }
    //隐藏站点下拉。
    var s = 0;
    var h;
    function hidden_site_list() {
        s++;
        if (s >= 3) {
            $('.tab-web-panel').hide();
            clearInterval(h);
            s = 0;
        }
    }
    function clearh() {
        if (h)clearInterval(h);
    }
    function hidden_site_list_1() {
        h = setInterval("hidden_site_list()", 1);
    }

    //左侧开关

    $("#openClose").click(function () {
        if ($(this).data('clicknum') == 1) {
            $("html").removeClass("on");
            $(".left_menu").removeClass("left_menu_on");
            $(this).removeClass("close");
            $(this).data('clicknum', 0);
            $(".scroll").show();
        } else {
            $(".left_menu").addClass("left_menu_on");
            $(this).addClass("close");
            $("html").addClass("on");
            $(this).data('clicknum', 1);
            $(".scroll").hide();
        }
        return false;
    });

    function _M(menuid, targetUrl) {
        return;s
        $("#menuid").val(menuid);
        $("#bigid").val(menuid);
        $("#paneladd").html('<a class="panel-add" href="javascript:add_panel();"><em>添加</em></a>');
        if (menuid != 8) {
           /* $("#leftMain").load("?m=admin&c=index&a=public_menu_left&menuid=" + menuid, {limit: 25}, function () {
                windowW();
            });*/
        } else {
           /* $("#leftMain").load("?m=admin&c=phpsso&a=public_menu_left&menuid=" + menuid, {limit: 25}, function () {
                windowW();
            });*/
        }
        //$("#rightMain").attr('src', targetUrl);
        $('.top_menu').removeClass("on");
        $('#_M' + menuid).addClass("on");
        $.get("?m=admin&c=index&a=public_current_pos&menuid=" + menuid, function (data) {
            $("#current_pos").html(data);
        });
        //当点击顶部菜单后，隐藏中间的框架
        $('#display_center_id').css('display', 'none');
        //显示左侧菜单，当点击顶部时，展开左侧
        $(".left_menu").removeClass("left_menu_on");
        $("#openClose").removeClass("close");
        $("html").removeClass("on");
        $("#openClose").data('clicknum', 0);
        $("#current_pos").data('clicknum', 1);
    }
    function _MP(menuid, targetUrl) {
        $("#menuid").val(menuid);
        $("#paneladd").html('<a class="panel-add" href="javascript:add_panel();"><em>添加</em></a>');

        $("#rightMain").attr('src', targetUrl + '&menuid=' + menuid + '&pc_hash=' + pc_hash);
        $('.sub_menu').removeClass("on fb blue");
        $('#_MP' + menuid).addClass("on fb blue");
        $.get("?m=admin&c=index&a=public_current_pos&menuid=" + menuid, function (data) {
            $("#current_pos").html(data + '<span id="current_pos_attr"></span>');
        });
        $("#current_pos").data('clicknum', 1);
        show_help(targetUrl);
    }

    function show_help(targetUrl) {
        $("#help").slideUp("slow");
        var str = '';
        $.getJSON("http://v9.help.phpcms.cn/api.php?jsoncallback=?", {op: 'help', targetUrl: targetUrl},
            function (data) {
                if (data != null) {
                    $("#help").slideDown("slow");
                    $.each(data, function (i, item) {
                        str += '<a href="' + item.url + '" target="_blank">' + item.title + '</a>';
                    });

                    str += '<a class="panel-delete" href="javascript:;" onclick="$(\'#help\').slideUp(\'slow\')"></a>';
                    $('#help').html(str);
                }
            });
        $("#help").data('time', 1);
    }
    setInterval("hidden_help()", 30000);
    function hidden_help() {
        var htime = $("#help").data('time') + 1;
        $("#help").data('time', htime);
        if (htime > 2) $("#help").slideUp("slow");
    }
    function add_panel() {
        var menuid = $("#menuid").val();
        $.ajax({
            type: "POST",
            url: "?m=admin&c=index&a=public_ajax_add_panel",
            data: "menuid=" + menuid,
            success: function (data) {
                if (data) {
                    $("#panellist").html(data);
                }
            }
        });
    }
    function delete_panel(menuid, id) {
        $.ajax({
            type: "POST",
            url: "?m=admin&c=index&a=public_ajax_delete_panel",
            data: "menuid=" + menuid,
            success: function (data) {
                $("#panellist").html(data);
            }
        });
    }

    function paneladdclass(id) {
        $("#panellist span a[class='on']").removeClass();
        $(id).addClass('on')
    }
    setInterval("session_life()", 160000);
    function session_life() {
        $.get("?m=admin&c=index&a=public_session_life");
    }
    function lock_screen() {
        $.get("?m=admin&c=index&a=public_lock_screen");
        $('#dvLockScreen').css('display', '');
    }
    function check_screenlock() {
        var lock_password = $('#lock_password').val();
        if (lock_password == '') {
            $('#lock_tips').html('<font color="red">密码不能为空。</font>');
            return false;
        }
        $.get("?m=admin&c=index&a=public_login_screenlock", {lock_password: lock_password}, function (data) {
            if (data == 1) {
                $('#dvLockScreen').css('display', 'none');
                $('#lock_password').val('');
                $('#lock_tips').html('锁屏状态，请输入密码解锁');
            } else if (data == 3) {
                $('#lock_tips').html('<font color="red">密码重试次数太多</font>');
            } else {
                strings = data.split('|');
                $('#lock_tips').html('<font color="red">密码错误，您还有' + strings[1] + '次尝试机会！</font>');
            }
        });
    }
    $(document).bind('keydown', 'return', function (evt) {
        check_screenlock();
        return false;
    });

    (function () {
        var addEvent = (function () {
                if (window.addEventListener) {
                    return function (el, sType, fn, capture) {
                        el.addEventListener(sType, fn, (capture));
                    };
                } else if (window.attachEvent) {
                    return function (el, sType, fn, capture) {
                        el.attachEvent("on" + sType, fn);
                    };
                } else {
                    return function () {
                    };
                }
            })(),
            Scroll = document.getElementById('Scroll');
        // IE6/IE7/IE8/IE10/IE11/Opera 10+/Safari5+
        addEvent(Scroll, 'mousewheel', function (event) {
            event = window.event || event;
            if (event.wheelDelta <= 0 || event.detail > 0) {
                Scroll.scrollTop = Scroll.scrollTop + 29;
            } else {
                Scroll.scrollTop = Scroll.scrollTop - 29;
            }
        }, false);

        // Firefox 3.5+
        addEvent(Scroll, 'DOMMouseScroll', function (event) {
            event = window.event || event;
            if (event.wheelDelta <= 0 || event.detail > 0) {
                Scroll.scrollTop = Scroll.scrollTop + 29;
            } else {
                Scroll.scrollTop = Scroll.scrollTop - 29;
            }
        }, false);

    })();
    function menuScroll(num) {
        var Scroll = document.getElementById('Scroll');
        if (num == 1) {
            Scroll.scrollTop = Scroll.scrollTop - 60;
        } else {
            Scroll.scrollTop = Scroll.scrollTop + 60;
        }
    }
    function _Site_M(project) {
        var id = '';
        $('#top_menu li').each(function () {
            var S_class = $(this).attr('class');
            if ($(this).attr('id')) {
                $(this).hide();
            }
            if (S_class == 'on top_menu' || S_class == 'top_menu on') {
                id = $(this).attr('id');
            }
        });
        $('#' + id).show();
        id = id.substring(2, id.length);
        if (!project) {
            project = 0;
        }
        $.ajaxSettings.async = false;
        $.getJSON('index.php', {
            m: 'admin',
            c: 'index',
            a: 'public_set_model',
            'site_model': project,
            'time': Math.random()
        }, function (data) {
            $.each(data, function (i, n) {
                $('#_M' + n).show();
            })
        })
        $("#leftMain").load("?m=admin&c=index&a=public_menu_left&menuid=" + id + '&time=' + Math.random());
    }

    //hide left menu;
    $(function () {

        $(".left_menu").addClass("left_menu_on");
        $(this).addClass("close");
        $("html").addClass("on");
        $(this).data('clicknum', 1);
        $(".scroll").hide();
        //$("#openClose").hide();
        $("#openClose").css('background', 'none');
    })

</script>
</body>
</html>