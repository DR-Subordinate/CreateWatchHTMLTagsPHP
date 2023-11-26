<br><br><center>
<?php if(!empty($_POST['img-url'])): ?>
<a href="https://shopping.yahoo.co.jp/stores/wrap/bouncer.html?dest_path=https://brandacross.xsrv.jp/syousaigazou/<?php echo $_POST['img-url']; ?>.html" target="_blank" style="margin-bottom: 20px; display: block;">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788753.jpg" width="80%"></a>
<?php endif; ?>
	
<?php if($_POST['add-wrapping-banner'] == "true"): ?>
<a href="https://store.shopping.yahoo.co.jp/brand-across/wrapping.html"><img src="https://shopping.c.yimg.jp/lib/brand-across/tag_wrapping.jpg" alt="ラッピング対応" width="80%"></a><br>
<?php endif; ?>
		
<img src="https://shopping.c.yimg.jp/lib/brand-across/title_item_1.jpg" alt="Itemspec" style="vertical-align: bottom" width="80%">
<table width="80%" bgcolor="#dddddd" cellspacing="1" cellpadding="10" style="border-collapse:collapse;">

<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;border:#dddddd solid 1px;">管理番号</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo $_POST['management-number']; ?></td>
</tr>

<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">ブランド</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo $_POST['brand']; ?></td>
</tr>

<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">商品名</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo $_POST['product-name']; ?></td>
</tr>

