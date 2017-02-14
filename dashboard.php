<!DOCTYPE html>
<!-- saved from url=(0024)http://localhost/mahara/ -->
<html lang="en"><!--<![endif]--><head data-basehref="http://localhost/mahara/"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="generator" content="Mahara 16.10 (https://mahara.org)">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Dashboard - KITE">
    <meta property="og:description" content="KITE is an open source ePortfolio and social networking web application.
It provides users with tools to create and maintain a digital portfolio of their learning and social networking features to allow users to interact with each other.">
    <meta property="og:image" content="http://localhost/mahara/theme/raw/images/site-logo4facebook.png">
    <meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=10.0,initial-scale=1.0">
    
    <title> KITE</title>
    <script type="application/javascript">
    var config = {
        'theme': [],
        'sesskey' : 'DBnx9zQtsKulykUJ',
        'wwwroot': 'http://localhost/mahara/',
        'loggedin': 1,
        'userid': 1,
        'mobile': 0,
        'handheld_device': 0,
        'cc_enabled': 0,
        'mathjax': 0,
        'select2_lang': ''
    };
    </script>
    <script type="application/javascript">var strings = {"namedfieldempty":"The required field \"%s\" is empty","processing":"Processing","unknownerror":"An unknown error occurred (0x20f91a0)","loading":"Loading ...","showtags":"Show my tags","couldnotgethelp":"An error occurred trying to retrieve the help page.","password":"Password","deleteitem":"Delete","moveitemup":"Move up","moveitemdown":"Move down","username":"Username","login":"Login","sessiontimedout":"Your session has timed out. Please enter your login details to continue.","loginfailed":"You have not provided the correct credentials to log in. Please check your username and password are correct.","home":"Home","youhavenottaggedanythingyet":"You have not tagged anything yet","wanttoleavewithoutsaving?":"You have made changes - do you want to leave the page without saving them?","Help":"Help","closehelp":"Close help","tabs":"Tabs","toggletoolbarson":"Toggle toolbars on. Show full list of buttons","toggletoolbarsoff":"Toggle toolbars off. Show basic buttons","imagexofy":"Image {x} of {y}","remove":"Remove","element.calendar.opendatepicker":"Open date picker","rule.maxlength.maxlength":"This field must be at most %d characters long."};
function plural(n) { return n != 1; }
</script>
    <script type="application/javascript" src="./dashboard_files/jquery.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/Packed.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/keyboardNavigation.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/paginator.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/ajaxblocks.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/mahara.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/formchangechecker.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/textareamaxlengthchecker.js.download"></script>

    <script type="application/javascript" src="./dashboard_files/select2.full.js.download"></script>
    <script type="application/javascript">
function hideinfo() {
    var m = SPAN();
    m.innerHTML = "You have hidden the information box. You can control its visibility in <a\nhref=\"http:\/\/localhost\/mahara\/account\">Settings<\/a>.";
    slideUp('home-info-container', {afterFinish: function() {displayMessage(m, 'ok');}});
}

function nevershow() {
    var data = {'showhomeinfo' : 0};
    sendjsonrequest('homeinfo.json.php', data, 'POST', hideinfo);
}
addLoadEvent(function () {
    if ($('hideinfo')) {
        $('hideinfo').onclick = nevershow;
    }
});addLoadEvent( function() {

});
    </script>

    <script type="application/javascript" src="./dashboard_files/slimbox2.js.download"></script>
    <link rel="stylesheet" type="text/css" href="./dashboard_files/slimbox2.css">
    <script type="application/javascript">$j=jQuery;</script>


    <link rel="stylesheet" type="text/css" href="./dashboard_files/style.css">
    <link rel="stylesheet" type="text/css" href="./dashboard_files/views.css">

    <script type="application/javascript" src="./dashboard_files/bootstrap.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/tmpl.min.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/masonry.min.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/pieform.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/formtabs.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/filebrowser.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/access.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/notification.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/dock.js.download"></script>
    <script type="application/javascript" src="./dashboard_files/theme.js.download"></script>

    <link rel="shortcut icon" href="http://localhost/mahara/favicon.ico?v=3378" type="image/vnd.microsoft.icon">
    <link rel="image_src" href="./dashboard_files/site-logo.gif">



</head>


