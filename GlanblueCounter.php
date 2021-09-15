
<?php
  if(isset($_POST['postButton1'])) {
    @$akasha_hihi = $_POST['akasha-box-1'];
    @$akasha_shigoku = $_POST['akasha-box-2'];
    @$akasha_hagyou = $_POST['akasha-box-3'];
    @$akasha_eikan = $_POST['akasha-box-4'];
    @$akasha_ginten = $_POST['akasha-box-5'];
    @$akasha_kagi = $_POST['akasha-box-6'];
    @$akasha_kyukyou = $_POST['akasha-box-7'];
    @$akasha_hasya = $_POST['akasha-box-8'];
    @$akasha_eikou = $_POST['akasha-box-9'];
    @$akasha_weaponmirage = $_POST['akasha-box-10'];

    @$akasha_bluebox = 0;
    @$akasha_bluebox = $akasha_hihi + $akasha_shigoku + $akasha_hagyou + $akasha_eikan + $akasha_ginten + $akasha_kagi + $akasha_kyukyou + $akasha_hasya + $akasha_eikou + $akasha_weaponmirage;
    @$battlePoint = 0;
    @$battlePoint = $akasha_bluebox * 3;
  }

  if(@$akasha_hihi != 0){
    $total_hihi = 0;
    $total_hihi = ($akasha_hihi / $akasha_bluebox) * 100;
    $total_hihi = round($total_hihi, 2);
  }
  if(@$akasha_shigoku != 0){
    $total_shigoku = 0;
    $total_shigoku = ($akasha_shigoku / $akasha_bluebox) * 100;
    $total_shigoku = round($total_shigoku, 2);
  }

  if(@$akasha_hagyou != 0){
    $total_hagyou = 0;
    $total_hagyou = ($akasha_hagyou / $akasha_bluebox) * 100;
    $total_hagyou = round($total_hagyou, 2);
  }

  if(@$akasha_eikan != 0){
    $total_eikan = 0;
    $total_eikan = ($akasha_eikan / $akasha_bluebox) * 100;
    $total_eikan = round($total_eikan, 2);
  }

  if(@$akasha_ginten != 0){
    $total_ginten = 0;
    $total_ginten = ($akasha_ginten / $akasha_bluebox) * 100;
    $total_ginten = round($total_ginten, 2);
  }

  if(@$akasha_kagi != 0){
    $total_kagi = 0;
    $total_kagi = ($akasha_kagi / $akasha_bluebox) * 100;
    $total_kagi = round($total_kagi, 2);
  }

  if(@$akasha_kyukyou != 0){
    $total_kyukyou = 0;
    $total_kyukyou = ($akasha_kyukyou / $akasha_bluebox) * 100;
    $total_kyukyou = round($total_kyukyou, 2);
  }

  if(@$akasha_hasya != 0){
    $total_hasya = 0;
    $total_hasya = ($akasha_hasya / $akasha_bluebox) * 100;
    $total_hasya = round($total_hasya, 2);
  }

  if(@$akasha_eikou != 0){
    $total_eikou = 0;
    $total_eikou = ($akasha_eikou / $akasha_bluebox) * 100;
    $total_eikou = round($total_eikou, 2);
  }

  if(@$akasha_weaponmirage != 0){
    $total_weaponmirage = 0;
    $total_weaponmirage = ($akasha_weaponmirage / $akasha_bluebox) * 100;
    $total_weaponmirage = round($total_weaponmirage, 2);
  }

  if(isset($_POST['postButton2'])){
    @$glande_hihi = $_POST['glande-box-1'];
    @$glande_shigoku = $_POST['glande-box-2'];
    @$glande_hagyou = $_POST['glande-box-3'];
    @$glande_eikan = $_POST['glande-box-4'];
    @$glande_sousui = $_POST['glande-box-5'];
    @$glande_ginten = $_POST['glande-box-6'];
    @$glande_kyukyou = $_POST['glande-box-7'];
    @$glande_hasya = $_POST['glande-box-8'];
    @$glande_eikou = $_POST['glande-box-9'];

    @$glande_bluebox = 0;
    @$glande_bluebox = $glande_hihi + $glande_shigoku + $glande_hagyou + $glande_eikan + $glande_sousui + $glande_ginten + $glande_kyukyou + $glande_hasya + $glande_eikou;

    @$battlePoint2 = 0;
    @$battlePoint2 = $glande_bluebox * 3;
  }

  if(@$glande_hihi != 0){
    $total_hihi2 = 0;
    $total_hihi2 = ($glande_hihi / $glande_bluebox) * 100;
    $total_hihi2 = round($total_hihi2, 2);
  }

  if(@$glande_shigoku != 0){
    $total_shigoku2 = 0;
    $total_shigoku2 = ($glande_shigoku / $glande_bluebox) * 100;
    $total_shigoku2 = round($total_shigoku2, 2);
  }

  if(@$glande_hagyou != 0){
    $total_hagyou2 = 0;
    $total_hagyou2 = ($glande_hagyou / $glande_bluebox) * 100;
    $total_hagyou2 = round($total_hagyou2, 2);
  }

  if(@$glande_eikan != 0){
    $total_eikan2 = 0;
    $total_eikan2 = ($glande_eikan / $glande_bluebox) * 100;
    $total_eikan2 = round($total_eikan2, 2);
  }

  if(@$glande_sousui != 0){
    $total_sousui = 0;
    $total_sousui = ($glande_sousui / $glande_bluebox) * 100;
    $total_sousui = round($total_sousui, 2);
  }

  if(@$glande_ginten != 0){
    $total_ginten2 = 0;
    $total_ginten2 = ($glande_ginten / $glande_bluebox) * 100;
    $total_ginten2 = round($total_ginten2, 2);
  }

  if(@$glande_kyukyou != 0){
    $total_kyukyou2 = 0;
    $total_kyukyou2 = ($glande_kyukyou / $glande_bluebox) * 100;
    $total_kyukyou2 = round($total_kyukyou2, 2);
  }

  if(@$glande_hasya != 0){
    $total_hasya2 = 0;
    $total_hasya2 = ($glande_hasya / $glande_bluebox) * 100;
    $total_hasya2 = round($total_hasya2, 2);
  }

  if(@$glande_eikou != 0){
    $total_eikou2 = 0;
    $total_eikou2 = ($glande_eikou / $glande_bluebox) * 100;
    $total_eikou2 = round($total_eikou2, 2);
  }

  
