<table cellpadding="0" cellspacing="8" border="0">
	<thead>
	<tr>
		<th><strong>Asset Code</strong></th>
		<td><strong>Model</strong></th>
		<th><strong>Location</strong></th>
	</tr>
	</thead>
	<tbody>
<?php
if ($this->objAssetTransactionArray) {
	foreach ($this->objAssetTransactionArray as $intIndex => $objAssetTransaction) {
		if ($intIndex < 10) {
			printf("
			<tr>
				<td>%s</td>
				<td>%s</td>
				<td>%s</td>
			</tr>
			", $objAssetTransaction->Asset->AssetCode, $objAssetTransaction->Asset->AssetModel->__toString(), $objAssetTransaction->Asset->Location->__toString());
		}
		else {
			echo '<tr><td colspan="3">More ...</td></tr>';
		}
	}
}

	
?>
	</tbody>
</table>