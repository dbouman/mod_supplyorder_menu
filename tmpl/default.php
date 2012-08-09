<?php 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 
?>

<?php 
if ($role_id == 4) {
?>
Accounting
<?php 
}
?>

<?php 
if ($role_id == 3 || $role_id == 2) {
?>
Tier 1 & 2 Approval
<?php 
}
?>

Registered