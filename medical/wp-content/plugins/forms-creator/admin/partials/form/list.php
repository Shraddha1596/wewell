<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<table>
    <thead>
		<tr>
			<th><u><?php esc_attr_e("Order", "wpbiker-fp-lang") ?></u></th>
			<th><u><?php esc_attr_e("Name", "wpbiker-fp-lang") ?></u></th> 
			<th><u><?php esc_attr_e("Shortcode", "wpbiker-fp-lang") ?></u></th>
			<th><u><?php esc_attr_e("ID", "wpbiker-fp-lang") ?></u></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
    <tbody>
		<?php
			if ($resultat) {
				$i = 0;
				foreach ($resultat as $key => $value) {
					$i++;			   
					$id = $value->id;
					$title = $value->title;        
				?>
				<tr>
					<td><?php echo "$i"; ?></td>
					<td><?php echo $title; ?></td>
					<td><?php echo "[FC-Form id=$id]"; ?></td>
					<td><?php echo "$id"; ?></td>         
					<td><u><a href="admin.php?page=<?php echo WPBIKER_FP_BASENAME;?>&tool=add&act=update&id=<?php echo $id; ?>"><?php esc_attr_e("Edit", "wpbiker-fp-lang") ?></a></u></td>
					<td><u><a href="admin.php?page=<?php echo WPBIKER_FP_BASENAME;?>&info=del&did=<?php echo $id; ?>"><?php esc_attr_e("Delete", "wpbiker-fp-lang") ?></a></u></td>
					<td><u><a href="admin.php?page=<?php echo WPBIKER_FP_BASENAME;?>&tool=add&act=duplicate&id=<?php echo $id; ?>"><?php esc_attr_e("Duplicate", "wpbiker-fp-lang") ?></a></u></td>        
				</tr>
				<?php
				}
			}
		?>
		
	</tbody>
</table>