<?php if(!empty($_POST['line'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">文字盤</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['dial']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['model-number'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">型番</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['model-number']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['serial'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">シリアル</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['serial']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['material'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">素材</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['material']); ?></td>
</tr>
<?php endif; ?>
	
<?php if($_POST['show-country-of-manufacture'] == "true"): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">製造国</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;">フランス・スペイン・イタリアのいずれか<br>(※まれにUSAもございます)</td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['color'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">カラー</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['color']); ?></td>
</tr>
<?php endif; ?>
	
<?php if($_POST['show-hermes-color-description'] == "true"): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">カラーに関して</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;">エルメスのカラーに関して、実際の色味を表現出来ますよう、撮影・加工に尽力しておりますが、ご覧頂く環境によって異なる場合がございます。 必ずご希望のカラー名の確認をお願い致します。</td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['movement'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">ムーブメント</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['movement']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['price'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">参考定価</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['price']); ?></td>
</tr>
<?php endif; ?>


<?php if(!empty($_POST['sex'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">性別</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['sex']); ?>円<br>※参考定価は各ブランド直営店にて新品で販売中もしくは過去に販売されていた価格です。</td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['daily-rate'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">日差</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['daily-rate']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['size'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">サイズ</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['size']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['feature'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">機能</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['feature']); ?></td>
</tr>
<?php endif; ?>
	
<?php if(!empty($_POST['accessory'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">付属品</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['accessory']); ?></td>
</tr>
<?php endif; ?>






<?php if(!empty($_POST['detail'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">詳細</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['detail']); ?>
</td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['staff-comment'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">スタッフコメント</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['staff-comment']); ?>
</td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['search-word'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">検索キーワード</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['search-word']); ?>
</td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['free-text-content'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;"><?php echo $_POST['free-text']; ?></th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['free-text-content']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['free-text-content-2'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;"><?php echo $_POST['free-text-2']; ?></th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['free-text-content-2']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['free-text-content-3'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;"><?php echo $_POST['free-text-3']; ?></th>
<td width="75%" ="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['free-text-content-3']); ?></td>
</tr>
<?php endif; ?>


</table>
 <br>
<br />
<img src="https://shopping.c.yimg.jp/lib/brand-across/title_item_2.jpg" alt="商品ランク" style="vertical-align: bottom" width="80%">
<table width="80%" bgcolor="#dddddd" cellspacing="1" cellpadding="10" style="border-collapse:collapse;">
<tr>
<th width="25%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle; font-size:24px; font-weight:bold; color:#bf0000; width:80px;" ><b><font size="5" color="#bf0000"><?php echo $_POST['condition']; ?></font></b></th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">
<?php 
switch ($_POST['condition']) {
    case "N":
        echo "新品、未使用品　製造から1年以内の商品";
        break;
    case "NS":
        echo "新品、未使用品　製造から2年以上経過、または製造年が不明な商品";
        break;
    case "S":
        echo "新品同様品";
        break;
    case "A":
        echo "若干の小キズがあるが全体的に非常にきれい";
        break;
    case "AB":
        echo "新品仕上げ加工を施せばＡ又はＳランクになる商品";
        break;
    case "B":
        echo "ベルトの垂れ、ガラス傷等がある商品";
        break;
    case "BC":
        echo "全体的に強い使用感がある";
        break;
    case "C":
        echo "文字盤やガラス等に深いキズ、シミがある";
        break;
    case "D":
        echo "ジャンク品、故障有り";
        break;
}
 ?></td></tr>
<?php if(!empty($_POST['outside'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">外側</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['outside']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['inside'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">内側</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['inside']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['special-note'])): ?>
<tr>
<th width="25%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">特記</th>
<td width="75%" bgcolor="#FFFFFF" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['special-note']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['syousai'])): ?>
<tr>
<th style="text-align:center;border:#dddddd solid 1px;">詳細</th>
<td style="border:#dddddd solid 1px;"><?php echo nl2br($_POST['syousai']); ?></td>
</tr>
<?php endif; ?>
</table>
<br>
<table width="80%" id="rankDesc" bgcolor="#dddddd" cellspacing="1" cellpadding="5">
<tr>
  <th bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">N</th>
  <th bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">NS</th>
  <th bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">S</th>
  <th bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">A</th>
  <th bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">AB</th>
  <th bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">B</th>
  <th bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">BC</th>
  <th bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">C</th>
  <th bgcolor="#EBE8D7" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">J</th>
</tr>
<tr>
  <td<?php if($_POST['condition'] == "N"):?> bgcolor="#FFF766"<?php else: ?> bgcolor="#FFFFFF"<?php endif; ?> align="center" style="padding:8px; border:#dddddd solid 1px;">新<br>品</td>
  <td<?php if($_POST['condition'] == "NS"):?> bgcolor="#FFF766"<?php else: ?> bgcolor="#FFFFFF"<?php endif; ?> align="center" style="padding:8px; border:#dddddd solid 1px;">未<br>使<br>用<br>品</td>
  <td<?php if($_POST['condition'] == "S"):?> bgcolor="#FFF766"<?php else: ?> bgcolor="#FFFFFF"<?php endif; ?> align="center" style="padding:8px; border:#dddddd solid 1px;">新<br>品<br>同<br>様<br>品</td>
  <td<?php if($_POST['condition'] == "A"):?> bgcolor="#FFF766"<?php else: ?> bgcolor="#FFFFFF"<?php endif; ?> align="center" style="padding:8px; border:#dddddd solid 1px;">中<br>古<br>超<br>美<br>品</td>
  <td<?php if($_POST['condition'] == "AB"):?> bgcolor="#FFF766"<?php else: ?> bgcolor="#FFFFFF"<?php endif; ?> align="center" style="padding:8px; border:#dddddd solid 1px;">中<br>古<br>美<br>品</td>
  <td<?php if($_POST['condition'] == "B"):?> bgcolor="#FFF766"<?php else: ?> bgcolor="#FFFFFF"<?php endif; ?> align="center" style="padding:8px; border:#dddddd solid 1px;">中<br>古<br>良<br>品</td>
  <td<?php if($_POST['condition'] == "BC"):?> bgcolor="#FFF766"<?php else: ?> bgcolor="#FFFFFF"<?php endif; ?> align="center" style="padding:8px; border:#dddddd solid 1px;">強<br>い<br>使<br>用<br>感</td>
  <td<?php if($_POST['condition'] == "C"):?> bgcolor="#FFF766"<?php else: ?> bgcolor="#FFFFFF"<?php endif; ?> align="center" style="padding:8px; border:#dddddd solid 1px;">破<br>損<br>有</td>
  <td<?php if($_POST['condition'] == "J"):?> bgcolor="#FFF766"<?php else: ?> bgcolor="#FFFFFF"<?php endif; ?> align="center" style="padding:8px; border:#dddddd solid 1px;">要<br>修<br>理</td>
</tr>
</table>
</center>
