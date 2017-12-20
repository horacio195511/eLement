<?php
require('header.php');
?>
<div class="main">
<form action="processorder.php" method="post">

 <fieldset>
   <legend>基本資料</legend>
  <ol>
  <li>
      <label for="name">姓名:</label>
      <input type="text" name="name" id="name" placeholder="王小明">
  </li>
  <li>
      <label for="email">電子信箱:</label>
      <input type="email" name="email" id="email" placeholder="example@mail.com">
  </li>
  <li>
      <label for="tel">行動電話:</label>
      <input type="tel" name="tel" id="tel" placeholder="09xx-xxx-xxx">
  </li>
  <li>
      <label fot="address">寄送地址:</label>
      <input type="address" name="address" id="address" placeholder="天龍國野豬市騎士路94巷87號">
  </li>
 </ol>
 </fieldset>
 <fieldset>
   <legend>訂單資訊</legend>
  <ol>
  <li>
      <label for="productname">品名:</label>
      <input type="text" name="productname" placeholder="玩偶" title="取個一目瞭然的名字吧">
  </li>
  <li>
      <label for="amount">數量:</label>
      <input type="number" name="amount" id="amount" value="1">
  </li>
  <li>
      <label for="color">顏色:</label>     
           <input type="radio" name="color" id="color" value="Red">紅色
           <input type="radio" name="color" id="color"value="Blue">藍色
           <input type="radio" name="color" id="color" value="Green">綠色
  </li>
  <li>
      <label for="material">材料:</label>
      <input type="radio" name="material" id="material"value="ABS">ABS
      <input type="radio" name="material" id="materail" value="PLA">PLA
  </li>
  <li>
      <label for="deadline">截止日期:</label>
      <input type="date" name="deadline" id="deadline">
  </li>
  <li>
      <label for="STLfile">模型檔:</label>
      <input type="file" name="STLfile" id="STLfile">
  </li>
  <li>
      <label for="ps">給列印者的話:</label>
      <input type="textfield" name="ps" id="ps" placeholder="五件ABS,3件藍色..." title="讓列印者更了解你的需求"></li>
 </ol>
 </fieldset>
 <fieldset>
  <input type="submit" value="送出">
 </fieldset>

</form>

<hr>
eLEMENT致力於降低3D列印的成本，加快3D列印的速度，我們相信在3D列印機忽略複雜度的
特性下，任何有形體的東東都可以被自造。 eLEMENT也相信網路無遠弗屆的力量，藉由這個
無邊無際的網路，我們串連起來自世界各地的3D列印機，打造低成本的社群製造網絡。
</div>
<?php
require('footer.php');
?>