<body data-usethemedjs="true" class="home js">
    <div class="skiplink btn-group btn-group-top">
        <a class="sr-only sr-only-focusable btn btn-default" href="http://localhost/mahara/#main">Skip to main content</a>
    </div>

    

        
        
        
        

    
    <header class="header navbar navbar-default navbar-fixed-top no-site-messages">
        <div class="container">
                         <!-- Brand and toggle get grouped for better mobile display -->
                <button type="button" class="menu-toggle navbar-toggle collapsed" data-toggle="collapse" data-target=".nav-main">
                    <span class="sr-only">Show Menu</span>
                    <span class="icon-bar" role="presentation"></span>
                    <span class="icon-bar" role="presentation"></span>
                    <span class="icon-bar" role="presentation"></span>
                </button>
            
                        <button type="button" class="navbar-toggle search-toggle collapsed" data-toggle="collapse" data-target=".navbar-form">
                <span class="icon icon-search" role="presentation" aria-hidden="true"></span>
                <span class="nav-title sr-only">Show Search</span>
            </button>
            
            <div id="logo-area" class="logo-area">
                <a href="http://localhost/mahara/" class="logo">
                    <img src="./dashboard_files/site-logo.gif" alt="KITE">
                </a>
                
                <div id="loading-box" class="loading-box" style="display:none"></div>
            </div>
            <ul class="nav navbar-nav navbar-right top-nav ">
    <li class="identity has-icon"><a href="http://localhost/mahara/user/view.php?id=1"><span class="icon icon-user" role="presentation" aria-hidden="true"></span><span class="nav-title">jeevitha r</span></a></li><li class="settings  has-icon"><a href="http://localhost/mahara/account/index.php"><span class="icon icon-cogs" role="presentation" aria-hidden="true"></span><span class="nav-title">Settings</span></a></li><li class="inbox  has-icon"><a id="mail" href="http://localhost/mahara/module/multirecipientnotification/inbox.php"><span class="icon icon-envelope" role="presentation" aria-hidden="true"></span><span class="navcount unreadmessagecount"><span class="sr-only">Inbox: </span>10</span></a></li><li class="btn-logout has-icon"><a href="http://localhost/mahara/?logout" accesskey="l"><span class="icon icon-sign-out" role="presentation" aria-hidden="true"></span><span class="nav-title">Logout</span></a></li>
    
    
</ul>


<div class="navbar-form navbar-right collapse  navbar-collapse">
    <form class="pieform header-search-form" name="usf" method="post" action="http://localhost/mahara/user/find.php" id="usf">
<div><span id="usf_query_container" class="form-group-inline"><label class="sr-only" for="usf_query">Search users</label><input type="text" class="form-control text" id="usf_query" name="query" placeholder="Search users" tabindex="0" value=""></span><span id="usf_submit_container" class="form-group-inline"><button type="submit" class="btn-primary input-group-btn button btn" id="usf_submit" name="submit" tabindex="0"><span class="icon icon-search icon-lg" role="presentation" aria-hidden="true"></span><span class="sr-only">Go</span></button></span></div><input type="hidden" class="hidden" id="usf_sesskey" name="sesskey" value="DBnx9zQtsKulykUJ">
<input type="hidden" name="pieform_usf" value="">
</form>

</div>



        </div>
    </header>

    
    <nav id="main-nav" class="no-site-messages navbar-inverse nav collapse navbar-collapse nav-main main-nav">
       <div class="container">
           
            <ul id="nav" class="nav navbar-nav">


            <li class="home active"><a href="http://localhost/mahara/" accesskey="d" class="home">Home</a></li><li class="content"><a href="http://localhost/mahara/artefact/internal/index.php" accesskey="c" class="content">Content</a><button type="button" class="navbar-showchildren navbar-toggle dropdown-toggle collapsed" data-toggle="collapse" data-target="#childmenu-1"><span class="icon icon-chevron-down" role="presentation" aria-hidden="true"></span><span class="nav-title sr-only">Show Menu</span></button><ul id="childmenu-1" class="hidden-md hidden-lg hidden-sm collapse child-nav" role="menu"><li class=""><a href="http://localhost/mahara/artefact/internal/index.php">Profile</a></li><li class=""><a href="http://localhost/mahara/artefact/file/profileicons.php">Profile pictures</a></li><li class=""><a href="http://localhost/mahara/artefact/file/index.php">Files</a></li><li class=""><a href="http://localhost/mahara/artefact/blog/index.php">Journals</a></li><li class=""><a href="http://localhost/mahara/artefact/resume/index.php">Résumé</a></li><li class=""><a href="http://localhost/mahara/artefact/plans/index.php">Plans</a></li><li class=""><a href="http://localhost/mahara/artefact/internal/notes.php">Notes</a></li></ul></li><li class="myportfolio"><a href="http://localhost/mahara/view/index.php" accesskey="p" class="myportfolio">Portfolio</a><button type="button" class="navbar-showchildren navbar-toggle dropdown-toggle collapsed" data-toggle="collapse" data-target="#childmenu-2"><span class="icon icon-chevron-down" role="presentation" aria-hidden="true"></span><span class="nav-title sr-only">Show Menu</span></button><ul id="childmenu-2" class="hidden-md hidden-lg hidden-sm collapse child-nav" role="menu"><li class=""><a href="http://localhost/mahara/view/index.php">Pages</a></li><li class=""><a href="http://localhost/mahara/collection/index.php">Collections</a></li><li class=""><a href="http://localhost/mahara/view/share.php">Shared by me</a></li><li class=""><a href="http://localhost/mahara/view/sharedviews.php">Shared with me</a></li><li class=""><a href="http://localhost/mahara/export/index.php">Export</a></li><li class=""><a href="http://localhost/mahara/import/index.php">Import</a></li></ul></li><li class="groups"><a href="http://localhost/mahara/group/mygroups.php" accesskey="g" class="groups">Groups</a><button type="button" class="navbar-showchildren navbar-toggle dropdown-toggle collapsed" data-toggle="collapse" data-target="#childmenu-3"><span class="icon icon-chevron-down" role="presentation" aria-hidden="true"></span><span class="nav-title sr-only">Show Menu</span></button><ul id="childmenu-3" class="hidden-md hidden-lg hidden-sm collapse child-nav" role="menu"><li class=""><a href="http://localhost/mahara/group/mygroups.php">My groups</a></li><li class=""><a href="http://localhost/mahara/group/find.php">Find groups</a></li><li class=""><a href="http://localhost/mahara/user/myfriends.php">My friends</a></li><li class=""><a href="http://localhost/mahara/user/find.php">Find friends</a></li><li class=""><a href="http://localhost/mahara/account/institutions.php">Institution membership</a></li><li class=""><a href="http://localhost/mahara/group/topics.php">Topics</a></li></ul></li><li class="siteadmin"><a href="http://localhost/mahara/admin/" accesskey="a" class="admin-site">Administration</a></li>
            </ul>
        </div>
    </nav>

    
        
    





    <div class="container main-content">
        <div class="row">
            <main id="main" class="col-md-9  main">
                <div id="content" class="main-column">
                    <div id="main-column-container">

                        

                        <div id="messages" role="alert" aria-live="assertive"></div>
                        

                        

                        

