<html lang="zh-cn" class="ng-scope">
<head>
    <style type="text/css">.ng-animate.item:not(.left):not(.right) {
            -webkit-transition: 0s ease-in-out left;
            transition: 0s ease-in-out left
        }</style>
    <style type="text/css">@charset "UTF-8";
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }</style>
    <title>人人车实时业务运营平台</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" media="all" href="vendor/bootstrap-3.1.1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="vendor/bootstrap-3.1.1/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" media="all" href="vendor/bootstrap-3.1.1/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="vendor/bootstrap-3.1.1/datepicker3.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="vendor/daterangepicker-1.3.21/daterangepicker-bs3.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/allocate.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/car.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/navigator.css">

    <link rel="stylesheet" type="text/css" media="all" href="vendor/angular-notifications/notification.css">
    <link rel="stylesheet" type="text/css" media="all" href="vendor/angular-notifications/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="vendor/angular-notifications/docs.css">

    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script data-main="main" src="vendor/requirejs-2.1.11/require.js"></script>
    <script src="vendor/jquery-1.11.0/jquery.min.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-52264351-4', 'auto');
        ga('send', 'pageview');

    </script>
    <style>
        .container {
            padding-right: 0px;
            padding-left: 0px;
            min-width: 996px;
        }

        #mb_top_btn {
            width: 50px;
            height: 26px;
            line-height: 22px;
            background-color: #69C;
            /*border:solid #999 thin;*/
            text-align: center;
            cursor: pointer;
            margin-bottom: 2px;

            border-radius: 8px 8px 0px 0px;
            -moz-border-radius: 8px 8px 0px 0px;
            -webkit-border-radius: 8px 8px 0px 0px;

        }

        #mb_bottom_btn {
            width: 50px;
            height: 26px;
            line-height: 22px;
            margin-top: 2px;
            background-color: #69C;
            /*border:solid #999 thin;*/
            text-align: center;
            cursor: pointer;

            border-radius: 0px 0px 8px 8px;
            -moz-border-radius: 0px 0px 8px 8px;
            -webkit-border-radius: 0px 0px 8px 8px;

        }
    </style>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="main"
            src="./main.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="app"
            src="js/app.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="canvasToblob"
            src="js/../vendor/canvas-to-blob/canvas-to-blob.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="bootstrap"
            src="js/../vendor/bootstrap-3.1.1/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="angular"
            src="js/../vendor/angular-1.3.0/angular.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ngRoute"
            src="js/../vendor/angular-1.3.0/angular-route.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ngAMD"
            src="js/../vendor/angular-1.3.0/angularAMD.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ngCookies"
            src="js/../vendor/angular-1.3.0/angular-cookies.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="notification"
            src="js/../vendor/angular-notifications/notification.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ngBootstrap"
            src="js/../vendor/ui-bootstrap-0.13.0/ui-bootstrap-tpls-0.13.0.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="AllocateListController"
            src="js/allocate/controllers/allocateListController.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="allocate/services/allocateListService"
            src="js/allocate/services/allocateListService.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="common/filters/statusFilter" src="js/common/filters/statusFilter.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="common/directives/pagination" src="js/common/directives/pagination.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="common/directives/datepicker" src="js/common/directives/datepicker.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="common/directives/datetimepickerMinute"
            src="js/common/directives/datetimepickerMinute.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="common/services/ganjiDistrictService"
            src="js/common/services/ganjiDistrictService.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="common/directives/notification" src="js/common/directives/notification.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="buycrm/services/buycrmEditService"
            src="js/buycrm/services/buycrmEditService.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="car/services/carEditService" src="js/car/services/carEditService.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="car/services/smsService" src="js/car/services/smsService.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="common/services/CityService" src="js/common/services/CityService.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="common/directives/daterangepicker"
            src="js/common/directives/daterangepicker.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="common/directives/loading" src="js/common/directives/loading.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="datepicker"
            src="js/../vendor/bootstrap-3.1.1/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="datetimepicker"
            src="js/../vendor/bootstrap-3.1.1/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="moment"
            src="js/../vendor/moment-2.9.0/moment.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="daterangepicker"
            src="js/../vendor/daterangepicker-1.3.21/daterangepicker.js"></script>
