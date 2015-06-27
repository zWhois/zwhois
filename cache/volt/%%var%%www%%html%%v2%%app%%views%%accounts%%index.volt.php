<?php echo $this->getContent(); ?>
<center>

<h2> All Accounts </h2>

<table border="2">
<thead>
<tr>
<td> Accounts</td>
</tr>
</thead>
<tbody>
<?php foreach ($coa as $rem) { ?>
<tr>
<td> <?php echo $rem->coa_name; ?> </td>
<td> <?php echo $this->tag->linkTo(array('accounts/delete/' . $rem->coa_id, 'Delete')); ?> </td>
</tr>
<?php } ?>
</tbody>
</table>
</center>
