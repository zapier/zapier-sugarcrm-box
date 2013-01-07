<?php /* Smarty version 2.6.11, created on 2013-01-07 21:28:28
         compiled from include/SugarFields/Fields/Link/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Link/DetailView.tpl', 38, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Link/DetailView.tpl', 48, false),array('modifier', 'replace', 'include/SugarFields/Fields/Link/DetailView.tpl', 40, false),)), $this); ?>
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
{capture name=getLink assign=link}<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
{/capture}
<?php if ($this->_tpl_vars['vardef']['gen']): ?>
{sugar_replace_vars subject='<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vardef']['default'])) ? $this->_run_mod_handler('replace', true, $_tmp, '{', '[') : smarty_modifier_replace($_tmp, '{', '[')))) ? $this->_run_mod_handler('replace', true, $_tmp, '}', ']') : smarty_modifier_replace($_tmp, '}', ']')); ?>
' assign='link'}
<?php endif; ?>
{if !empty($link)}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<span class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
">
<a href='{$link|to_url}' <?php if ($this->_tpl_vars['displayParams']['link_target']): ?>target='<?php echo $this->_tpl_vars['displayParams']['link_target']; ?>
'<?php elseif ($this->_tpl_vars['vardef']['link_target']): ?>target='<?php echo $this->_tpl_vars['vardef']['link_target']; ?>
'<?php endif; ?> ><?php if (! empty ( $this->_tpl_vars['displayParams']['title'] )): ?>{sugar_translate label='<?php echo $this->_tpl_vars['displayParams']['title']; ?>
' module=$module}<?php else: ?>{$link}<?php endif; ?></a>
</span>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

<?php endif; ?>
{/if}