</head>
<body>
<!-- ngView:  -->
<div class="container ng-scope" ng-view="">
    <style type="text/css" class="ng-scope">
        .popover {
            max-width: 600px !important;
        }

        .hc th {
            text-align: center;
        }

        .hc td {
            text-align: center;
        }

        .loading {
            position: fixed;
            width: 100%;
            height: 100%;
            background: #CCC;
            z-index: 1000;
            top: 0;
            left: 0;
            opacity: 0.7;
        }

        .loading img {
            position: absolute;
            top: 50%;
            left: 50%;
        }

    </style>

    <div class="container ng-scope">
        <notification ng-model="notification" class="ng-pristine ng-untouched ng-valid ng-isolate-scope">
            <div ng-show="data.show" class="col-md-6 col-md-offset-2 alert alert- fade in ng-hide"
                 style="position: fixed; top: 4px; z-index: 1000;"><strong class="ng-binding"></strong>&nbsp;&nbsp;
            </div>
        </notification>
        <!-- ngInclude: 'views/module/navigator.html' -->
        <div ng-include="'views/module/navigator.html'" class="ng-scope">
            <nav class="navbar navbar-default ng-scope" role="navigation">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">收车管理<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu menu-top">
                                    <li><a href="/#/apply/list">车源申领</a></li>
                                    <li><a href="/inspector/#/allocate/list">评估师派单</a></li>
                                    <li><a href="/#/editor/list">编辑派单</a></li>
                                    <li><a href="/#">信息发布</a></li>
                                    <li><a href="/carmanage/#">车辆档案</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">卖车管理<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu menu-top">
                                    <li><a href="/buycrm/#/">买家客户管理</a></li>
                                    <li class="dropdown-submenu"><a tabindex="-1" href="javascript:">卖车CRM</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="/buycrm/#/sales_statistic">销售管理</a></li>
                                            <li><a tabindex="-1" href="/order/#/statistics">销售报表</a></li>
                                            <li><a tabindex="-1" href="/buycrm/#/crmlist">带看客户管理</a></li>
                                            <li><a tabindex="-1" href="/buycrm/#/potential_buyer">意向客户管理</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/order/">派单管理</a></li>
                                    <li><a href="/order/#/deal">成单管理</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">售后管理<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu menu-top">
                                    <li><a href="/order/#/aftersale/list">售后服务</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">活动管理<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu menu-top">
                                    <li><a href="http://112.126.68.180:8081/anchor/index.php" target="_blank">历史活动</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">基础数据管理<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu menu-top">
                                    <li><a href="/#/allcar/search">全网搜车</a></li>
                                    <li class="dropdown-submenu"><a tabindex="-1" href="javascript:">客户留言</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="/index.php?c=appointment">详情页预约</a></li>
                                            <li><a tabindex="-1" href="/index.php?c=intent">售车购车意向</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/#/channel/list">渠道配置</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">系统管理<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu menu-top">
                                    <li><a href="/index.php?/admin/">账号设置</a></li>
                                    <li><a href="/index.php?/role_admin/roles">角色管理</a></li>
                                    <li><a href="/index.php?/privilege_admin/privileges">权限管理</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <a href="/index.php?/auth/logout" type="button" class="btn btn-danger btn-sm">退出登录</a>
                        </ul>
                    </div>
                </div>
            </nav>


        </div>
        <br>
        <span>城市：</span>
        <select ng-model="current.city_id" ng-change="selectCity()" class="ng-pristine ng-untouched ng-valid">
            <option value="? string: ?"></option>
            <!-- ngRepeat: item in cities -->
        </select>&nbsp;&nbsp;

        时间类型：<select ng-model="current.timeType" ng-change="change_time_type()"
                     class="ng-pristine ng-untouched ng-valid">
            <option value="预约">预约时间</option>
            <option value="创建">创建时间</option>
            <option value="发布">发布时间</option>
        </select>&nbsp;&nbsp;
        时间范围：
        <input class="search-range-time ng-pristine ng-untouched ng-valid ng-isolate-scope" type="text"
               daterangepicker="" ng-model="time_range_express" ng-change="search_by_time_range()">
        <a ng-click="set_tomorrow()">明天</a>

        <p class="pull-right">
            <input type="text" ng-model="rrc_id" size="10" placeholder="人人车ID"
                   class="ng-pristine ng-untouched ng-valid">
            <button class="btn btn-success btn-sm" ng-click="search_by_rrcID()">搜索</button>
            &nbsp;&nbsp;
            <input type="text" ng-model="owner_phone" size="10" placeholder="车主电话"
                   class="ng-pristine ng-untouched ng-valid">
            <button class="btn btn-success btn-sm" ng-click="search_by_phone()">搜索</button>
        </p>
        <table class="table table-bordered table-condensed allocateStatistics">
            <tbody>
            <tr>
                <td colspan="12">&nbsp;总量：<strong class="text-danger ng-binding"></strong>&nbsp;&nbsp;已派单：<strong
                        class="text-danger ng-binding">0</strong>(详情如下表)&nbsp;&nbsp;待派单：<strong
                        class="text-danger ng-binding"></strong></td>
            </tr>
            <!-- tr class="text-center" ng-if="currentUserName!='admin'">
              <td rowspan="2" class="bg-info statistics-table-info" ng-click="click_table('UNINSPECTED','')">待验车<br>{{statistics.uninspected}}</td>
              <td colspan="3" class="bg-warning statistics-table-warning" ng-click="click_table('RECONTACT','')">重联系({{statistics.recontact_total}})</td>
              <td colspan="4" class="bg-danger statistics-table-danger" ng-click="click_table('CLOSED','')">关闭({{statistics.closed_total}})</td>
              <td colspan="4" class="bg-success statistics-table-success" ng-click="click_table('','已验收')">已验收({{statistics.inspected}})</td>
            </tr -->
            <tr class="text-center">
                <td rowspan="2" class="bg-info statistics-table-info ng-binding"
                    ng-click="click_table('UNINSPECTED','')">待验车<br></td>
                <td colspan="3" class="bg-warning statistics-table-warning ng-binding"
                    ng-click="click_table('RECONTACT','')">重联系()
                </td>
                <td colspan="2" class="bg-danger statistics-table-danger ng-binding"
                    ng-click="click_table('CLOSED','')">关闭-未上门()
                </td>
                <td colspan="2" class="bg-danger statistics-table-danger ng-binding"
                    ng-click="click_table('CLOSED','')">关闭-已上门()
                </td>
                <td colspan="4" class="bg-success statistics-table-success ng-binding" ng-click="click_table('','已验收')">
                    已验收()
                </td>
            </tr>

            <tr class="text-center">
                <td class="col-md-1 bg-warning statistics-table-warning ng-binding"
                    ng-click="click_table('RECONTACT','联系不上')">联系不上<br></td>
                <td class="col-md-1 bg-warning statistics-table-warning ng-binding"
                    ng-click="click_table('RECONTACT','车主改约')">车主改约<br></td>
                <td class="col-md-1 bg-warning statistics-table-warning ng-binding"
                    ng-click="click_table('RECONTACT','车主拒绝')">车主待约<br></td>
                <td class="col-md-1 bg-danger statistics-table-danger ng-binding"
                    ng-click="click_table('CLOSED','车主自卖')">车主自卖<br></td>
                <td class="col-md-1 bg-danger statistics-table-danger ng-binding"
                    ng-click="click_table('CLOSED','车主始终拒绝')">车主拒绝<br></td>
                <td class="col-md-1 bg-danger statistics-table-danger ng-binding"
                    ng-click="click_table('CLOSED','事故车')">事故车<br></td>
                <td class="col-md-1 bg-danger statistics-table-danger ng-binding"
                    ng-click="click_table('CLOSED','车况差不收')">车况差不收<br></td>
                <td class="col-md-1 bg-success statistics-table-success ng-binding"
                    ng-click="click_table('CCUNCHECKED','')">待编辑派单<br></td>
                <td class="col-md-1 bg-success statistics-table-success ng-binding"
                    ng-click="click_table('RETURNED','')">待补充信息<br></td>
                <td class="col-md-1 bg-success statistics-table-success ng-binding"
                    ng-click="click_table('EDITING','')">待编辑审核<br></td>
                <td class="col-md-1 bg-success statistics-table-success ng-binding"
                    ng-click="click_table('PUBLISHED','')">已发布<br></td>
            </tr>
            </tbody>
        </table>
        <dl class="allocateCarNum">
            <dt>待验数量：</dt>
            <dd>
                <!-- ngRepeat: item in allocated_car_num -->
            </dd>
        </dl>
    <span ng-show="current.city_id&amp;&amp;ganji_district" class="ng-hide">
    地区：<select ng-model="current.district_name" ng-change="search()" class="ng-pristine ng-untouched ng-valid">
            <option value="? string: ?"></option>
            <!-- ngRepeat: item in ganji_district -->
        </select>
    </span>
        评估师：<select ng-model="current.inspector_id" ng-change="search()" class="ng-pristine ng-untouched ng-valid">
            <option value="? string: ?"></option>
            <!-- ngRepeat: item in inspectors -->
        </select>
        状态：<select ng-model="current.car_status" ng-change="search()" class="ng-pristine ng-untouched ng-valid">
            <option value="">不限</option>
            <option value="UNALLOCATED">待派单</option>
            <option value="UNINSPECTED">待验车</option>
            <option value="RECONTACT">重联系</option>
            <option value="CLOSED">关闭</option>
            <option value="CCUNCHECKED">待编辑派单</option>
            <option value="RETURNED">待补充信息</option>
            <option value="EDITING">待编辑审核</option>
            <option value="PUBLISHED">已发布</option>
        </select>
        创建人：<select ng-model="current.creator_id" ng-change="search()" class="ng-pristine ng-untouched ng-valid">
            <option value="? string: ?"></option>
            <!-- ngRepeat: item in creators -->
        </select>
        照片：<select ng-model="current.photo_upload" ng-change="search()" class="ng-pristine ng-untouched ng-valid">
            <option value="">全部</option>
            <option value="1">已上传</option>
            <option value="0">未上传</option>
        </select>
        车源评级：<select ng-model="current.grade" ng-change="search()" class="ng-pristine ng-untouched ng-valid">
            <option value="">全部</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="C+">C+</option>
            <option value="C-">C-</option>
        </select>
        车辆属性：<select ng-model="current.owner_property" ng-change="search()" class="ng-pristine ng-untouched ng-valid">
            <option value="">全部</option>
            <option value="1">C1</option>
            <option value="2">C2</option>
            <option value="3">非平台C1</option>
        </select>
        验车属性：<select ng-model="current.inspect_property" ng-change="search()" class="ng-pristine ng-untouched ng-valid">
            <option value="">全部</option>
            <option value="0">非即时验车</option>
            <option value="1">即时验车</option>
        </select>
        <button class="btn btn-success btn-sm pull-right" ng-click="export()">导出</button>

        <br>
        <ul class="pagination allocatePagelist">
            <button class="btn btn-default pull-left ng-hide" style="display: inline-block;" ng-show="cars"
                    ng-click="select_all_cars()">全选
            </button>
            <button class="btn btn-primary pull-left ng-hide" style="display: inline-block; margin-right: 40px;"
                    ng-show="cars" ng-click="allocate_selected_car_confirm()">一键派单
            </button>
            <li><a href="javascript:;" ng-click="changePage(current.page-1>1?current.page-1:1)">«</a></li>
            <li ng-class="{active: current.page === item}" ng-hide="judge(item,current.page)" ng-click="changePage(item)" ng-repeat="item in current.pagelist" class="ng-scope active"><a href="javascript:;" class="ng-binding">1</a></li>
            <!-- ngRepeat: item in current.pagelist -->
            <li><a href="javascript:;"
                   ng-click="changePage(current.page+1<current.pagelist.length ? current.page+1:current.pagelist.length)">»</a>
            </li>

            <li class="text-right ng-binding" style="margin-left: 30px">共条数据，当页条数据</li>
        </ul>


        <table class="table table-striped table-hover table-condensed">
            <tbody>
            <tr>
                <th></th>
                <th class="col-md-1 text-center">编号/创建人</th>
                <th class="col-md-1 text-center">车主/电话</th>
                <th class="col-md-1 text-center">品牌/车系</th>
                <th class="col-md-2 text-center">区域/地址</th>
                <th class="col-md-1 text-center">评估师/电话</th>
                <th class="col-md-1 text-center">预约时间</th>
                <th class="col-md-1 text-center">状态</th>
                <th class="col-md-2 text-center">备注</th>
                <th class="col-md-2 text-center">操作</th>
            </tr>
            <!-- ngRepeat: item in cars -->
            </tbody>
        </table>

        <ul class="pagination allocatePagelist">
            <button class="btn btn-default pull-left ng-hide" style="display: inline-block;" ng-show="cars"
                    ng-click="select_all_cars()">全选
            </button>
            <button class="btn btn-primary pull-left ng-hide" style="display: inline-block; margin-right: 40px;"
                    ng-show="cars" ng-click="allocate_selected_car_confirm()">一键派单
            </button>
            <li><a href="javascript:;" ng-click="changePage(current.page-1>1?current.page-1:1)">«</a></li>
            <!-- ngRepeat: item in current.pagelist -->
            <li><a href="javascript:;"
                   ng-click="changePage(current.page+1<current.pagelist.length ? current.page+1:current.pagelist.length)">»</a>
            </li>
            <li class="text-right ng-binding" style="margin-left: 30px">共条数据，当页条数据</li>
        </ul>

        <!-- Modal 单车派单-->
        <div class="modal fade" id="allocateOneCarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                class="sr-only">Close</span></button>
                        <h4 class="modal-title">派单</h4>
                    </div>
                    <div class="modal-body">
                        请选择评估师:
                        <select ng-model="allocated_inspector_id" class="ng-pristine ng-untouched ng-valid">
                            <option value="? undefined:undefined ?"></option>
                            <!-- ngRepeat: item in inspectors -->
                        </select>
                        <br>备注：<input type="text" class="form-control ng-pristine ng-untouched ng-valid"
                                      ng-model="allocateRemark">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" ng-click="allocate_one_car()">确认</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 一键派单-->
        <div class="modal fade" id="allocateSelectedCarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                class="sr-only">Close</span></button>
                        <h4 class="modal-title">派单</h4>
                    </div>
                    <div class="modal-body">
                        请选择评估师:
                        <select ng-model="allocated_inspector_id" class="ng-pristine ng-untouched ng-valid">
                            <option value="? undefined:undefined ?"></option>
                            <!-- ngRepeat: item in inspectors -->
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" ng-click="allocate_selected_car()">确认</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 确认改约信息-->
        <div class="modal fade" id="changeInspectionConfirmModal" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                class="sr-only">Close</span></button>
                        <h4 class="modal-title">请确认重新预约的信息</h4>
                    </div>
                    <div class="modal-body">
                        预约时间：<input type="text" datetimepicker-minute="" ng-model="inspect_datetime"
                                    class="ng-pristine ng-untouched ng-valid">&nbsp;&nbsp;
                        评估师：
                        <select ng-model="allocated_inspector_id" class="ng-pristine ng-untouched ng-valid">
                            <option value="? undefined:undefined ?"></option>
                            <!-- ngRepeat: item in inspectors -->
                        </select>
                        <br>
                        备注：<input type="text" class="form-control ng-pristine ng-untouched ng-valid"
                                  ng-model="allocateRemark">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" ng-click="change_inspection()">确认</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 关闭待验车源-->
        <div class="modal fade" id="closeInspectionConfirmModal" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                class="sr-only">Close</span></button>
                        <h4 class="modal-title">关闭待验车源</h4>
                    </div>
                    <div class="modal-body">
                        请确认关闭该车源，并选择关闭理由:
                        <select ng-model="close_reason"
                                ng-options="item for item in ['车主自卖', '车主始终拒绝', '车况差不收','事故车','重单','免费检测','快速成交']"
                                class="ng-pristine ng-untouched ng-valid">
                            <option value="?" selected="selected"></option>
                            <option value="0">车主自卖</option>
                            <option value="1">车主始终拒绝</option>
                            <option value="2">车况差不收</option>
                            <option value="3">事故车</option>
                            <option value="4">重单</option>
                            <option value="5">免费检测</option>
                            <option value="6">快速成交</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" ng-click="close_inspection()">确认</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 电话销售审核通过-->
        <div class="modal fade" id="ccPassConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                class="sr-only">Close</span></button>
                        <h4 class="modal-title">请确认评估师录入的信息</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-hover table-nonfluid table-bordered"
                               style="table-layout:fixed;word-wrap:break-word;">
                            <thead>
                            <tr>
                                <td class="ng-binding">人人车编号：</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="ng-binding">车源创建时间：</td>
                                <td class="ng-binding">创建人：</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">验车师：</td>
                                <td class="ng-binding">联系电话：</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">车主姓名：</td>
                                <td class="ng-binding">车主电话：</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">详细地址：</td>
                                <td class="ng-binding">车主职业：</td>
                            </tr>

                            <tr>
                                <td class="ng-binding">品牌：</td>
                                <td class="ng-binding">车系：</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">标题：</td>
                                <td class="ng-binding">车型：</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">级别：</td>
                                <td class="ng-binding">车身颜色：</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">排放标准：</td>
                                <td class="ng-binding">使用性质：</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">行驶里程：万公里</td>
                                <td class="ng-binding">排量：升</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">变速器：</td>
                            </tr>

                            <tr>
                                <td style="display: -webkit-box">车主报价：<input
                                        class="form-control ng-pristine ng-untouched ng-valid"
                                        style="width:75px;height:23px" type="text" ng-model="ccCheckInfo.price">&nbsp;万元
                                </td>
                                <td class="ng-binding">新车价：万元</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">预估价：万元</td>
                                <td style="display: -webkit-box">市场价：<input
                                        class="form-control ng-pristine ng-untouched ng-valid"
                                        style="width:75px;height:23px" type="text" ng-model="ccCheckInfo.refer_price">&nbsp;万元
                                </td>
                            </tr>
                            <tr>
                                <td style="display: -webkit-box">车主底价：<input
                                        class="form-control ng-pristine ng-untouched ng-valid"
                                        style="width:75px;height:23px" type="text" ng-model="ccCheckInfo.minimum_price">&nbsp;万元
                                </td>
                                <td class="ng-binding">底价备注：</td>
                            </tr>

                            <tr>
                                <td class="ng-binding">上牌时间：</td>
                                <td class="ng-binding">上牌城市：</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">车牌号：</td>
                                <td class="ng-binding">过户次数：</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">年检过期日期：</td>
                                <td class="ng-binding">交强险过期日期：</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">车船使用税时间：</td>
                                <td class="ng-binding">商业险过期日期：</td>
                            </tr>
                            <tr>
                                <td class="ng-binding">是否个人一手车：</td>
                                <td class="ng-binding">是否4S店保养：</td>
                            </tr>
                            <tr>
                                <td class="danger ng-binding" colspan="2">评估师评价：</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" ng-click="cc_pass()">确认</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 电话销售审核不通过-->
        <div class="modal fade" id="ccReturnConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                class="sr-only">Close</span></button>
                        <h4 class="modal-title">请填写退回原因</h4>
                    </div>
                    <div class="modal-body">
                        退回原因：<input type="text" class="form-control ng-pristine ng-untouched ng-valid"
                                    ng-model="allocateRemark">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" ng-click="cc_return()">确认</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 删除车源-->
        <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                class="sr-only">Close</span></button>
                        <h4 class="modal-title">是否确认删除？</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" ng-click="delete()">确认</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 显示CC、评估师添加的备注-->
        <div class="modal fade" id="showRemarkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                class="sr-only">Close</span></button>
                        <h4 class="modal-title">备注记录</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="text-align: center;">内容</th>
                                <th style="text-align: center;width: 12%">添加人</th>
                                <th style="text-align: center;width: 31%">添加时间</th>
                            </tr>
                            <!-- ngRepeat: item in remarks -->
                            </tbody>
                        </table>
                        <textarea class="form-control ng-pristine ng-untouched ng-valid" rows="2"
                                  ng-model="allocateRemark" placeholder="添加备注"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary" ng-click="add_remark()">确认</button>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/ng-template" id="multi_car_template.html">
            <table class="table table-bordered hc">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>车系</th>
                    <th>车型</th>
                    <th>备注</th>
                    <th>创建时间</th>
                </tr>
                </thead>
                <tbody ng-repeat="item in specified_user_cars">
                <tr>
                    <td>{{item.car_id}}</td>
                    <td>{{item.brand}}-{{item.car_series}}</td>
                    <td>{{item.title}}</td>
                    <td>{{item.status_remark}}</td>
                    <td>{{item.create_time}}</td>
                </tr>
                </tbody>
            </table>
        </script>
        <div class="loading ng-hide" loading="">
            <img src="images/loading.gif">
        </div>
    </div>

