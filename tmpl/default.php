<?php 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 
?>

<?php 
if ($role_id == 4) {
?>
Accounting
<ul>
	<li>
		<a href="<?php echo ModSupplyOrderMenuHelper::genLink( 'index.php?option=com_supplyorder&view=list&layout=pendingAccounting' ); ?>">
			<?php echo JText::_('Pending Order'); ?>
		</a>
	</li>
	<li>
		<a href="<?php echo ModSupplyOrderMenuHelper::genLink( 'index.php?option=com_supplyorder&view=list&layout=ordered' ); ?>">
			<?php echo JText::_('Ordered'); ?>
		</a>
	</li>
</ul>
<br />
<?php 
}
?>

<?php
// Tier 1 & 2 Approval 
if ($role_id == 2 || $role_id == 3) {
?>
Approval
<ul>
	<li>
		<a href="<?php echo ModSupplyOrderMenuHelper::genLink( 'index.php?option=com_supplyorder&view=list&layout=pending' ); ?>">
			<?php echo JText::_('Pending'); ?>
		</a>
	</li>
	<li>
		<a href="<?php echo ModSupplyOrderMenuHelper::genLink( 'index.php?option=com_supplyorder&view=list&layout=approved' ); ?>">
			<?php echo JText::_('Approved'); ?>
		</a>
	</li>
</ul>
<br />
<?php 
}
?>
<ul>
	<li>
		<a href="<?php echo ModSupplyOrderMenuHelper::genLink( 'index.php?option=com_supplyorder' ); ?>">
			<?php echo JText::_('New Request'); ?>
		</a>
	</li>
	<li>
		<a href="<?php echo ModSupplyOrderMenuHelper::genLink( 'index.php?option=com_supplyorder&view=list&layout=saved' ); ?>">
			<?php echo JText::_('Saved'); ?>
		</a>
	</li>
	<li>
		<a href="<?php echo ModSupplyOrderMenuHelper::genLink( 'index.php?option=com_supplyorder&view=list&layout=requested' ); ?>">
			<?php echo JText::_('Requested'); ?>
		</a>
	</li>
	<li>
		<a href="<?php echo ModSupplyOrderMenuHelper::genLink( 'index.php?option=com_supplyorder&view=list&layout=received' ); ?>">
			<?php echo JText::_('Received'); ?>
		</a>
	</li>
</ul>