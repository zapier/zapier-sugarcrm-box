<?php /* Smarty version 2.6.11, created on 2013-01-07 21:28:28
         compiled from include/SugarEmailAddress/templates/forDetailView.tpl */ ?>

			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<?php $_from = $this->_tpl_vars['emailAddresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['address']):
?>
				<tr>
					<td style="border:none;">
						<?php if ($this->_tpl_vars['address']['key'] === 'opt_out' || $this->_tpl_vars['address']['key'] === 'invalid' || $this->_tpl_vars['address']['key'] === 'opt_out_invalid'): ?>
							<span style="text-decoration: line-through;">
						<?php elseif ($this->_tpl_vars['address']['key'] === 'primary'): ?>
							<b>
						<?php elseif ($this->_tpl_vars['address']['key'] === 'reply_to' && $this->_tpl_vars['item']['key'] != 0): ?>
							<i>
						<?php endif; ?>

						<?php echo $this->_tpl_vars['address']['address']; ?>


						<?php if ($this->_tpl_vars['address']['key'] === 'primary'): ?>
							</b>&nbsp;<i>&#x28;<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_PRIMARY']; ?>
&#x29;&#x200E;</i>
						<?php elseif ($this->_tpl_vars['address']['key'] === 'reply_to'): ?>
							&nbsp;<i>&#x28;<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_REPLY_TO']; ?>
&#x29;&#x200E;</i>
						<?php elseif ($this->_tpl_vars['address']['key'] === 'opt_out'): ?>
							</span>&nbsp;<i class='error'>&#x28;<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_OPT_OUT']; ?>
&#x29;&#x200E;</i>
						<?php elseif ($this->_tpl_vars['address']['key'] === 'invalid'): ?>
							</span>&nbsp;<i>(<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_INVALID']; ?>
&#x29;&#x200E;</i>
						<?php elseif ($this->_tpl_vars['address']['key'] === 'opt_out_invalid'): ?>
						    </span>&nbsp;<i class='error'>&#x28;<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_OPT_OUT_AND_INVALID']; ?>
&#x29;&#x200E;</i>
						<?php endif; ?>
					</td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
					<td>
						<i><?php echo $this->_tpl_vars['app_strings']['LBL_NONE']; ?>
</i>
					</td>
				</tr>
				<?php endif; unset($_from); ?>
			</table>