</div>
<div notifications="top right" class="ng-isolate-scope dr-notification-container top right">
    <!-- ngRepeat: noti in queue --></div>

<div style="position:fixed !important; top:90%; left:90% ">
    <div id="mb_top_btn">
        <img src="images/mb_top_btn.png">
    </div>
    <div id="mb_bottom_btn">
        <img src="images/mb_bottom_btn.png">
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        jQuery("#mb_bottom_btn").click(function () {
            jQuery("html, body").animate({scrollTop: jQuery(document).height()}, 500);
        });
        jQuery("#mb_top_btn").click(function () {
            jQuery("html, body").animate({scrollTop: 0}, 500);
        });
    });
</script>


<div class="daterangepicker dropdown-menu opensright">
    <div class="calendar first right">
        <div class="calendar-date">
            <table class="table-condensed">
                <thead>
                <tr>
                    <th></th>
                    <th colspan="5" class="month">九月 2015</th>
                    <th class="next available"><i
                            class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i></th>
                </tr>
                <tr>
                    <th>日</th>
                    <th>一</th>
                    <th>二</th>
                    <th>三</th>
                    <th>四</th>
                    <th>五</th>
                    <th>六</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="off disabled" data-title="r0c0">30</td>
                    <td class="off disabled" data-title="r0c1">31</td>
                    <td class="off disabled" data-title="r0c2">1</td>
                    <td class="off disabled" data-title="r0c3">2</td>
                    <td class="off disabled" data-title="r0c4">3</td>
                    <td class="off disabled" data-title="r0c5">4</td>
                    <td class="off disabled" data-title="r0c6">5</td>
                </tr>
                <tr>
                    <td class="off disabled" data-title="r1c0">6</td>
                    <td class="available active start-date end-date" data-title="r1c1">7</td>
                    <td class="available" data-title="r1c2">8</td>
                    <td class="available" data-title="r1c3">9</td>
                    <td class="available" data-title="r1c4">10</td>
                    <td class="available" data-title="r1c5">11</td>
                    <td class="available" data-title="r1c6">12</td>
                </tr>
                <tr>
                    <td class="available" data-title="r2c0">13</td>
                    <td class="available" data-title="r2c1">14</td>
                    <td class="available" data-title="r2c2">15</td>
                    <td class="available" data-title="r2c3">16</td>
                    <td class="available" data-title="r2c4">17</td>
                    <td class="available" data-title="r2c5">18</td>
                    <td class="available" data-title="r2c6">19</td>
                </tr>
                <tr>
                    <td class="available" data-title="r3c0">20</td>
                    <td class="available" data-title="r3c1">21</td>
                    <td class="available" data-title="r3c2">22</td>
                    <td class="available" data-title="r3c3">23</td>
                    <td class="available" data-title="r3c4">24</td>
                    <td class="available" data-title="r3c5">25</td>
                    <td class="available" data-title="r3c6">26</td>
                </tr>
                <tr>
                    <td class="available" data-title="r4c0">27</td>
                    <td class="available" data-title="r4c1">28</td>
                    <td class="available" data-title="r4c2">29</td>
                    <td class="available" data-title="r4c3">30</td>
                    <td class="available off" data-title="r4c4">1</td>
                    <td class="available off" data-title="r4c5">2</td>
                    <td class="available off" data-title="r4c6">3</td>
                </tr>
                <tr>
                    <td class="available off" data-title="r5c0">4</td>
                    <td class="available off" data-title="r5c1">5</td>
                    <td class="available off" data-title="r5c2">6</td>
                    <td class="available off" data-title="r5c3">7</td>
                    <td class="available off" data-title="r5c4">8</td>
                    <td class="available off" data-title="r5c5">9</td>
                    <td class="available off" data-title="r5c6">10</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="calendar second left">
        <div class="calendar-date">
            <table class="table-condensed">
                <thead>
                <tr>
                    <th class="prev available"><i
                            class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i></th>
                    <th colspan="5" class="month">九月 2015</th>
                    <th class="next available"><i
                            class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i></th>
                </tr>
                <tr>
                    <th>日</th>
                    <th>一</th>
                    <th>二</th>
                    <th>三</th>
                    <th>四</th>
                    <th>五</th>
                    <th>六</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="available off" data-title="r0c0">30</td>
                    <td class="available off" data-title="r0c1">31</td>
                    <td class="available" data-title="r0c2">1</td>
                    <td class="available" data-title="r0c3">2</td>
                    <td class="available" data-title="r0c4">3</td>
                    <td class="available" data-title="r0c5">4</td>
                    <td class="available" data-title="r0c6">5</td>
                </tr>
                <tr>
                    <td class="available" data-title="r1c0">6</td>
                    <td class="available active start-date end-date" data-title="r1c1">7</td>
                    <td class="available" data-title="r1c2">8</td>
                    <td class="available" data-title="r1c3">9</td>
                    <td class="available" data-title="r1c4">10</td>
                    <td class="available" data-title="r1c5">11</td>
                    <td class="available" data-title="r1c6">12</td>
                </tr>
                <tr>
                    <td class="available" data-title="r2c0">13</td>
                    <td class="available" data-title="r2c1">14</td>
                    <td class="available" data-title="r2c2">15</td>
                    <td class="available" data-title="r2c3">16</td>
                    <td class="available" data-title="r2c4">17</td>
                    <td class="available" data-title="r2c5">18</td>
                    <td class="available" data-title="r2c6">19</td>
                </tr>
                <tr>
                    <td class="available" data-title="r3c0">20</td>
                    <td class="available" data-title="r3c1">21</td>
                    <td class="available" data-title="r3c2">22</td>
                    <td class="available" data-title="r3c3">23</td>
                    <td class="available" data-title="r3c4">24</td>
                    <td class="available" data-title="r3c5">25</td>
                    <td class="available" data-title="r3c6">26</td>
                </tr>
                <tr>
                    <td class="available" data-title="r4c0">27</td>
                    <td class="available" data-title="r4c1">28</td>
                    <td class="available" data-title="r4c2">29</td>
                    <td class="available" data-title="r4c3">30</td>
                    <td class="available off" data-title="r4c4">1</td>
                    <td class="available off" data-title="r4c5">2</td>
                    <td class="available off" data-title="r4c6">3</td>
                </tr>
                <tr>
                    <td class="available off" data-title="r5c0">4</td>
                    <td class="available off" data-title="r5c1">5</td>
                    <td class="available off" data-title="r5c2">6</td>
                    <td class="available off" data-title="r5c3">7</td>
                    <td class="available off" data-title="r5c4">8</td>
                    <td class="available off" data-title="r5c5">9</td>
                    <td class="available off" data-title="r5c6">10</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="ranges">
        <ul>
            <li class="active">今天</li>
            <li>昨天</li>
            <li>过去7天</li>
            <li>过去30天</li>
            <li>本月</li>
            <li>上个月</li>
            <li>指定范围</li>
        </ul>
        <div class="range_inputs">
            <div class="daterangepicker_start_input"><label for="daterangepicker_start">从</label><input
                    class="input-mini" type="text" name="daterangepicker_start" value=""></div>
            <div class="daterangepicker_end_input"><label for="daterangepicker_end">至</label><input class="input-mini"
                                                                                                    type="text"
                                                                                                    name="daterangepicker_end"
                                                                                                    value=""></div>
            <button class="applyBtn btn btn-small btn-sm btn-success">确认</button>
            &nbsp;
            <button class="cancelBtn btn btn-small btn-sm btn-default">取消</button>
        </div>
    </div>