<h1>Welcome</h1>
<h3><strong><em>KITE</em>&nbsp;&nbsp;</strong>is a fully featured electronic portfolio system with social networking features to create online learning communities.</h3>
<p>&nbsp;</p>
    <div id="home-info-container" class="dashboard-widget-container">

    <div class="home-info-boxes loggedin fullwidth">

                <a href="http://localhost/mahara/view/index.php" title="Create" class="logged-in thumbnail-widget first">
        
            <div id="home-info-create" class="widget">
                <div class="widget-heading">
                    <div class="circle-bg">
                        <span class="icon icon-plus" role="presentation" aria-hidden="true"></span>
                    </div>
                    <h2 class="title">
                        Create
                    </h2>
                    <p>Develop your portfolio</p>
                </div>
                <div class="widget-detail">
                    <p>Create your electronic portfolio in a flexible personal learning environment</p>
                </div>
            </div>
                </a>
        

                <a href="http://localhost/mahara/view/share.php" class="logged-in thumbnail-widget">
        
            <div id="home-info-share" class="home-info-box">
                <div class="widget-heading">
                    <div class="circle-bg">
                        <span class="icon icon-unlock-alt" role="presentation" aria-hidden="true"></span>
                    </div>
                    <h2 class="title">
                        Share
                    </h2>
                    <p>Control your privacy</p>
                </div>
                <div class="widget-detail">
                    <p>Share your achievements and development in a space you control</p>
                </div>
        </div>
                </a>
        

                <a href="http://localhost/mahara/group/find.php" class="logged-in thumbnail-widget last">
        
            <div id="home-info-engage" class="home-info-box">
                <div class="widget-heading">
                    <div class="circle-bg">
                        <span class="icon icon-users" role="presentation" aria-hidden="true"></span>
                    </div>
                    <h2 class="title">
                        Engage
                    </h2>
                    <p>Find people and join groups</p>
                </div>
                <div class="widget-detail">
                    <p>Engage with other people in discussion forums and collaborate with them in groups</p>
                </div>
            </div>
                </a>
        

                <div id="hideinfo" class="nojs-hidden-block text-right hide-info">
            <a href="http://localhost/mahara/#" title="Hide information box" class="remove-widgets">
                <span class="icon icon-remove" role="presentation" aria-hidden="true"></span>
                <span class="">Hide information box</span>
            </a>
        </div>
        
    </div>
