<div class="footer">
        <!--  <div class="menu-footer">
             <div class="colume-one">
                <p style="font-size:16px;font-weight:bold">Danh mục</p>
                <a href="">Sang trọng()</a><br/>
                <a href="">Nhà hàng()</a><br/>
                <a href="">Buffet()</a><br/>
                <a href="">Ăn vặt/Vỉa hè()</a><br/>
                <a href="">Cafe/Dessert()</a><br/>
                <a href="">+Xem thêm</a>
             </div>
             <div class="colume-two">
                <p style="font-size:16px;font-weight:bold">Danh mục</p>
                <a href="">Sang trọng()</a><br/>
                <a href="">Nhà hàng()</a><br/>
                <a href="">Buffet()</a><br/>
                <a href="">Ăn vặt/Vỉa hè()</a><br/>
                <a href="">Cafe/Dessert()</a><br/>
                <a href="">+Xem thêm</a>
             </div>
             <div class="colume-three">
                <p style="font-size:16px;font-weight:bold">Danh mục</p>
                <a href="">Sang trọng()</a><br/>
                <a href="">Nhà hàng()</a><br/>
                <a href="">Buffet()</a><br/>
                <a href="">Ăn vặt/Vỉa hè()</a><br/>
                <a href="">Cafe/Dessert()</a><br/>
                <a href="">+Xem thêm</a>
             </div>
             <div class="colume-four">
                <p style="font-size:16px;font-weight:bold">Danh mục</p>
                <a href="">Sang trọng()</a><br/>
                <a href="">Nhà hàng()</a><br/>
                <a href="">Buffet()</a><br/>
                <a href="">Ăn vặt/Vỉa hè()</a><br/>
                <a href="">Cafe/Dessert()</a><br/>
                <a href="">+Xem thêm</a>
             </div>
         </div> -->
         <div class="wrapper-footer">
           <span>©2018 Foody Corporation. Lầu 8, Tòa nhà Jabes 1, 244 Cống Quỳnh, P. Phạm Ngũ Lão, Quận 1, TP.HCM</span>
            <span style="margin-bottom:5px;">Số giấy phép ĐKKD: 0311828036 do sở Kế hoạch và Đầu Tư TPHCM cấp ngày 11/06/2012</span>
         </div>    

</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myUL").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('#myInput')) {

    var dropdowns = document.getElementsByIdName("myUL");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>