</div>
<div class="datetimepicker datetimepicker-dropdown-bottom-right dropdown-menu" style="left: 0px; z-index: 10040;">
    <div class="datetimepicker-minutes" style="display: none;">
        <table class=" table-condensed">
            <thead>
            <tr>
                <th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th>
                <th colspan="5" class="switch">7 九月 2015</th>
                <th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="7"><span class="minute">14:00</span><span class="minute">14:10</span><span class="minute">14:20</span><span
                        class="minute">14:30</span><span class="minute">14:40</span><span
                        class="minute active">14:50</span></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th colspan="7" class="today" style="display: none;">今日</th>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="datetimepicker-hours" style="display: none;">
        <table class=" table-condensed">
            <thead>
            <tr>
                <th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th>
                <th colspan="5" class="switch">7 九月 2015</th>
                <th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="7"><span class="hour">0:00</span><span class="hour">1:00</span><span
                        class="hour">2:00</span><span class="hour">3:00</span><span class="hour">4:00</span><span
                        class="hour">5:00</span><span class="hour">6:00</span><span class="hour">7:00</span><span
                        class="hour">8:00</span><span class="hour">9:00</span><span class="hour">10:00</span><span
                        class="hour">11:00</span><span class="hour">12:00</span><span class="hour">13:00</span><span
                        class="hour active">14:00</span><span class="hour">15:00</span><span
                        class="hour">16:00</span><span class="hour">17:00</span><span class="hour">18:00</span><span
                        class="hour">19:00</span><span class="hour">20:00</span><span class="hour">21:00</span><span
                        class="hour">22:00</span><span class="hour">23:00</span></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th colspan="7" class="today" style="display: none;">今日</th>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="datetimepicker-days" style="display: block;">
        <table class=" table-condensed">
            <thead>
            <tr>
                <th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th>
                <th colspan="5" class="switch">九月 2015</th>
                <th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th>
            </tr>
            <tr>
                <th class="dow">日</th>
                <th class="dow">一</th>
                <th class="dow">二</th>
                <th class="dow">三</th>
                <th class="dow">四</th>
                <th class="dow">五</th>
                <th class="dow">六</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="day old">30</td>
                <td class="day old">31</td>
                <td class="day">1</td>
                <td class="day">2</td>
                <td class="day">3</td>
                <td class="day">4</td>
                <td class="day">5</td>
            </tr>
            <tr>
                <td class="day">6</td>
                <td class="day today active">7</td>
                <td class="day">8</td>
                <td class="day">9</td>
                <td class="day">10</td>
                <td class="day">11</td>
                <td class="day">12</td>
            </tr>
            <tr>
                <td class="day">13</td>
                <td class="day">14</td>
                <td class="day">15</td>
                <td class="day">16</td>
                <td class="day">17</td>
                <td class="day">18</td>
                <td class="day">19</td>
            </tr>
            <tr>
                <td class="day">20</td>
                <td class="day">21</td>
                <td class="day">22</td>
                <td class="day">23</td>
                <td class="day">24</td>
                <td class="day">25</td>
                <td class="day">26</td>
            </tr>
            <tr>
                <td class="day">27</td>
                <td class="day">28</td>
                <td class="day">29</td>
                <td class="day">30</td>
                <td class="day new">1</td>
                <td class="day new">2</td>
                <td class="day new">3</td>
            </tr>
            <tr>
                <td class="day new">4</td>
                <td class="day new">5</td>
                <td class="day new">6</td>
                <td class="day new">7</td>
                <td class="day new">8</td>
                <td class="day new">9</td>
                <td class="day new">10</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th colspan="7" class="today" style="display: none;">今日</th>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="datetimepicker-months" style="display: none;">
        <table class="table-condensed">
            <thead>
            <tr>
                <th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th>
                <th colspan="5" class="switch">2015</th>
                <th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="7"><span class="month">一月</span><span class="month">二月</span><span
                        class="month">三月</span><span class="month">四月</span><span class="month">五月</span><span
                        class="month">六月</span><span class="month">七月</span><span class="month">八月</span><span
                        class="month active">九月</span><span class="month">十月</span><span class="month">十一月</span><span
                        class="month">十二月</span></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th colspan="7" class="today" style="display: none;">今日</th>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="datetimepicker-years" style="display: none;">
        <table class="table-condensed">
            <thead>
            <tr>
                <th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th>
                <th colspan="5" class="switch">2010-2019</th>
                <th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span
                        class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span
                        class="year">2014</span><span class="year active">2015</span><span class="year">2016</span><span
                        class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span
                        class="year old">2020</span></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th colspan="7" class="today" style="display: none;">今日</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
</body>
</html>