</div>


    <div class="dashboard-editable">
        <div class="btn-top-right btn-group btn-group-top" id="editdashboard">
            <a class="btn btn-default" href="http://localhost/mahara/view/blocks.php?id=6"><span class="btn-edit"><span class="icon icon-pencil left" role="presentation" aria-hidden="true"> </span> Edit dashboard</span></a>
        </div>

        <div id="view" class="dashboard view-container">
    <div id="bottom-pane">
        <div id="column-container">
            <div id="row_1" class="clearfix">
    <div class="row-content">
    <div id="row_1_column_1" class="column-layout columns2 first col-width-50" style="width:48%;">
    <div class="column-content">
        <div class="bt-newviews panel panel-secondary clearfix " id="blockinstance_20">
            <h3 class="title panel-heading js-heading">
            

            Latest changes I can view
            


            

        </h3>
    

    <div class="block" id="blockinstance_20_target" data-blocktype-ajax="20"><div class="list-group">
        <div class="list-group-item">
        <h4 class="list-group-item-heading text-inline">
            <a href="http://localhost/mahara/view/view.php?id=14">book</a>
        </h4>
        <span class="text-small text-midtone">(1 page)</span>
                <div class="groupuserdate text-small">
                                            <a href="http://localhost/mahara/user/view.php?id=1" class="text-link">
                    jeevitha r (admin)
                </a>
            
        
            <span class="postedon text-midtone">
                -                     Updated
                
                2 February 2017
            </span>
        </div>
        
    </div>
        <div class="list-group-item">
        <h4 class="list-group-item-heading text-inline">
            <a href="http://localhost/mahara/view/view.php?id=20">fruits</a>
        </h4>
        <span class="text-small text-midtone"></span>
                <div class="groupuserdate text-small">
                        <a href="http://localhost/mahara/group/view.php?id=4" class="text-link">
                flower
            </a>
            
            <span class="postedon text-midtone">
                -                     Updated
                
                2 February 2017
            </span>
        </div>
                <p class="detail list-group-item-text text-small">
            pdkvpdvdkfvdffpfpfplf
        </p>
        
    </div>
        <div class="list-group-item">
        <h4 class="list-group-item-heading text-inline">
            <a href="http://localhost/mahara/view/view.php?id=12">Untitled v.2</a>
        </h4>
        <span class="text-small text-midtone"></span>
                <div class="groupuserdate text-small">
                        <a href="http://localhost/mahara/group/view.php?id=1" class="text-link">
                cse
            </a>
            
            <span class="postedon text-midtone">
                -                     Created
                
                25 January 2017
            </span>
        </div>
        
    </div>
    
</div>

</div>
</div>
<div class="bt-myviews panel panel-secondary clearfix " id="blockinstance_21">
            <h3 class="title panel-heading js-heading">
            

            My portfolios
            


            

        </h3>
    

    <div class="block" id="blockinstance_21_target" data-blocktype-noajax="21">
            <div class="list-group">
        <div id="myviewlist" class="list-group">
                <div class="list-group-item">
        <a href="http://localhost/mahara/view/view.php?id=14" class="outer-link">
            <span class="sr-only">book</span>
        </a>

        <h4 class="title list-group-item-heading text-inline">
            <a href="http://localhost/mahara/view/view.php?id=14">book</a>
        </h4>

                <span class="text-small text-midtone">
            (1 page)
        </span>
        
        
        

        
    </div>


        </div>
            <div id="myviews_page_container" class=""><div id="myviews_pagination" class="pagination-wrapper center"><div class="lead text-small results pull-right">1 result</div><ul class="pagination pagination-xs"><input type="hidden" id="setlimitselect" name="limit" value="10"></ul></div></div>
    
        <script type="application/javascript">
        addLoadEvent(function() {
            new Paginator("myviews_pagination", "myviewlist", null, "blocktype\/myviews\/myviews.json.php", null);
            removeElementClass('myviews_page_container', 'hidden');
        });
    </script>
    
    </div>




        
    </div>
</div>

    </div>
</div>
<div id="row_1_column_2" class="column-layout columns2 last col-width-50" style="width:48%;">
    <div class="column-content">
        <div class="bt-inbox panel panel-secondary clearfix " id="blockinstance_22">
            <h3 class="title panel-heading js-heading">
            

            Inbox
            


            

        </h3>
    

    <div class="block" id="blockinstance_22_target" data-blocktype-ajax="22">    <div id="inboxblock" class="inboxblock list-group">
                <div class="has-attachment panel-default collapsible list-group-item">
                            <a class="collapsed link-block unread" data-toggle="collapse" href="http://localhost/mahara/#message_content_maharamessage_31" aria-expanded="false">
                                            <span class="icon icon-wrench text-default left" role="presentation" aria-hidden="true"></span>
                    
                    <span class="sr-only"></span>
                    User notification error was probably caused by...
                    <span class="icon icon-chevron-down collapse-indicator pull-right text-small" role="presentation" aria-hidden="true"></span>
                </a>
            
            <div class="collapse" id="message_content_maharamessage_31">
                                    <p class="content-text">exception 'EmailException' with message 'Couldn't send email to jeevitha r (admin) with subject KITE: User notification error was probably caused by your server configuration.. Error from phpmailer was: Could not instantiate mail function.' in C:\xampp\htdocs\mahara\lib\user.php:890<br>
