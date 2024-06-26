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
<?php echo str_replace(array("\n"), '
', $_POST['movement']); ?>

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
<?php echo str_replace(array("\n"), '
', $_POST['sex']); ?>

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
        echo "（新品、未使用品　製造から1年以内の商品）";
        break;
    case "NS":
        echo "（新品、未使用品　製造から2年以上経過、または製造年が不明な商品）";
        break;
    case "S":
        echo "（新品同様品）";
        break;
    case "A":
        echo "（若干の小キズがあるが全体的に非常にきれい）";
        break;
    case "AB":
        echo "（新品仕上げ加工を施せばＡ又はＳランクになる商品）";
        break;
    case "B":
        echo "（ベルトの垂れ、ガラス傷等がある商品）";
        break;
    case "BC":
        echo "（全体的に強い使用感がある）";
        break;
    case "C":
        echo "（文字盤やガラス等に深いキズ、シミがある）";
        break;
    case "D":
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
<?php if(!empty($_POST['detail'])): ?>
【詳　細】
<?php echo $_POST['detail']; ?>

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
