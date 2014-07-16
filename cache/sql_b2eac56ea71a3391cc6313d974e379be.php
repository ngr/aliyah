<?php exit; ?>
1405506514
SELECT s.style_id, c.theme_id, c.theme_data, c.theme_path, c.theme_name, c.theme_mtime, i.*, t.template_path FROM phpbb_styles s, phpbb_styles_template t, phpbb_styles_theme c, phpbb_styles_imageset i WHERE s.style_id = 2 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
64632
a:1:{i:0;a:11:{s:8:"style_id";s:1:"2";s:8:"theme_id";s:1:"2";s:10:"theme_data";s:64243:"/*  phpBB3 Style Sheet
	--------------------------------------------------------------
	Style name:			Artodia: Air
	Based on style:		prosilver (the default phpBB 3.0.x style)
	Original author:	Tom Beddard ( http://www.subblue.com/ )
	Modified by:		Vjacheslav Trushkin ( http://www.artodia.com/ )
	--------------------------------------------------------------
*/

/*
    Change "none" to "block" (without quotes) to show website title and description in header
*/
#header p, #header h1 { display: none; }

/*
    Change "inline" to "none" (without quotes) to hide logo image
*/
#header a { display: inline; }


/*
    Include css files
*/
/*
    Main stuff
*/
* { margin: 0; padding: 0; }
html {
    width: 100%;
    height: 100%;
}
body {
    margin: 0;
    padding: 0;
    min-height: 100%;
    font-family: Verdana;
    line-height: 1.2em;
    font-size: 12px;
    color: #000;
    text-shadow: rgba(255, 255, 255, 0.3) 1px 1px 1px;
    position: relative;
}
html, body {
    background: #e6e6e6 url({T_THEME_PATH}/images/header_g2.png) top center repeat-y;
}
body.simple { 
    width: auto; 
    margin: 0;
    padding: 8px;
}

a, a:visited {
    color: #1e8fc7;
    text-decoration: none;
    -webkit-transition: color 0.25s ease;
    -moz-transition: color 0.25s ease;
    -o-transition: color 0.25s ease;
    -ms-transition: color 0.25s ease;
    transition: color 0.25s ease;
}
a:hover, a:active { color: #da7320; }
a:active {
    -moz-transform: translate(0, 1px);
    -webkit-transform: translate(0, 1px);
    -o-transform: translate(0, 1px);
    -ms-transform: translate(0, 1px);
    transform: translate(0, 1px);
}
.buttons a:active, .profile-icons a:active, div.dropdown-tabs a:active, .nav-links a:active, #page-header a:active {
    -moz-transform: none;
    -webkit-transform: none;
    -o-transform: none;
    -ms-transform: none;
    transform: none;
}

img { border-width: 0; }

/*
    Rounded blocks, transitions
*/
div.rules, div.post, .panel, .cp-mini, ul.topiclist li {
    background: url({T_THEME_PATH}/images/hdr2_br.gif) bottom right no-repeat, url({T_THEME_PATH}/images/hdr2_bl.gif) bottom left no-repeat, url({T_THEME_PATH}/images/hdr2_tr.gif) top right no-repeat, url({T_THEME_PATH}/images/hdr2_tl.gif) 0 0 no-repeat, url({T_THEME_PATH}/images/hdr2_r.gif) top right repeat-y, url({T_THEME_PATH}/images/hdr2_l.gif) top left repeat-y, url({T_THEME_PATH}/images/hdr2_b.gif) bottom left repeat-x, #ececec url({T_THEME_PATH}/images/hdr2_t.gif) 0 0 repeat-x;
}
.old-ie div.old-ie-wrap-2, .old-ie .old-ie-wrap-2, .old-ie ul.topiclist li {
    padding: 0 !important;
    background: #ececec url({T_THEME_PATH}/images/hdr2_t.gif) 0 0 repeat-x;
}
.old-ie .hdr2-1 {
    margin: 0;
    padding: 0;
    background: url({T_THEME_PATH}/images/hdr2_b.gif) bottom left repeat-x;
}
.old-ie .hdr2-2 {
    margin: 0;
    padding: 0;
    background: url({T_THEME_PATH}/images/hdr2_l.gif) top left repeat-y;
}
.old-ie .hdr2-3 {
    margin: 0;
    padding: 0;
    background: url({T_THEME_PATH}/images/hdr2_r.gif) top right repeat-y;
}
.old-ie .hdr2-4 {
    margin: 0;
    padding: 0;
    background: url({T_THEME_PATH}/images/hdr2_tl.gif) 0 0 no-repeat;
}
.old-ie .hdr2-5 {
    margin: 0;
    padding: 0;
    background: url({T_THEME_PATH}/images/hdr2_tr.gif) top right no-repeat;
}
.old-ie .hdr2-6 {
    margin: 0;
    padding: 0;
    background: url({T_THEME_PATH}/images/hdr2_bl.gif) bottom left no-repeat;
}
.old-ie .hdr2-last {
    margin: 0;
    padding: 5px;
    background: url({T_THEME_PATH}/images/hdr2_br.gif) bottom right no-repeat;
}
div.forabg, div.forumbg, div.panel-wrapper {
    background: url({T_THEME_PATH}/images/hdr1_br.gif) bottom right no-repeat, url({T_THEME_PATH}/images/hdr1_bl.gif) bottom left no-repeat, url({T_THEME_PATH}/images/hdr1_tr.gif) top right no-repeat, url({T_THEME_PATH}/images/hdr1_tl.gif) top left no-repeat;
    padding: 6px;
}
.old-ie div.old-ie-wrap-1 {
    padding: 0;
}
.old-ie .hdr1-1 {
    margin: 0;
    padding: 0;
}
.old-ie .hdr1-2 {
    margin: 0;
    padding: 0;
    background: url({T_THEME_PATH}/images/hdr1_tl.gif) top left no-repeat;
}
.old-ie .hdr1-3 {
    margin: 0;
    padding: 0;
    background: url({T_THEME_PATH}/images/hdr1_tr.gif) top right no-repeat;
}
.old-ie .hdr1-4 {
    margin: 0;
    padding: 0;
    background: url({T_THEME_PATH}/images/hdr1_bl.gif) bottom left no-repeat;
}
.old-ie .hdr1-5 {
    margin: 0;
    padding: 6px;
    background: url({T_THEME_PATH}/images/hdr1_br.gif) bottom right no-repeat;
}

.corners-top, .corners-bottom { display: none; }

.topic-actions, .profile-icons {
    opacity: 0;
}
div.nav-links, img, .topic-actions, .profile-icons, div.rules, div.forabg, div.forumbg, div.post, .panel, .cp-mini {
    -webkit-transition: opacity 1s ease;
    -moz-transition: opacity 1s ease;
    -o-transition: opacity 1s ease;
    -ms-transition: opacity 1s ease;
    transition: opacity 1s ease;
}
body.transform div.nav-links {
    -webkit-transition-property: border-color, background-color, opacity;
    -moz-transition-property: border-color, background-color, opacity;
    -o-transition-property: border-color, background-color, opacity;
    -ms-transition-property: border-color, background-color, opacity;
    transition-property: border-color, background-color, opacity;
    -webkit-transition-duration: 0.5s, 0.5s, 1s;
    -moz-transition-duration: 0.5s, 0.5s, 1s;
    -o-transition-duration: 0.5s, 0.5s, 1s;
    -ms-transition-duration: 0.5s, 0.5s, 1s;
    transition-duration: 0.5s, 0.5s, 1s;
}
body.transform div.nav-links, body.transform img, body.transform .topic-actions, body.transform .profile-icons { opacity: 1; }

/* 
    Arrow links  
*/
a.up		{ background: url({T_THEME_PATH}/images/arrow_up.png) no-repeat left center; }
a.down		{ background: url({T_THEME_PATH}/images/arrow_down.png) no-repeat right center; }
a.left		{ background: url({T_THEME_PATH}/images/arrow_left.png) no-repeat 3px 60%; }
a.right		{ background: url({T_THEME_PATH}/images/arrow_right.png)  no-repeat 95% 60%; }

a.up, a.up:link, a.up:active, a.up:visited {
	padding-left: 10px;
	text-decoration: none;
	border-bottom-width: 0;
}

a.up:hover {
	background-position: left top;
	background-color: transparent;
}

a.down, a.down:link, a.down:active, a.down:visited {
	padding-right: 10px;
}

a.down:hover {
	background-position: right bottom;
	text-decoration: none;
}

a.left, a.left:active, a.left:visited {
	padding-left: 12px;
}

a.left:hover {
	text-decoration: none;
	background-position: 0 60%;
}

a.right, a.right:active, a.right:visited {
	padding-right: 12px;
}

a.right:hover {
	text-decoration: none;
	background-position: 100% 60%;
}

.back2top {
	clear: both;
	height: 11px;
	text-align: right;
}

a.top {
	background: url("{IMG_ICON_BACK_TOP_SRC}") no-repeat top left;
	text-decoration: none;
	width: {IMG_ICON_BACK_TOP_WIDTH}px;
	height: {IMG_ICON_BACK_TOP_HEIGHT}px;
	display: block;
	float: right;
	overflow: hidden;
	letter-spacing: 1000px;
	text-indent: 11px;
}

a.top2 {
	background: url("{IMG_ICON_BACK_TOP_SRC}") no-repeat 0 center;
	text-decoration: none;
	padding-left: 14px;
	line-height: 1em;
	margin: 4px 0;
	display: inline-block;
}

a.up, a.down, a.left, a.right, a.top, a.top2 {
    -webkit-transition-property: color, background-position;
    -moz-transition-property: color, background-position;
    -o-transition-property: color, background-position;
    -ms-transition-property: color, background-position;
    transition-property: color, background-position;
    -webkit-transition-duration: 0.25s;
    -moz-transition-duration: 0.25s;
    -o-transition-duration: 0.25s;
    -ms-transition-duration: 0.25s;
    transition-duration: 0.25s;
    -webkit-transition-timing-function: ease;
    -moz-transition-timing-function: ease;
    -o-transition-timing-function: ease;
    -ms-transition-timing-function: ease;
    transition-timing-function: ease;
}


/*
    Misc stuff
*/
.clear { clear: both; }

.rightside, .right-box { 
    text-align: right;
}

.left-box {
    float: left;
    text-align: left;
    width: auto;
}

p.rightside, li.rightside, ul.rightside, ul.linklist li.rightside, .right-box { 
    float: right; 
    margin-left: 5px;
    margin-right: 0;
}

ul.leftside {
	float: left;
	margin-left: 0;
	margin-right: 5px;
	text-align: left;
}

hr {
    background-color: none;
    border: solid 1px transparent;
    border-top-color: #d0d0d0;
    border-bottom-color: #f4f4f4;
    width: 95%;
    margin: 0 auto;
    text-align: center;
}

hr.dashed {
	border-top-style: dashed;
	border-bottom-style: dashed;
}

.clearfix, #tabs, #minitabs, fieldset dl, ul.topiclist dl, dl.polls {
    min-height: 1px;
    overflow: hidden;
}
span.corners-bottom { 
    display: block; 
    clear: both;
}

dl.details {
	font-size: 12px;
}

dl.details dt {
	float: left;
	clear: left;
	width: 30%;
	text-align: right;
	color: #444;
	display: block;
}

dl.details dd {
	margin-left: 0;
	padding-left: 5px;
	margin-bottom: 5px;
	color: #222;
	float: left;
	width: 65%;
}

/*
    Main blocks without rounded container
*/
#page-body > h2, #page-body > form > h2, #page-body > h3, #page-body > form > h3, div#message h2, #confirm h2, #agreement h2 {
    font-size: 20px;
    font-weight: normal;
    text-shadow: rgba(128, 128, 128, 0.1) 2px 2px 0;
    margin: 20px 2px 10px;
}
#page-body > h2, #page-body > form > h2, #page-body > h3, #page-body > form > h3, div#message h2, #confirm h2, #agreement h2, 
#page-body h2.title a, #page-body h2.title a:visited { color: #da7320; }
#page-body h2.title a:hover { color: #da7320; }

/*
    Forms
*/
fieldset {
    margin: 0;
    padding: 0;
    border-width: 0;
}
fieldset.display-options { 
    margin: 5px 0;
    text-align: center; 
}

/*
    Errors
*/
.error {
	color: #da7320;
	font-weight: bold;
	font-size: 12px;
}
/*
    Header and footer
*/
#header {
    margin: 0 10px;
    padding: 0;
    text-align: center;
    min-height: 30px;
    padding-bottom: 5px;
    background: #ececec url({T_THEME_PATH}/images/header_g1.png) top left repeat-x;
    background: url({T_THEME_PATH}/images/hdr_br.gif) bottom right no-repeat,
        url({T_THEME_PATH}/images/hdr_bl.gif) bottom left no-repeat,
        url({T_THEME_PATH}/images/hdr_r.gif) top right repeat-y,
        url({T_THEME_PATH}/images/hdr_l.gif) top left repeat-y,
        url({T_THEME_PATH}/images/hdr_b.gif) bottom left repeat-x,
        url({T_THEME_PATH}/images/header_g2.png) top center repeat-y,
        #ececec url({T_THEME_PATH}/images/header_g1.png) top left repeat-x;
}
.old-ie #header {
    padding-bottom: 0;
}
.old-ie #header .hdr1, .old-ie #footer .hdr1 {
    background: url({T_THEME_PATH}/images/header_g2.png) top center repeat-y;
}
.old-ie #header .hdr2 {
    background: url({T_THEME_PATH}/images/hdr_b.gif) bottom left repeat-x;
}
.old-ie #footer .hdr2 {
    background: url({T_THEME_PATH}/images/hdr_t.gif) top left repeat-x;
}
.old-ie #header .hdr3, .old-ie #footer .hdr3 {
    background: url({T_THEME_PATH}/images/hdr_l.gif) top left repeat-y;
}
.old-ie #header .hdr4, .old-ie #footer .hdr4 {
    background:  url({T_THEME_PATH}/images/hdr_r.gif) top right repeat-y;
}
.old-ie #header .hdr5 {
    background: url({T_THEME_PATH}/images/hdr_bl.gif) bottom left no-repeat;
}
.old-ie #footer .hdr5 {
    background: url({T_THEME_PATH}/images/hdr_tl.gif) top left no-repeat;
}
.old-ie #header .hdr6 {
    background: url({T_THEME_PATH}/images/hdr_br.gif) bottom right no-repeat;
    min-height: 30px;
    padding-bottom: 5px;
}
.old-ie #footer .hdr6 {
    background: url({T_THEME_PATH}/images/hdr_tr.gif) top right no-repeat;
}

