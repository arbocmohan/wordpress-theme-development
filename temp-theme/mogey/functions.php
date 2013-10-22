<?php

// create custom plugin settings menu
add_action('admin_menu', 'expedite_create_menu');

function expedite_create_menu() {

	//create new top-level menu
	add_menu_page('expedite Plugin Settings', 'Expedite Settings', 'read_private_posts', basename(__FILE__), 'expedite_settings_page',get_bloginfo('template_directory').'/images/ex-settings.png');
	add_submenu_page(basename(__FILE__), __('Dashboard','appthemes'), __('Dashboard','appthemes'), 'read_private_posts',  basename(__FILE__), 'expedite_settings_page' );
	add_submenu_page(  basename(__FILE__), 'test','test', 'read_private_posts',  basename(__FILE__)."-1", 'cp_settings' );
	
	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}
add_action('admin_menu', 'register_my_custom_submenu_page');

function register_my_custom_submenu_page() {
	add_submenu_page(  basename(__FILE__), 'My Custom Submenu Page', 'My Custom Submenu Page', 'manage_options', 'my-custom-submenu-page', 'my_custom_submenu_page_callback' ); 
}

function my_custom_submenu_page_callback() {
	
	echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
		echo '<h2>My Custom Submenu Page</h2>';
	echo '</div>';

}
function cp_settings()
{
?>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>

	jQuery(document).ready(function() {
  // Handler for .ready() called.
  
   jQuery("div#tabs-wrap").tabs( {
        fx: {opacity: 'toggle', duration: 200},
        selected: 0, // set in theme-functions.php
        show: function() {
            var newIdx = jQuery('div#tabs-wrap').tabs('option', 'selected');
            jQuery('#setTabIndex').val(newIdx); // hidden field
        }
    });
});
</script>
<style>
/* admin main styles */
h2 { margin-bottom: 20px; }
.cptitle { margin: 0px !important; background: #DFDFDF repeat-x scroll left top; padding: 10px; font-family: Georgia, serif; font-weight: normal !important; letter-spacing: 1px; font-size: 18px; }
.container { background: #EAF3FA; padding: 10px; }
.maintable { font-family:"Lucida Grande","Lucida Sans Unicode",Arial,Verdana,sans-serif; background: #F9F9F9; margin-bottom: 20px; padding: 10px 0px; border:1px solid #E6E6E6; width: 100%;}
.mainrow { padding-bottom: 10px !important; border-bottom: 1px solid #E6E6E6 !important; float: left; margin: 0px 10px 10px 10px !important; }
.cptitledesc { font-size: 12px; font-weight:bold; width: 220px !important; margin-right: 20px !important; }
.forminp { width: 700px !important; vertical-align:middle !important; }
.forminp input, .forminp select { margin-bottom: 9px !important; padding: 5px !important; height:auto !important; }
.forminp textarea { margin-bottom: 9px !important; padding: 6px; }
.forminp input[readonly], .forminp select[readonly], .forminp select[disabled], .forminp textarea[readonly] {color:#AAAAAA; background-color:#EEEEEE; }
.forminp input:focus[readonly], .forminp select:focus[readonly], .forminp select:focus[disabled], .forminp textarea:focus[readonly] {color:#AAAAAA; background-color:#EEEEEE; }
.forminp input:focus, .forminp textarea:focus {border:1px solid #CCCCCC;background-color: #F9F9F9;}
.forminp input.upload_button {padding: 4px !important; -khtml-border-radius: 6px;-moz-border-radius: 6px;-webkit-border-radius: 6px;border-radius: 6px;}
.forminp .upload_image_preview {margin-top:7px;}
.info { background: #FFFFCC; border: 1px solid #E6DB55; padding: 10px; color: #333; -moz-border-radius: 3px;-khtml-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;}
.forminp .checkbox { width:20px }
.info a { color: #333; text-decoration: none; border-bottom: 1px dotted #333 }
.info a:hover { color: #666; border-bottom: 1px dotted #666; }
.warning { background: #FFEBE8; border: 1px solid #CC0000; padding: 10px; color: #333; -moz-border-radius: 3px;-khtml-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;}

/* images section legacy */
.one_category {border: 1px #5795C3 solid; margin-bottom: 30px; padding: 10px;}
.nothing {color: #FF0000; float: right;}
.one_category_name {background-color: #5795C3; text-align: center; color: #fff; font-size: 13px; padding: 3px 0;}
.one_cat_img {float: left;margin: 0 0px 5px 5px;padding: 2px;display: block;width: 40px;text-align: center;}
.one_cat_img:hover {background-color: #fff;}
input.form-table-radio{cursor: pointer;border: none;}
.classipress_images {height: 455px;	overflow: scroll;padding-top: 10px;	font-size: 10px;font-family: verdana;}
.oneimage-box {	padding-bottom: 20px;float: left;padding-left: 10px;width: 120px;}
.oneimage-box:hover {background-color: #F4F4F4;}
.oneimage {border: 4px #5795C3 solid;float: left;width: 100px;height: 100px;display: block;}
.del_image {background-color: #981401;padding: 3px 5px;	color: #fff;font-weight: bold;}

/* admin dashboard section */
.dash-left {float:left; width:49%; padding-right: .5%;}
.dash-right {float:left; width:49%; padding-right: .5%;}
div.dash-wrap {margin: 0 5px; min-height: 300px;}
#boxy {margin: 10px 0;}
ul#stats {font-size: 12px;}
.rsswidget {text-decoration: none; font-family:Georgia,"Times New Roman","Bitstream Charter",Times,serif; font-size:13px; line-height:1.7em;}
.rss-date {color:#999999;font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;font-size:11px;margin-left:3px;}
.rss-widget ul li {line-height:1.5em;}
.postbox .hndle {cursor:default;}
.postbox p, .postbox ul, .postbox ol, .postbox blockquote {font-size:11px;}

div.stats-info {float:left;width:45%;}
div.stats_overview { float: right; width: 45%; background: none repeat scroll 0 0 #F9F9F9; border: 1px solid #DFDFDF; -moz-border-radius: 5px;-webkit-border-radius: 5px;-o-border-radius: 5px;-khtml-border-radius: 5px;border-radius: 5px;}
.stats_overview, .overview_today {float: left; width: 50%;}
.stats_overview, .overview_previous {float: left; width: 50%;}
.stats_overview p.overview_day { font-size: 12px !important;color: #666666; font-weight: bold; margin-top: 6px;}
.stats_overview p {margin: 0;padding: 0;text-align: center;text-shadow: 0 1px 0 #FFFFFF;text-transform: uppercase;}
.stats_overview h3 {text-align: center;text-shadow: 0 1px 0 #FFFFFF;}
.stats_overview p.overview_count {color: #333333;font-size: 20px !important;font-weight: bold;}
.stats_overview p.overview_type em {background: none repeat scroll 0 0 #FFFBE4;border-radius: 3px 3px 3px 3px;padding: 1px 5px 2px;}
.stats_overview p.overview_type, .stats_overview p.overview_type_seek { color: #999999; font-size: 9px !important; margin-bottom: 7px;}
.stats_overview p.overview_type_seek em { background: none repeat scroll 0 0 #FFFBE4; border-radius: 3px 3px 3px 3px;padding: 1px 5px 2px;}

p.btop {padding:0px; margin-bottom:-5px;text-shadow: 0 1px 0 #FFFFFF;}
p.btop input {line-height: 15px;}
p.bbot {padding:0 0 30px 0; margin-top:-5px;text-shadow: 0 1px 0 #FFFFFF;}
p.bbot input {line-height: 15px;}

.postbox .statsico{float:left; height:25px; width:28px; background:transparent url(../../images/chart-bar.png) no-repeat scroll 6px 4px}
.postbox .newspaperico{float:left; height:25px; width:27px; background:transparent url(../../images/newspaper.png) no-repeat scroll 5px 5px}
.postbox .twitterico{float:left; height:25px; width:25px; background:transparent url(../../images/twitter-bird.png) no-repeat scroll 5px 5px}
.postbox .forumico{float:left; height:25px; width:27px; background:transparent url(../../images/comments.png) no-repeat scroll 6px 6px}
.postbox .rssico{float:right; height:25px; width:20px; background:transparent url(../../images/rss-sm.png) no-repeat scroll 0 8px}

.helpico{float:right; height:16px; width:16px; margin-left:7px; background:transparent url(../../images/help.png) no-repeat scroll 0 0}
.feedburnerico{float:left; height:16px; width:16px; padding-right:3px; background:transparent url(../../images/feedburner.png) no-repeat scroll 0 0}
.twitterico{float:left; height:16px; width:16px; padding-right:3px; background:transparent url(../../images/twitter.png) no-repeat scroll 0 0}
.facebookico{float:left; height:16px; width:16px; padding-right:3px; background:transparent url(../../images/facebook.png) no-repeat scroll 0 0}
.googleico{float:left; height:16px; width:16px; padding-right:3px; background:transparent url(../../images/google.png) no-repeat scroll 0 0}

#easyTooltip{ padding:10px; border:1px solid #ccc; background:#E3F4F9; width:400px; text-shadow: 0 1px 0 white; -moz-border-radius:8px; -webkit-border-radius: 8px; border-radius: 8px;}

.alt:hover, .even:hover{ background-color:#EAF2FA !important}
.widefat .column-id {width: 3.0em;vertical-align: top;}

/* error styles */
input.invalid, textarea.invalid, select.invalid{ background-color:#FFEBE8 !important; border-color:#C00 !important}
label.invalid{ float:none; font:bold 12px arial; color:#C00; padding-left:20px; vertical-align:top}
.updated p, .error p {line-height:1.2em !important;}

/* round out the category div corners */
#form-categorydiv div.tabs-panel{ overflow:auto; width:398px; height:250px; border: 1px solid #DFDFDF; -khtml-border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;}
ul#categorychecklist {padding:5px 10px; }
ul#categorychecklist li {padding:1px 0; }
ul#categorychecklist input {margin-bottom:0 !important;}
ul#categorychecklist label.selectit {}
ul#categorychecklist ul.children, ul#categorychecklist ul.children ul.children, ul#categorychecklist ul.children ul.children ul.children {margin-left:20px; }
.widefat tbody th.check-column{ padding:0 !important; vertical-align:middle !important}
div.fields-panel{height:250px; overflow:auto; width:400px; -moz-border-radius:4px !important}

#tblspacer{margin:20px 0}
.widefat td{padding:12px 7px; vertical-align:top}
span#curr{vertical-align:top}
input.radiobutt{vertical-align:text-top}
.admin-msg{ margin:10px 10px -10px 10px}

/* css for custom fields meta box on ad edit page */
#ad-meta-box table.ad-meta-table, #images-meta-box table.ad-meta-table { border-collapse: separate; margin-top: 0; background-color: #F9F9F9; border: 1px solid #DFDFDF; -khtml-border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; }
#ad-meta-box table.ad-meta-table th, #images-meta-box table.ad-meta-table th { font-weight: bold; background-color: #F1F1F1; -khtml-border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; }
#ad-meta-box td.ad-conf-id span, #images-meta-box td.ad-conf-id span { background-color: #DBDBDB; color: #666666; font-size: 11px; padding: 3px; text-shadow: 0 1px 0 #FFFFFF; }
#ad-meta-box input.text, #images-meta-box input.text { min-width:260px; }
#ad-meta-box img.avatar, #images-meta-box img.attachment-thumbnail { padding:2px; border: 1px solid #DFDFDF; float: left; margin-right: 5px; -khtml-border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; }
#ad-meta-box div.scrollbox, #images-meta-box div.scrollbox { float: left; max-height: 150px; min-width: 250px; overflow: auto; padding: 5px; -khtml-border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; }
#ad-meta-box ol.radios, #ad-meta-box ol.checkboxes, #images-meta-box ol.radios, #images-meta-box ol.checkboxes {list-style-type: none; padding: 0 10px 0 0; margin-left: 0px; }
#ad-meta-box li, #images-meta-box li { white-space: nowrap; padding: 0 20px 0 0; margin-bottom: 3px; }

#ad-meta-box table #ad-id, #ad-meta-box table #ad-stats {float:left; padding-right: 20px;}
#ad-meta-box table #statsico{float:left; padding-right: 5px; height:16px; width:16px; background:transparent url(../../images/chart-bar.png) no-repeat scroll 0 0; }
#ad-meta-box table #keyico{float:left; padding-right: 4px; height:16px; width:16px; background:transparent url(../../images/key.png) no-repeat scroll 0 0; }
#ui-datepicker-div {font-size: 12px;}

/* css for custom image fields meta box on ad edit page */
#images-meta-box  #imageid {display:none;}
#images-meta-box .upload_image_preview {margin-top:7px;}
#images-meta-box .upload_image_preview img {padding:3px; border: 1px solid #DFDFDF; -khtml-border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; }

/* css for date& timepicker */
#ui-datepicker-div {font-size:12px; }
.ui-datepicker-trigger { cursor: pointer; background: url(../../images/icon_calendar.png) no-repeat; margin:3px 0 0 5px; padding:0 10px 0;height:16px;width:16px; }
.ui-timepicker-div .ui-widget-header{ margin-bottom: 8px; }
.ui-timepicker-div dl{ text-align: left; }
.ui-timepicker-div dl dt{ height: 25px; }
.ui-timepicker-div dl dd{ margin: -25px 0 10px 65px; }
.ui-timepicker-div .ui_tpicker_hour div { padding-right: 2px; }
.ui-timepicker-div .ui_tpicker_minute div { padding-right: 6px; }
.ui-timepicker-div .ui_tpicker_second div { padding-right: 6px; }
.ui-timepicker-div td { font-size: 90%; }

/* refine search jquery slider */
.ui-slider { position: relative; text-align: left; }
.ui-slider .ui-slider-handle { position: absolute; z-index: 2; width: 1.2em; height: 1.2em; cursor: default; }
.ui-slider .ui-slider-range { position: absolute; z-index: 1; font-size: .7em; display: block; border: 0; background-position: 0 0; }
.ui-slider-horizontal { height: .8em; }
.ui-slider-horizontal .ui-slider-handle { top: -.3em; margin-left: -.6em; }
.ui-slider-horizontal .ui-slider-range { top: 0; height: 100%; }
.ui-slider-horizontal .ui-slider-range-min { left: 0; }
.ui-slider-horizontal .ui-slider-range-max { right: 0; }
.ui-slider-vertical { width: .8em; height: 100px; }
.ui-slider-vertical .ui-slider-handle { left: -.3em; margin-left: 0; margin-bottom: -.6em; }
.ui-slider-vertical .ui-slider-range { left: 0; width: 100%; }
.ui-slider-vertical .ui-slider-range-min { bottom: 0; }
.ui-slider-vertical .ui-slider-range-max { top: 0; }
.content_right div#slider-range, .content_right div#dist-slider{ margin:2px 0 10px; }
.content_right ul.refine .ui-widget-content {border: 1px solid #CCCCCC !important;}

/* admin ajax sorting styles */
tbody.ui-sortable tr {border-top:1px solid #dfdfdf;border-left:1px solid #dfdfdf;border-right:1px solid #dfdfdf;}
tbody.sortable tr.even:hover {cursor:move;}
tr.ui-placeholder { background-color: #dbdbdb;}
tr.ui-state-highlight { color: #F6F698; height: 5.5em; line-height: 1.2em;}
tr.ui-sortable-helper { height: 8.5em; line-height: 1.2em; background-color: #dbdbdb;}
span#loading img {margin-bottom:-1px;}

/* admin tabs */
#tabs-wrap ul.tabs {max-width: 810px;margin:25px 20px 0;}
#tabs-wrap ul.tabs li {background:none repeat scroll 0 0 #F4F4F4;border-color:#DFDFDF;font-weight:bold;margin-bottom:0;-moz-border-radius:5px 5px 0 0;-khtml-border-radius: 5px 5px 0 0;-webkit-border-radius: 5px 5px 0 0;border-radius: 5px 5px 0 0;border-style:solid;border-width:1px 1px 0;color:#C1C1C1;display:inline-block;font-size:12px;line-height:16px;margin:0 6px -1px 0;padding:4px 14px 6px;text-decoration:none;}
* html #tabs-wrap ul.tabs li{ display:inline; }  /* for IE 6 */
* + html #tabs-wrap ul.tabs li { display:inline; }  /* for IE 7 */
#tabs-wrap ul.tabs li a {text-decoration:none;text-shadow:0 1px 0 #FFFFFF;color:#C1C1C1;}
#tabs-wrap ul.tabs li.ui-state-active a, #tabs-wrap li a:hover{color:#464646;}
#tabs-wrap ul.tabs li.ui-state-active {background:none repeat scroll 0 0 #ECECEC;border-color:#CCCCCC;border-bottom:1px solid #ECECEC;border-width:1px;}
#tabs-wrap ul.tabs li.ui-state-active:hover {border-bottom:1px solid #ECECEC;}
#tabs-wrap ul.tabs li:hover {border-color:#CCCCCC;}

/* dashboard charts */
#placeholder {width:100%;height:250px;}
#charttooltip {font-size:11px;	border: 1px solid #e3e3e3;background-color: #f1f1f1;padding: 3px 7px;margin-left:15px;-khtml-border-radius: 6px;-moz-border-radius: 6px;-webkit-border-radius: 6px;border-radius: 6px;text-shadow:1px 1px 0 #ffffff;}
</style>
<div id="tabs-wrap" class="">


    <ul class="tabs">
<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tab0">General</a></li>
<li class="ui-state-default ui-corner-top"><a href="#tab1">Listings</a></li>
<li class="ui-state-default ui-corner-top"><a href="#tab2">Security</a></li>
<li class="ui-state-default ui-corner-top"><a href="#tab3">Advertising</a></li>
<li class="ui-state-default ui-corner-top"><a href="#tab4">Advanced</a></li>
</ul>

<div id="tab0" class="">

<table class="widefat fixed" style="width:850px; margin-bottom:20px;">


                <thead><tr><th scope="col" width="200px">Site Configuration</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_home_layout_row">
                    <td class="titledesc"><a href="#" tip="Select the layout you prefer for your home page. The directory style is a more traditional classified ads layout. The standard style is more like a blog layout." tabindex="99"><div class="helpico"></div></a>Home Page Layout:</td>
                    <td class="forminp"><select name="cp_home_layout" id="cp_home_layout" style="min-width:230px;">

                        
                            <option value="standard" selected="selected">Standard Style</option>

                        
                            <option value="directory">Directory Style</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_stylesheet_row">
                    <td class="titledesc"><a href="#" tip="Select the color scheme you would like your classified ads site to use." tabindex="99"><div class="helpico"></div></a>Color Scheme:</td>
                    <td class="forminp"><select name="cp_stylesheet" id="cp_stylesheet" style="min-width:230px;">

                        
                            <option value="aqua.css" selected="selected">Aqua Theme</option>

                        
                            <option value="blue.css">Blue Theme</option>

                        
                            <option value="green.css">Green Theme</option>

                        
                            <option value="red.css">Red Theme</option>

                        
                            <option value="teal.css">Teal Theme</option>

                        
                            <option value="aqua-black.css">Aqua Theme - Black Header</option>

                        
                            <option value="blue-black.css">Blue Theme - Black Header</option>

                        
                            <option value="green-black.css">Green Theme - Black Header</option>

                        
                            <option value="red-black.css">Red Theme - Black Header</option>

                        
                            <option value="teal-black.css">Teal Theme - Black Header</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_enable_coupons_row">
                    <td class="titledesc"><a href="#" tip="Turns on the coupon module so your ad forms include a coupon code field. You still need to create and setup coupons before coupons will work. You also must have &quot;Charge for Listing Ads&quot; option enabled." tabindex="99"><div class="helpico"></div></a>Enable Coupons:</td>
                    <td class="forminp"><select name="cp_enable_coupons" id="cp_enable_coupons" style="min-width:100px;">

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                            <option value="no">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_allow_registration_password_row">
                    <td class="titledesc"><a href="#" tip="Turning this off will send the user a password instead of letting them set it on the new user registration page." tabindex="99"><div class="helpico"></div></a>User Set Password:</td>
                    <td class="forminp"><select name="cp_allow_registration_password" id="cp_allow_registration_password" style="min-width:100px;">

                        
                            <option value="yes">Yes</option>

                        
                            <option value="no" selected="selected">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_portal_id_row">
                    <td class="titledesc"><a href="#" tip="Select the Portal for API Connection." tabindex="99"><div class="helpico"></div></a>Portal:</td>
                    <td class="forminp"><select name="cp_portal_id" id="cp_portal_id" style="min-width:230px;">

                        
                            <option value="Findaproperty.com">Findaproperty.com</option>

                        
                            <option value="Primelocation">Primelocation</option>

                        
                            <option value="Rightmove">Rightmove</option>

                        
                            <option value="Zoopla" selected="selected">Zoopla</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                            <tr id="cp_Zoopla_API_Key_row">
                    <td class="titledesc"><a href="#" tip="Enter Zoopla API Key" tabindex="99"><div class="helpico"></div></a>Zoopla API Key:</td>
                    <td class="forminp"><input name="cp_Zoopla_API_Key" id="cp_Zoopla_API_Key" type="text" style="min-width:230px;" value="k7w6ncyug98ku488eqdzehs5"><br><small></small></td>
                </tr>
            
            
                            <tr id="cp_Zoopla_Branch_Id_row">
                    <td class="titledesc"><a href="#" tip="Enter Zoopla Branch Id" tabindex="99"><div class="helpico"></div></a>Zoopla Branch Id:</td>
                    <td class="forminp"><input name="cp_Zoopla_Branch_Id" id="cp_Zoopla_Branch_Id" type="text" style="min-width:230px;" value=""><br><small></small></td>
                </tr>
            
            
                            <tr id="cp_Branch_Email_Address_row">
                    <td class="titledesc"><a href="#" tip="Enter Branch Email Address" tabindex="99"><div class="helpico"></div></a>Branch Email Address:</td>
                    <td class="forminp"><input name="cp_Branch_Email_Address" id="cp_Branch_Email_Address" type="text" style="min-width:230px;" value="22615:somuraja.j@paripoorna.in, 21720:jayachandran.v@paripoorna.in"><br><small></small></td>
                </tr>
            
            
                            <tr id="cp_head_office_id_row">
                    <td class="titledesc"><a href="#" tip="Enter Head Office Id" tabindex="99"><div class="helpico"></div></a>Head Office Id:</td>
                    <td class="forminp"><input name="cp_head_office_id" id="cp_head_office_id" type="text" style="min-width:230px;" value="8782"><br><small></small></td>
                </tr>
            
            
                            <tr id="cp_overseas_flag_row">
                    <td class="titledesc"><a href="#" tip="Enter 1 or 0" tabindex="99"><div class="helpico"></div></a>Include Overseas:</td>
                    <td class="forminp"><input name="cp_overseas_flag" id="cp_overseas_flag" type="text" style="min-width:230px;" value=""><br><small></small></td>
                </tr>
            
            
                            <tr id="cp_data_refresh_row">
                    <td class="titledesc"><a href="#" tip="Enter Data Refresh time out" tabindex="99"><div class="helpico"></div></a>Data Refresh:</td>
                    <td class="forminp"><input name="cp_data_refresh" id="cp_data_refresh" type="text" style="min-width:230px;" value="30"><script language="JavaScript"> function RefreshNowService(){ window.open('../service.php','_newtab');}</script> <input type="button" value="Refresh Now" onclick="RefreshNowService()"> <script language="JavaScript"> function RefreshImagesService(){ window.open('../service.php?action=forcepics','_newtab');}</script> <input type="button" value="Refresh Images" onclick="RefreshImagesService()"><br><small>For Example : 30</small></td>
                </tr>
            
            
                <tr id="cp_location_search_based_on_api_row">
                    <td class="titledesc"><a href="#" tip="Tick to enable location search via zoopla api" tabindex="99"><div class="helpico"></div></a>Location Search based on zoopla api:</td>
                    <td class="forminp"><input type="checkbox" name="cp_location_search_based_on_api" id="cp_location_search_based_on_api" value="true" style="" checked="checked">
                        <br><small>If disabled location search will be performed via google api</small>
                    </td>
                </tr>

            
                <tr id="cp_use_logo_row">
                    <td class="titledesc"><a href="#" tip="If you do not have a logo to use, select no and this will display the title and description of your web site instead." tabindex="99"><div class="helpico"></div></a>Enable Logo:</td>
                    <td class="forminp"><select name="cp_use_logo" id="cp_use_logo" style="min-width:100px;">

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                            <option value="no">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            				<tr>
					<td class="titledesc"><a href="#" tip="Paste the URL of your web site logo image here. It will replace the default header logo.(i.e. http://www.yoursite.com/logo.jpg)" tabindex="99"><div class="helpico"></div></a>Web Site Logo:</td>
					<td class="forminp">
						<input id="cp_logo" class="upload_image_url" type="text" style="min-width:398px;" name="cp_logo" value="">
						<input id="upload_image_button" class="upload_button button" rel="cp_logo" type="button" value="Upload Image">
												<br><small>Upload a logo or paste an image URL directly.</small>
						<div id="cp_logo_image" class="cp_logo_image upload_image_preview"></div>

					</td>
                </tr>

			
                            <tr id="cp_feedburner_url_row">
                    <td class="titledesc"><a href="#" tip="Paste your Feedburner address here. It will automatically redirect your default RSS feed to Feedburner. You must have a Google Feedburner account setup first." tabindex="99"><div class="helpico"></div></a>Feedburner URL:</td>
                    <td class="forminp"><input name="cp_feedburner_url" id="cp_feedburner_url" type="text" style="min-width:500px;" value=""><br><small><div class="feedburnerico"></div>Sign up for a free <a target="_new" href="http://feedburner.google.com">Feedburner account</a>.</small></td>
                </tr>
            
            
                            <tr id="cp_twitter_username_row">
                    <td class="titledesc"><a href="#" tip="Paste your Twitter username here. It will automatically redirect people who click on your Twitter link to your Twitter page. You must have a Twitter account setup first." tabindex="99"><div class="helpico"></div></a>Twitter Username:</td>
                    <td class="forminp"><input name="cp_twitter_username" id="cp_twitter_username" type="text" style="min-width:500px;" value=""><br><small><div class="twitterico"></div>Sign up for a free <a target="_new" href="http://twitter.com">Twitter account</a>.</small></td>
                </tr>
            
                            <tr id="cp_google_analytics_row">
                    <td class="titledesc"><a href="#" tip="Paste your analytics tracking code here. Google Analytics is free and the most popular but you can use other providers as well." tabindex="99"><div class="helpico"></div></a>Tracking Code:</td>
                    <td class="forminp">
                        <textarea name="cp_google_analytics" id="cp_google_analytics" style="width:500px;height:150px;"></textarea>
                        <br><small><div class="googleico"></div>Sign up for a free <a target="_new" href="http://www.google.com/analytics/">Google Analytics account</a>.</small>
                    </td>
                </tr>

            
                </tbody><thead><tr><th scope="col" width="200px">Google Maps Settings</th><th scope="col">&nbsp;</th></tr></thead>

            
                            <tbody><tr id="cp_gmaps_lang_row">
                    <td class="titledesc"><a href="#" tip="The Google Maps API uses the browsers language setting when displaying textual info on the map. In most cases, this is preferable and you should not need to override this setting. However, if you wish to change the Maps API to ignore the browsers language setting and force it to display info in a particular language, enter your two character region code here (i.e. Japanese is ja)." tabindex="99"><div class="helpico"></div></a>Google Maps Language:</td>
                    <td class="forminp"><input name="cp_gmaps_lang" id="cp_gmaps_lang" type="text" style="width:50px;" value=""><br><small>Find the list of supported language codes <a target="_new" href="http://spreadsheets.google.com/pub?key=p9pdwsai2hDMsLkXsoM05KQ&amp;gid=1">here</a>.</small></td>
                </tr>
            
            
                            <tr id="cp_gmaps_region_row">
                    <td class="titledesc"><a href="#" tip="Enter your country's two-letter region code here to properly display map locations. (i.e. Someone enters the location &quot;Toledo&quot;, it's based off the default region (US) and will display &quot;Toledo, Ohio&quot;. With the region code set to &quot;ES&quot; (Spain), the results will show &quot;Toledo, Spain.&quot;)" tabindex="99"><div class="helpico"></div></a>Google Maps Region:</td>
                    <td class="forminp"><input name="cp_gmaps_region" id="cp_gmaps_region" type="text" style="width:50px;" value=""><br><small>Find your two-letter ISO 3166-1 region code <a target="_new" href="http://en.wikipedia.org/wiki/ISO_3166-1">here</a>.</small></td>
                </tr>
            
            
                            <tr id="cp_gmaps_key_row">
                    <td class="titledesc"><a href="#" tip="Enter your API key here to enable an interactive Google map on each classified ads page (requires a free Google Maps API key.). Leave it blank if you want to disable Google Maps." tabindex="99"><div class="helpico"></div></a>Google Maps Key:</td>
                    <td class="forminp"><input name="cp_gmaps_key" id="cp_gmaps_key" type="text" style="min-width:500px;" value="AIzaSyAMbID9sqERbEJLxwXuocRLJ_Cyp9qBlbo"><br><small><div class="googleico"></div>Sign up for a free <a target="_new" href="http://code.google.com/apis/maps/signup.html">Google Maps API key</a>.</small></td>
                </tr>
            
            
                <tr id="cp_gmaps_loc_row">
                    <td class="titledesc"><a href="#" tip="Select your country from the list. If it is not listed, either use the USA/Default or use the text field below to enter your countries maps.google URL." tabindex="99"><div class="helpico"></div></a>Google Maps Location:</td>
                    <td class="forminp"><select name="cp_gmaps_loc" id="cp_gmaps_loc" style="min-width:200px;">

                        
                            <option value="http://maps.google.com">USA/Default</option>

                        
                            <option value="http://maps.google.at">Austria</option>

                        
                            <option value="http://maps.google.com.au">Australia</option>

                        
                            <option value="http://maps.google.com.ba">Bosnia and Herzegovina</option>

                        
                            <option value="http://maps.google.be">Belgium</option>

                        
                            <option value="http://maps.google.com.br">Brazil</option>

                        
                            <option value="http://maps.google.ca">Canada</option>

                        
                            <option value="http://maps.google.ch">Switzerland</option>

                        
                            <option value="http://maps.google.cz">Czech Republic</option>

                        
                            <option value="http://maps.google.de">Germany</option>

                        
                            <option value="http://maps.google.dk">Denmark</option>

                        
                            <option value="http://maps.google.es">Spain</option>

                        
                            <option value="http://maps.google.fi">Finland</option>

                        
                            <option value="http://maps.google.fr">France</option>

                        
                            <option value="http://maps.google.it">Italy</option>

                        
                            <option value="http://maps.google.co.jp">Japan</option>

                        
                            <option value="http://maps.google.nl">Netherlands</option>

                        
                            <option value="http://maps.google.no">Norway</option>

                        
                            <option value="http://maps.google.co.nz">New Zealand</option>

                        
                            <option value="http://maps.google.pl">Poland</option>

                        
                            <option value="http://maps.google.ru">Russia</option>

                        
                            <option value="http://maps.google.se">Sweden</option>

                        
                            <option value="http://maps.google.tw">Taiwan</option>

                        
                            <option value="http://maps.google.co.uk" selected="selected">United Kingdom</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                            <tr id="cp_gmaps_loc_txt_row">
                    <td class="titledesc"><a href="#" tip="Not all countries have a Google Maps URL. If yours isn't listed in the drop-down above, it wasn't available. If you find your maps.google country URL, paste it here instead. It will override the drop-down option you selected above." tabindex="99"><div class="helpico"></div></a>Google Maps Location Other:</td>
                    <td class="forminp"><input name="cp_gmaps_loc_txt" id="cp_gmaps_loc_txt" type="text" style="min-width:500px;" value=""><br><small>Format should be based on your country http://maps.google.co.jp</small></td>
                </tr>
            
            
                </tbody><thead><tr><th scope="col" width="200px">Search Settings</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_search_ex_pages_row">
                    <td class="titledesc"><a href="#" tip="Set this option to yes if you do not want your pages to show up in your website search results." tabindex="99"><div class="helpico"></div></a>Exclude Pages:</td>
                    <td class="forminp"><select name="cp_search_ex_pages" id="cp_search_ex_pages" style="min-width:100px;">

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                            <option value="no">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_search_ex_blog_row">
                    <td class="titledesc"><a href="#" tip="Set this option to yes if you do not want your blog posts to show up in your website search results." tabindex="99"><div class="helpico"></div></a>Exclude Blog Posts:</td>
                    <td class="forminp"><select name="cp_search_ex_blog" id="cp_search_ex_blog" style="min-width:100px;">

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                            <option value="no">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_search_custom_fields_row">
                    <td class="titledesc"><a href="#" tip="Set this option to yes if you want to search a phrase in all custom fields." tabindex="99"><div class="helpico"></div></a>Search Custom Fields:</td>
                    <td class="forminp"><select name="cp_search_custom_fields" id="cp_search_custom_fields" style="min-width:100px;">

                        
                            <option value="yes">Yes</option>

                        
                            <option value="no" selected="selected">No</option>

                        
                       </select><br><small>This option may slow down search engine on your website due to complex database queries.</small>
                    </td>
                </tr>

            
                            <tr id="cp_search_field_width_row">
                    <td class="titledesc"><a href="#" tip="Sometimes the search bar text field is too long and gets pushed down becuase of the categories drop-down. This option allows you to manually adjust it. Note: value must be numeric followed by either px or % (i.e. 600px or 50%). The default is 450px." tabindex="99"><div class="helpico"></div></a>Search Field Width:</td>
                    <td class="forminp"><input name="cp_search_field_width" id="cp_search_field_width" type="text" style="width:100px;" value="450px"><br><small></small></td>
                </tr>
            
            
                <tr id="cp_distance_unit_row">
                    <td class="titledesc"><a href="#" tip="Defines the radius unit for search." tabindex="99"><div class="helpico"></div></a>Distance Unit:</td>
                    <td class="forminp"><select name="cp_distance_unit" id="cp_distance_unit" style="width:100px;">

                        
                            <option value="mi" selected="selected">Miles</option>

                        
                            <option value="km">Kilometers</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                </tbody><thead><tr><th scope="col" width="200px">Search Drop-down Options</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_search_depth_row">
                    <td class="titledesc"><a href="#" tip="This sets the depth of categories shown in the category drop-down. Use 'Show All' unless you have a lot of sub-categories and do not want them all listed." tabindex="99"><div class="helpico"></div></a>Category Depth:</td>
                    <td class="forminp"><select name="cp_search_depth" id="cp_search_depth" style="min-width:100px;">

                        
                            <option value="0" selected="selected">Show All</option>

                        
                            <option value="1">1</option>

                        
                            <option value="2">2</option>

                        
                            <option value="3">3</option>

                        
                            <option value="4">4</option>

                        
                            <option value="5">5</option>

                        
                            <option value="6">6</option>

                        
                            <option value="7">7</option>

                        
                            <option value="8">8</option>

                        
                            <option value="9">9</option>

                        
                            <option value="10">10</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_cat_hierarchy_row">
                    <td class="titledesc"><a href="#" tip="This will indent sub-categories within the category drop-down vs showing them all flat." tabindex="99"><div class="helpico"></div></a>Category Hierarchy:</td>
                    <td class="forminp"><select name="cp_cat_hierarchy" id="cp_cat_hierarchy" style="width:100px;">

                        
                            <option value="1" selected="selected">Yes</option>

                        
                            <option value="0">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_cat_count_row">
                    <td class="titledesc"><a href="#" tip="This will show an ad total next to each category name in the category drop-down." tabindex="99"><div class="helpico"></div></a>Show Ad Count:</td>
                    <td class="forminp"><select name="cp_cat_count" id="cp_cat_count" style="width:100px;">

                        
                            <option value="1">Yes</option>

                        
                            <option value="0" selected="selected">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_cat_hide_empty_row">
                    <td class="titledesc"><a href="#" tip="This will hide any empty categories within the category drop-down." tabindex="99"><div class="helpico"></div></a>Hide Empty Categories:</td>
                    <td class="forminp"><select name="cp_cat_hide_empty" id="cp_cat_hide_empty" style="width:100px;">

                        
                            <option value="1" selected="selected">Yes</option>

                        
                            <option value="0">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                </tbody><thead><tr><th scope="col" width="200px">Categories Menu Item Options</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_cat_menu_count_row">
                    <td class="titledesc"><a href="#" tip="This will show an ad total next to category name." tabindex="99"><div class="helpico"></div></a>Show Category Count:</td>
                    <td class="forminp"><input type="checkbox" name="cp_cat_menu_count" id="cp_cat_menu_count" value="true" style="">
                        <br><small>Check this box to display category count.</small>
                    </td>
                </tr>

            
                <tr id="cp_cat_menu_hide_empty_row">
                    <td class="titledesc"><a href="#" tip="This will hide empty sub-categories under parent category." tabindex="99"><div class="helpico"></div></a>Hide Empty Sub-Categories:</td>
                    <td class="forminp"><input type="checkbox" name="cp_cat_menu_hide_empty" id="cp_cat_menu_hide_empty" value="true" style="">
                        <br><small>Check this box to hide empty sub-categories.</small>
                    </td>
                </tr>

            
                <tr id="cp_cat_menu_depth_row">
                    <td class="titledesc"><a href="#" tip="This sets the depth limit of parent category." tabindex="99"><div class="helpico"></div></a>Category Depth:</td>
                    <td class="forminp"><select name="cp_cat_menu_depth" id="cp_cat_menu_depth" style="min-width:100px;">

                        
                            <option value="999">Show All</option>

                        
                            <option value="0">0</option>

                        
                            <option value="1">1</option>

                        
                            <option value="2">2</option>

                        
                            <option value="3" selected="selected">3</option>

                        
                            <option value="4">4</option>

                        
                            <option value="5">5</option>

                        
                            <option value="6">6</option>

                        
                            <option value="7">7</option>

                        
                            <option value="8">8</option>

                        
                            <option value="9">9</option>

                        
                            <option value="10">10</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_cat_menu_sub_num_row">
                    <td class="titledesc"><a href="#" tip="This sets the number of sub-categories shown under each category item." tabindex="99"><div class="helpico"></div></a>Number of Sub-Categories:</td>
                    <td class="forminp"><select name="cp_cat_menu_sub_num" id="cp_cat_menu_sub_num" style="min-width:100px;">

                        
                            <option value="999">Show All</option>

                        
                            <option value="0">0</option>

                        
                            <option value="1">1</option>

                        
                            <option value="2">2</option>

                        
                            <option value="3" selected="selected">3</option>

                        
                            <option value="4">4</option>

                        
                            <option value="5">5</option>

                        
                            <option value="6">6</option>

                        
                            <option value="7">7</option>

                        
                            <option value="8">8</option>

                        
                            <option value="9">9</option>

                        
                            <option value="10">10</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                </tbody><thead><tr><th scope="col" width="200px">Categories Page Options</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_cat_dir_count_row">
                    <td class="titledesc"><a href="#" tip="This will show an ad total next to category name." tabindex="99"><div class="helpico"></div></a>Show Category Count:</td>
                    <td class="forminp"><input type="checkbox" name="cp_cat_dir_count" id="cp_cat_dir_count" value="true" style="">
                        <br><small>Check this box to display category count.</small>
                    </td>
                </tr>

            
                <tr id="cp_cat_dir_hide_empty_row">
                    <td class="titledesc"><a href="#" tip="This will hide empty sub-categories under parent category." tabindex="99"><div class="helpico"></div></a>Hide Empty Sub-Categories:</td>
                    <td class="forminp"><input type="checkbox" name="cp_cat_dir_hide_empty" id="cp_cat_dir_hide_empty" value="true" style="">
                        <br><small>Check this box to hide empty sub-categories.</small>
                    </td>
                </tr>

            
                <tr id="cp_cat_dir_depth_row">
                    <td class="titledesc"><a href="#" tip="This sets the depth limit of parent category." tabindex="99"><div class="helpico"></div></a>Category Depth:</td>
                    <td class="forminp"><select name="cp_cat_dir_depth" id="cp_cat_dir_depth" style="min-width:100px;">

                        
                            <option value="999">Show All</option>

                        
                            <option value="0">0</option>

                        
                            <option value="1">1</option>

                        
                            <option value="2">2</option>

                        
                            <option value="3" selected="selected">3</option>

                        
                            <option value="4">4</option>

                        
                            <option value="5">5</option>

                        
                            <option value="6">6</option>

                        
                            <option value="7">7</option>

                        
                            <option value="8">8</option>

                        
                            <option value="9">9</option>

                        
                            <option value="10">10</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_cat_dir_sub_num_row">
                    <td class="titledesc"><a href="#" tip="This sets the number of sub-categories shown under each category item." tabindex="99"><div class="helpico"></div></a>Number of Sub-Categories:</td>
                    <td class="forminp"><select name="cp_cat_dir_sub_num" id="cp_cat_dir_sub_num" style="min-width:100px;">

                        
                            <option value="999">Show All</option>

                        
                            <option value="0">0</option>

                        
                            <option value="1">1</option>

                        
                            <option value="2">2</option>

                        
                            <option value="3" selected="selected">3</option>

                        
                            <option value="4">4</option>

                        
                            <option value="5">5</option>

                        
                            <option value="6">6</option>

                        
                            <option value="7">7</option>

                        
                            <option value="8">8</option>

                        
                            <option value="9">9</option>

                        
                            <option value="10">10</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_cat_dir_cols_row">
                    <td class="titledesc"><a href="#" tip="This sets the number of columns shown on the directory-style home page layout." tabindex="99"><div class="helpico"></div></a>Number of Columns:</td>
                    <td class="forminp"><select name="cp_cat_dir_cols" id="cp_cat_dir_cols" style="min-width:100px;">

                        
                            <option value="2" selected="selected">2</option>

                        
                            <option value="3">3</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                </tbody><thead><tr><th scope="col" width="200px">Classified Ads Messages</th><th scope="col">&nbsp;</th></tr></thead>

                            <tbody><tr id="cp_ads_welcome_msg_row">
                    <td class="titledesc"><a href="#" tip="This welcome message will appear in the sidebar of your home page. (HTML is allowed)" tabindex="99"><div class="helpico"></div></a>Home Page Message:</td>
                    <td class="forminp">
                        <textarea name="cp_ads_welcome_msg" id="cp_ads_welcome_msg" style="width:500px;height:200px;">&lt;h2 class="colour_top"&gt;Welcome to our Web site!&lt;/h2&gt;

&lt;h1&gt;&lt;span class="colour"&gt;List Your Classified Ads&lt;/span&gt;&lt;/h1&gt;

&lt;p&gt;We are your #1 classified ad listing site. Become a free member and start listing your classified ads within minutes. Manage all ads from your personalized dashboard.&lt;/p&gt;</textarea>
                        <br><small></small>
                    </td>
                </tr>

                            <tr id="cp_ads_form_msg_row">
                    <td class="titledesc"><a href="#" tip="This message will appear at the top of the classified ads listing page. (HTML is allowed)" tabindex="99"><div class="helpico"></div></a>New Ad Message:</td>
                    <td class="forminp">
                        <textarea name="cp_ads_form_msg" id="cp_ads_form_msg" style="width:500px;height:200px;">&lt;p&gt;Please fill in the fields below to post your classified ad. Required fields are denoted by a *. You will be given the opportunity to review your ad before it is posted.&lt;/p&gt;

&lt;p&gt;Neque porro quisquam est qui dolorem rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit asp.&lt;/p&gt;

&lt;p&gt;&lt;em&gt;&lt;span class="colour"&gt;Rui nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquaear diff, and optional ceramic brake rotors can now all be orchestrated al fresco.&lt;/span&gt;&lt;/em&gt;&lt;/p&gt;

&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunsciunt. Neque porro quisquam est, qui dolorem ipsum.&lt;/p&gt;</textarea>
                        <br><small></small>
                    </td>
                </tr>

                            <tr id="cp_membership_form_msg_row">
                    <td class="titledesc"><a href="#" tip="This message will appear at the top of the classified ads listing page. (HTML is allowed)" tabindex="99"><div class="helpico"></div></a>Membership Purchase Message:</td>
                    <td class="forminp">
                        <textarea name="cp_membership_form_msg" id="cp_membership_form_msg" style="width:500px;height:200px;">&lt;p&gt;Please select a membership package that you would like to purchase for your account.&lt;/p&gt;

&lt;p&gt;Neque porro quisquam est qui dolorem rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit asp.&lt;/p&gt;

&lt;p&gt;&lt;em&gt;&lt;span class="colour"&gt;Please note that changing membership plans before your current membership expires will cancel your current membership with no refund.&lt;/span&gt;&lt;/em&gt;&lt;/p&gt;</textarea>
                        <br><small></small>
                    </td>
                </tr>

                            <tr id="cp_ads_tou_msg_row">
                    <td class="titledesc"><a href="#" tip="This message will appear on the last step of your classified ad listing page. This is usually your legal disclaimer or rules for posting new ads on your site. (HTML is allowed)" tabindex="99"><div class="helpico"></div></a>Terms of Use:</td>
                    <td class="forminp">
                        <textarea name="cp_ads_tou_msg" id="cp_ads_tou_msg" style="width:500px;height:200px;">&lt;h3&gt;RULES AND GUIDELINES&lt;/h3&gt;
By posting your classified ad here, you agree that it is in compliance with our guidelines listed below.&lt;br/&gt;&lt;br/&gt;

We reserve the right to modify any ads in violation of our guidelines order to prevent abuse and keep the content appropriate for our general audience. This includes people of all ages, races, religions, and nationalities. Therefore, all ads that are in violation of our guidelines are subject to being removed immediately and without prior notice.&lt;br/&gt;&lt;br/&gt;

By posting an ad on our site, you agree to the following statement:&lt;br/&gt;&lt;br/&gt;

I agree that I will be solely responsible for the content of any classified ads that I post on this website. I will not hold the owner of this website responsible for any losses or damages to myself or to others that may result directly or indirectly from any ads that I post here.&lt;br/&gt;&lt;br/&gt;

By posting an ad on our site, you further agree to the following guidelines:&lt;br/&gt;&lt;br/&gt;

&lt;ol&gt;
   &lt;li&gt;No foul or otherwise inappropriate language will be tolerated. Ads in violation of this rule are subject to being removed immediately and without warning. If it was a paid ad, no refund will be issues.&lt;/li&gt;
   &lt;li&gt;No racist, hateful, or otherwise offensive comments will be tolerated.&lt;/li&gt;
   &lt;li&gt;No ad promoting activities that are illegal under the current laws of this state or country.&lt;/li&gt;
   &lt;li&gt;Any ad that appears to be merely a test posting, a joke, or otherwise insincere or non-serious is subject to removal.&lt;/li&gt;
   &lt;li&gt;We reserve the ultimate discretion as to which ads, if any, are in violation of these guidelines.&lt;/li&gt;
&lt;/ol&gt;
&lt;br/&gt;&lt;br/&gt;
Thank you for your understanding.&lt;br/&gt;&lt;br/&gt;</textarea>
                        <br><small></small>
                    </td>
                </tr>

            </tbody></table>

</div> <!-- #tab0 -->

<div id="tab1" class="ui-tabs-hide">

<table class="widefat fixed" style="width:850px; margin-bottom:20px;">


                <thead><tr><th scope="col" width="200px">Classified Ads Configuration</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_ad_edit_row">
                    <td class="titledesc"><a href="#" tip="Allows the ad owner to edit and republish their existing ads from their dashboard." tabindex="99"><div class="helpico"></div></a>Allow Ad Editing:</td>
                    <td class="forminp"><select name="cp_ad_edit" id="cp_ad_edit" style="min-width:100px;">

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                            <option value="no">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_ad_parent_posting_row">
                    <td class="titledesc"><a href="#" tip="Allows ad poster to post to top-level categories. If set to &quot;When Empty&quot;, it allows posting to top-level categories only if they have no child categories." tabindex="99"><div class="helpico"></div></a>Allow Parent Category Posting:</td>
                    <td class="forminp"><select name="cp_ad_parent_posting" id="cp_ad_parent_posting" style="min-width:100px;">

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                            <option value="whenEmpty">When Empty</option>

                        
                            <option value="no">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_ad_inquiry_form_row">
                    <td class="titledesc"><a href="#" tip="Require visitors to be logged in before they can fill out the ad inquiry form. In most cases you should keep this set to no to encourage visitors to ask questions without having to create an account." tabindex="99"><div class="helpico"></div></a>Ad Inquiry Form Requires Login:</td>
                    <td class="forminp"><select name="cp_ad_inquiry_form" id="cp_ad_inquiry_form" style="min-width:100px;">

                        
                            <option value="yes">Yes</option>

                        
                            <option value="no" selected="selected">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_allow_html_row">
                    <td class="titledesc"><a href="#" tip="Turns on the TinyMCE editor on text area fields and allows the ad owner to use html markup. Other fields do not allow html by default." tabindex="99"><div class="helpico"></div></a>Allow HTML:</td>
                    <td class="forminp"><select name="cp_allow_html" id="cp_allow_html" style="min-width:100px;">

                        
                            <option value="yes">Yes</option>

                        
                            <option value="no" selected="selected">No</option>

                        
                       </select><br><small>The WordPress <a href="options-media.php">auto-embeds</a> option must be unchecked to completely disable HTML (YouTube, Flickr, etc).</small>
                    </td>
                </tr>

            
                <tr id="cp_allow_relist_row">
                    <td class="titledesc"><a href="#" tip="This will allow ad owners to pay and relist their expired ads under the original terms (price and duration). They will receive an ad expiration email with a link to their dashboard to relist. This option is not applicable for free or legacy ads (before CP v3.0)." tabindex="99"><div class="helpico"></div></a>Allow Ad Relisting:</td>
                    <td class="forminp"><select name="cp_allow_relist" id="cp_allow_relist" style="min-width:100px;">

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                            <option value="no">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_ad_stats_all_row">
                    <td class="titledesc"><a href="#" tip="This will show a 'total views' and 'today's views' at the bottom of each ad listing and blog post." tabindex="99"><div class="helpico"></div></a>Show Ad Views Counter:</td>
                    <td class="forminp"><select name="cp_ad_stats_all" id="cp_ad_stats_all" style="min-width:100px;">

                        
                            <option value="yes">Yes</option>

                        
                            <option value="no" selected="selected">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_ad_gravatar_thumb_row">
                    <td class="titledesc"><a href="#" tip="This will show a picture of the author next to their name on each ad listing block. A placeholder image will be used if they don't have one." tabindex="99"><div class="helpico"></div></a>Show Gravatar Thumbnail:</td>
                    <td class="forminp"><select name="cp_ad_gravatar_thumb" id="cp_ad_gravatar_thumb" style="min-width:100px;">

                        
                            <option value="yes">Yes</option>

                        
                            <option value="no" selected="selected">No</option>

                        
                       </select><br><small>Note: Enabling this may slow down your site.</small>
                    </td>
                </tr>

            
                <tr id="cp_post_status_row">
                    <td class="titledesc"><a href="#" tip="&lt;i&gt;Pending Review&lt;/i&gt; - You have to manually approve and publish each ad. &lt;br /&gt;&lt;i&gt;Published&lt;/i&gt; - Ad goes live immediately without any approvals unless it has not been paid for." tabindex="99"><div class="helpico"></div></a>New Ad Status:</td>
                    <td class="forminp"><select name="cp_post_status" id="cp_post_status" style="min-width:150px;">

                        
                            <option value="pending" selected="selected">Pending Review</option>

                        
                            <option value="publish">Published</option>

                        
                       </select><br><small>Note: If you have the 'Charge for Listing Ads' option set to 'Yes', then each ad will automatically be set to Pending Review until payment is made (regardless of this options value.).</small>
                    </td>
                </tr>

            
                <tr id="cp_post_prune_row">
                    <td class="titledesc"><a href="#" tip="Automatically removes all listings from your site as they expire and changes the post status to draft. The frequency is based on the Cron Job Schedule set below and after each ad listing is past the expiration date. If no is selected, the ad will remain live on your site but will be marked as expired." tabindex="99"><div class="helpico"></div></a>Prune Ads:</td>
                    <td class="forminp"><select name="cp_post_prune" id="cp_post_prune" style="min-width:100px;">

                        
                            <option value="yes">Yes</option>

                        
                            <option value="no" selected="selected">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_ad_expired_check_recurrance_row">
                    <td class="titledesc"><a href="#" tip="Frequency you would like ClassiPress to check for and take offline any expired ads. Twice daily is recommended. Hourly may cause performance issues if you have a lot of ads." tabindex="99"><div class="helpico"></div></a>Cron Job Schedule:</td>
                    <td class="forminp"><select name="cp_ad_expired_check_recurrance" id="cp_ad_expired_check_recurrance" style="min-width:100px;">

                        
                            <option value="none">None</option>

                        
                            <option value="hourly">Hourly</option>

                        
                            <option value="twicedaily">Twice Daily</option>

                        
                            <option value="daily" selected="selected">Daily</option>

                        
                       </select><br><small>Note: This feature only works if you have the Prune Ads option above set to yes.</small>
                    </td>
                </tr>

            
                            <tr id="cp_prun_period_row">
                    <td class="titledesc"><a href="#" tip="Number of days each ad will be listed on your site. This option is overridden by ad packs if you are charging for ads and using the Fixed Price Per Ad option. " tabindex="99"><div class="helpico"></div></a>Ad Listing Period:</td>
                    <td class="forminp"><input name="cp_prun_period" id="cp_prun_period" type="text" style="width:75px;" value="90"><br><small></small></td>
                </tr>
            
            
                            <tr id="cp_form_val_lang_row">
                    <td class="titledesc"><a href="#" tip="This option allows you to set the language your ad submission form error messages are displayed in. Enter your two-letter country code (i.e. for German enter de). Not all languages have been translated but you can always add your own. To see the available languages, look in your /classipress/includes/js/validate/localization folder." tabindex="99"><div class="helpico"></div></a>Form Validation Language:</td>
                    <td class="forminp"><input name="cp_form_val_lang" id="cp_form_val_lang" type="text" style="width:75px;" value=""><br><small>Leave this value blank if your site is in English.</small></td>
                </tr>
            
            
                </tbody><thead><tr><th scope="col" width="200px">Ad Images Options</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_ad_images_row">
                    <td class="titledesc"><a href="#" tip="Allows the ad owner to upload and use images on their ad. Note: This will disable display of most ad images across the entire site but some images may still display." tabindex="99"><div class="helpico"></div></a>Allow Ad Images:</td>
                    <td class="forminp"><select name="cp_ad_images" id="cp_ad_images" style="min-width:100px;">

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                            <option value="no">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_ad_image_preview_row">
                    <td class="titledesc"><a href="#" tip="Displays a larger image when you mouse over the smaller thumbnail image. This is on your home page, category, search results, etc. " tabindex="99"><div class="helpico"></div></a>Show Preview Image:</td>
                    <td class="forminp"><select name="cp_ad_image_preview" id="cp_ad_image_preview" style="min-width:100px;">

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                            <option value="no">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_num_images_row">
                    <td class="titledesc"><a href="#" tip="The number of images the ad owner can upload with each of their ads." tabindex="99"><div class="helpico"></div></a>Max Images Per Ad:</td>
                    <td class="forminp"><select name="cp_num_images" id="cp_num_images" style="min-width:100px;">

                        
                            <option value="1">1</option>

                        
                            <option value="2">2</option>

                        
                            <option value="3" selected="selected">3</option>

                        
                            <option value="4">4</option>

                        
                            <option value="5">5</option>

                        
                            <option value="6">6</option>

                        
                            <option value="7">7</option>

                        
                            <option value="8">8</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_max_image_size_row">
                    <td class="titledesc"><a href="#" tip="The maximum image size (per image) the ad owner can upload with each of their ads." tabindex="99"><div class="helpico"></div></a>Max Size Per Image:</td>
                    <td class="forminp"><select name="cp_max_image_size" id="cp_max_image_size" style="min-width:100px;">

                        
                            <option value="100">100KB</option>

                        
                            <option value="250">250KB</option>

                        
                            <option value="500" selected="selected">500KB</option>

                        
                            <option value="1024">1MB</option>

                        
                            <option value="2048">2MB</option>

                        
                            <option value="5120">5MB</option>

                        
                            <option value="7168">7MB</option>

                        
                            <option value="10240">10MB</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            </tbody></table>

</div> <!-- #tab1 -->

<div id="tab2" class="ui-tabs-hide">

<table class="widefat fixed" style="width:850px; margin-bottom:20px;">


                <thead><tr><th scope="col" width="200px">Security Settings</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_admin_security_row">
                    <td class="titledesc"><a href="#" tip="Allows you to restrict access to the WordPress Back Office (wp-admin) by specific role. Keeping this set to admins only is recommended. Select Disable if you have problems with this feature.  (This feature does not work with WPMU at this time)." tabindex="99"><div class="helpico"></div></a>Back Office Access:</td>
                    <td class="forminp"><select name="cp_admin_security" id="cp_admin_security" style="min-width:100px;">

                        
                            <option value="manage_options">Admins Only</option>

                        
                            <option value="edit_others_posts">Admins, Editors</option>

                        
                            <option value="publish_posts">Admins, Editors, Authors</option>

                        
                            <option value="edit_posts">Admins, Editors, Authors, Contributors</option>

                        
                            <option value="read" selected="selected">All Access</option>

                        
                            <option value="disable">Disable</option>

                        
                       </select><br><small>View the WordPress <a target="_new" href="http://codex.wordpress.org/Roles_and_Capabilities">Roles and Capabilities</a> for more information.</small>
                    </td>
                </tr>

            
                </tbody><thead><tr><th scope="col" width="200px">reCaptcha Settings</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_captcha_enable_row">
                    <td class="titledesc"><a href="#" tip="Set this option to yes to enable the reCaptcha service that will protect your site against spam registrations. It will show a verification box on your registration page that requires a human to read and enter the words." tabindex="99"><div class="helpico"></div></a>Enable reCaptcha:</td>
                    <td class="forminp"><select name="cp_captcha_enable" id="cp_captcha_enable" style="width:100px;">

                        
                            <option value="yes">Yes</option>

                        
                            <option value="no" selected="selected">No</option>

                        
                       </select><br><small>reCaptcha is a free anti-spam service provided by Google. Learn more about <a target="_new" href="http://code.google.com/apis/recaptcha/">reCaptcha</a>.</small>
                    </td>
                </tr>

            
                            <tr id="cp_captcha_public_key_row">
                    <td class="titledesc"><a href="#" tip="Enter your public key here to enable an anti-spam service on your new user registration page (requires a free Google reCaptcha account). Leave it blank if you do not wish to use this anti-spam feature." tabindex="99"><div class="helpico"></div></a>reCaptcha Public Key:</td>
                    <td class="forminp"><input name="cp_captcha_public_key" id="cp_captcha_public_key" type="text" style="min-width:500px;" value=""><br><small><div class="captchaico"></div>Sign up for a free <a target="_new" href="https://www.google.com/recaptcha/admin/create">Google reCaptcha</a> account.</small></td>
                </tr>
            
            
                            <tr id="cp_captcha_private_key_row">
                    <td class="titledesc"><a href="#" tip="Enter your private key here to enable an anti-spam service on your new user registration page (requires a free Google reCaptcha account). Leave it blank if you do not wish to use this anti-spam feature." tabindex="99"><div class="helpico"></div></a>reCaptcha Private Key:</td>
                    <td class="forminp"><input name="cp_captcha_private_key" id="cp_captcha_private_key" type="text" style="min-width:500px;" value=""><br><small><div class="captchaico"></div>Sign up for a free <a target="_new" href="https://www.google.com/recaptcha/admin/create">Google reCaptcha</a> account.</small></td>
                </tr>
            
            
                <tr id="cp_captcha_theme_row">
                    <td class="titledesc"><a href="#" tip="Select the color scheme you wish to use for reCaptcha." tabindex="99"><div class="helpico"></div></a>Choose Theme:</td>
                    <td class="forminp"><select name="cp_captcha_theme" id="cp_captcha_theme" style="width:100px;">

                        
                            <option value="red" selected="selected">Red</option>

                        
                            <option value="white">White</option>

                        
                            <option value="blackglass">Black</option>

                        
                            <option value="clean">Clean</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            </tbody></table>

</div> <!-- #tab2 -->

<div id="tab3" class="ui-tabs-hide">

<table class="widefat fixed" style="width:850px; margin-bottom:20px;">


                <thead><tr><th scope="col" width="200px">Header Ad (468x60)</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_adcode_468x60_enable_row">
                    <td class="titledesc"><a href="#" tip="Set this option to no if you do not wish to have a 468x60 ad banner displayed." tabindex="99"><div class="helpico"></div></a>Enable Ad:</td>
                    <td class="forminp"><select name="cp_adcode_468x60_enable" id="cp_adcode_468x60_enable" style="width:100px;">

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                            <option value="no">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

                            <tr id="cp_adcode_468x60_row">
                    <td class="titledesc"><a href="#" tip="You may use html and/or javascript code provided by Google AdSense." tabindex="99"><div class="helpico"></div></a>Ad Code:</td>
                    <td class="forminp">
                        <textarea name="cp_adcode_468x60" id="cp_adcode_468x60" style="width:500px;height:200px;"></textarea>
                        <br><small>Paste your ad code here. Supports many popular providers such as <a target="_new" href="http://www.google.com/adsense/">Google AdSense</a> and <a target="_new" href="http://www.buysellads.com/">BuySellAds</a>.</small>
                    </td>
                </tr>

            				<tr>
					<td class="titledesc"><a href="#" tip="If you would rather use an image ad instead of code provided by your advertiser, use this field instead." tabindex="99"><div class="helpico"></div></a>Ad Image URL:</td>
					<td class="forminp">
						<input id="cp_adcode_468x60_url" class="upload_image_url" type="text" style="min-width:398px;" name="cp_adcode_468x60_url" value="">
						<input id="upload_image_button" class="upload_button button" rel="cp_adcode_468x60_url" type="button" value="Upload Image">
												<br><small>Upload your ad creative or paste the ad creative URL directly.</small>
						<div id="cp_adcode_468x60_url_image" class="cp_adcode_468x60_url_image upload_image_preview"></div>

					</td>
                </tr>

			
                            <tr id="cp_adcode_468x60_dest_row">
                    <td class="titledesc"><a href="#" tip="When a visitor clicks on your ad image, this is the destination they will be sent to." tabindex="99"><div class="helpico"></div></a>Ad Destination:</td>
                    <td class="forminp"><input name="cp_adcode_468x60_dest" id="cp_adcode_468x60_dest" type="text" style="min-width:500px;" value=""><br><small>Paste the destination URL of your custom ad creative here (i.e. http://www.yoursite.com/landing-page.html).</small></td>
                </tr>
            
            
                </tbody><thead><tr><th scope="col" width="200px">Single Ad (336x280)</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_adcode_336x280_enable_row">
                    <td class="titledesc"><a href="#" tip="Set this option to no if you do not wish to have a 336x280 ads displayed on single ad, category, or search result pages." tabindex="99"><div class="helpico"></div></a>Enable Ad:</td>
                    <td class="forminp"><select name="cp_adcode_336x280_enable" id="cp_adcode_336x280_enable" style="width:100px;">

                        
                            <option value="yes">Yes</option>

                        
                            <option value="no" selected="selected">No</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

                            <tr id="cp_adcode_336x280_row">
                    <td class="titledesc"><a href="#" tip="You may use html and/or javascript code provided by your advertising provider." tabindex="99"><div class="helpico"></div></a>Ad Code:</td>
                    <td class="forminp">
                        <textarea name="cp_adcode_336x280" id="cp_adcode_336x280" style="width:500px;height:200px;"></textarea>
                        <br><small>Paste your ad code here. Supports many popular providers such as <a target="_new" href="http://www.google.com/adsense/">Google AdSense</a> and <a target="_new" href="http://www.buysellads.com/">BuySellAds</a>.</small>
                    </td>
                </tr>

            				<tr>
					<td class="titledesc"><a href="#" tip="If you would rather use an image ad instead of code provided by your advertiser, use this field instead." tabindex="99"><div class="helpico"></div></a>Ad Image URL:</td>
					<td class="forminp">
						<input id="cp_adcode_336x280_url" class="upload_image_url" type="text" style="min-width:398px;" name="cp_adcode_336x280_url" value="">
						<input id="upload_image_button" class="upload_button button" rel="cp_adcode_336x280_url" type="button" value="Upload Image">
												<br><small>Upload your ad creative or paste the ad creative URL directly.</small>
						<div id="cp_adcode_336x280_url_image" class="cp_adcode_336x280_url_image upload_image_preview"></div>

					</td>
                </tr>

			
                            <tr id="cp_adcode_336x280_dest_row">
                    <td class="titledesc"><a href="#" tip="When a visitor clicks on your ad image, this is the destination they will be sent to." tabindex="99"><div class="helpico"></div></a>Ad Destination:</td>
                    <td class="forminp"><input name="cp_adcode_336x280_dest" id="cp_adcode_336x280_dest" type="text" style="min-width:500px;" value=""><br><small>Paste the destination URL of your custom ad creative here (i.e. http://www.yoursite.com/landing-page.html).</small></td>
                </tr>
            
            </tbody></table>

</div> <!-- #tab3 -->

<div id="tab4" class="ui-tabs-hide">

<table class="widefat fixed" style="width:850px; margin-bottom:20px;">


                <thead><tr><th scope="col" width="200px">Advanced Options</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_tools_run_expiredcheck_row">
                    <td class="titledesc"><a href="#" tip="Set this option to yes in order to manually run the function that checks all ads expiration and prunes any ads that are expired. This event will run only one time and then set itself back to no." tabindex="99"><div class="helpico"></div></a>Run Ads Expired Check Now:</td>
                    <td class="forminp"><select name="cp_tools_run_expiredcheck" id="cp_tools_run_expiredcheck" style="width:100px;">

                        
                            <option value="no" selected="selected">No</option>

                        
                            <option value="yes">Yes</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_disable_stylesheet_row">
                    <td class="titledesc"><a href="#" tip="If you are interested in creating a child theme or just want to completely disable the core ClassiPress styles, change this option to yes. (Note: this option is for advanced users. Do not change unless you know what you are doing.)" tabindex="99"><div class="helpico"></div></a>Disable Core Stylesheets:</td>
                    <td class="forminp"><select name="cp_disable_stylesheet" id="cp_disable_stylesheet" style="width:100px;">

                        
                            <option value="no">No</option>

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_general_js_row">
                    <td class="titledesc"><a href="#" tip="This option enables the included general.js located in the /includes/js/ directory. This is where you can add your own javascript without losing your changes on product upgrades." tabindex="99"><div class="helpico"></div></a>Enable General.js:</td>
                    <td class="forminp"><select name="cp_general_js" id="cp_general_js" style="width:100px;">

                        
                            <option value="no" selected="selected">No</option>

                        
                            <option value="yes">Yes</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_debug_mode_row">
                    <td class="titledesc"><a href="#" tip="This will print out the $wp_query-&gt;query_vars array at the top of your website. This should only be used for debugging." tabindex="99"><div class="helpico"></div></a>Enable Debug Mode:</td>
                    <td class="forminp"><select name="cp_debug_mode" id="cp_debug_mode" style="width:100px;">

                        
                            <option value="no" selected="selected">No</option>

                        
                            <option value="yes">Yes</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_google_jquery_row">
                    <td class="titledesc"><a href="#" tip="This will use Google's hosted jQuery files which are served from their global content delivery network. This will help your site load faster and save bandwidth." tabindex="99"><div class="helpico"></div></a>Use Google CDN jQuery:</td>
                    <td class="forminp"><select name="cp_google_jquery" id="cp_google_jquery" style="width:100px;">

                        
                            <option value="no" selected="selected">No</option>

                        
                            <option value="yes">Yes</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_remove_wp_generator_row">
                    <td class="titledesc"><a href="#" tip="This will remove the WordPress generator meta tag in the source code of your site &lt;code&gt;&lt; meta name='generator' content='WordPress 3.1' &gt;&lt;/code&gt;. It's an added security measure which prevents anyone from seeing what version of WordPress you are using. It also helps to deter hackers from taking advantage of vulnerabilities sometimes present in WordPress. (Yes is recommended)" tabindex="99"><div class="helpico"></div></a>Disable WordPress Version Meta Tag:</td>
                    <td class="forminp"><select name="cp_remove_wp_generator" id="cp_remove_wp_generator" style="width:100px;">

                        
                            <option value="no">No</option>

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                <tr id="cp_remove_admin_bar_row">
                    <td class="titledesc"><a href="#" tip="This will remove the WordPress user toolbar at the top of your web site which is displayed for all logged in users. This feature was added in WordPress 3.1." tabindex="99"><div class="helpico"></div></a>Disable WordPress User Toolbar:</td>
                    <td class="forminp"><select name="cp_remove_admin_bar" id="cp_remove_admin_bar" style="width:100px;">

                        
                            <option value="no">No</option>

                        
                            <option value="yes" selected="selected">Yes</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                            <tr id="cp_cache_expires_row">
                    <td class="titledesc"><a href="#" tip="To speed up page loading on your site, ClassiPress uses a caching mechanism on certain features (i.e. category drop-down, home page). The cache automatically gets flushed whenever a category has been added/modified, however this value sets the frequency your cache is regularly emptied. We recommend keeping this at the default (every hour = 3600 seconds)." tabindex="99"><div class="helpico"></div></a>Cache Expires:</td>
                    <td class="forminp"><input name="cp_cache_expires" id="cp_cache_expires" type="text" style="width:100px;" value="3600"><br><small>This number is in seconds so one day equals 86400 seconds (60 seconds * 60 minutes * 24 hours). Do not enter any commas.</small></td>
                </tr>
            
            
                            <tr id="cp_table_width_row">
                    <td class="titledesc"><a href="#" tip="Sometimes the admin option pages are set too narrow or too wide. This option allows you to override it. Note: value must be numeric followed by either px or % (i.e. 700px or 100%). The default is 850px." tabindex="99"><div class="helpico"></div></a>Admin Table Width:</td>
                    <td class="forminp"><input name="cp_table_width" id="cp_table_width" type="text" style="width:100px;" value="850px"><br><small></small></td>
                </tr>
            
            
                <tr id="cp_ad_right_class_row">
                    <td class="titledesc"><a href="#" tip="Sometimes the main ad listings box is too narrow or it wraps due to legacy ad sizes. This option allows you to change it manually." tabindex="99"><div class="helpico"></div></a>Ad Box Right Side:</td>
                    <td class="forminp"><select name="cp_ad_right_class" id="cp_ad_right_class" style="width:150px;">

                        
                            <option value="full" selected="selected">Normal Full Width</option>

                        
                            <option value="">Legacy Ads Width</option>

                        
                       </select><br><small></small>
                    </td>
                </tr>

            
                </tbody><thead><tr><th scope="col" width="200px">Custom Post Type &amp; Taxonomy URLs</th><th scope="col">&nbsp;</th></tr></thead>

            
                            <tbody><tr id="cp_post_type_permalink_row">
                    <td class="titledesc"><a href="#" tip="This controls the base name of your ad listing urls. The default is ads and will look like this: http://www.yoursite.com/ads/ad-title-here/. Do not include any slashes. This should only be alpha and/or numeric values. You should not change this value once you have launched your site otherwise you risk breaking urls of other sites pointing to yours, etc." tabindex="99"><div class="helpico"></div></a>Ad Listing Base URL:</td>
                    <td class="forminp"><input name="cp_post_type_permalink" id="cp_post_type_permalink" type="text" style="width:250px;" value="ads"><br><small>IMPORTANT: You must <a target="_blank" href="options-permalink.php">re-save your permalinks</a> for this change to take effect.</small></td>
                </tr>
            
            
                            <tr id="cp_ad_cat_tax_permalink_row">
                    <td class="titledesc"><a href="#" tip="This controls the base name of your ad category urls. The default is ad-category and will look like this: http://www.yoursite.com/ad-category/category-name/. Do not include any slashes. This should only be alpha and/or numeric values. You should not change this value once you have launched your site otherwise you risk breaking urls of other sites pointing to yours, etc." tabindex="99"><div class="helpico"></div></a>Ad Category Base URL:</td>
                    <td class="forminp"><input name="cp_ad_cat_tax_permalink" id="cp_ad_cat_tax_permalink" type="text" style="width:250px;" value="ad-category"><br><small>IMPORTANT: You must <a target="_blank" href="options-permalink.php">re-save your permalinks</a> for this change to take effect.</small></td>
                </tr>
            
            
                            <tr id="cp_ad_tag_tax_permalink_row">
                    <td class="titledesc"><a href="#" tip="This controls the base name of your ad tag urls. The default is ad-tag and will look like this: http://www.yoursite.com/ad-tag/tag-name/. Do not include any slashes. This should only be alpha and/or numeric values. You should not change this value once you have launched your site otherwise you risk breaking urls of other sites pointing to yours, etc." tabindex="99"><div class="helpico"></div></a>Ad Tag Base URL:</td>
                    <td class="forminp"><input name="cp_ad_tag_tax_permalink" id="cp_ad_tag_tax_permalink" type="text" style="width:250px;" value="ad-tag"><br><small>IMPORTANT: You must <a target="_blank" href="options-permalink.php">re-save your permalinks</a> for this change to take effect.</small></td>
                </tr>
            
            
                </tbody><thead><tr><th scope="col" width="200px">Cufón Font Replacement</th><th scope="col">&nbsp;</th></tr></thead>

            
                <tbody><tr id="cp_cufon_enable_row">
                    <td class="titledesc"><a href="#" tip="Set this option to no if you are having conflicts or problems with certain text displaying on your site" tabindex="99"><div class="helpico"></div></a>Enable Cufón:</td>
                    <td class="forminp"><select name="cp_cufon_enable" id="cp_cufon_enable" style="width:100px;">

                        
                            <option value="yes">Yes</option>

                        
                            <option value="no" selected="selected">No</option>

                        
                       </select><br><small>Turns on the Cufón replacement text feature on your site. Learn more about <a target="_new" href="http://github.com/sorccu/cufon/wiki">Cufón</a> here.</small>
                    </td>
                </tr>

                            <tr id="cp_cufon_code_row">
                    <td class="titledesc"><a href="#" tip="Cufón allows you to easily replace text with stylish fonts that appear to be images. It is fast and and does not require Flash." tabindex="99"><div class="helpico"></div></a>Cufón Replacement Code:</td>
                    <td class="forminp">
                        <textarea name="cp_cufon_code" id="cp_cufon_code" style="width:500px;height:200px;">Cufon.replace('.content_right h2.dotted', { fontFamily: 'Liberation Serif', textShadow:'0 1px 0 #FFFFFF' });</textarea>
                        <br><small>Say you want to replace all <code>&lt;h1 class='dotted'&gt;</code> elements on your site with Cufón. You would enter, <code>Cufon.replace('h1.dotted', { fontFamily: 'Liberation Serif', textShadow:'0 1px 0 #FFFFFF' });</code> The Cufón system will automatically style all elements for you. <br>Note: You must have the font installed before it will work. To install a new font you must first generate it and then place the .js font file in your ClassiPress /includes/fonts/ theme directory.</small>
                    </td>
                </tr>

            </tbody></table>

</div> <!-- #tab4 -->


   </div>


<?php
}

function register_mysettings() {
	//register our settings
	register_setting( 'expedite-settings-group', 'ex_setting_master_password' );
	register_setting( 'expedite-settings-group', 'ex_setting_event_key' );//ex_setting_event_key
	
	
	register_setting( 'expedite-settings-group', 'ex_setting_services_admin_template' );
	register_setting( 'expedite-settings-group', 'ex_setting_services_reciever_template' );
	//register_setting( 'expedite-settings-group', 'option_etc' );
}












function expedite_settings_page() {
?>
<div class="wrap">
<h2>Expedite exclusive settings page</h2>

<form method="post" action="options.php">
<table class="form-table">
        <tr valign="top">
        <th scope="row">Master Password</th>
        <td><input type="text" id="ex_setting_master_password" name="ex_setting_master_password" value="<?php echo get_option('ex_setting_master_password'); ?>" />
		<p class="description">This password will be used to view an event page</p>
		</td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Event Short template key</th>
        <td><input type="text" name="ex_setting_event_key" value="<?php echo get_option('ex_setting_event_key'); ?>" />
		<p class="description">This key will be used to display short templates of events ie. %ex-<?php echo get_option('ex_setting_event_key'); ?>%</p>
		</td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Email admin template services</th>
        <td><textarea rows="4" cols="50" name="ex_setting_services_admin_template" ><?php echo get_option('ex_setting_services_admin_template'); ?></textarea>
		<p class="description">Keywords: Name: %name%  ,Email: %email% </p>
		</td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Email receiver template services</th>
         <td><textarea rows="4" cols="50" name="ex_setting_services_reciever_template" ><?php echo get_option('ex_setting_services_reciever_template'); ?></textarea>
		<p class="description">This key will be used to display short templates of events ie. </p>
		</td>
        </tr>
      <!--  
        <tr valign="top">
        <th scope="row">Options, Etc.</th>
        <td><input type="text" name="option_etc" value="<?php //echo get_option('option_etc'); ?>" /></td>
        </tr>-->
    </table>
	    <?php echo submit_button(); ?>
    <?php settings_fields( 'expedite-settings-group' ); ?>
   
    
    


</form>
</div>
<?php } ?>