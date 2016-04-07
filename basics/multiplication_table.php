<table>
<style type="text/css">
td{
	border: 1px solid black;
	padding: 5px;
}

</style>
<?php for($i=1; $i<=10; $i++)
      { ?>
      <tr>
<?php    for($j=1; $j<=10; $j++)
         { $total = $i * $j;
         	if ($i == 1 or $j == 1){ ?>
         		<td><strong><?php echo $total; ?></strong></td>
         	<?php }else{ ?>
         <td><?php echo $total; ?></td>

<?php    }} ?>
      </tr>
<?php } ?>
</table>


