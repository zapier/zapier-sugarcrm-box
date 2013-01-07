<?php /* Smarty version 2.6.11, created on 2013-01-07 21:28:29
         compiled from modules/Connectors/connectors/sources/ext/rest/insideview/tpls/InsideView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'modules/Connectors/connectors/sources/ext/rest/insideview/tpls/InsideView.tpl', 120, false),array('function', 'sugar_getimage', 'modules/Connectors/connectors/sources/ext/rest/insideview/tpls/InsideView.tpl', 125, false),)), $this); ?>
<script type="text/javascript">
function allowInsideView() {

document.getElementById('insideViewFrame').src = "<?php echo $this->_tpl_vars['AJAX_URL']; ?>
";
document.getElementById('insideViewConfirm').style.display = 'none';
document.getElementById('insideViewFrame').style.display = 'block';
YAHOO.util.Connect.asyncRequest('GET', 'index.php?module=Connectors&action=CallConnectorFunc&source_id=ext_rest_insideview&source_func=allowInsideView', {}, null);
}
SUGAR.util.doWhen("typeof(markSubPanelLoaded) != 'undefined' && document.getElementById('subpanel_insideview')", function() {
	markSubPanelLoaded('insideview');
	var insideViewSubPanel = document.getElementById("subpanel_insideview" );
	insideViewSubPanel.cookie_name="insideview_v";
	if(div_cookies['insideview_v']){
		if(div_cookies['insideview_v'] == 'none')
		{
            hideInsideViewSubPanel();
		}
	}
    else
    {
        if(typeof(DCMenu) == 'undefined')
            return;
        var cookieKey = DCMenu.module + '_divs';
        var tmpCookie = Get_Cookie(cookieKey);
        if(tmpCookie)
        {
            var subCookies = tmpCookie.split('#');
            var foundInsideViewCookie = false;
            for(var x=0;x<subCookies.length;x++ )
            {
                var subCookie = subCookies[x];
                var pars = subCookie.split('=');
                if(pars.length == 2)
                {
                    if(pars[0] == 'insideview_v')
                        foundInsideViewCookie = true;
                }
            }
            if(!foundInsideViewCookie)
            {
                hideInsideViewSubPanel()
            }
        }
        else
        {
            hideInsideViewSubPanel();
        }

    }

	toggleGettingStartedButton();
});

function hideInsideViewSubPanel(){
    hideSubPanel('insideview');
    document.getElementById('hide_link_insideview').style.display='none';
    document.getElementById('show_link_insideview').style.display='';
}

function toggleGettingStartedButton(){
	var acceptBox  = document.getElementById( "insideview_accept_box" );
	var gettingStartedButton  = document.getElementById( "insideview_accept_button" );

	if( acceptBox.checked ){
		gettingStartedButton.disabled = '';
		gettingStartedButton.focus();
	}
	else {
		gettingStartedButton.disabled = "disabled";
	}
}
</script>
<div id='insideViewDiv' style='width:100%' class="doNotPrint">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="formHeader h3Row">
        <tbody>
            <tr>
                <td nowrap="">
                    <h3>
                        <span>InsideView</span>
                    </h3>
                </td>
                <td width="20">
                    <img height="1" width="20" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'blank.gif'), $this);?>
" alt="">
                </td>
                <td width="100%" valign="middle" nowrap="">
                    <a name="insideview"> </a>
                    <span id="show_link_insideview" style="display: none">
                        <a class="utilsLink" href="#" onclick="current_child_field = 'insideview';markSubPanelLoaded('insideview');showSubPanel('insideview',null,null,'insideview');document.getElementById('show_link_insideview').style.display='none';document.getElementById('hide_link_insideview').style.display='';return false;"><?php echo smarty_function_sugar_getimage(array('name' => 'advanced_search','attr' => 'border="0" align="absmiddle"','ext' => '.gif','alt' => $this->_tpl_vars['APP']['LBL_SHOW']), $this);?>
</a>
                    </span>
                    <span id="hide_link_insideview" style="display: ">
                        <a class="utilsLink" href="#" onclick="hideSubPanel('insideview');document.getElementById('hide_link_insideview').style.display='none';document.getElementById('show_link_insideview').style.display='';return false;"><?php echo smarty_function_sugar_getimage(array('name' => 'basic_search','attr' => 'border="0" align="absmiddle"','ext' => '.gif','alt' => $this->_tpl_vars['APP']['LBL_HIDE']), $this);?>
</a>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
  <div id='subpanel_insideview' style='width:100%' <?php if (! $this->_tpl_vars['showInsideView']): ?>align="center"<?php endif; ?>>
      <div id='insideViewConfirm' class="detail view" style="width: 100%; text-align: left; position: relative;<?php if ($this->_tpl_vars['showInsideView']): ?>display:none;<?php endif; ?>">
          <a href="#" onclick="hideSubPanel('insideview');document.getElementById('hide_link_insideview').style.display='none';document.getElementById('show_link_insideview').style.display='';return false;"></a>
          <div style="width: 100%; float: left; padding: 10px 0px 20px 0pt;">
            <a target="_blank"  href="http://community.insideview.com/t5/Getting-Started/Find-Opportunities-to-Reach-Out-to-Customers/ta-p/1133"  style="float: left; width: 230px;display:block;text-decoration:none;">
                <img title="<?php echo $this->_tpl_vars['connector_language']['LBL_OPP']; ?>
" src="https://my.insideview.com/iv/common/ruby/images/sugarembed-img1.png" style="float: left;border:0 solid;">
                <div  style="float: left; padding-top: 11px; width: 150px;">
                    <span style="color: #990000; float: left; font-family: arial; font-size: 14px; font-weight: bold;"><?php echo $this->_tpl_vars['connector_language']['LBL_OPP']; ?>
</span>
                    <span style="font-size: 10px; font-weight: bold; font-family: arial; color: #333333;float: left;"><?php echo $this->_tpl_vars['connector_language']['LBL_OPP_SUB']; ?>
</span>
                </div>
            </a>
            <a target="_blank"  href="http://community.insideview.com/t5/Getting-Started/Get-Referrals-to-Key-Decision-Makers/ta-p/1141"  style="float: left; width: 230px;display:block;text-decoration:none;">
                <img title="<?php echo $this->_tpl_vars['connector_language']['LBL_REFERRAL']; ?>
" src="https://my.insideview.com/iv/common/ruby/images/sugarembed-img2.png" style="float: left;border:0 solid;">
                <div style="float: left; padding-top: 11px; padding-left: 10px;width: 150px;">
                    <span style="color: #990000; float: left; font-family: arial; font-size: 14px; font-weight: bold;"><?php echo $this->_tpl_vars['connector_language']['LBL_REFERRAL']; ?>
</span>
                    <span style="font-size: 10px; font-weight: bold; font-family: arial; color: #333333;float: left;"><?php echo $this->_tpl_vars['connector_language']['LBL_REFERRAL_SUB']; ?>
</span>
                </div>
            </a>
            <a  target="_blank"  href="http://community.insideview.com/t5/Getting-Started/Engage-Prospects-and-Customers/ta-p/1127" style="float: left; width: 230px;display:block;text-decoration:none;">
                <img title="<?php echo $this->_tpl_vars['connector_language']['LBL_ENGAGE']; ?>
" src="https://my.insideview.com/iv/common/ruby/images/sugarembed-img3.png" style="float: left;border:0 solid;">
                <div style="float: left; padding-top: 11px; padding-left: 10px;width: 140px;">
                    <span style="color: #990000; float: left; font-family: arial; font-size: 14px; font-weight: bold;"><?php echo $this->_tpl_vars['connector_language']['LBL_ENGAGE']; ?>
</span>
                    <span style="font-size: 10px; font-weight: bold; font-family: arial; color: #333333;float: left;"><?php echo $this->_tpl_vars['connector_language']['LBL_ENGAGE_SUB']; ?>
</span>
                </div>
            </a>
          </div>
          <hr style="border-color: rgb(238, 238, 238); background-color: rgb(238, 238, 238); width: 100%;">
          <form>
              <input type="checkbox" class="checkbox" name="insideview_accept_box" id="insideview_accept_box" style="display: none;" onclick="toggleGettingStartedButton();">
              <div style="float:left;padding:0 0 10px 0">
                    <div style="font-size: 11px; float:left;margin: 5px 15px 0px 150px;">
                        <?php echo $this->_tpl_vars['connector_language']['iv_description0']; ?>
&nbsp;<a href="http://www.insideview.com/cat-terms-use.html" target="_blank" style="color:#0099CC;text-decoration: none; font-size: 11px;"><?php echo $this->_tpl_vars['connector_language']['LBL_TOS1']; ?>
</a>&nbsp;and&nbsp;<a style="color:#0099CC;text-decoration: none; font-size: 11px;" target="_blank" href="http://www.insideview.com/cat-privacy.html"><?php echo $this->_tpl_vars['connector_language']['LBL_TOS3']; ?>
</a>.
                    </div>
                    <div onclick="allowInsideView(); return false;" name="insideview_accept_button" id="insideview_accept_button" style="float:right;height: 30px; background-image: url('https://my.insideview.com/iv/common/ruby/images/sugarembed-button.png');font-weight: bold; width: 113px; font-size: 14px;cursor:pointer;">
                        <div style="float:left;margin:7px 0 0 18px;color:#ffffff;"><?php echo $this->_tpl_vars['connector_language']['LBL_GET_STARTED']; ?>
</div>
                    </div>
              </div>
          </form>
          <div class="clear"></div>
      </div>
      <iframe id='insideViewFrame' src='<?php echo $this->_tpl_vars['URL']; ?>
' title='<?php echo $this->_tpl_vars['URL']; ?>
' scrolling="no" style='border:0px; width:100%;height:400px;overflow:hidden;<?php if (! $this->_tpl_vars['showInsideView']): ?>display:none;<?php else: ?>display:block;<?php endif; ?>'></iframe>
   </div>
</div>