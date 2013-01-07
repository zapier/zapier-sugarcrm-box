<?php /* Smarty version 2.6.11, created on 2013-01-07 21:28:28
         compiled from include/SugarFields/Fields/Address/en_us.DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Address/en_us.DetailView.tpl', 52, false),)), $this); ?>
{*
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

*}
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_street" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_city" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_state" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_country" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_postalcode" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )): ?>
<td class="dataField">
<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>
 
</td>
<?php endif; ?>
<td class='dataField' width='1%'>
{$custom_code_<?php echo $this->_tpl_vars['displayParams']['key']; ?>
}
</td>
</tr>
</table>