#header a {
    margin: 0;
    padding: 0;
    line-height: 1em;
    font-size: 1px;
    text-decoration: none;
    border-width: 0;
}
#header a img {
	display: inline-block;
    margin: 0; 
    padding: 0;
    opacity: 1 !important;
    max-width: 100%;
}

#header p, #header h1 {
    margin: 0;
    padding: 0;
    text-align: center;
    white-space: nowrap;
    font-weight: normal;
    line-height: 1.4em;
    font-family: Arial;
    text-shadow: rgba(0, 0, 0, 0.1) 1px 2px 1px;
}

#header h1 {
    font-size: 24px;
    color: #1e8fc7;
}
#header p {
    font-size: 16px;
    color: #888;
}

#header .skiplink { display: none; }


#page-header {
    clear: both;
    margin: -16px 15px 0;
    min-height: 10px;
}

#nav-header, #search-adv {
    display: block;
    float: left;
    z-index: 1;
    margin-left: 5px;
    font-size: 12px;
    line-height: 1em;
    text-align: center;
}
.menu-buttons a, .menu-buttons a:visited, #search-adv a, #search-adv a:visited {
    display: block;
    float: left;
    margin: 0 19px 5px 4px;
    padding: 0;
    padding-left: 15px;
    line-height: 1em;
    color: #1e8fc7;
    background: url({T_THEME_PATH}/images/menu.png) top left no-repeat;
    text-decoration: none;
    -webkit-transition: none;
    -moz-transition: none;
    -o-transition: none;
    -ms-transition: none;
    transition: none;
}
.menu-buttons a span, #search-adv a span {
    display: inline-block;
    margin: 0;
    margin-right: -15px;
    padding: 0;
    padding-right: 15px;
    padding-top: 9px;
    height: 21px;
    background: url({T_THEME_PATH}/images/menu2.png) top right no-repeat;
    font-size: 14px;
    font-family: Arial;
}

.menu-buttons a:hover, .menu-buttons a.new, #search-adv a:hover {
    background-position: bottom left;
}
.menu-buttons a:hover span, .menu-buttons a.new span, #search-adv a:hover span {
    background-position: bottom right;
    color: #da7320;
}
.menu-buttons span.arrow { padding-top: 8px; height: 22px; font-size: 15px; }

#nav-header strong { font-weight: normal; }

#search-adv {
    float: right;
    z-index: 1;
    margin-left: 0;
    margin-right: 5px;
}
#search-box {
    position: relative;
    float: right;
    z-index: 1;
    width: 174px;
    height: 27px;
    background: url({T_THEME_PATH}/images/header_search.png) 0 0 no-repeat;
    margin: 0 4px 5px;
    padding: 3px 0 0 26px;
}
#search-box:hover { background-position: 0 -40px; }
#search-box form { 
    display: inline; 
    border-width: 0;
    margin: 0;
    padding: 0;
}
.browser-ie #search-box input[type="text"] {
    margin-top: 1px;
}
#search-box input[type="text"] {
    margin: 0;
    padding: 4px 3px;
    border-width: 0;
    border-radius: 0;
    background: transparent;
    height: 16px;
    width: 160px;
    line-height: 1em;
    font-size: 14px;
    font-family: Arial;
    color: #1e8fc7;
    outline-style: none;
    -webkit-appearance: none;
}
#search-box:hover input[type="text"], #search-box input[type="text"]:hover, #search-box input[type="text"]:focus {
    color: #da7320;
}
.browser-ie #search-box input[type="text"] {
    height: 14px;
}

/*
    Footer
*/
#footer {
    position: absolute;
    bottom: 0;
    left: 10px;
    right: 10px;
    text-align: center;
    vertical-align: bottom;
    line-height: 1.3em;
    font-size: 11px;
    color: #888;
    text-shadow: none;
    background: #ececec url({T_THEME_PATH}/images/header_g2.png) top center repeat-y;
    background: url({T_THEME_PATH}/images/hdr_tr.gif) top right no-repeat,
        url({T_THEME_PATH}/images/hdr_tl.gif) top left no-repeat,
        url({T_THEME_PATH}/images/hdr_r.gif) top right repeat-y,
        url({T_THEME_PATH}/images/hdr_l.gif) top left repeat-y,
        url({T_THEME_PATH}/images/hdr_t.gif) top left repeat-x,
        url({T_THEME_PATH}/images/header_g2.png) top center repeat-y,
        #ececec url({T_THEME_PATH}/images/header_g1.png) top left repeat-x;
}
#footer, .old-ie #footer .hdr6 {
    padding: 8px 10px 6px;
    max-height: 30px;
    overflow: hidden;
}
.old-ie #footer {
    padding: 0;
    max-height: auto;
}
#footer .copyright:after {
	content: '';
	display: block;
	clear: both;
}
#footer .copyright > strong { 
    display: block;
    clear: both; 
    text-align: center;
    font-weight: normal;
    font-size: 14px;
    font-family: Arial;
}
#footer .copyright a, #footer .copyright a:visited {
    color: #666;
}
#footer .copyright a:hover {
    color: #da7320;
    text-decoration: underline;
}