?>

<?php
if(isset($_POST['postButton3'])){
  @$bahamut_hihi = $_POST['bahamut-box-1'];
  @$bahamut_shigoku = $_POST['bahamut-box-2'];
  @$bahamut_hagyou = $_POST['bahamut-box-3'];
  @$bahamut_eikan = $_POST['bahamut-box-4'];

  @$bahamut_bluebox = 0;
  @$bahamut_bluebox = $bahamut_hihi + $bahamut_shigoku + $bahamut_hagyou + $bahamut_eikan;

  @$battlePoint3 = 0;
  @$battlePoint3 = $bahamut_bluebox * 3;
}

if(@$bahamut_hihi != 0){
  $total_hihi3 = 0;
  $total_hihi3 = ($total_hihi3 / $bahamut_bluebox) * 100;
  $total_hihi3 = round($total_hihi3, 2);
}

if(@$bahamut_shigoku != 0){
  $total_shigoku3 = 0;
  $total_shigoku3 = ($total_shigoku3 / $bahamut_bluebox) * 100;
  $total_shigoku3 = round($total_shigoku3, 2);
}

if(@$bahamut_hagyou != 0){
  $total_hagyou3 = 0;
  $total_hagyou3 = ($total_hagyou3 / $bahamut_bluebox) * 100;
  $total_hagyou3 = round($total_hagyou3, 2);
}