Stack trace:<br>
#0 C:\xampp\htdocs\mahara\notification\email\lib.php(92): email_user(Object(stdClass), NULL, 'KITE: User noti...', 'You have been s...', NULL, NULL)<br>
#1 [internal function]: PluginNotificationEmail::notify_user(Object(stdClass), Object(stdClass))<br>
#2 C:\xampp\htdocs\mahara\lib\mahara.php(1753): call_user_func_array(Array, Array)<br>
#3 C:\xampp\htdocs\mahara\lib\activity.php(781): call_static_method('PluginNotificat...', 'notify_user', Object(stdClass), Object(stdClass))<br>
#4 C:\xampp\htdocs\mahara\lib\activity.php(851): ActivityType-&gt;notify_user(Object(stdClass))<br>
#5 C:\xampp\htdocs\mahara\lib\activity.php(74): ActivityType-&gt;notify_users()<br>
#6 C:\xampp\htdocs\mahara\lib\activity.php(42): handle_activity(Object(stdClass), Object(stdClass))<br>
#7 C:\xampp\htdocs\mahara\lib\activity.php(803): activity_occurred('maharamessage', Object(stdClass))<br>
#8 C:\xampp\htdocs\mahara\lib\activity.php(851): ActivityType-&gt;notify_user(Object(stdClass))<br>
#9 C:\xampp\htdocs\mahara\lib\activity.php(74): ActivityType-&gt;notify_users()<br>
#10 C:\xampp\htdocs\mahara\lib\activity.php(42): handle_activity(Object(stdClass), Array)<br>
#11 C:\xampp\htdocs\mahara\interaction\forum\lib.php(528): activity_occurred('newpost', Array, 'interaction', 'forum', false)<br>
#12 C:\xampp\htdocs\mahara\interaction\forum\editpost.php(262): PluginInteractionForum::interaction_forum_new_post(Array)<br>
#13 [internal function]: addpost_submit(Object(Pieform), Array)<br>
#14 C:\xampp\htdocs\mahara\lib\pieforms\pieform.php(543): call_user_func_array('addpost_submit', Array)<br>
#15 C:\xampp\htdocs\mahara\lib\pieforms\pieform.php(164): Pieform-&gt;__construct(Array)<br>
#16 C:\xampp\htdocs\mahara\lib\mahara.php(4795): Pieform::process(Array)<br>
#17 C:\xampp\htdocs\mahara\interaction\forum\editpost.php(173): pieform(Array)<br>
#18 {main}</p>
                    
                    
                
            </div>
        </div>
                <div class="has-attachment panel-default collapsible list-group-item">
                            <a class="collapsed link-block unread" data-toggle="collapse" href="http://localhost/mahara/#message_content_maharamessage_30" aria-expanded="false">
                                            <span class="icon icon-wrench text-default left" role="presentation" aria-hidden="true"></span>
                    
                    <span class="sr-only"></span>
                    User notification error was probably caused by...
                    <span class="icon icon-chevron-down collapse-indicator pull-right text-small" role="presentation" aria-hidden="true"></span>
                </a>
            
            <div class="collapse" id="message_content_maharamessage_30">
                                    <p class="content-text">exception 'EmailException' with message 'Couldn't send email to lily rose (lily) with subject smell. Error from phpmailer was: Could not instantiate mail function.' in C:\xampp\htdocs\mahara\lib\user.php:890<br>
Stack trace:<br>
#0 C:\xampp\htdocs\mahara\notification\email\lib.php(92): email_user(Object(stdClass), Object(stdClass), 'smell', 'Forum: General ...', '&lt;div style="pad...', Array)<br>
#1 [internal function]: PluginNotificationEmail::notify_user(Object(stdClass), Object(stdClass))<br>
#2 C:\xampp\htdocs\mahara\lib\mahara.php(1753): call_user_func_array(Array, Array)<br>
#3 C:\xampp\htdocs\mahara\lib\activity.php(781): call_static_method('PluginNotificat...', 'notify_user', Object(stdClass), Object(stdClass))<br>
#4 C:\xampp\htdocs\mahara\lib\activity.php(851): ActivityType-&gt;notify_user(Object(stdClass))<br>
#5 C:\xampp\htdocs\mahara\lib\activity.php(74): ActivityType-&gt;notify_users()<br>
#6 C:\xampp\htdocs\mahara\lib\activity.php(42): handle_activity(Object(stdClass), Array)<br>
#7 C:\xampp\htdocs\mahara\interaction\forum\lib.php(528): activity_occurred('newpost', Array, 'interaction', 'forum', false)<br>
#8 C:\xampp\htdocs\mahara\interaction\forum\editpost.php(262): PluginInteractionForum::interaction_forum_new_post(Array)<br>
#9 [internal function]: addpost_submit(Object(Pieform), Array)<br>
#10 C:\xampp\htdocs\mahara\lib\pieforms\pieform.php(543): call_user_func_array('addpost_submit', Array)<br>
#11 C:\xampp\htdocs\mahara\lib\pieforms\pieform.php(164): Pieform-&gt;__construct(Array)<br>
#12 C:\xampp\htdocs\mahara\lib\mahara.php(4795): Pieform::process(Array)<br>
#13 C:\xampp\htdocs\mahara\interaction\forum\editpost.php(173): pieform(Array)<br>
#14 {main}</p>
                    
                    
                
            </div>
        </div>
                <div class="has-attachment panel-default collapsible list-group-item">
                            <a class="collapsed link-block unread" data-toggle="collapse" href="http://localhost/mahara/#message_content_maharamessage_24" aria-expanded="false">
                                            <span class="icon icon-wrench text-default left" role="presentation" aria-hidden="true"></span>
                    
                    <span class="sr-only"></span>
                    User notification error was probably caused by...
                    <span class="icon icon-chevron-down collapse-indicator pull-right text-small" role="presentation" aria-hidden="true"></span>
                </a>
            
            <div class="collapse" id="message_content_maharamessage_24">
                                    <p class="content-text">exception 'EmailException' with message 'Couldn't send email to jeevitha r (admin) with subject KITE: User notification error was probably caused by your server configuration.. Error from phpmailer was: Could not instantiate mail function.' in C:\xampp\htdocs\mahara\lib\user.php:890<br>