body.simple .copyright {
    text-align: center;
    color: #888;
    font-size: 11px;
}

.copyright .copy-left {
    float: left;
    text-align: left;
}
.copyright .copy-right {
    float: right;
    text-align: right;
}

/*
    Wrapper
*/
#page-body { 
    padding: 0 10px 45px;
    clear: both;
}
#page-body > p, .section-index #page-body > form { margin: 6px 4px; }
#page-body > p.rightside { margin-top: 0; }
body.simple #page-body > h2.solo {
    margin-top: 10px;
}

/*
    Navigation
*/
.nav-links {
    clear: left;
    height: 36px;
    margin: 0;
    padding: 0 10px;
    text-align: left;
}
.nav-links a {
    display: block;
    float: left;
    height: 30px;
    padding-right: 15px;
    margin-right: 6px;
    margin-bottom: 5px;
    background: url({T_THEME_PATH}/images/nav.png) right 0 no-repeat;
}
.nav-links a, .nav-links a:visited, .nav-links a:hover, .nav-links a:active {
    outline-style: none;
}
.nav-links a span {
    display: block;
    background: url({T_THEME_PATH}/images/nav2.png) 0 0 no-repeat;
    margin-left: -10px;
    padding-top: 8px;
    padding-left: 14px;
    height: 22px;
    font-size: 14px;
    font-family: Arial;
    line-height: 1em;
    white-space: nowrap;
    max-width: 200px;
    overflow: hidden;
    color: #1e8fc7;
}
.nav-links a:first-child span {
    background-image: url({T_THEME_PATH}/images/nav2a.png);
    padding-left: 25px;
}
.nav-links a:hover {
    background-position: right -40px;
}
.nav-links a:hover span {
    background-position: 0 -40px;
    color: #da7320;
}

.nav-extra {
    z-index: 2;
    clear: right;
    float: right;
    position: relative;
    top: -8px;
    font-size: 11px;
    margin: 8px;
    color: #888;
}
.nav-extra-footer { top: 0; }
.nav-extra .time { color: #444; }

/*
    Rules
*/
div.rules {
    margin: 6px 0;
    padding: 1px;
    background: #faf8f6;
    border: solid 1px #ccaa8f;
    border-radius: 10px;
    text-shadow: none;
}
div.rules .inner {
    background: #f5e9df;
    padding: 6px;
    border-radius: 8px;
}
div.rules .inner > strong { 
    color: #1e8fc7; 
    font-family: Arial;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.4em;
}
#information .inner, #newpm .inner {
    text-align: center;
    padding: 20px;
}

/*
	Switch to mobile style link
*/
.mobile-style-switch a {
	padding: 5px 10px 6px;
	border: 1px solid #d3d3d3;
	border-radius: 10px;
	background: #f0f0f0;
	box-shadow: #f8f8f8 0 0 0 1px inset;
}
/* Form Styles
---------------------------------------- */

/* General form styles
----------------------------------------*/
fieldset {
	border-width: 0;
}

input[type="text"], input[type="password"], select, textarea {
	font-weight: normal;
    background: #f4f4f4;
    color: #1e8fc7;
    outline-style: none;
    border: solid 1px #d3d3d3;
    border-radius: 15px;
    font-family: Arial;
    line-height: 1em;
    padding: 5px 10px 5px 8px;
    font-size: 14px;
    -webkit-transition-property: border-color, background-color, color;
    -moz-transition-property: border-color, background-color, color;
    -o-transition-property: border-color, background-color, color;
    -ms-transition-property: border-color, background-color, color;
    transition-property: border-color, background-color, color;
    -webkit-transition-duration: 0.25s;
    -moz-transition-duration: 0.25s;
    -o-transition-duration: 0.25s;
    -ms-transition-duration: 0.25s;
    transition-duration: 0.25s;
}
.quick-login input[type="text"] { background-color: #eee; }

input[type="text"]:hover, input[type="password"]:hover, select:hover, textarea:hover {
    border-color: #e2ba9a;
    background-color: #f8f8f8;
}
input[type="text"]:focus, input[type="password"]:focus, select:focus, textarea:focus {
    border-color: #e2ba9a;
    background-color: #fff;
    color: #000;
}

input {
	cursor: pointer;
	vertical-align: middle;
	padding: 0 3px;
	font-size: 12px;
}

select {
	cursor: pointer;
	vertical-align: middle;
	padding-top: 4px;
	padding-bottom: 4px;
	max-width: 400px;
}

option {
	padding-right: 1em;
}

option.disabled-option {
	color: #999;
}

textarea {
	width: 60%;
	padding: 6px 4px;
	line-height: 1.4em;
}

label {
	cursor: default;
	padding-right: 5px;
}

label input {
	vertical-align: middle;
}

label img {
	vertical-align: middle;
}

/* Definition list layout for forms
---------------------------------------- */
fieldset dl {
	padding: 4px 0;
}

fieldset dt {
	float: left;	
	width: 40%;
	text-align: left;
	display: block;
}

fieldset dd {
	margin-left: 41%;
	vertical-align: top;
	margin-bottom: 3px;
}

/* Specific layout 1 */
fieldset.fields1 dt {
	width: 15em;
	border-right-width: 0;
}

fieldset.fields1 dd {
	margin-left: 15em;
	border-left-width: 0;
}

fieldset.fields1 {
	background-color: transparent;
}

fieldset.fields1 div {
	margin-bottom: 3px;
}

/* Set it back to 0px for the reCaptcha divs: PHPBB3-9587 */
fieldset.fields1 #recaptcha_widget_div div {
	margin-bottom: 0;
}

/* Specific layout 2 */
fieldset.fields2 dt {
	width: 15em;
	border-right-width: 0;
}

fieldset.fields2 dd {
	margin-left: 16em;
	border-left-width: 0;
}

/* Form elements */
dt label {
	font-weight: bold;
	color: #444;
	font-size: 12px;
    font-family: Arial;
	text-align: left;
}

dd label {
	white-space: nowrap;
}

dd input, dd textarea {
	margin-right: 3px;
}

dd select {
	width: auto;
}

dd textarea {
	width: 85%;
}

#timezone {
	width: 95%;
}

/* Quick-login on index page */
fieldset.quick-login {
	margin-top: 5px;
}

fieldset.quick-login input {
	width: auto;
}

fieldset.quick-login input.inputbox {
	width: 15%;
	vertical-align: middle;
	margin-right: 5px;
}

fieldset.quick-login label {
	white-space: nowrap;
	padding-right: 2px;
}

/* Display options on viewtopic/viewforum pages  */
fieldset.display-options {
	text-align: center;
	margin: 3px 0 5px 0;
}

fieldset.display-options label {
	white-space: nowrap;
	padding-right: 2px;
}

fieldset.display-options a {
	margin-top: 3px;
}

/* Display actions for ucp and mcp pages */
fieldset.display-actions {
	text-align: right;
	line-height: 2em;
	white-space: nowrap;
	padding-right: 1em;
}

fieldset.display-actions label {
	white-space: nowrap;
	padding-right: 2px;
}

fieldset.sort-options {
	line-height: 2em;
}

/* MCP forum selection*/
fieldset.forum-selection {
	margin: 5px 0 3px 0;
	float: right;
}

fieldset.forum-selection2 {
	margin: 13px 0 3px 0;
	float: right;
}

/* Jumpbox */
fieldset.jumpbox {
	text-align: right;
	margin-top: 15px;
	height: 2.5em;
}

fieldset.quickmod {
	width: 50%;
	float: right;
	text-align: right;
	height: 2.5em;
	margin-top: 6px;
}

/* Submit button fieldset */
fieldset.submit-buttons {
	text-align: center;
	vertical-align: middle;
	margin: 5px 0;
}

/* Posting page styles
----------------------------------------*/

/* Buttons used in the editor */
#format-buttons {
	margin: 5px 0 4px 0;
}

/* Main message box */
#message-box {
	width: 80%;
}

#message-box textarea {
	width: 100%;
}

/* Emoticons panel */
#smiley-box {
	width: 18%;
	float: right;
}

#smiley-box img {
	margin: 3px;
}

/* Input field styles
---------------------------------------- */
.inputbox {
	cursor: text;
}

input.inputbox	{ width: 85%; }
input.medium	{ width: 50%; }
input.narrow	{ width: 25%; }
input.tiny		{ width: 125px; }

textarea.inputbox {
	width: 85%;
}

.autowidth {
	width: auto !important;
}

/* Form button styles
---------------------------------------- */
input.button1, input.button2 {
	font-size: 1em;
}

a.button1, input.button1, input.button3, a.button2, input.button2 {
	width: auto !important;
	padding-top: 1px;
	padding-bottom: 1px;
    background: #f4f4f4;
    color: #1e8fc7;
    border: solid 1px #d3d3d3;
    border-radius: 15px;
    font-family: Arial;
    line-height: 1em;
    padding: 4px 8px;
    font-size: 14px;
    outline-style: none;
}
.browser-webkit a.button1, .browser-webkit input.button1, .browser-webkit input.button3, .browser-webkit a.button2, .browser-webkit input.button2 {
    padding-top: 5px;
    padding-bottom: 5px;
}
.browser-ie a.button1, .browser-ie input.button1, .browser-ie input.button3, .browser-ie a.button2, .browser-ie input.button2 {
    padding-top: 5px;
    padding-bottom: 5px;
}

a.button1, input.button1 {
	font-weight: bold;
}

#format-buttons .button2, #format-buttons select {
    padding: 2px 6px;
    font-size: 12px;
}
.browser-webkit #format-buttons .button2, .browser-webkit #format-buttons select {
    padding: 4px 6px;
}

