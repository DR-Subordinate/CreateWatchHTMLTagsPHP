<?php if(!empty($_POST['product-name'])): ?>
【商品名】
<?php echo $_POST['product-name']; ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['model-number'])): ?>
【型　番】
<?php echo str_replace(array("\n"), '', $_POST['model-number']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['serial'])): ?>
【シリアル】
<?php echo str_replace(array("\n"), '', $_POST['serial']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['material'])): ?>
【素材】
<?php echo str_replace(array("\n"), '
', $_POST['material']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['color'])): ?>
【カラー】
<?php echo str_replace(array("\n"), '
', $_POST['color']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['movement'])): ?>
【ムーブメント】
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
 ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['price'])): ?>
【参考定価】
<?php echo str_replace(array("\n"), '
', $_POST['price']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['sex'])): ?>
【性別】
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
 ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['daily-rate'])): ?>
【日差】
<?php echo str_replace(array("\n"), '
', $_POST['daily-rate']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['size'])): ?>
【サイズ】
<?php echo str_replace(array("\n"), '
', $_POST['size']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['feature'])): ?>
【機能】
<?php echo str_replace(array("\n"), '
', $_POST['feature']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['accessory'])): ?>
【付属品】
<?php echo str_replace(array("\n"), '
', $_POST['accessory']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['condition'])): ?>
商品ランク　【<?php echo $_POST['condition']; ?>】　<?php endif; ?>
<?php 

switch ($_POST['condition']) {
    case "N":
        echo "（新品※金具部分など輸送・検品の際にどうしてもついてしまう僅かなスレ傷がある場合がございます。）";
        break;
    case "S":
        echo "（未使用品（展示品またはアウトレット商品含む） 未使用品だが長期保管や展示により明確なダメージ等がある商品。アウトレット商品も含まれます。）";
        break;
    case "SA":
        echo "（超美品 細かなあまり目立たないダメージがある程度の新品同様に奇麗なUSED商品）";
        break;
    case "A":
        echo "（若干の小キズがあるが全体的に非常にきれい）";
        break;
    case "AB":
        echo "（新品仕上げ加工を施せばＡ又はＳＡランクになる商品）";
        break;
    case "B":
        echo "（ベルトの垂れ、ガラス傷等がある商品）";
        break;
    case "BC":
        echo "（文字盤やガラス等に深いキズ、シミがある）";
        break;
    case "C":
        echo "（ジャンク品、故障有り）";
        break;
}
?>


<?php if(!empty($_POST['outside'])): ?>
【外　側】
<?php echo str_replace(array("\n"), '
', $_POST['outside']); ?>


<?php endif; ?>
<?php if(!empty($_POST['inside'])): ?>
【内　側】
<?php echo str_replace(array("\n"), '
', $_POST['inside']); ?>


<?php endif; ?>
<?php if(!empty($_POST['special-note'])): ?>
【特　記】
<?php echo str_replace(array("\n"), '
', $_POST['special-note']); ?>


<?php endif; ?>
------------------------
<?php if(!empty($_POST['inspection'])): ?>
【点　検】
<?php echo str_replace(array("\n"), '
', $_POST['inspection']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['case-bezel'])): ?>
【ケース・ベゼル】
<?php echo str_replace(array("\n"), '
', $_POST['case-bezel']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['case-back'])): ?>
【裏　蓋】
<?php echo str_replace(array("\n"), '
', $_POST['case-back']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['crystal'])): ?>
【風　防】
<?php echo str_replace(array("\n"), '
', $_POST['crystal']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['staff-comment'])): ?>
【スタッフコメント】
<?php echo $_POST['staff-comment']; ?>

------------------------
<?php endif; ?>
管理番号：<?php echo $_POST['management-number']; ?>


<?php if(!empty($_POST['related-word'])): ?>
<?php echo $_POST['related-word']; ?>
<?php endif; ?>