Stack trace:<br>
#0 C:\xampp\htdocs\mahara\notification\email\lib.php(92): email_user(Object(stdClass), NULL, 'KITE: User noti...', 'You have been s...', NULL, NULL)<br>
#1 [internal function]: PluginNotificationEmail::notify_user(Object(stdClass), Object(stdClass))<br>
#2 C:\xampp\htdocs\mahara\lib\mahara.php(1753): call_user_func_array(Array, Array)<br>
#3 C:\xampp\htdocs\mahara\lib\activity.php(781): call_static_method('PluginNotificat...', 'notify_user', Object(stdClass), Object(stdClass))<br>
#4 C:\xampp\htdocs\mahara\lib\activity.php(851): ActivityType-&gt;notify_user(Object(stdClass))<br>
#5 C:\xampp\htdocs\mahara\lib\activity.php(74): ActivityType-&gt;notify_users()<br>
#6 C:\xampp\htdocs\mahara\lib\activity.php(42): handle_activity(Object(stdClass), Object(stdClass))<br>
#7 C:\xampp\htdocs\mahara\lib\activity.php(803): activity_occurred('maharamessage', Object(stdClass))<br>
#8 C:\xampp\htdocs\mahara\lib\activity.php(851): ActivityType-&gt;notify_user(Object(stdClass))<br>
#9 C:\xampp\htdocs\mahara\lib\activity.php(74): ActivityType-&gt;notify_users()<br>
#10 C:\xampp\htdocs\mahara\lib\activity.php(42): handle_activity(Object(stdClass), Array)<br>
#11 C:\xampp\htdocs\mahara\interaction\forum\lib.php(528): activity_occurred('newpost', Array, 'interaction', 'forum', false)<br>
#12 C:\xampp\htdocs\mahara\interaction\forum\edittopic.php(241): PluginInteractionForum::interaction_forum_new_post(Array)<br>
#13 [internal function]: addtopic_submit(Object(Pieform), Array)<br>
#14 C:\xampp\htdocs\mahara\lib\pieforms\pieform.php(543): call_user_func_array('addtopic_submit', Array)<br>
#15 C:\xampp\htdocs\mahara\lib\pieforms\pieform.php(164): Pieform-&gt;__construct(Array)<br>
#16 C:\xampp\htdocs\mahara\lib\mahara.php(4795): Pieform::process(Array)<br>
#17 C:\xampp\htdocs\mahara\interaction\forum\edittopic.php(173): pieform(Array)<br>
#18 {main}</p>
                    
                    
                
            </div>
        </div>
                <div class="has-attachment panel-default collapsible list-group-item">
                            <a class="collapsed link-block unread" data-toggle="collapse" href="http://localhost/mahara/#message_content_maharamessage_23" aria-expanded="false">
                                            <span class="icon icon-wrench text-default left" role="presentation" aria-hidden="true"></span>
                    
                    <span class="sr-only"></span>
                    User notification error was probably caused by...
                    <span class="icon icon-chevron-down collapse-indicator pull-right text-small" role="presentation" aria-hidden="true"></span>
                </a>
            
            <div class="collapse" id="message_content_maharamessage_23">
                                    <p class="content-text">exception 'EmailException' with message 'Couldn't send email to lily rose (lily) with subject colour of flower. Error from phpmailer was: Could not instantiate mail function.' in C:\xampp\htdocs\mahara\lib\user.php:890<br>