input.button3 {
	padding: 0;
	margin: 0;
	line-height: 5px;
	height: 12px;
	font-variant: small-caps;
}

/* Alternative button */
a.button2, input.button2, input.button3 {
}

/* <a> button in the style of the form buttons */
a.button1, a.button1:link, a.button1:visited, a.button1:active, a.button2, a.button2:link, a.button2:visited, a.button2:active {
	text-decoration: none;
    color: #1e8fc7;
	padding: 2px 8px;
	line-height: 250%;
	vertical-align: text-bottom;
}

/* Hover states */
a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover {
    border-color: #e2ba9a;
    background: #f8f8f8;
    color: #da7320;
}

input.disabled {
	font-weight: normal;
	color: #888;
}

/* Topic and forum Search */
.search-box {
	margin-left: 5px;
	float: left;
}

.search-box input {
}

input.search {
	background-image: url("{T_THEME_PATH}/images/search_mini.png");
	background-repeat: no-repeat;
	background-position: 8px 6px;
	padding-left: 25px;
	padding-right: 12px;
}

.full { width: 95%; }
.medium { width: 50%;}
.narrow { width: 25%;}
.tiny { width: 10%;}

/* Animated buttons */
.search-box input.button2 {
    opacity: 0;
    -webkit-transition: opacity 0.25s ease;
    -moz-transition: opacity 0.25s ease;
    -o-transition: opacity 0.25s ease;
    -ms-transition: opacity 0.25s ease;
    transition: opacity 0.25s ease;
}
.search-box:hover input.button2, .search-box.focus input.button2 {
    opacity: 1;
}
/*
    Website index, forum view
*/
div.forabg, div.forumbg, .panel, .post {
    clear: both;
}

ul.linklist {
    display: block;
    height: 14px;
    margin: 6px 4px;
}
ul.linklist li {
    display: block;
    float: left;
    list-style-type: none;
    margin-right: 5px;
}

div.forabg, div.forumbg {
    margin: 6px 0;
}
.old-ie .forabg, .old-ie .forumbg, .old-ie .panel, .old-ie .post, .old-ie .rules {
    zoom: 1;
}

ul.topiclist {
    display: block;
    clear: both;
    list-style-type: none;
    margin: 0;
}
ul.topiclist li {
    display: block;
    list-style-type: none;
    margin: 4px 0;
    padding: 2px;
    border-width: 0;
}
ul.topiclist li.header {
    margin: 0 0 2px;
    padding: 1px 0;
    border: solid 1px #a9a9a9;
    background: #939393 url({T_THEME_PATH}/images/th.gif) 0 0 repeat-x;
    background: url({T_THEME_PATH}/images/header_g2.png) top center repeat-y, #939393 url({T_THEME_PATH}/images/th.gif) 0 0 repeat-x;
    border-radius: 6px;
    color: rgba(255, 255, 255, 0.9);
	text-shadow: rgba(0, 0, 0, 0.3) 1px 1px 1px;
    font-family: Arial;
}
ul.topiclist li.header a, ul.topiclist li.header a:visited { 
    color: rgba(255, 255, 255, 0.9);
    text-decoration: underline;
}
.old-ie ul.topiclist li.header, .old-ie ul.topiclist li.header a, .old-ie ul.topiclist li.header a:visited  {
    color: #fff;
}
ul.topiclist li.header a:hover, ul.topiclist li.header a:active {
    color: #fff;
}

ul.topiclist li.header dt, ul.topiclist li.header dd {
    font-size: 12px;
    line-height: 1.2em;
}

ul.topiclist dl { 
    overflow: hidden; 
    position: relative;
}
ul.topiclist li.row dl {
	padding: 2px 0;
}

ul.topiclist li.row {
    margin-left: 8px;
}
ul.topiclist li.row dl.icon {
    margin-left: -14px;
}

ul.topiclist dt {
	display: block;
	float: left;
	width: 50%;
	padding-left: 5px;
	padding-right: 5px;
	min-height: 35px;
}

ul.topiclist .header dt { min-height: 0; }

ul.topiclist dd {
	display: block;
	float: left;
	padding: 4px 0 2px;
	border-left: 1px solid #e0e0e0;
    -webkit-transition: border-left-color 0.25s ease;
    -moz-transition: border-left-color 0.25s ease;
    -o-transition: border-left-color 0.25s ease;
    -ms-transition: border-left-color 0.25s ease;
    transition: border-left-color 0.25s ease;
}
ul.topiclist li:hover dd {
	border-left-color: #d4d4d4;
}

ul.topiclist dfn {
	/* Labels for post/view counts */
	position: absolute;
	left: -999px;
	width: 990px;
}

ul.topiclist li.row dt a.subforum {
	background-position: 0 50%;
	background-repeat: no-repeat;
	position: relative;
	white-space: nowrap;
	padding: 0 0 0 12px;
}

ul.topiclist li.row dt a.subforum.read {
	background-image: url("{IMG_SUBFORUM_READ_SRC}");
}

ul.topiclist li.row dt a.subforum.unread {
	background-image: url("{IMG_SUBFORUM_UNREAD_SRC}");
}

.forum-image {
	float: left;
	padding-top: 5px;
	margin-right: 5px;
}

.feed-icon-forum {
    float: right;
    display: block;
    width: 18px;
    height: 18px;
    background: url({T_THEME_PATH}/images/rss.png) 0 0 no-repeat;
}
.feed-icon-forum:hover { background-position: 0 -20px; }
.feed-icon-forum span { display: none; }

li.row {
}

li.row strong {
	font-weight: normal;
}

li.header dt, li.header dd {
    color: rgba(255, 255, 255, 0.8);
	line-height: 1em;
	border-left-width: 0;
	margin: 0;
	padding: 4px 0;
	text-shadow: rgba(0, 0, 0, 0.3) 1px 1px 1px;
}
.old-ie li.header dt, .old-ie li.header dd {
    color: #fff;
}

li.header dd {
	margin-left: 1px;
}

li.header dl {
	min-height: 0;
	padding-left: 6px;
}

li.header dl.icon dt {
	/* Tweak for headers alignment when folder icon used */
	padding-left: 0;
	padding-right: 30px;
}

/* Forum list column styles */
dl.icon {
	min-height: 35px;
	background-position: 0 50%;		/* Position of folder icon */
	background-repeat: no-repeat;
}

dl.icon dt {
	padding-left: 30px;					/* Space for folder icon */
	background-repeat: no-repeat;
	background-position: 12px 100%;		/* Position of topic icon */
	font-size: 12px;
	line-height: 1.28em;
}

dl.icon dt div.extra {
    float: right;
    padding-top: 4px;
}

dd.posts, dd.topics, dd.views {
	width: 8%;
	text-align: center;
	line-height: 2.2em;
	font-size: 12px;
}

a.forumtitle, a.topictitle {
    font-size: 15px;
    font-weight: 500;
    line-height: 1.28em;
    font-family: Arial;
}
.unread a.forumtitle, .unread a.forumtitle:visited, 
.unread a.topictitle, .unread a.topictitle:visited, 
.reported a.topictitle, .reported a.topictitle:visited,
.unapproved a.topictitle, .unapproved a.topictitle:visited { 
    color: #da7320; 
}
.unread a.forumtitle:hover, .unread a.topictitle:hover, 
.reported a.topictitle:hover, .unapproved a.topictitle:hover  { 
    color: #da7320; 
}


/* List in forum description */
dl.icon dt ol,
dl.icon dt ul {
	list-style-position: inside;
	margin-left: 1em;
}

dl.icon dt li {
	display: list-item;
	list-style-type: inherit;
}

dd.lastpost {
	width: 25%;
	font-size: 11px;
}

dd.redirect {
	font-size: 12px;
	line-height: 2.5em;
}

dd.redirect.empty {
    display: none;
}

dd.moderation {
	font-size: 11px;
}

dd.lastpost span, ul.topiclist dd.searchby span, ul.topiclist dd.info span, ul.topiclist dd.time span, dd.redirect span, dd.moderation span {
	display: block;
	padding-left: 5px;
}

dd.time {
	width: auto;
	line-height: 200%;
	font-size: 11px;
}

dd.extra {
	width: 12%;
	line-height: 200%;
	text-align: center;
	font-size: 11px;
}

dd.mark {
	float: right !important;
	width: 9%;
	text-align: center;
	line-height: 200%;
	font-size: 11px;
}

dd.info {
	width: 30%;
}

dd.option {
	width: 15%;
	line-height: 200%;
	text-align: center;
	font-size: 11px;
}

dd.searchby {
	width: 47%;
	font-size: 11px;
	line-height: 1em;
}

ul.topiclist dd.searchextra {
	margin-left: 5px;
	padding: 0.2em 0;
	font-size: 11px;
	color: #444;
	border-left: none;
	clear: both;
	width: 98%;
	overflow: hidden;
}

/* Container for post/reply buttons */
.topic-actions {
    margin: 0 0 6px;
	font-size: 11px;
	height: 28px;
	min-height: 28px;
}
div[class].topic-actions {
	height: auto;
}

/* Buttons */
.buttons {
    float: left;
}
.buttons div {
	float: left;
	margin: 0 5px 0 0;
	background-position: 0 100%;
}
.old-ie .buttons div {
    margin-left: 5px;
}
.buttons div a {
    font-size: 14px;
    font-family: Arial;
    line-height: 1em;
    white-space: nowrap;
    display: inline-block;
    position: relative;
    margin: 0 0 0 15px;
    padding: 8px 16px 0 2px;
    height: 22px;
    text-decoration: none;
    text-align: center;
    color: #1e8fc7;
    background: url({T_THEME_PATH}/images/buttons.png) top right no-repeat;
}
.browser-ie .buttons div a {
    line-height: 21.49px;
    padding-top: 5px;
    height: 25px;
}

