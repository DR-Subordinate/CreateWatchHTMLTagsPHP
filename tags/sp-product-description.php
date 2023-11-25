<?php if($_POST['show-yahoo-img'] != "true"): ?>
<?php if(!empty($_POST['start-number'])): ?>

<a href="https://www.rakuten.ne.jp/gold/brandacross/item_pict/<?php echo $_POST['product-url']; ?>.html" target="_blank"><img src="https://image.rakuten.co.jp/brandacross/cabinet/pict_link.jpg" width="100%"></a>
<br>
<?php endif; ?>
<?php endif; ?>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/20220107_300_7.jpg" width="100%"><br>
	
		<?php if($_POST['add-wrapping-banner'] == "true"): ?>
<br><table border="0" cellspacing="0" cellpadding="0">
<tr valign="top">
<td><a href="https://item.rakuten.co.jp/brandacross/c/0000000251/"><img src="https://image.rakuten.co.jp/brandacross/cabinet/tag_wrapping.jpg" alt="ラッピング対応" width="100" height="21"></a></td>
</tr>
</table>
<?php endif; ?>
			
<font size="2">
<table width="100%" cellspacing="1" cellpadding="3" bgcolor="#333333">
<tr>
<td bgcolor="#EEE" width="20%"><b>管理番号</b></td>
<td bgcolor="#FFF"><?php echo $_POST['management-number']; ?></td>
</tr>
<tr>
<td bgcolor="#EEE"><b>ブランド</b></td>
<td bgcolor="#FFF"><?php echo $_POST['brand']; ?></td>
</tr>
<tr>
<td bgcolor="#EEE"><b>商品名</b></td>
<td bgcolor="#FFF"><?php echo $_POST['product-name']; ?></td>
</tr>
<?php if(!empty($_POST['dial'])): ?>
<tr>
<td bgcolor="#EEE"><b>文字盤</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['dial']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['model-number'])): ?>
<tr>
<td bgcolor="#EEE"><b>型番</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['model-number']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['serial'])): ?>
<tr>
<td bgcolor="#EEE"><b>シリアル</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['serial']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['material'])): ?>
<tr>
<td bgcolor="#EEE"><b>素材</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['material']); ?></td>
</tr>
<?php endif; ?>
<?php if($_POST['show-country-of-manufacture'] == "true"): ?>
<tr>
<td bgcolor="#EEE"><b>製造国</b></td>
<td bgcolor="#FFF">フランス・スペイン・イタリアのいずれか<br>(※まれにUSAもございます)</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['color'])): ?>
<tr>
<td bgcolor="#EEE"><b>カラー</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['color']); ?></td>
</tr>
<?php endif; ?>
<?php if($_POST['show-hermes-color-description'] == "true"): ?>
<tr>
<td bgcolor="#EEE"><b>カラーに関して</b></td>
<td bgcolor="#FFF">エルメスのカラーに関して、実際の色味を表現出来ますよう、撮影・加工に尽力しておりますが、ご覧頂く環境によって異なる場合がございます。 必ずご希望のカラー名の確認をお願い致します。</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['movement'])): ?>
<tr>
<td bgcolor="#EEE"><b>ムーブメント</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['movement']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['price'])): ?>
<tr>
<td bgcolor="#EEE"><b>参考定価</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['price']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['sex'])): ?>
<tr>
<td bgcolor="#EEE"><b>性別</b></td>
<td bgcolor="#FFF"><?php echo $_POST['sex']; ?>円<br>※参考定価は各ブランド直営店にて新品で販売中もしくは過去に販売されていた価格です。</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['daily-rate'])): ?>
<tr>
<td bgcolor="#EEE"><b>日差</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['daily-rate']); ?><?php if($_POST['change-ring-size'] == "true"): ?>
<br><a href="https://item.rakuten.co.jp/brandacross/c/0000000166/">サイズ直し1サイズ無料詳しくはこちら</a>
<br>サイズ直しをした場合返品不可となります。
<?php endif; ?>
</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['size'])): ?>
<tr>
<td bgcolor="#EEE"><b>サイズ</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['size']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['feature'])): ?>
<tr>
<td bgcolor="#EEE"><b>機能</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['feature']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['accessory'])): ?>
<tr>
<td bgcolor="#EEE"><b>付属品</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['accessory']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['detail'])): ?>
<tr>
<td bgcolor="#EEE"><b>詳細</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['detail']); ?>
<?php if($_POST['add-top'] == "true"): ?>
<br>※チェーンは付属致しません。<br>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000260/">ネックレスチェーンはこちら</a>
<?php endif; ?>
<?php if($_POST['add-chain'] == "true"): ?>
<br>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000261/">ペンダントトップはこちら</a>
<?php endif; ?>
<br><br>写真・説明欄に表記されている付属品以外は付属しておりません。
</td>
</tr>
<?php elseif($_POST['add-top'] == "true"): ?>
<tr>
<td bgcolor="#EEE"><b>付属品</b></td>
<td bgcolor="#FFF">
<?php if($_POST['add-top'] == "true"): ?>
※チェーンは付属致しません。<br>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000260/">ネックレスチェーンはこちら</a>
<?php endif; ?>
</td>
</tr>
<?php elseif($_POST['add-chain'] == "true"): ?>
<tr>
<td bgcolor="#EEE"><b>付属品</b></td>
<td bgcolor="#FFF">
<a href="https://item.rakuten.co.jp/brandacross/c/0000000261/">ペンダントトップはこちら</a>
</td>
</tr>
<?php endif; ?>




