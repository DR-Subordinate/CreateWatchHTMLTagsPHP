<p>
<center>
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788396.jpg" width="800">
</center>
<?php if(!empty($_POST['img-url'])): ?>
<br><br><center>
<a href="https://brandacross.xsrv.jp/syousaigazou/<?php echo $_POST['img-url']; ?>.html">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788753.jpg" border="0">
</a>
</center>
<?php endif; ?>
<br>
<?php if(!empty($_POST['video-url'])): ?>
<center>
<a href="<?php echo $_POST['video-url']; ?>">
<img src="https://image.rakuten.co.jp/brandacross/cabinet/youtube.jpg" border="0">
</a>
</center>
<?php endif; ?>
<br>
<center>
<TABLE WIDTH=800 BGCOLOR=#888888 CELLSPACING=1 CELLPADDING=5>
<TR>
<TD BGCOLOR=#dddddd COLSPAN=4 ALIGN=center>
<B>
<font size="3">商品の詳細</font>
</B>
</TD>
</TR>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">管理番号</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['management-number']; ?>
</font>
</TD>
</TR>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">ブランド</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['brand']; ?>
</font>
</TD>
</TR>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">商品名</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['product-name']; ?>
</font>
</TD>
</TR>
<font size="3">
<?php if(!empty($_POST['dial'])): ?>
</font>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">文字盤</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['dial']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['model-number'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">型番</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['model-number']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['serial'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">シリアル</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['serial']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['material'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">素材</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['material']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['color'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">カラー</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['color']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['movement'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">ムーブメント</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php
switch ($_POST['movement']) {
    case "manual":
        echo "手巻き";
        break;
    case "automatic":
        echo "オートマチック（自動巻き）";
        break;
    case "quartz":
        echo "クオーツ（電池式）";
        break;
    case "spring-drive":
        echo "スプリングドライブ";
        break;
}
 ?></font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['price'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">参考定価</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['price']; ?>円</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['sex'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">性別</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php
switch ($_POST['sex']) {
    case "ladies-mens":
        echo "レディース / メンズ";
        break;
    case "mens-ladies":
        echo "メンズ / レディース";
        break;
    case "ladies":
        echo "レディース";
        break;
    case "mens":
        echo "メンズ";
        break;
    case "kids":
        echo "キッズ";
        break;
}
 ?></font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['daily-rate'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">日差</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['daily-rate']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['size'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">サイズ</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['size']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['feature'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">機能</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['feature']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['accessory'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">付属品</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['accessory']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['outside'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">外　側</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['outside']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['inside'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">内　側</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['inside']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['special-note'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">特　記</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['special-note']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['inspection'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">点　検</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['inspection']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['case-bezel'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">ケース・ベゼル</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['case-bezel']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['case-back'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">裏　蓋</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['case-back']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['crystal'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">風　防</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['crystal']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['staff-comment'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">スタッフコメント
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['staff-comment']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['search-word'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">検索キーワード
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['search-word']); ?>
</font>
</TD>
</TR>
<?php endif; ?>

<?php if(!empty($_POST['free-text-content'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">
<?php echo $_POST['free-text']; ?>
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['free-text-content']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content-2'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">
<?php echo $_POST['free-text-2']; ?>
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['free-text-content-2']; ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content-3'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">
<?php echo $_POST['free-text-3']; ?>
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['free-text-content-3']; ?>
</font>
</TD>
</TR>
<?php endif; ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">付属品について
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
写真に掲載のないもの、商品説明に表記されている付属品以外は付属しておりません。<br>商品説明・写真にてご確認の上、ご不明点がございましたらお気軽にお問い合わせ下さいませ。<br>
</font>
</TD>
</TR>


</TABLE>
</center>
<br>
<br>
<center>
<TABLE WIDTH=800 BGCOLOR=#000000 CELLSPACING=1 CELLPADDING=5>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=10%>
<B>
<font size="3">ランク</font>
</B>
</TD>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=45%>
<B>
<font size="3">総合ランク</font>
</B>
</TD>
</TR>
<TR>
<TD ALIGN=center BGCOLOR=#ffffff WIDTH=10%>
<B>
<FONT SIZE="7" color="#ff0000">
<?php echo $_POST['condition']; ?>
</font>
</B>
</TD>
<TD BGCOLOR=#ffffff WIDTH=45%>

<font size="2">【N】 ：新品※金具部分など輸送・検品の際にどうしてもついてしまう僅かなスレ傷がある場合がございます。<br>【S】 ：未使用品（展示品またはアウトレット商品含む） 未使用品だが長期保管や展示により明確なダメージ等がある商品。アウトレット商品も含まれます。<br>【SA】 ：超美品 細かなあまり目立たないダメージがある程度の新品同様に奇麗なUSED商品<br>【A】 ：若干の小キズがあるが全体的に非常にきれい<br>【AB】 ：新品仕上げ加工を施せばＡ又はＳＡランクになる商品<br>【B】 ：ベルトの垂れ、ガラス傷等がある商品<br>【BC】：文字盤やガラス等に深いキズ、シミがある<br>【C】 ：ジャンク品、故障有り<br>

</TD>
</tr>
</TABLE>
</center>
<br>
<br>
<center>
<table border="0" cellpadding="10" width="800">
<tr>
<td align="center">
<a href="tel:0120858881">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788503.jpg" width="100%" border="0" vspace="10"/>
</a>
</td>
</tr>
<tr>
<td align="center">
<a href="mailto:info@brandacross.jp">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788368.jpg" width="100%" border="0"/>
</a><br>
</td>
</tr>
</table>
<table border="0" cellpadding="10" width="800">
<tr>
<td align="center">
<a href="https://brandacross.jp/contact3.php">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788398.jpg" width="100%" border="0" vspace="20"/>
</a><br>
</td>
<td align="center">
<a href="https://auctions.yahoo.co.jp/seller/black_kps">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788375.jpg" width="100%" border="0" vspace="20"/>
</a></td>
</tr>
</table>
<br>
<br>
</center>
<center>
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788397.jpg" width="800">
</center>
<br>
<br>
</center>
</p>