.buttons div a, .buttons div a:hover, .buttons div a:active {
    text-decoration: none;
    border-width: 0;
    outline-style: none;
}
.buttons div a:hover, .buttons div a:active { 
    color: #da7320; 
}
.buttons div a span {
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: -15px;
    width: 15px;
    background: url({T_THEME_PATH}/images/buttons.png) top left no-repeat;
}

.buttons div a:hover {
    background-position: right -40px;
}
.buttons div a:active {
    background-position: right bottom;
}
.buttons div a:hover span {
    background-position: left -40px;
}
.buttons div a:active span {
    background-position: left bottom;
}


/* Pagination
---------------------------------------- */
.pagination {
	width: auto;
	text-align: right;
	margin-top: 5px;
	margin-bottom: 3px;
	float: right;
}

.pagination span.page-sep {
	display: none;
}

li.pagination {
	margin-top: 0;
}

.pagination strong, .pagination b {
	font-weight: normal;
}

.pagination span strong {
	padding: 0 3px;
	margin: 0 2px;
	font-weight: normal;
	border: solid 1px #1e8fc7;
    background-color: #1e8fc7;
    color: #fff;
    border-radius: 5px;
}

.pagination span a, .pagination span a:link, .pagination span a:visited, .pagination span a:active {
	font-weight: normal;
	text-decoration: none;
	margin: 0 2px;
	padding: 0 3px;
    border: solid 1px #d0d0d0;
    border-radius: 5px;
    background-color: #eee;
	line-height: 1.5em;
    -webkit-transition: none;
    -moz-transition: none;
    -o-transition: none;
    -ms-transition: none;
    transition: none;
}

.pagination span a:hover, .pagination span a:active {
    border-color: #da7320;
    background-color: #da7320;
    color: #fff;
}

.pagination img {
	vertical-align: middle;
}

/* Pagination in viewforum for multipage topics */
.row .pagination {
	display: block;
	float: right;
	width: auto;
	margin-top: -4px;
	padding: 1px 0 0 15px;
	font-size: 0.9em;
	background: none 0 50% no-repeat;
}

/* Miscellaneous styles
---------------------------------------- */
#forum-permissions {
	float: right;
	width: auto;
	padding-left: 5px;
	margin-left: 5px;
	margin-top: 10px;
	text-align: right;
}

/* Login on index */
body.section-index #page-body > form > h3 { display: none; }
/*
    Layout for posts
*/

.post, .panel {
    margin-top: 4px;
    margin-bottom: 6px;
    padding: 2px;
}
#preview {
    margin-top: 4px;
}
.post > div.inner, .panel > div.inner, .old-ie .post div.inner, .old-ie .panel div.inner-panel {
    padding: 6px;
}

.online .inner { background: url("{IMG_ICON_USER_ONLINE_SRC}") 100% 0 no-repeat; }


.postbody {
	padding: 0;
	line-height: 1.48em;
	width: 76%;
	float: left;
	clear: both;
	word-wrap: break-word;
}

.postbody .ignore {
}

.postbody h3.first, .postbody h3.first a {
	/* The first post on the page uses this */
    color: #da7320 !important;
}

