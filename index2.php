<?php require 'header.php';?>
<?php
$json_string = 'https://www.numbeo.com/api/city_prices?api_key=vab9xhwt1f8rg7&query=Skopje';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata,true);
foreach($obj['prices'] as $results)
{
	echo'<table>
	<tbody>
		<tr><td>Restaurant </td> <td style="text-align: right">'.$results['average_price'].'</td>
			<td>
				<div class="barTextLeft">'.$results['lowest_price'].'</div><div class="barLeft" style="width: 14px;"></div><div class="barMid"><div class="barMid-nocss">-</div></div><div class="barRight" style="width: 14px;"></div><div>'.$results['highest_price'].'</div><div>'.$results['item_name'].'</div><div>'.$results['item_id'].'</div></td>
			</tr>
		</tbody>
	</table>';
}
?>
<?php require 'footer.php';?>