if(@$bahamut_eikan != 0){
  $total_eikan3 = 0;
  $total_eikan3 = ($total_eikan3 / $bahamut_bluebox) * 100;
  $total_eikan3 = round($total_eikan3, 2);
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" type="text/css" href="counter.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset="utf-8">
<title>数値入力のサンプル</title>
</head>
  <body >
  <div class="tab-wrap">

<input id="tab01" type="radio" name="tab" class="tab-switch" checked="checked"><label class="tab-label" for="tab01">アーカーシャ</label>
  <div class="tab-content">
    <div class="spinner_area">
      <div class = zero>
        <h2>アーカーシャ(BP3)</h2>
        <h4>使用したBP:<?php echo @$battlePoint; ?></h4>
        <h4>総青箱数:<?php echo @$akasha_bluebox; ?></h4>
        <img src = "blueboxcounter_img/akasha.png" width = "348px" height = "193px">
        <hr size = 1>
        <h3>■使い方</h3>
        <p>1. ｢+ボタン｣を押してドロップしたアイテムの青箱を追加します</p>
        <p>(追加する数を間違えた場合は｢-ボタン｣で減算できます)</p>
        <p>2. 周回が終わったら｢計算する｣ボタンを押します</p>
        <p>3. それぞれのアイテムのドロップ率が表示されます</p>
        <p>※必ず最後に計算ボタンを押してください</p>
        <hr size = 1>
        <h3>更新履歴</h3>
        <p>2021/9/15 β版公開(結果に対するcsv出力などを今後追加予定)</p>
      </div>
      <form action = "#" method = "post">
        <ul class = "one">
          <li>
            <table>
              <td><img src = "blueboxcounter_img/hihi.png" width = "100px" height = "100px"></td>
              <td>
              <p>ヒヒイロカネ</p>
              <input type="number" name = "akasha-box-1" value="0" class="counter1_1" data-max_1="500" data-min_1="0">
              <input type="button" value="＋" class="btnspinner_1" data-cal_1="1" data-target_1=".counter1_1">
              <input type="button" value="－" class="btnspinner_1" data-cal_1="-1" data-target_1=".counter1_1"><br>
              <p> 確率:<?php echo @$total_hihi; ?>%</p>
              </td>
            </table>
          </li>
        
          <li>
            <table>
              <td><img src = "blueboxcounter_img/shigoku.png" width = "100px" height = "100px"></td>
              <td>
              <p>至極の指輪</p>
              <input type="number" name = "akasha-box-2" value="0" class="counter1_2" data-max_2="500" data-min_2="0">
              <input type="button" value="＋" class="btnspinner_2" data-cal_2="1" data-target_2=".counter1_2">
              <input type="button" value="－" class="btnspinner_2" data-cal_2="-1" data-target_2=".counter1_2"><br>
              <p>確率:<?php echo @$total_shigoku; ?>%</p>
              </td>
            </table>
          </li>
          <li>
            <table>
              <td><img src = "blueboxcounter_img/hagyou.png" width = "100px" height = "100px"></td>
              <td>
              <p>覇業の指輪</p>
              <input type="number" name = "akasha-box-3" value="0" class="counter1_3" data-max_3="500" data-min_3="0">
              <input type="button" value="＋" class="btnspinner_3" data-cal_3="1" data-target_3=".counter1_3">
              <input type="button" value="－" class="btnspinner_3" data-cal_3="-1" data-target_3=".counter1_3"><br>
              <p>確率:<?php echo @$total_hagyou; ?>%</p>
              </td>
            </table>
          </li>
          <li>
            <table>
              <td><img src = "blueboxcounter_img/eikan.png" width = "100px" height = "100px"></td>
              <td>
              <p>栄冠の指輪</p>
              <input type="number" name = "akasha-box-4" value="0" class="counter1_4" data-max_4="500" data-min_4="0">
              <input type="button" value="＋" class="btnspinner_4" data-cal_4="1" data-target_4=".counter1_4">
              <input type="button" value="－" class="btnspinner_4" data-cal_4="-1" data-target_4=".counter1_4"><br>
              <p>確率:<?php echo @$total_eikan; ?>%</p>
              </td>
            </table>
          </li>
        </ul>

        <ul class = "two">
          <li>
            <table>
              <td><img src = "blueboxcounter_img/ginten.png" width = "100px" height = "100px"></td>
              <td>
              <p>銀天の輝き</p>
              <input type="number" name = "akasha-box-5" value="0" class="counter1_5" data-max_5="500" data-min_5="0">
              <input type="button" value="＋" class="btnspinner_5" data-cal_5="1" data-target_5=".counter1_5">
              <input type="button" value="－" class="btnspinner_5" data-cal_5="-1" data-target_5=".counter1_5"><br>
              <p>確率:<?php echo @$total_ginten; ?>%</p>
              </td>
            </table>
          </li>
          <li>
            <table>
              <td><img src = "blueboxcounter_img/kagi.png" width = "100px" height = "100px"></td>
              <td>
              <p>虚ろなる鍵</p>
              <input type="number" name = "akasha-box-6" value="0" class="counter1_6" data-max_6="500" data-min_6="0">
              <input type="button" value="＋" class="btnspinner_6" data-cal_6="1" data-target_6=".counter1_6">
              <input type="button" value="－" class="btnspinner_6" data-cal_6="-1" data-target_6=".counter1_6"><br>
              <p>確率:<?php echo @$total_kagi; ?>%</p>
              </td>
            </table>
          </li>
          <li>
            <table>
              <td><img src = "blueboxcounter_img/kyukyou.png" width = "100px" height = "100px"></td>
              <td>
              <p>究竟の証</p>
              <input type="number" name = "akasha-box-7" value="0" class="counter1_7" data-max_7="500" data-min_7="0">
              <input type="button" value="＋" class="btnspinner_7" data-cal_7="1" data-target_7=".counter1_7">
              <input type="button" value="－" class="btnspinner_7" data-cal_7="-1" data-target_7=".counter1_7"><br>
              <p>確率:<?php echo @$total_kyukyou; ?>%</p>
              </td>
            </table>
          </li>
        </ul>

        <ul class = "three">
          <li>
            <table>
              <td><img src = "blueboxcounter_img/hasya.png" width = "100px" height = "100px"></td>
              <td>
              <p>覇者の証</p>
              <input type="number" name = "akasha-box-8" value="0" class="counter1_8" data-max_8="500" data-min_8="0">
              <input type="button" value="＋" class="btnspinner_8" data-cal_8="1" data-target_8=".counter1_8">
              <input type="button" value="－" class="btnspinner_8" data-cal_8="-1" data-target_8=".counter1_8"><br>
              <p>確率:<?php echo @$total_hasya; ?>%</p>
              </td>
            </table>
          </li>
          <li>
            <table>
              <td><img src = "blueboxcounter_img/eikou.png" width = "100px" height = "100px"></td>
              <td>
              <p>栄光の証</p>
              <input type="number" name = "akasha-box-9" value="0" class="counter1_9" data-max_9="500" data-min_9="0">
              <input type="button" value="＋" class="btnspinner_9" data-cal_9="1" data-target_9=".counter1_9">
              <input type="button" value="－" class="btnspinner_9" data-cal_9="-1" data-target_9=".counter1_9"><br>
              <p>確率:<?php echo @$total_eikou; ?>%</p>
              </td>
            </table>
          </li>
          <li>
            <table>
              <td><img src = "blueboxcounter_img/ponmira.png" width = "100px" height = "100px"></td>
              <td>
              <p>ウェポンミラージュ</p>
              <input type="number" name = "akasha-box-10" value="0" class="counter1_10" data-max_10="500" data-min_10="0">
              <input type="button" value="＋" class="btnspinner_10" data-cal_10="1" data-target_10=".counter1_10">
              <input type="button" value="－" class="btnspinner_10" data-cal_10="-1" data-target_10=".counter1_10"><br>
              <p>確率:<?php echo @$total_weaponmirage; ?>%</p><br>
              </td>
            </table>
          </li>
        </ul>
        <div class = "inputbutton1"><input type = "submit" name = "postButton1" value = "計算する"></div>
      </form>
    </div>
  </div>

<input id="tab02" type="radio" name="tab" class="tab-switch"><label class="tab-label" for="tab02">ジ･オーダー･グランデHL</label>
  <div class="tab-content">
    <div class="spinner_area2">
      <div class = zero>
        <h2>ジ･オーダー･グランデHL(BP3)</h2>
        <h4>使用したBP:<?php echo @$battlePoint2; ?></h4>
        <h4>総青箱数:<?php echo @$glande_bluebox; ?></h4>
        <img src = "blueboxcounter_img/glande.png" width = "348px" height = "193px">
        <hr size = 1>
        <h3>■使い方</h3>
        <p>1. ｢+ボタン｣を押してドロップしたアイテムの青箱を追加します</p>
        <p>(追加する数を間違えた場合は｢-ボタン｣で減算できます)</p>
        <p>2. 周回が終わったら｢計算する｣ボタンを押します</p>
        <p>3. それぞれのアイテムのドロップ率が表示されます</p>
        <p>※必ず最後に計算ボタンを押してください</p>
        <hr size = 1>
        <h3>更新履歴</h3>
        <p>2021/9/15 β版公開(結果に対するcsv出力などを今後追加予定)</p>
      </div>
      <form action = "#" method = "post">
        <ul class = "glande-one">
          <li>
            <table>
              <td><img src = "blueboxcounter_img/hihi.png" width = "100px" height = "100px"></td>
              <td>
              <p>ヒヒイロカネ</p>
              <input type="number" name = "glande-box-1" value="0" class="counter2_1" data-max2_1="500" data-min2_1="0">
              <input type="button" value="＋" class="btnspinner2_1" data-cal2_1="1" data-target2_1=".counter2_1">
              <input type="button" value="－" class="btnspinner2_1" data-cal2_1="-1" data-target2_1=".counter2_1"><br>
              <p>確率:<?php echo @$total_hihi2; ?>%</p>
              </td>
            </table>
          </li>

          <li>
            <table>
              <td><img src = "blueboxcounter_img/shigoku.png" width = "100px" height = "100px"></td>
              <td>
                <p>至極の指輪</p>
                <input type="number" name = "glande-box-2" value="0" class="counter2_2" data-max2_2="500" data-min2_2="0">
                <input type="button" value="＋" class="btnspinner2_2" data-cal2_2="1" data-target2_2=".counter2_2">
                <input type="button" value="－" class="btnspinner2_2" data-cal2_2="-1" data-target2_2=".counter2_2"><br>
                <p>確率:<?php echo @$total_shigoku2; ?>%</p>
                </td>
            </table>
          </li>
          <li>
            <table>
              <td><img src = "blueboxcounter_img/hagyou.png" width = "100px" height = "100px"></td>
              <td>
                <p>覇業の指輪</p>
                <input type="number" name = "glande-box-3" value="0" class="counter2_3" data-max2_3="500" data-min2_3="0">
                <input type="button" value="＋" class="btnspinner2_3" data-cal2_3="1" data-target2_3=".counter2_3">
                <input type="button" value="－" class="btnspinner2_3" data-cal2_3="-1" data-target2_3=".counter2_3"><br>
                <p>確率:<?php echo @$total_hagyou2; ?>%</p>
                </td>
            </table>
          </li>
      </ul>
      <ul class = "glande-two">
          <li>
            <table>
              <td><img src = "blueboxcounter_img/eikan.png" width = "100px" height = "100px"></td>
              <td>
                <p>栄冠の指輪</p>
                <input type="number" name = "glande-box-4" value="0" class="counter2_4" data-max2_4="500" data-min2_4="0">
                <input type="button" value="＋" class="btnspinner2_4" data-cal2_4="1" data-target2_4=".counter2_4">
                <input type="button" value="－" class="btnspinner2_4" data-cal2_4="-1" data-target2_4=".counter2_4"><br>
                <p>確率:<?php echo @$total_eikan2; ?>%</p>
                </td>
            </table>
          </li>

          <li>
            <table>
              <td><img src = "blueboxcounter_img/sousui.png" width = "100px" height = "100px"></td>
              <td>
                <p>蒼翠の結晶</p>
                <input type="number" name = "glande-box-5" value="0" class="counter2_5" data-max2_5="500" data-min2_5="0">
                <input type="button" value="＋" class="btnspinner2_5" data-cal2_5="1" data-target2_5=".counter2_5">
                <input type="button" value="－" class="btnspinner2_5" data-cal2_5="-1" data-target2_5=".counter2_5"><br>
                <p>確率:<?php echo @$total_sousui; ?>%</p>
                </td>
            </table>
          </li>

          <li>
            <table>
              <td><img src = "blueboxcounter_img/ginten.png" width = "100px" height = "100px"></td>
              <td>
                <p>銀天の輝き</p>
                <input type="number" name = "glande-box-6" value="0" class="counter2_6" data-max2_6="500" data-min2_6="0">
                <input type="button" value="＋" class="btnspinner2_6" data-cal2_6="1" data-target2_6=".counter2_6">
                <input type="button" value="－" class="btnspinner2_6" data-cal2_6="-1" data-target2_6=".counter2_6"><br>
                <p>確率:<?php echo @$total_ginten2; ?>%</p>
                </td>
            </table>
          </li>
      </ul>
      <ul class = "glande-three">
        <li>
          <table>
            <td><img src = "blueboxcounter_img/kyukyou.png" width = "100px" height = "100px"></td>
            <td>
            <p>究竟の証</p>
            <input type="number" name = "glande-box-7" value="0" class="counter2_7" data-max2_7="500" data-min2_7="0">
            <input type="button" value="＋" class="btnspinner2_7" data-cal2_7="1" data-target2_7=".counter2_7">
            <input type="button" value="－" class="btnspinner2_7" data-cal2_7="-1" data-target2_7=".counter2_7"><br>
            <p>確率:<?php echo @$total_kyukyou2; ?>%</p>
            </td>
          </table>
        </li>

        <li>
          <table>
            <td><img src = "blueboxcounter_img/hasya.png" width = "100px" height = "100px"></td>
            <td>
            <p>覇者の証×2</p>
            <input type="number" name = "glande-box-8" value="0" class="counter2_8" data-max2_8="500" data-min2_8="0">
            <input type="button" value="＋" class="btnspinner2_8" data-cal2_8="1" data-target2_8=".counter2_8">
            <input type="button" value="－" class="btnspinner2_8" data-cal2_8="-1" data-target2_8=".counter2_8"><br>
            <p>確率:<?php echo @$total_hasya2; ?>%</p>
            </td>
          </table>
        </li>

        <li>
          <table>
            <td><img src = "blueboxcounter_img/eikou.png" width = "100px" height = "100px"></td>
            <td>
            <p>栄光の証×2</p>
            <input type="number" name = "glande-box-9" value="0" class="counter2_9" data-max2_9="500" data-min2_9="0">
            <input type="button" value="＋" class="btnspinner2_9" data-cal2_9="1" data-target2_9=".counter2_9">
            <input type="button" value="－" class="btnspinner2_9" data-cal2_9="-1" data-target2_9=".counter2_9"><br>
            <p>確率:<?php echo @$total_eikou2; ?>%</p><br>
            </td>
          </table>
        </li>
      </ul>

      <div class = "inputbutton2"><input type = "submit" name = "postButton2" value = "計算する"></div>
      </form>
    </div>
  </div>

<input id="tab03" type="radio" name="tab" class="tab-switch"><label class="tab-label" for="tab03">プロトバハムートHL</label>
  <div class="tab-content">
    <div class="spinner_area3">
      <div class = zero>
        <h2>プロトバハムートHL(BP3)</h2>
        <h4>使用したBP:<?php echo @$battlePoint3; ?></h4>
        <h4>総青箱数:<?php echo @$bahamut_bluebox; ?></h4>
        <img src = "blueboxcounter_img/bahamutp.png" width = "348px" height = "193px">
        <hr size = 1>
        <h3>■使い方</h3>
        <p>1. ｢+ボタン｣を押してドロップしたアイテムの青箱を追加します</p>
        <p>(追加する数を間違えた場合は｢-ボタン｣で減算できます)</p>
        <p>2. 周回が終わったら｢計算する｣ボタンを押します</p>
        <p>3. それぞれのアイテムのドロップ率が表示されます</p>
        <p>※必ず最後に計算ボタンを押してください</p>
        <hr size = 1>
        <h3>更新履歴</h3>
        <p>2021/9/15 β版公開(結果に対するcsv出力などを今後追加予定)</p>
      </div>
      <form action = "#" method = "post">
        <ul class = "bahamut-one">
          <li>
            <table>
              <td><img src = "blueboxcounter_img/hihi.png" width = "100px" height = "100px"></td>
              <td>
              <p>ヒヒイロカネ</p>
              <input type="number" name = "bahamut-box-1" value="0" class="counter3_1" data-max3_1="500" data-min3_1="0">
              <input type="button" value="＋" class="btnspinner3_1" data-cal3_1="1" data-target3_1=".counter3_1">
              <input type="button" value="－" class="btnspinner3_1" data-cal3_1="-1" data-target3_1=".counter3_1"><br>
              <p>確率:<?php echo @$total_hihi3; ?>%</p>
              </td>
            </table>
          </li>

          <li>
            <table>
              <td><img src = "blueboxcounter_img/shigoku.png" width = "100px" height = "100px"></td>
              <td>
              <p>至極の指輪</p>
              <input type="number" name = "bahamut-box-2" value="0" class="counter3_2" data-max3_2="500" data-min3_2="0">
              <input type="button" value="＋" class="btnspinner3_2" data-cal3_2="1" data-target3_2=".counter3_2">
              <input type="button" value="－" class="btnspinner3_2" data-cal3_2="-1" data-target3_2=".counter3_2"><br>
              <p>確率:<?php echo @$total_shigoku3; ?>%</p>
              </td>
            </table>
          </li>
        </ul>

        <ul class = "bahamut-two">
          <li>
            <table>
              <td><img src = "blueboxcounter_img/hagyou.png" width = "100px" height = "100px"></td>
              <td>
              <p>覇業の指輪</p>
              <input type="number" name = "bahamut-box-3" value="0" class="counter3_3" data-max3_3="500" data-min3_3="0">
              <input type="button" value="＋" class="btnspinner3_3" data-cal3_3="1" data-target3_3=".counter3_3">
              <input type="button" value="－" class="btnspinner3_3" data-cal3_3="-1" data-target3_3=".counter3_3"><br>
              <p>確率:<?php echo @$total_hagyou3; ?>%</p>
              </td>
            </table>
          </li>

          <li>
            <table>
              <td><img src = "blueboxcounter_img/eikan.png" width = "100px" height = "100px"></td>
              <td>
              <p>栄冠の指輪</p>
              <input type="number" name = "bahamut-box-4" value="0" class="counter3_4" data-max3_4="500" data-min3_4="0">
              <input type="button" value="＋" class="btnspinner3_4" data-cal3_4="1" data-target3_4=".counter3_4">
              <input type="button" value="－" class="btnspinner3_4" data-cal3_4="-1" data-target3_4=".counter3_4"><br>
              <p>確率:<?php echo @$total_eikan3; ?>%</p><br>
              </td>
            </table>
          </li>
        </ul>
        
        <div class = "inputbutton3"><input type = "submit" name = "postButton3" value = "計算する"></div>
      </form>
    </div>
  </div>

</div>

  <script type="text/javascript" src="counterJs.js"></script>
  </body>
</html>
<!--参考にしたとこ https://kinocolog.com/spinner_btn/-->