.postbody h3 {
	/* Postbody requires a different h3 format - so change it here */
	padding: 2px 0 0 0;
	margin: 0 0 2px 0 !important;
	text-transform: none;
	border: none;
	line-height: 125%;
	font-weight: normal;
	font-size: 16px;
    font-family: Arial;
}
.postbody h3, .postbody h3 a, .postbody h3 a:visited { color: #1e8fc7; }
.postbody h3 a:hover { color: #da7320; }

.postbody h3 img {
	/* Also see tweaks.css */
	vertical-align: bottom;
}

.postbody .post-header {
	overflow: hidden;
}

.postbody .post-header h3 {
	float: left;
}

.postbody .content {
	font-size: 13px;
}

.search .postbody {
	width: 68%;
}

.content {
	min-height: 3em;
	overflow: hidden;
	line-height: 1.4em;
	padding-bottom: 1px;
}

.content h2, .panel h2, .panel > div > h3, .panel .content > h3 {
    font-family: Arial;
	font-weight: normal;
	margin: 4px 0;
	padding: 0;
	font-size: 16px;
	color: #1e8fc7;
}

.postbody > .notice {
    clear: left;
    margin-top: 10px;
    font-size: 11px;
    font-style: italic;
}

/* Poster profile icons
----------------------------------------*/
.post ul.profile-icons li {
    opacity: 0;
    -webkit-transition: opacity 0.25s ease;
    -moz-transition: opacity 0.25s ease;
    -o-transition: opacity 0.25s ease;
    -ms-transition: opacity 0.25s ease;
    transition: opacity 0.25s ease;
}
.post:hover ul.profile-icons li {
    opacity: 1;
}

ul.profile-icons {
	padding-top: 10px;
	list-style: none;
}

/* Rollover state */
ul.profile-icons li {
	float: left;
	margin: 0 2px 3px 0;
	background-position: 0 100%;
}

/* Rolloff state */
ul.profile-icons li a {
	display: block;
	width: 100%;
	height: 100%;
	background-color: #ececec;
	background-position: 0 0;
	opacity: 1;
    -webkit-transition: opacity 0.25s ease;
    -moz-transition: opacity 0.25s ease;
    -o-transition: opacity 0.25s ease;
    -ms-transition: opacity 0.25s ease;
    transition: opacity 0.25s ease;
}

/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */
ul.profile-icons li span { 
    display: none; 
}
ul.profile-icons li a:hover { 
    opacity: 0;
}

/* Positioning of moderator icons */
.postbody ul.profile-icons {
	float: right;
	width: auto;
	padding: 0;
	padding-bottom: 5px;
}

.postbody ul.profile-icons li {
	margin: 0 3px;
}


/* Profile & navigation icons */
.email-icon, .email-icon a		{ background: url("{IMG_ICON_CONTACT_EMAIL_SRC}") top left no-repeat; }
.aim-icon, .aim-icon a			{ background: url("{IMG_ICON_CONTACT_AIM_SRC}") top left no-repeat; }
.yahoo-icon, .yahoo-icon a		{ background: url("{IMG_ICON_CONTACT_YAHOO_SRC}") top left no-repeat; }
.web-icon, .web-icon a			{ background: url("{IMG_ICON_CONTACT_WWW_SRC}") top left no-repeat; }
.msnm-icon, .msnm-icon a			{ background: url("{IMG_ICON_CONTACT_MSNM_SRC}") top left no-repeat; }
.icq-icon, .icq-icon a			{ background: url("{IMG_ICON_CONTACT_ICQ_SRC}") top left no-repeat; }
.jabber-icon, .jabber-icon a		{ background: url("{IMG_ICON_CONTACT_JABBER_SRC}") top left no-repeat; }
.pm-icon, .pm-icon a				{ background: url("{IMG_ICON_CONTACT_PM_SRC}") top left no-repeat; }
.quote-icon, .quote-icon a		{ background: url("{IMG_ICON_POST_QUOTE_SRC}") top left no-repeat; }

/* Moderator icons */
.report-icon, .report-icon a		{ background: url("{IMG_ICON_POST_REPORT_SRC}") top left no-repeat; }
.warn-icon, .warn-icon a			{ background: url("{IMG_ICON_USER_WARN_SRC}") top left no-repeat; }
.edit-icon, .edit-icon a			{ background: url("{IMG_ICON_POST_EDIT_SRC}") top left no-repeat; }
.delete-icon, .delete-icon a		{ background: url("{IMG_ICON_POST_DELETE_SRC}") top left no-repeat; }
.info-icon, .info-icon a			{ background: url("{IMG_ICON_POST_INFO_SRC}") top left no-repeat; }

/* Set profile icon dimensions */
ul.profile-icons li.email-icon		{ width: {IMG_ICON_CONTACT_EMAIL_WIDTH}px; height: {IMG_ICON_CONTACT_EMAIL_HEIGHT}px; }
ul.profile-icons li.aim-icon	{ width: {IMG_ICON_CONTACT_AIM_WIDTH}px; height: {IMG_ICON_CONTACT_AIM_HEIGHT}px; }
ul.profile-icons li.yahoo-icon	{ width: {IMG_ICON_CONTACT_YAHOO_WIDTH}px; height: {IMG_ICON_CONTACT_YAHOO_HEIGHT}px; }
ul.profile-icons li.web-icon	{ width: {IMG_ICON_CONTACT_WWW_WIDTH}px; height: {IMG_ICON_CONTACT_WWW_HEIGHT}px; }
ul.profile-icons li.msnm-icon	{ width: {IMG_ICON_CONTACT_MSNM_WIDTH}px; height: {IMG_ICON_CONTACT_MSNM_HEIGHT}px; }
ul.profile-icons li.icq-icon	{ width: {IMG_ICON_CONTACT_ICQ_WIDTH}px; height: {IMG_ICON_CONTACT_ICQ_HEIGHT}px; }
ul.profile-icons li.jabber-icon	{ width: {IMG_ICON_CONTACT_JABBER_WIDTH}px; height: {IMG_ICON_CONTACT_JABBER_HEIGHT}px; }
ul.profile-icons li.pm-icon		{ width: {IMG_ICON_CONTACT_PM_WIDTH}px; height: {IMG_ICON_CONTACT_PM_HEIGHT}px; }
ul.profile-icons li.quote-icon	{ width: {IMG_ICON_POST_QUOTE_WIDTH}px; height: {IMG_ICON_POST_QUOTE_HEIGHT}px; }
ul.profile-icons li.report-icon	{ width: {IMG_ICON_POST_REPORT_WIDTH}px; height: {IMG_ICON_POST_REPORT_HEIGHT}px; }
ul.profile-icons li.edit-icon	{ width: {IMG_ICON_POST_EDIT_WIDTH}px; height: {IMG_ICON_POST_EDIT_HEIGHT}px; }
ul.profile-icons li.delete-icon	{ width: {IMG_ICON_POST_DELETE_WIDTH}px; height: {IMG_ICON_POST_DELETE_HEIGHT}px; }
ul.profile-icons li.info-icon	{ width: {IMG_ICON_POST_INFO_WIDTH}px; height: {IMG_ICON_POST_INFO_HEIGHT}px; }
ul.profile-icons li.warn-icon	{ width: {IMG_ICON_USER_WARN_WIDTH}px; height: {IMG_ICON_USER_WARN_HEIGHT}px; }

/* Fix profile icon default margins */
/* ul.profile-icons li.edit-icon	{ margin: 0 0 0 3px; }
ul.profile-icons li.quote-icon	{ margin: 0 0 0 10px; }
ul.profile-icons li.info-icon, ul.profile-icons li.report-icon	{ margin: 0 3px 0 0; } */

/* Post author */
p.author {
	margin: 0;
	padding: 0 0 5px;
	font-size: 11px;
	line-height: 1.2em;
	color: #444;
}
p.author img { margin-right: 4px; }
p.author strong { font-weight: normal; }

/* Post signature */
.signature {
	margin-top: 1.5em;
	padding-top: 0.2em;
	font-size: 11px;
	color: #666;
	border-top: 1px solid #ddd;
	clear: left;
	line-height: 140%;
	overflow: hidden;
	width: 100%;
}

dd .signature {
	margin: 0;
	padding: 0;
	clear: none;
	border: none;
}

.signature li {
	list-style-type: inherit;
}

.signature ul, .signature ol {
	margin-bottom: 1em;
	margin-left: 3em;
}

/* Poster profile block
----------------------------------------*/
.postprofile {
	margin: 2px 0 10px 0;
	min-height: 80px;
	color: #555;
	border-left: 1px solid #ddd;
	width: 22%;
	float: right;
	word-wrap: break-word;
}
.pm .postprofile {
	border-left: 1px solid #ddd;
}

.postprofile dd, .postprofile dt {
	line-height: 1.2em;
	margin-left: 8px;
	font-size: 11px;
}
.postprofile dt {
    font-size: 14px;
    line-height: 1.4em;
    font-family: Arial;
}

.postprofile strong {
	font-weight: normal;
	color: #1e8fc7;
}

.avatar {
	border: none;
	margin-bottom: 3px;
}

/* Poster profile used by search*/
.search .postprofile {
	width: 30%;
}

/* pm list in compose message if mass pm is enabled */
dl.pmlist dt {
	width: 60% !important;
}

dl.pmlist dt textarea {
	width: 95%;
}

dl.pmlist dd {
	margin-left: 61% !important;
	margin-bottom: 2px;
}

/* Post poll styles
----------------------------------------*/
fieldset.polls dl {
	margin-top: 5px;
	border-top: 1px solid #ddd;
	padding: 5px 0 0 0;
	line-height: 120%;
}

fieldset.polls dl.voted {
	color: #da7320;
}

fieldset.polls dt {
	text-align: left;
	float: left;
	display: block;
	width: 30%;
	border-right: none;
	padding: 0;
	margin: 0;
	font-size: 1.1em;
}

fieldset.polls dd {
	float: left;
	width: 10%;
	border-left: none;
	padding: 0 5px;
	margin-left: 0;
	font-size: 1.1em;
}

fieldset.polls dd.resultbar {
	width: 50%;
}

fieldset.polls dd input {
	margin: 2px 0;
}

fieldset.polls dd div {
	text-align: right;
	font-family: Arial;
	color: rgba(255, 255, 255, 0.9);
	font-weight: normal;
	padding: 2px 3px;
	overflow: visible;
	min-width: 12px;
	background: #1e8fc7 url({T_THEME_PATH}/images/poll.png) 0 0 repeat-x;
	border: solid 0px transparent;
	border-radius: 10px;
}
.old-ie fieldset.polls dd div {
    color: #fff;
}

fieldset.polls dd div.pollbar2 { background-position: 0 -25px; }
fieldset.polls dd div.pollbar3 { background-position: 0 -50px; }
fieldset.polls dd div.pollbar4 { background-position: 0 -75px; }
fieldset.polls dd div.pollbar5 { background-position: 0 -100px; }
fieldset.polls dl.voted dd div { background-position: 0 -125px; }


/* BB Code styles
----------------------------------------*/
/* Quote block */
blockquote {
	background: rgba(255, 255, 255, 0.3) url({T_THEME_PATH}/images/bb_quote.png) 5px 8px no-repeat;
	border: 1px solid #ddd;
	border-radius: 8px;
	font-size: 13px;
	margin: 0.5em 1px 0 25px;
	overflow: hidden;
	padding: 5px;
}

blockquote blockquote {
	/* Nested quotes */
	background-color: #f6f6f6;
	font-size: 1em;
	margin: 0.5em 1px 0 15px;	
}

blockquote blockquote blockquote {
	/* Nested quotes */
	background-color: #f0f0f0;
}

blockquote cite {
	/* Username/source of quoter */
	font-style: normal;
	font-weight: normal;
	margin-left: 20px;
	display: block;
	font-size: 12px;
	color: #444;
}

blockquote.uncited {
	padding-top: 25px;
}

/* Code block */
dl.codebox {
	padding: 3px;
	background-color: rgba(255, 255, 255, 0.5);
	border: 1px solid #ddd;
	border-radius: 8px;
	margin: 0.5em 1px 0 25px;
	font-size: 1em;
}

dl.codebox dt {
	margin-bottom: 3px;
	padding-left: 2px;
	font-size: 12px;
	font-weight: normal;
	display: block;
	color: #444;
}

blockquote dl.codebox {
	margin-left: 0;
}

dl.codebox code {
	/* Also see tweaks.css */
	overflow: auto;
	display: block;
	height: auto;
	max-height: 200px;
	white-space: normal;
	padding-top: 5px;
	font: 0.9em Monaco, "Andale Mono","Courier New", Courier, mono;
	line-height: 1.3em;
	color: #000;
	margin: 2px 0;
}

.syntaxbg		{ color: #f7f7f7; }
.syntaxcomment	{ color: #444; }
.syntaxdefault	{ color: #000; }
.syntaxhtml		{ color: #000; }
.syntaxkeyword	{ color: #da7320; }
.syntaxstring	{ color: #1e8fc7; }

/* Attachments
----------------------------------------*/
.attachbox {
	float: left;
	width: auto; 
	margin: 5px 5px 5px 0;
	padding: 6px;
	background-color: rgba(255, 255, 255, 0.5);
	border: 1px dashed #ddd;
	border-radius: 8px;
	clear: left;
	max-width: 98%;
	max-width: -moz-calc(100% - 14px);
	max-width: calc(100% - 14px);
}

.attachbox dt {
	color: #444;
	font-size: 11px;
}

.attachbox dd {
	margin-top: 4px;
	padding-top: 4px;
	clear: left;
	border-top: 1px solid #ddd;
}

.attachbox dd dd {
	border: none;
}

.attachbox p {
	line-height: 110%;
	font-weight: normal;
	clear: left;
}

.attachbox p.stats
{
	line-height: 110%;
	font-weight: normal;
	clear: left;
}

.attach-image {
	margin: 3px 0;
	width: 100%;
	max-height: 350px;
	overflow: auto;
}

.attach-image img {
}

/* Inline image thumbnails */
div.inline-attachment dl.thumbnail, div.inline-attachment dl.file {
	display: block;
	margin-bottom: 4px;
}

div.inline-attachment p {
	font-size: 100%;
}

dl.file {
	display: block;
}

dl.file dt {
	text-transform: none;
	margin: 0;
	padding: 0;
	font-size: 12px;
	font-weight: normal;
}

dl.file dd {
	margin: 0;
	padding: 0;	
}

dl.thumbnail img {
	padding: 3px;
	border: 1px solid #ddd;
}

dl.thumbnail dd {
	font-style: italic;
}

.attachbox dl.thumbnail dd {
	font-size: 100%;
}

dl.thumbnail dt a:hover {
}

dl.thumbnail dt a:hover img {
	border: 1px solid #ddd;
}

/*
    Reported / unapproved
*/
p.rules {
    background: #f7f1eb;
    border: solid 1px #ccaa8f;
    border-radius: 10px;
	padding: 8px;
	margin: 5px 10px;
	font-size: 12px;
	line-height: 1.4em;
}

p.rules img {
	vertical-align: middle;
	padding-top: 2px;
}
p.rules strong { font-weight: normal; }

p.rules a {
	vertical-align: middle;
	clear: both;
}

/*
    Lists bbcode
*/
.content ul, .content ol {
    margin-bottom: 1em;
    margin-left: 3em;
}
.content li {
    list-style-type: inherit;
}

/*
    Post highlight
*/
.posthilit { color: #da7320; }

/*
	Zoom in image
*/
span.zoom-container {
	position: relative;
	display: inline-block;
	min-height: 34px;
}
span.zoom-image { 
	display: none; 
    -webkit-transition: opacity 0.25s ease;
    -moz-transition: opacity 0.25s ease;
    -o-transition: opacity 0.25s ease;
    -ms-transition: opacity 0.25s ease;
    transition: opacity 0.25s ease;
	opacity: 0.7;
}
img.zoom + span.zoom-image {
	display: block;
	position: absolute;
	top: 2px;
	left: 2px;
	width: 30px;
	height: 30px;
	background: url("{T_THEME_PATH}/images/zoom.png") 0 0 no-repeat;
	cursor: pointer;
}
.zoom-container:hover span.zoom-image { opacity: 1; }
img.zoom.zoomed-in + span.zoom-image { 
	background-position: 0 -30px;
	opacity: 0;
}
.zoom-container:hover img.zoom.zoomed-in + span.zoom-image { opacity: 0.7; }
/*
    Layouts for pages not covered in other css files
*/


/* notification */
div#message, #confirm .panel, #agreement .panel {
    margin: 40px 0;
    font-size: 12px;
}
div#message .inner, #confirm .panel .inner, #agreement .panel .inner { 
    padding-bottom: 20px; 
}
div#message h2, #confirm h2, #agreement h2 { 
    margin-left: 0; 
    margin-bottom: 20px; 
}

/*
    UCP tabs
*/
#tabs {
    margin: 10px 0 6px;
}
#navigation, #minitabs {
    margin: 4px 0;
    min-height: 1em;
}
#tabs ul, #navigation ul, #minitabs ul {
    list-style-type: none;
}
#tabs li, #navigation li, #minitabs li {
    display: block;
    float: left;
}
#tabs li a, #navigation li a, #minitabs li a {
    display: block;
    margin: 0;
    padding: 0;
    height: 30px;
    padding-left: 15px;
    background: url({T_THEME_PATH}/images/tabs_right.png) top left no-repeat;
    border-width: 0;
    outline-style: none;
    text-decoration: none;
}
#tabs li a span, #navigation li a span, #minitabs li a span {
    display: inline-block;
    font-size: 14px;
    font-famiy: Arial;
    line-height: 1em;
    white-space: nowrap;
    padding-top: 8px;
    padding-right: 13px;
    height: 22px;
    background: url({T_THEME_PATH}/images/tabs_left.png) top right no-repeat;
    color: #1e8fc7;
}
#tabs li a:hover, #tabs li.activetab a, #navigation li a:hover, #navigation li#active-subsection a, #minitabs li a:hover, #minitabs li.activetab a {
    background-position: bottom left;
}
#tabs li a:hover span, #tabs li.activetab a span, #navigation li a:hover span, #navigation li#active-subsection a span, #minitabs li a:hover span, #minitabs li.activetab a span {
    background-position: bottom right;
    color: #da7320;
}
#tabs li.first a, #navigation li.first a, #minitabs li.first a {
    background-image: url({T_THEME_PATH}/images/tabs_left.png);
    padding-left: 15px;
}