<?php if(!empty($_POST['staff-comment'])): ?>
<tr>
<td bgcolor="#EEE"><b>スタッフコメント</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['staff-comment']); ?>
</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['search-word'])): ?>
<tr>
<td bgcolor="#EEE"><b>検索キーワード</b></td>
<td bgcolor="#FFF"><?php echo $_POST['search-word']; ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content'])): ?>
<tr>
<td bgcolor="#EEE"><b><?php echo $_POST['free-text']; ?></b></td>
<td bgcolor="#FFF"><?php echo $_POST['free-text-content']; ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content-2'])): ?>
<tr>
<td bgcolor="#EEE"><b><?php echo $_POST['free-text-2']; ?></b></td>
<td bgcolor="#FFF"><?php echo $_POST['free-text-content-2']; ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content-3'])): ?>
<tr>
<td bgcolor="#EEE"><b><?php echo $_POST['free-text-3']; ?></b></td>
<td bgcolor="#FFF"><?php echo $_POST['free-text-content-3']; ?></td>
</tr>
<?php endif; ?>

</table>
</font>
<br>
<table border="1" cellspacing="0" cellpadding="7" width="100%" bordercolor="#999">
<tr>
<td colspan="2" bgcolor="#EEE"><center>■ 状態 ■</center></td>
</tr>
<tr>
<td colspan="2" bgcolor="#fff">
<table border="1" cellspacing="0" cellpadding="7" width="100%" bordercolor="#999">
	<td align="center" width="11%"<?php if($_POST['condition'] == "N"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>N</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "NS"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>NS</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "S"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>S</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "A"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>A</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "AB"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>AB</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "B"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>B</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "BC"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>BC</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "C"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>C</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "J"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>D</td>
</table>
</td>
</tr>
<tr>
<td bgcolor="#EEE" width="80"><center><font size="7" color="#F00"><?php echo $_POST['condition']; ?></font></center></td>
<td>
<font size="1">
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
 ?>
</font>

	</td>
</tr>
<?php if(!empty($_POST['outside'])): ?>
<tr>
<td bgcolor="#EEE"><b>外側</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['outside']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['inside'])): ?>
<tr>
<td bgcolor="#EEE"><b>内側</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['inside']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['special-note'])): ?>
<tr>
<td bgcolor="#EEE"><b>特記</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['special-note']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['syousai'])): ?>
<tr>
<td bgcolor="#EEE"><b>詳細</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['syousai']); ?></td>
</tr>
<?php endif; ?>
</table>
<br>