Stack trace:<br>
#0 C:\xampp\htdocs\mahara\notification\email\lib.php(92): email_user(Object(stdClass), Object(stdClass), 'colour of flowe...', 'Forum: General ...', '&lt;div style="pad...', Array)<br>
#1 [internal function]: PluginNotificationEmail::notify_user(Object(stdClass), Object(stdClass))<br>
#2 C:\xampp\htdocs\mahara\lib\mahara.php(1753): call_user_func_array(Array, Array)<br>
#3 C:\xampp\htdocs\mahara\lib\activity.php(781): call_static_method('PluginNotificat...', 'notify_user', Object(stdClass), Object(stdClass))<br>
#4 C:\xampp\htdocs\mahara\lib\activity.php(851): ActivityType-&gt;notify_user(Object(stdClass))<br>
#5 C:\xampp\htdocs\mahara\lib\activity.php(74): ActivityType-&gt;notify_users()<br>
#6 C:\xampp\htdocs\mahara\lib\activity.php(42): handle_activity(Object(stdClass), Array)<br>
#7 C:\xampp\htdocs\mahara\interaction\forum\lib.php(528): activity_occurred('newpost', Array, 'interaction', 'forum', false)<br>
#8 C:\xampp\htdocs\mahara\interaction\forum\edittopic.php(241): PluginInteractionForum::interaction_forum_new_post(Array)<br>
#9 [internal function]: addtopic_submit(Object(Pieform), Array)<br>
#10 C:\xampp\htdocs\mahara\lib\pieforms\pieform.php(543): call_user_func_array('addtopic_submit', Array)<br>
#11 C:\xampp\htdocs\mahara\lib\pieforms\pieform.php(164): Pieform-&gt;__construct(Array)<br>
#12 C:\xampp\htdocs\mahara\lib\mahara.php(4795): Pieform::process(Array)<br>
#13 C:\xampp\htdocs\mahara\interaction\forum\edittopic.php(173): pieform(Array)<br>
#14 {main}</p>
                    
                    
                
            </div>
        </div>
                <div class="has-attachment panel-default collapsible list-group-item">
                            <a class="collapsed link-block unread" data-toggle="collapse" href="http://localhost/mahara/#message_content_maharamessage_19" aria-expanded="false">
                                            <span class="icon icon-wrench text-default left" role="presentation" aria-hidden="true"></span>
                    
                    <span class="sr-only"></span>
                    User notification error was probably caused by...
                    <span class="icon icon-chevron-down collapse-indicator pull-right text-small" role="presentation" aria-hidden="true"></span>
                </a>
            
            <div class="collapse" id="message_content_maharamessage_19">
                                    <p class="content-text">exception 'EmailException' with message 'Couldn't send email to lily rose (lily) with subject KITE: Institution membership confirmation. Error from phpmailer was: Could not instantiate mail function.' in C:\xampp\htdocs\mahara\lib\user.php:890<br>
Stack trace:<br>
#0 C:\xampp\htdocs\mahara\notification\email\lib.php(92): email_user(Object(stdClass), NULL, 'KITE: Instituti...', 'You have been s...', NULL, NULL)<br>
#1 [internal function]: PluginNotificationEmail::notify_user(Object(stdClass), Object(stdClass))<br>
#2 C:\xampp\htdocs\mahara\lib\mahara.php(1753): call_user_func_array(Array, Array)<br>
#3 C:\xampp\htdocs\mahara\lib\activity.php(781): call_static_method('PluginNotificat...', 'notify_user', Object(stdClass), Object(stdClass))<br>
#4 C:\xampp\htdocs\mahara\lib\activity.php(851): ActivityType-&gt;notify_user(Object(stdClass))<br>
#5 C:\xampp\htdocs\mahara\lib\activity.php(74): ActivityType-&gt;notify_users()<br>
#6 C:\xampp\htdocs\mahara\lib\activity.php(42): handle_activity(Object(stdClass), Object(stdClass))<br>
#7 C:\xampp\htdocs\mahara\lib\institution.php(350): activity_occurred('maharamessage', Object(stdClass))<br>
#8 C:\xampp\htdocs\mahara\lib\user.php(2459): Institution-&gt;addUserAsMember(Object(stdClass))<br>
#9 C:\xampp\htdocs\mahara\admin\users\add.php(310): create_user(Object(stdClass), Array, 'abc', false, NULL, Array)<br>
#10 [internal function]: adduser_submit(Object(Pieform), Array)<br>
#11 C:\xampp\htdocs\mahara\lib\pieforms\pieform.php(543): call_user_func_array('adduser_submit', Array)<br>
#12 C:\xampp\htdocs\mahara\lib\pieforms\pieform.php(164): Pieform-&gt;__construct(Array)<br>
#13 C:\xampp\htdocs\mahara\lib\mahara.php(4795): Pieform::process(Array)<br>
#14 C:\xampp\htdocs\mahara\admin\users\add.php(155): pieform(Array)<br>
#15 {main}</p>
                    
                    
                
            </div>
        </div>
        
    </div>
        <div class="artefact-detail-link">
        <a class="link-blocktype last" href="http://localhost/mahara/module/multirecipientnotification/inbox.php?type=feedback,groupmessage,institutionmessage,maharamessage,usermessage,wallpost,viewaccess,watchlist">
        <span class="icon icon-arrow-circle-right" role="presentation" aria-hidden="true"></span>
        More</a>
    </div>
    

</div>
</div>
<div class="bt-inbox panel panel-secondary clearfix " id="blockinstance_23">
            <h3 class="title panel-heading js-heading">
            

            Topics I am following
            


            

        </h3>
    

    <div class="block" id="blockinstance_23_target" data-blocktype-ajax="23">    <div class="panel-body">
        <p class="lead text-small">No messages</p>
    </div>