#tabs li.last a, #navigation li.last a, #minitabs li.last a {
    background-position: top right;
    padding-right: 15px;
    padding-left: 0;
}
#tabs li.last a span, #navigation li.last a span, #minitabs li.last a span {
    background-image: url({T_THEME_PATH}/images/tabs_right.png);
    background-position: top left;
    padding-left: 10px;
    padding-right: 0;
}

#tabs li.last a:hover, #tabs li.activetab.last a, #navigation li.last a:hover, #navigation li#active-subsection.last a, #minitabs li.last a:hover, #minitabs li.activetab.last a {
    background-position: bottom right;
}
#tabs li.last a:hover span, #tabs li.activetab.last a span, #navigation li.last a:hover span, #navigation li#active-subsection.last a span, #minitabs li.last a:hover span, #minitabs li.activetab.last a span {
    background-position: bottom left;
}
#navigation strong, #tabs strong, #minitabs strong { 
    color: #1e8fc7; 
    font-weight: normal;
}
li.activetab strong, #active-subsection strong,
#navigation a:hover strong, #tabs a:hover strong, #minitabs a:hover strong {
    color: #da7320;
}



/*
    UCP stuff
*/
div.cp-panel {
    background: none;
    padding: 0;
}
p.linkmcp { color: #444; }

#cp-main > h2, #cp-main > form > h2 {
    font-family: Arial;
	font-weight: normal;
	margin: 8px 0;
	padding: 0;
	font-size: 16px;
	color: #da7320;
    font-size: 20px;
    font-weight: normal;
    margin: 14px 2px;
}

#cp-main h3 {
    margin: 6px 0;
}


#cp-main .content {
	padding: 0;
}

#cp-main .panel ol {
	margin-left: 2em;
	font-size: 11px;
}

ul.cplist {
	margin-bottom: 5px;
}

#cp-main table.table1 {
	margin-bottom: 1em;
}

#cp-main .pagination {
	float: right;
	width: auto;
	padding-top: 1px;
}

#cp-main .postbody p {
	font-size: 12px;
}

#cp-main .pm-message {
	margin: 10px 0;
	width: auto;
	float: none;
}

.pm-message h2 {
	padding-bottom: 5px;
}

#cp-main .postbody h3, #cp-main .box2 h3 {
	margin-top: 0;
}

#cp-main .buttons {
	margin-left: 0;
}

#cp-main ul.linklist {
	margin: 0;
}

/* MCP Specific tweaks */
.mcp-main .postbody {
	width: 100%;
}

div.panel dl.panel, div.panel dl.panel .hdr2-last {
    padding: 10px;
}


/* Friends list */
.cp-mini {
	padding: 0 5px;
	margin: 5px 5px 0 0;
	float: left;
}

.cp-mini .inner {
    padding: 7px 5px;
}

dl.mini dt {
	font-weight: normal;
	color: #444;
	font-size: 14px;
	line-height: 1.3em;
    font-family: Arial;
}

dl.mini dd {
	padding-top: 4px;
}

.friend-online {
	font-weight: bold;
}

.friend-offline {
	font-style: italic;
}

/* PM Styles
----------------------------------------*/
#pm-menu {
	line-height: 2.5em;
}

/* PM panel adjustments */
.reply-all {
	display: block; 
	padding-top: 4px; 
	clear: both;
	float: left;
}

.pm-return-to {
	padding-top: 23px;
}

#cp-main .pm-message-nav {
	margin: 0; 
	padding: 2px 10px 5px 10px; 
}

/* PM Message history */
.current {
	color: #000;
}

/* Defined rules list for PM options */
ol.def-rules {
	padding-left: 0;
}

ol.def-rules li {
	line-height: 180%;
	padding: 1px;
}

/* PM marking colours */
.pmlist li.bg1, .pmlist li.bg2 {
	margin: 2px;
}

.pmlist li.bg1 dl, .pmlist li.bg2 dl {
    border: solid 0px transparent;
	border-left-width: 2px;
}

.pmlist li.pm_message_reported_colour dl, .pm_message_reported_colour {
	border-color: #da7320;
}

.pmlist li.pm_marked_colour dl, .pm_marked_colour {
	border-color: #da7320;
}

.pmlist li.pm_replied_colour dl, .pm_replied_colour {
	border-color: #1e8fc7;
}

.pmlist li.pm_friend_colour dl, .pm_friend_colour {
	border-color: #30ab57;
}

.pmlist li.pm_foe_colour dl, .pm_foe_colour {
	border-color: #d92121;
}


.pm-legend {
	border-left-width: 10px;
	border-left-style: solid;
	border-right-width: 0;
	margin-bottom: 3px;
	padding-left: 3px;
}

/* Avatar gallery */
#gallery label {
	position: relative;
	float: left;
	margin: 10px;
	padding: 5px;
	width: auto;
	background: transparent;
	border: 1px solid #ccc;
	border-radius: 8px;
	text-align: center;
}

#gallery label:hover {
	border-color: #e2ba9a;
	background-color: #f8f8f8;
}

/* Topic review panel
----------------------------------------*/
#review {
	margin-top: 2em;
	font-weight: normal;
	font-size: 14px;
	line-height: 1.4em;
	color: #1e8fc7;
}

#topicreview {
	padding-right: 5px;
	overflow: auto;
	height: 300px;
}

#topicreview .postbody {
	width: auto;
	float: none;
	margin: 0;
	height: auto;
}

#topicreview .post {
	height: auto;
}

#topicreview h2 {
	border-bottom-width: 0;
}

.post-ignore .postbody {
	display: none;
}

/* MCP Post details
----------------------------------------*/
#post_details
{
	/* This will only work in IE7+, plus the others */
	overflow: auto;
	max-height: 300px;
}

#expand
{
	clear: both;
}


/* FAQ */
dl.faq {
	margin-top: 5px;
	margin-bottom: 20px;
	line-height: 1.4em;
}

dl.faq dt {
	font-weight: normal;
    font-family: Arial;
	font-size: 14px;
	color: #da7320;
	line-height: 1.4em;
}
dl.faq dt strong { font-weight: normal; }

.content dl.faq {
	font-size: 12px;
	margin-bottom: 0.5em;
}

.column1 {
	float: left;
	clear: left;
	width: 49%;
}

.column2 {
	float: right;
	clear: right;
	width: 49%;
}


/* Table styles
----------------------------------------*/
table.table1 {
    width: 100%;
}

#ucp-main table.table1 {
	margin: 2px;
}

table.table1 th {
	font-weight: normal;
    border: solid 1px #a9a9a9;
    background: #939393 url({T_THEME_PATH}/images/th.gif) 0 0 repeat-x;
    background: url({T_THEME_PATH}/images/header_g2.png) top center repeat-y, #939393 url({T_THEME_PATH}/images/th.gif) 0 0 repeat-x;
    border-radius: 6px;
    color: rgba(255, 255, 255, 0.9);
	text-shadow: rgba(0, 0, 0, 0.3) 1px 1px 1px;
    font-size: 12px;
    font-family: Arial;
    line-height: 1.2em;
    padding: 3px 4px;
}
table.table1 thead th a, table.table1 thead th a:visited {
    color: rgba(255, 255, 255, 0.8);
}
table.table1 thead th a:hover {
    color: #fff;
}
.old-ie table.table1 th, .old-ie table.table1 thead th a, .old-ie table.table1 thead th a:visited {
    color: #fff;
}

table.table1 thead th span {
	padding-left: 7px;
}

table.table1 tbody tr:hover, table.table1 tbody tr.hover {
	background-color: #f4f4f4;
}