<?php if($_POST['return'] == "true"): ?>
<a href="https://www.rakuten.ne.jp/gold/brandacross/tokusetu/anshin.html"><img src="https://image.rakuten.co.jp/brandacross/cabinet/hepin_ok_sp.jpg" width="100%"></a><br>
<?php else: ?>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/hepin_gai_sp_2.jpg"width="100%"><br>
<?php endif; ?>
<?php if($_POST['add-banner'] == "true"): ?>
<a href="https://event.rakuten.co.jp/asuraku/about/anshin/" target="_blank"><img src="https://image.rakuten.co.jp/brandacross/cabinet/asuraku-sample_sp.jpg"width="100%"></a><br>
<?php endif; ?>
<?php if($_POST['business-days'] == "true"): ?>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/150608_shipping.jpg"width="100%" alt="2～3営業日以内に出荷致します。"><br>
<?php endif; ?>


<?php if(!empty($_POST['brand-category-url'])): ?>
<table border="1" cellspacing="0" cellpadding="3" width="100%" bordercolor="#999">
<tr>
<td colspan="2" bgcolor="#EEE"><center>■ 関連商品 ■</center></td>
</tr>
<tr>
<td>
<a href="<?php echo strip_tags($_POST['brand-category-url'] , '<br><font>'); ?>"><img src="https://image.rakuten.co.jp/brandacross/cabinet/item_etc_link.jpg" width="100%"></a>
</td>
<td>
<a href="<?php echo strip_tags($_POST['item-category-url'] , '<br><font>'); ?>"><img src="https://image.rakuten.co.jp/brandacross/cabinet/item_link_<?php echo $_POST['category-number'] ;?>.jpg" width="100%"></a>
</td>
</tr>
</table>
<br>
<?php endif; ?>

<a href="https://www.rakuten.ne.jp/gold/brandacross/index_sp.html" target="_blank"><img src="https://image.rakuten.co.jp/brandacross/cabinet/top_banner.jpg"width="100%"></a>
<br>

<img src="https://image.rakuten.co.jp/brandacross/cabinet/sp_contact_top.jpg" width="100%">
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="50%" align="left"><a href="https://ask.step.rakuten.co.jp/rms/mall/pa/ask/vc?__event=PA02_000_001&ask_text=%be%a6%c9%ca%a4%cb%b4%d8%a4%b9%a4%eb%bc%c1%cc%e4&shopurl=https://www.rakuten.co.jp/brandacross/&shop_bid=300229&shop_name=ACROSS&myshop=0"><img src="https://image.rakuten.co.jp/brandacross/cabinet/sp_contact_mail.jpg" width="99%"></a></td>
<td width="50%" align="right"><a href="tel:0120858881"><img src="https://image.rakuten.co.jp/brandacross/cabinet/sp_contact_tel.jpg" width="99%"></a></td>
</tr>
</table>
<?php if($_POST['more-than-5'] == "true"): ?>
	<br>
<a href="https://www.rakuten.ne.jp/gold/brandacross/orico/index_orico_sp.html" target="_blank"><img src="https://image.rakuten.co.jp/brandacross/cabinet/orico1.jpg" width="99%"></a>
	<?php endif; ?>
	
	<br>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/gekkann_1.jpg" width="100%">
	
<br>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="50%" align="left"><a href="https://www.rakuten.ne.jp/gold/brandacross/iframe/question/index.html" target="_top"><img src="https://image.rakuten.co.jp/brandacross/cabinet/question_sp_img.jpg" width="100%"></a></td>
<td width="50%" align="right"><a href="https://www.rakuten.ne.jp/gold/brandacross/iframe/size_guide/index.html" target="_top"><img src="https://image.rakuten.co.jp/brandacross/cabinet/sizeguide_sp_img.jpg" width="100%"></a></td>
</tr>

</table>
	<?php if($_POST['not-used'] == "true"): ?>
<br><img src="https://image.rakuten.co.jp/brandacross/cabinet/newitem_notes.jpg" width="100%">
<?php endif; ?>
	
