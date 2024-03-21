<!DOCTYPE html>
<html>
  <head>
    <title>タグ作成ツール 時計用</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
  </head>
  <body>
    <div class="w-[500px] m-3 border border-black">
      <div class="px-1 bg-slate-300">
        <span class="inline-block py-2 font-bold">N</span>
        <span>新品、未使用品　製造から1年以内の商品</span>
      </div>
      <div class="px-1">
        <span class="inline-block py-2 font-bold">NS</span>
        <span>新品、未使用品　製造から2年以上経過、または製造年が不明な商品</span>
      </div>
      <div class="px-1 bg-slate-300">
        <span class="inline-block py-2 font-bold">S</span>
        <span>新品同様品</span>
      </div>
      <div class="px-1">
        <span class="inline-block py-2 font-bold">A</span>
        <span>若干の小キズがあるが全体的に非常にきれい</span>
      </div>
      <div class="px-1 bg-slate-300">
        <span class="inline-block py-2 font-bold">AB</span>
        <span>新品仕上げ加工を施せばＡ又はＳランクになる商品</span>
      </div>
      <div class="px-1">
        <span class="inline-block py-2 font-bold">B</span>
        <span>ベルトの垂れ、ガラス傷等がある商品</span>
      </div>
      <div class="px-1 bg-slate-300">
        <span class="inline-block py-2 font-bold">C</span>
        <span>文字盤やガラス等に深いキズ、シミがある</span>
      </div>
      <div class="px-1">
        <span class="inline-block py-2 font-bold">D</span>
        <span>ジャンク品、故障有り</span>
      </div>
    </div>

    <form action="tag.php" method="POST" name="tag-form">

      <div class="md:flex">
        <div class="w-[500px] mt-6 m-3">
          <div class="border border-black">
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">商品管理番号(商品URL)</p>
              <input type="text" name="product-url" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">詳細画像URL</p>
              <input type="text" name="img-url" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">動画URL</p>
              <input type="text" name="video-url" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">管理番号</p>
              <input type="text" name="management-number" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">ブランド</p>
              <input type="text" name="brand" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">商品名</p>
              <input type="text" name="product-name" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">文字盤</p>
              <input type="text" name="dial" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">型番</p>
              <textarea name="model-number" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">シリアル</p>
              <textarea name="serial" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">素材</p>
              <textarea name="material" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">カラー</p>
              <textarea name="color" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">ムーブメント</p>
              <input type="text" name="movement" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">参考定価</p>
              <input type="text" name="price" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">性別</p>
              <textarea name="sex" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">日差</p>
              <textarea name="daily-rate" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">サイズ</p>
              <textarea name="size" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">機能</p>
              <textarea name="feature" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">付属品	</p>
              <textarea name="accessory" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">状態</p>
              <select name="condition" class="border border-black">
                <option value="" selected>選択してください</option>
                <option value="N">N</option>
                <option value="NS">NS</option>
                <option value="S">S</option>
                <option value="A">A</option>
                <option value="AB">AB</option>
                <option value="B">B</option>
                <option value="BC">BC</option>
                <option value="C">C</option>
                <option value="D">D</option>
              </select>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">詳細</p>
              <textarea name="detail" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">スタッフコメント</p>
              <textarea name="staff-comment" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">検索キーワード</p>
              <textarea name="search-word" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <input type="text" name="free-text" class="mb-1 border border-black">
              <input type="text" name="free-text-content" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <input type="text" name="free-text-2" class="mb-1 border border-black">
              <input type="text" name="free-text-content-2" size="40" class="border border-black">
            </div>
            <div class="p-1 border-black bg-slate-300">
              <input type="text" name="free-text-3" class="mb-1 border border-black">
              <input type="text" name="free-text-content-3" size="40" class="border border-black">
            </div>
          </div>
        </div>

        <div>
          <div class="w-[500px] mt-6 m-3 border border-black">
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">返品</p>
              <label>
                <input type="radio" name="return" value="true" checked>
                <span class="mr-6">対象</span>
              </label>
              <label>
                <input type="radio" name="return" value="false">
                <span>対象外</span>
              </label>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">あす楽</p>
              <label>
                <input type="radio" name="add-banner" value="true" checked>
                <span class="mr-6">バナー追加</span>
              </label>
              <label>
                <input type="radio" name="add-banner" value="false">
                <span>なし</span>
              </label>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">銀行振込のみ</p>
              <label>
                <input type="radio" name="add-banner-bank" value="true">
                <span class="mr-6">バナー追加</span>
              </label>
              <label>
                <input type="radio" name="add-banner-bank" value="false" checked>
                <span>なし</span>
              </label>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">発送日</p>
              <label>
                <input type="radio" name="business-days" value="true">
                <span class="mr-6">2～3営業日</span>
              </label>
              <label>
                <input type="radio" name="business-days" value="false" checked>
                <span>なし</span>
              </label>
            </div>
            <div class="p-1 border-black bg-slate-300">
              <p class="font-bold">オリコ対象</p>
              <label>
                <input type="radio" name="more-than-5" value="true">
                <span class="mr-6">5万以上</span>
              </label>
              <label>
                <input type="radio" name="more-than-5" value="false" checked>
                <span>5万以下</span>
              </label>
            </div>
          </div>

          <section class="w-[500px] mt-6 m-3 border border-black">
            <h1 class="p-1 border-b border-black text-xl font-bold">商品画像</h1>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">管理番号</p>
              <input type="text" name="img-management-number" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">キャビネット番号</p>
              <input type="text" name="cabinet-number" class="border border-black">
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">追加画像開始番号</p>
              <input type="text" name="start-number" class="border border-black">
            </div>
            <div class="p-1 border-black">
              <p class="font-bold">追加画像終了番号</p>
              <input type="text" name="end-number" class="border border-black">
            </div>
          </section>

          <section class="w-[500px] mt-6 m-3 border border-black">
            <h1 class="p-1 border-b border-black text-xl font-bold">楽天商品詳細下リンクボタン(スマホ)</h1>
            <div class="py-10 px-1 border-b border-black bg-slate-300">
              <p class="font-bold">ブランドカテゴリ【自動】</p>
              <select name="brand-category" class="border border-black mr-5">
                <option value="エルメス">エルメス</option>
                <option value="シャネル">シャネル</option>
                <option value="ルイヴィトン">ルイヴィトン</option>
                <option value="ボッテガヴェネタ">ボッテガヴェネタ</option>
                <option value="カルティエ">カルティエ</option>
                <option value="プラダ">プラダ</option>
                <option value="セリーヌ">セリーヌ</option>
                <option value="グッチ">グッチ</option>
                <option value="フェンディ">フェンディ</option>
                <option value="クロエ">クロエ</option>
                <option value="ロエベ">ロエベ</option>
                <option value="バレンシアガ">バレンシアガ</option>
                <option value="ミュウミュウ">ミュウミュウ</option>
                <option value="トリーバーチ">トリーバーチ</option>
                <option value="ブルガリ">ブルガリ</option>
                <option value="コーチ">コーチ</option>
                <option value="フェラガモ">フェラガモ</option>
                <option value="ティファニー">ティファニー</option>
                <option value="バーバリー">バーバリー</option>
                <option value="ディオール">ディオール</option>
                <option value="エムシーエム">エムシーエム</option>
                <option value="ロレックス">ロレックス</option>
                <input type="button" value="消す" id="brand-category-btn" class="px-2 border border-black rounded-md bg-slate-100 cursor-pointer active:shadow-xl">
              </select>
            </div>
            <div class="py-10 px-1 border-b border-black">
              <p class="font-bold">ブランドカテゴリURL</p>
              <input type="text" name="brand-category-url" value="https://item.rakuten.co.jp/brandacross/c/0000000100/" size="50" class="border border-black">
            </div>
            <div class="py-10 px-1 border-b border-black bg-slate-300">
              <p class="font-bold">アイテムカテゴリ【自動】</p>
              <select name="item-category" class="border border-black mr-5">
                <option value="バッグ">バッグ</option>
                <option value="財布">財布</option>
                <option value="小物">小物</option>
                <option value="ジュエリー">ジュエリー</option>
                <option value="時計">時計</option>
                <option value="アパレル">アパレル</option>
                <option value="お酒">お酒</option>
                <option value="アクセサリー">アクセサリー</option>
                <input type="button" value="消す" id="item-category-btn" class="px-2 border border-black rounded-md bg-slate-100 cursor-pointer active:shadow-xl">
              </select>
            </div>
            <div class="py-10 px-1 border-b border-black">
              <p class="font-bold">カテゴリNo</p>
              <input type="text" name="category-number" value="1" class="border border-black">
            </div>
            <div class="py-10 px-1 bg-slate-300">
              <p class="font-bold">アイテムカテゴリURL</p>
              <input type="text" name="item-category-url" value="https://item.rakuten.co.jp/brandacross/c/0000000143/" size="50" class="border border-black">
            </div>
          </section>
        </div>
      </div>

      <div class="w-[500px] mt-6 m-3">
        <input type="submit" value="タグ作成" class="px-2 border border-black rounded-md bg-slate-100 cursor-pointer active:shadow-xl">
      </div>

    </form>

    <script>
      const brandCategory = document.querySelector('[name="brand-category"]');
      const brandCategoryURL = document.querySelector('[name="brand-category-url"]');
      const brandCategoryBtn = document.querySelector("#brand-category-btn");
      brandCategory.addEventListener("change", () => {
        switch (brandCategory.value) {
          case "エルメス":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000100/"
            break;
          case "シャネル":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000101/";
            break;
          case "ルイヴィトン":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000102/";
            break;
          case "ボッテガヴェネタ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000103/";
            break;
          case "カルティエ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000104/";
            break;
          case "プラダ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000105/";
            break;
          case "セリーヌ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000106/";
            break;
          case "グッチ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000107/";
            break;
          case "フェンディ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000108/";
            break;
          case "クロエ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000109/";
            break;
          case "ロエベ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000199/";
            break;
          case "バレンシアガ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000197/";
            break;
          case "ミュウミュウ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000112/";
            break;
          case "トリーバーチ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000113/";
            break;
          case "ブルガリ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000114/";
            break;
          case "コーチ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000115/";
            break;
          case "フェラガモ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000116/";
            break;
          case "ティファニー":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000117/";
            break;
          case "バーバリー":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000198/";
            break;
          case "ディオール":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000119/";
            break;
          case "エムシーエム":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000120/";
            break;
          case "ロレックス":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000121/";
            break;
        }
      });
      brandCategoryBtn.addEventListener("click", () => {
        brandCategoryURL.value = "";
      });

      const itemCategory = document.querySelector('[name="item-category"]');
      const categoryNumber = document.querySelector('[name="category-number"]');
      const itemCategoryURL = document.querySelector('[name="item-category-url"]');
      const itemCategoryBtn = document.querySelector("#item-category-btn");

      itemCategory.addEventListener("change", () => {
        switch (itemCategory.value) {
          case "バッグ":
            categoryNumber.value = "1";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000143/";
            break;
          case "財布":
            categoryNumber.value = "2";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000144/";
            break;
          case "小物":
            categoryNumber.value = "3";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000222/";
            break;
          case "ジュエリー":
            categoryNumber.value = "4";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000146/";
            break;
          case "時計":
            categoryNumber.value = "5";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000145/";
            break;
          case "アパレル":
            categoryNumber.value = "6";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000147/";
            break;
          case "お酒":
            categoryNumber.value = "7";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000242/";
            break;
          case "アクセサリー":
            categoryNumber.value = "8";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000146/";
            break;
        }
      });
      itemCategoryBtn.addEventListener("click", () => {
        categoryNumber.value = "";
        itemCategoryURL.value = "";
      });
    </script>
  </body>
</html>