table.table1 td {
	font-size: 12px;
	padding: 4px;
	background-color: #ececec;
	border: 1px solid #d0d0d0;
	border-radius: 4px;
}

/* Specific column styles */
table.table1 .name		{ text-align: left; }
table.table1 .posts		{ text-align: center !important; width: 7%; }
table.table1 .joined	{ text-align: left; width: 15%; }
table.table1 .active	{ text-align: left; width: 15%; }
table.table1 .mark		{ text-align: center; width: 7%; }
table.table1 .info		{ text-align: left; width: 30%; }
table.table1 .info div	{ width: 100%; white-space: normal; overflow: hidden; }
table.table1 .autocol	{ line-height: 2em; white-space: nowrap; }
table.table1 thead .autocol { padding-left: 1em; }

table.table1 span.rank-img {
	float: right;
	width: auto;
}

table.info td {
	padding: 3px;
}

table.info tbody th {
	padding: 3px;
	text-align: right;
	vertical-align: top;
	color: #000000;
	font-weight: normal;
}

/* Jump to post link for now */
ul.searchresults {
	list-style: none;
	text-align: right;
	clear: both;
}
.post ul.searchresults {
    width: 68%;
    clear: left;
}

/* Close popup */
body.simple #page-body > a { 
    display: block;
    text-align: center; 
    margin: 4px;
}

/* Login form */
form#login, form#register {
    margin-top: 20px;
}

/*
    Dropdown tabs
*/
#tabs { overflow: visible; }
div.dropdown-tabs {
    position: relative;
    float: left;
    margin: 0;
    margin-right: 20px;
    padding: 0;
    padding-left: 15px;
    height: 30px;
    background: url({T_THEME_PATH}/images/tabs_left.png) top left no-repeat;
}
div.dropdown-tabs > a {
    display: inline-block;
    font-size: 14px;
    font-family: Arial;
    line-height: 1em;
    white-space: nowrap;
    margin: 0;
    margin-right: -15px;
    padding-top: 8px;
    padding-right: 28px;
    height: 22px;
    color: #1e8fc7;
    background: url({T_THEME_PATH}/images/tabs_popup.png) top right no-repeat;
}
div.dropdown-tabs:hover { background-position: bottom left; }
div.dropdown-tabs:hover > a { background-position: bottom right; color: #da7320; }
div.dropdown-tabs > ul { 
    display: none;
    position: absolute;
    top: 26px;
    left: 4px;
    z-index: 2;
    background: #ececec;
    background-color: rgba(236, 236, 236, 0.9);
    padding: 0;
    border: solid 2px #d0d0d0;
    border-radius: 10px;
}
div.dropdown-tabs:hover > ul { display: block; }
.dropdown-tabs li a, .dropdown-tabs span,
#tabs .dropdown-tabs li a, #tabs .dropdown-tabs li a span { 
    background: none;
    margin: 0;
    padding: 0;
    line-height: 1em;
    height: auto;
}
.dropdown-tabs li a, #tabs div.dropdown-tabs ul li a {
    padding: 8px 6px;
}
.dropdown-tabs li, #tabs .dropdown-tabs li { 
    margin: 0;
    padding: 0;
    display: block;
    float: none;
    border-top: solid 1px #fff;
    border-bottom: solid 1px #d0d0d0;
}
.dropdown-tabs li:first-child, #tabs .dropdown-tabs li:first-child { border-top-width: 0; }
.dropdown-tabs li:last-child, #tabs .dropdown-tabs li:last-child { border-bottom-width: 0; }
.cp-mini dl.mini { max-height: 140px; overflow: auto; }
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	/* main stuff */
	body { min-width: 320px; }

	/* navigation */
	.responsive-menu { display: block !important; }
	#search-box { display: none !important; }
	#page-header { position: relative; }
	#nav-header {
		float: none;
		margin: 0 0 0 -5px;
		padding: 6px 4px;
		width: auto;
		max-width: 320px;
		position: absolute;
		top: 30px;
		background: rgba(240, 240, 240, 0.9);
		border: 1px solid #c8c8c8;
		border-radius: 10px;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1), 2px 2px 5px rgba(0, 0, 0, 0.1);
	}
	#nav-header a {
		float: none;
		display: block;
	}
	#nav-header a span {
		display: block;
		max-width: 320px;
		text-align: center;
	}
	#nav-header { display: none !important; }
	.responsive-menu-nojs:hover #nav-header, .responsive-menu-visible #nav-header { display: block !important; }

	.responsive-menu-visible .responsive-menu-hide { display: block !important; }

	/* topic */
	.postprofile, .signature { display: none; }
	.postbody { 
		float: none;
		width: auto;
	}
	.post ul.profile-icons li { opacity: 1; }
	blockquote, dl.codebox { margin-left: 5px; }
	
	/* jumpbox */
	#jumpbox { 
		display: block; 
		clear: both;
	}
	fieldset.jumpbox { 
		display: block;
		float: none;
		clear: both;
		padding: 5px 0;
	}
	
	/* navigation */
	div.nav-extra {
		top: 0;
		float: none;
		z-index: 0;
	}
	div.nav-links, ul.linklist { height: auto; }
	div.nav-links:after, ul.linklist:after, div.nav-extra:after, form:after {
		content: '';
		display: block;
		clear: both;
	}
	
	a.left-box, a.right-box, p.rightside, li.rightside, ul.rightside, ul.linklist li.rightside, .right-box {
		float: none;
		clear: both;
		display: block;
		padding-top: 5px;
		padding-bottom: 5px;
	}
	p.rightside { text-align: left; }
	
	div.pagination, div.buttons, div.search-box {
		float: none;
		clear: both;
		padding-top: 5px;
		padding-bottom: 5px;
	}
	.search-box { margin-left: 0; }
	.search-box input.button2 { opacity: 1; }
	#forum-search, #topic-search { display: none; }
	
	fieldset.display-options {
		margin: 10px 0;
		clear: both;
		float: none;
		display: none;
	}
	.display-options label { 
		display: block;
		padding: 5px 0;
	}
	
	/* cp */
	.tabs-container > h2 { margin: 10px 0; }
	fieldset.display-actions { white-space: normal; }
	#cp-main .pagination, #cp-main > h2, #cp-main > form > h2 {
		float: none;
		padding: 10px 0;
		clear: both;
	}
	#cp-main .pagination { text-align: right; }
	#cp-main table.table1 { border-collapse: collapse; }
	#cp-main table.table1 td, #cp-main table.table1 th { border-radius: 0; }
	.column1, .column2 { 
		float: none;
		width: auto;
		clear: both; 
	}
	
	/* message */
	.postbody .post-header {
		overflow: hidden;
	}
	.postbody .post-header h3 {
		float: left;
	}
	.postbody .post-header .profile-icons {
		float: right;
	}

	/* forms */
	select { max-width: 220px; }
	dd label { white-space: normal; }
	
	fieldset.fields2 dt, fieldset.fields2 dd, fieldset dt, fieldset dd, fieldset.fields1 dt, fieldset.fields1 dd {
		float: none;
		width: auto;
		margin: 5px 0;
	}
	fieldset.fields2 dd, fieldset dd, fieldset.fields1 dd { padding-left: 20px; }
	dl.pmlist dt { width: auto !important; }
	dl.pmlist dd { margin-left: 0 !important; }

	/* posting form */
	#smiley-box, #message-box {
		float: none;
		width: auto;
	}
	#message-box textarea, input.inputbox { 
		width: 98%; 
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}
	.autowidth { width: 98% !important; max-width: 240px !important; }

	fieldset.quickmod { width: auto; }

	/* tabs */
	div.dropdown-tabs { 
		float: none;
		height: auto; 
		margin: 10px 0;
		padding: 0;
		background: transparent none;
	}
	div.dropdown-tabs + div.dropdown-tabs {
		border-top: 1px solid #c1c1c1;
		padding-top: 5px;
	}
	div.dropdown-tabs > a {
		display: none;
	}
	div.dropdown-tabs > ul {
		display: block;
		position: relative;
		top: 0;
		left: 0;
		background: transparent none !important;
		border-width: 0;
		border-radius: 0;
		z-index: 0;
	}
	#tabs li, #navigation li, .dropdown-tabs li, #tabs .dropdown-tabs li {
		float: none;
		clear: both;
	}
	.dropdown-tabs li, #tabs .dropdown-tabs li {
		border-width: 0;
		padding: 0;
	}
	#tabs li a, #navigation li a {
		display: block;
		float: none;
		background: #f4f4f4 none !important;
		padding: 7px 12px !important;
		line-height: 1.3em;
		width: auto;
		max-width: 200px;
		height: auto;
		text-align: center;
		margin: 5px auto !important;
		border: 1px solid #c8c8c8;
		border-radius: 15px;
	}
	#tabs li a span, #navigation li a span {
		background: transparent none !important;
		padding: 0;
		margin: 0;
		height: auto;
	}
	
	/* misc */
	#page-body > h2, #page-body > form > h2, #page-body > h3, #page-body > form > h3, div#message h2, #confirm h2, #agreement h2, #page-body h2.title a, #page-body h2.title a:visited {
		clear: both;
		float: none;
	}
}

@media only screen and (max-width: 500px), only screen and (max-device-width: 500px)
{
	/* forums/topics lists */
	ul.topiclist dt { 
		float: none;
		width: auto;
	}
	ul.topiclist dd { display: none; }
	ul.topiclist dd.mark { display: block; }
}
";s:10:"theme_path";s:7:"art_air";s:10:"theme_name";s:12:"Artodia: Air";s:11:"theme_mtime";s:10:"1380687534";s:11:"imageset_id";s:1:"2";s:13:"imageset_name";s:12:"Artodia: Air";s:18:"imageset_copyright";s:18:"&copy; Artodia.com";s:13:"imageset_path";s:7:"art_air";s:13:"template_path";s:7:"art_air";}}