</div>
</div>
<div class="bt-watchlist panel panel-secondary clearfix " id="blockinstance_24">
            <h3 class="title panel-heading js-heading">
            

            Watched pages
            


            

        </h3>
    

    <div class="block" id="blockinstance_24_target" data-blocktype-noajax="24">
            <div class="panel-body">
        <p class="lead text-small">There are no pages on your watchlist.</p>
    </div>



        
    </div>
</div>

    </div>
</div>

    </div>
</div>

        </div>
    </div>
</div>


    </div>

                    </div><!-- end main-column -->

                </div><!-- mainmiddle -->

            </main>

                        <div class="col-md-3 sidebar">
                    <div id="sb-profile" class="sideblock-1 user-panel">
<div class="panel panel-default">
        <h3 class="panel-heading profile-block">
            <a href="http://localhost/mahara/user/view.php?id=1" class="username">jeevitha r</a>
            <a href="http://localhost/mahara/artefact/file/profileicons.php" title="Edit profile picture" class="user-icon">
                <img src="./dashboard_files/no_userphoto60.png" alt="Edit profile picture">
            </a>
        </h3>
    <div class="list-group">
        
        
        
                    <div id="groups" class="list-group-item">
                <div class="list-group-item-heading sidebar-item-heading"><a href="http://localhost/mahara/group/mygroups.php">My groups:</a></div>
                <ul class="list-nested list-group-item-text list-unstyled list-group-item-link">
                            <li><a href="http://localhost/mahara/group/view.php?id=1" class="bordered">cse <small>(Administrator)</small></a></li>
                            <li><a href="http://localhost/mahara/group/view.php?id=2" class="bordered">csea <small>(Administrator)</small></a></li>
                            <li><a href="http://localhost/mahara/group/view.php?id=4" class="bordered">flower </a></li>
                            <li><a href="http://localhost/mahara/group/view.php?id=3" class="bordered">food <small>(Administrator)</small></a></li>
                            <li><a href="http://localhost/mahara/group/view.php?id=5" class="bordered">kk </a></li>
        
               </ul>
                <span class="text-small text-midtone"></span>
            </div>
        
        
        
    </div>
    
    
</div>


</div>
<div id="sb-onlineusers" class="sideblock-2 ">
<div class="panel panel-default">
    <h3 class="panel-heading">
        Online users
        <br>
        <span id="lastminutes" class="text-small text-midtone">(Last 10 minutes)</span>
    </h3>
    <ul class="list-group">
                    <li class="list-group-item list-unstyled list-group-item-link">
                <a href="http://localhost/mahara/user/view.php?id=1" class="">
                    <span class="user-icon">
                        <img src="./dashboard_files/no_userphoto20.png" alt="jeevitha r&#39;s profile picture" class="profile-icon-container">
                    </span>
                    jeevitha r (admin)
                
                </a>
            </li>
        
    </ul>
    <a href="http://localhost/mahara/user/online.php" class="online-users panel-footer text-small" id="allonline">
        Show all online users
        <span class="icon icon-arrow-circle-right pull-right" role="presentation" aria-hidden="true"></span>
    </a>
</div>


</div>



            </div>
            

            

        </div><!-- row -->

    </div><!-- container -->

<!-- middle-container-wrap -->

<footer class=" footer">
    <div class="footer-inner container">
        <div id="powered-by" class="pull-left mahara-logo">
            <a href="https://mahara.org/">
                <img src="./dashboard_files/powered_by_mahara.png" alt="Powered by Mahara">
            </a>
        </div>
        <!-- This site is powered by Mahara, an Open Source
        ePortfolio system. See https://mahara.org/ for more
        details.
        NOTE: this image and link are a way that you can
        support the Mahara project. Please consider
        displaying them on your site to spread the word! -->
        <ul class="nav nav-pills footer-nav pull-left">
                    <li>
                <a href="http://localhost/mahara/privacy.php">Privacy statement</a>
            </li>
                    <li>
                <a href="http://localhost/mahara/about.php">About</a>
            </li>
                    <li>
                <a href="http://localhost/mahara/contact.php">Contact us</a>
            </li>
        
        </ul>
        <div class="metadata pull-right mahara-version" id="version">
            
        </div>

        <div class="metadata text-center fullwidth site-performace">
            <!-- there is a div id="performance-info" wrapping this -->
            
        </div>
    </div>
</footer><!-- footer-wrap -->




<div id="lbOverlay" style="display: none;"></div><div id="lbCenter" style="display: none;"><div id="lbImage"><div style="position: relative;"><a id="lbPrevLink" href="http://localhost/mahara/#"></a><a id="lbNextLink" href="http://localhost/mahara/#"></a></div></div></div><div id="lbBottomContainer" style="display: none;"><div id="lbBottom"><a id="lbCloseLink" href="http://localhost/mahara/#"></a><div id="lbCaption"></div><div id="lbNumber"></div><div style="clear: both;"></div></div></div></body></html>