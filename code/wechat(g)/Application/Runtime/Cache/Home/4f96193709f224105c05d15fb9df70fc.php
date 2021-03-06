<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>购物车</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/Public/bookstore/lib/weui.min.css" type="text/css">
    <link rel="stylesheet" href="/Public/bookstore/css/jquery-weui.min.css" type="text/css">

    <style>
        html,body{
            height:100%;
        }
        .weui_tab .weui_tab_bd .content img{
            width:100%;
            display: block;
        }
    </style>
</head>
<body>
    <div class="weui_tab">
        <div class="weui_tab">
            <div class="weui_navbar">
                <span class="weui_navbar_item weui_bar_item_on">
                     购物车
                </span>
            </div>
            <div class="weui_tab_bd">
            <!--商品开始-->
                <div class="content">
                    <div class="weui_panel">
                         <div class="weui_panel weui_panel_access">
                              <div style="height: 30px">

                                   <a  href="xjfl.html" class="weui_cell">
                                       <div class="weui_cell_hd">
                                            <img src="/Public/bookstore/images/c1.jpg" alt="icon" style="width:15px;height:15px;margin-right:5px;display:block">
                                        </div>
                                       <div class="weui_cell_ft">
                                         我的购物车
                                       </div>
                                   </a>
                              </div>
                         <div class="weui_panel_bd">
                             <!--第一个商品开始-->
                             <span href="buy.html" class="weui_media_box weui_media_appmsg">
                              <input type="checkbox" name="checkAll" id="checkAll" onclick="setSelectAll();" />&nbsp;&nbsp;&nbsp;
                                  <div class="weui_media_hd">
                                      <a href="buy.html"><img class="weui_media_appmsg_thumb" src="/Public/bookstore/images/jieda.jpg" alt=""></a>
                                  </div>
                                  <div class="weui_media_bd">
                                      <div style="width: 100px">
                                          <h4 class="weui_media_title">解答之书</h4>
                                      </div>

                                  </div>
                                 <div>
                                     <div style="width: 30px; margin-bottom: 10px; margin-left: 70px">
                                          <i class="weui_icon_cancel" name="delete"></i>
                                      </div>
                                      <div class="weui_cell_ft">
                                          <p class="weui_media_desc">￥10.00</p>
                                          <p class="weui_media_desc">×1</p>
                                      </div>
                                 </div>

                               </span>
                             <!--第二个商品开始-->
                             <span href="buy.html" class="weui_media_box weui_media_appmsg">
                              <input type="checkbox" name="checkAll" id="checkAll" onclick="setSelectAll();" />&nbsp;&nbsp;&nbsp;
                                  <div class="weui_media_hd">
                                      <a href="buy.html"><img class="weui_media_appmsg_thumb" src="/Public/bookstore/images/jieda.jpg" alt=""></a>
                                  </div>
                                  <div class="weui_media_bd">
                                      <div style="width: 100px">
                                          <h4 class="weui_media_title">黄铜笔夹</h4>
                                      </div>

                                  </div>
                                 <div>
                                     <div style="width: 30px; margin-bottom: 10px; margin-left: 70px">
                                          <i class="weui_icon_cancel" name="delete"></i>
                                      </div>
                                      <div class="weui_cell_ft">
                                          <p class="weui_media_desc">￥21.00</p>
                                          <p class="weui_media_desc">×1</p>
                                      </div>
                                 </div>

                               </span>
                         </div>
                         </div>
                    </div>
                </div>
            </div>
    <!--商品结束-->
            <div class="weui_tabbar">
<!--         <a href="index.html" class="weui_tabbar_item weui_bar_item_on" > -->
                <div class="weui_tabbar_item weui_bar_item_on">
                    <div style="margin-left: 10px"><input type="checkbox" id="selAll" onclick="selectAll();" />全选</div>
                    <div class="weui_cell_ft" name=""><h3 style="color: #9B410E">合计：￥0.00</h3></div>
                    <a href="javascript:;" class="weui_btn weui_btn_warn">结算</a>
                </div>
            </div>
            </div>
        </div>
</body>
<script type="text/javascript" src="/Public/bookstore/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/Public/bookstore/js/jquery-weui.min.js"></script>
<script type='text/javascript' src='/Public/bookstore/js/swiper.js' charset='utf-8'></script>


<script>
    $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
    });
    $(".weui_navbar .weui_navbar_item").click(function () {
        $(".weui_navbar.weui_navbar_item").removeClass("weui_bar_item_on");//谁都没有weui_bar_item_on
        $(this).addClass("weui_bar_item_on");//点谁谁有weui_bar_item_on
//        判断点击的是第几个选项卡
        var which = $(this).index();
        console.log(which);
//        让所有内容区域都隐藏
        $(".weui_tab_bd .content").hide();
//        按索引显示所有内容
        $(".weui_tab_bd .content:eq("+which+")").show();
    })

    $(document).ready(function () {
        console.log('！');
        $(".weui_icon_cancel").click(function () {
            var tag = confirm('真的要删除吗？');
            if(!tag){
                return false;
            }
        })
    })
</script>

<script language="javascript"> 

//选中全选按钮，下面的checkbox全部选中 
var selAll = document.getElementById("selAll"); 
function selectAll() 
{ 
  var obj = document.getElementsByName("checkAll"); 
  if(document.getElementById("selAll").checked == false) 
  { 
  for(var i=0; i<obj.length; i++) 
  { 
    obj[i].checked=false; 
  } 
  }else 
  { 
  for(var i=0; i<obj.length; i++) 
  {   
    obj[i].checked=true; 
  } 
  } 
  
} 

//当选中所有的时候，全选按钮会勾上 
function setSelectAll() 
{ 
var obj=document.getElementsByName("checkAll"); 
var count = obj.length; 
var selectCount = 0; 

for(var i = 0; i < count; i++) 
{ 
if(obj[i].checked == true) 
{ 
selectCount++;  
} 
} 
if(count == selectCount) 
{   
document.all.selAll.checked = true; 
} 
else 
{ 
document.all.selAll.checked = false; 
} 
} 



</script> 

<script>
    /**
     * Created by an www.jq22.com
     */
    window.onload = function () {
        if (!document.getElementsByClassName) {
            document.getElementsByClassName = function (cls) {
                var ret = [];
                var els = document.getElementsByTagName('*');
                for (var i = 0, len = els.length; i < len; i++) {

                    if (els[i].className.indexOf(cls + ' ') >=0 || els[i].className.indexOf(' ' + cls + ' ') >=0 || els[i].className.indexOf(' ' + cls) >=0) {
                        ret.push(els[i]);
                    }
                }
                return ret;
            }
        }

        //var table = document.getElementById('cartTable'); // 购物车表格
        var selectInputs = document.getElementsByClassName('check'); // 所有勾选框
        var checkAllInputs = document.getElementsByClassName('check-all') // 全选框
        var tr = table.children[1].rows; //行
        var selectedTotal = document.getElementById('selectedTotal'); //已选商品数目容器
        var priceTotal = document.getElementById('priceTotal'); //总计
        var deleteAll = document.getElementById('deleteAll'); // 删除全部按钮
        var selectedViewList = document.getElementById('selectedViewList'); //浮层已选商品列表容器
        var selected = document.getElementById('selected'); //已选商品
        var foot = document.getElementById('foot');

        // 更新总数和总价格，已选浮层
        function getTotal() {
            var seleted = 0;
            var price = 0;
            var HTMLstr = '';
            for (var i = 0, len = tr.length; i < len; i++) {
                if (tr[i].getElementsByTagName('input')[0].checked) {
                    tr[i].className = 'on';
                    seleted += parseInt(tr[i].getElementsByTagName('input')[1].value);
                    price += parseFloat(tr[i].cells[4].innerHTML);
                    HTMLstr += '<div><img src="' + tr[i].getElementsByTagName('img')[0].src + '"><span class="del" index="' + i + '">取消选择</span></div>'
                }
                else {
                    tr[i].className = '';
                }
            }
            selectedTotal.innerHTML = seleted;
            priceTotal.innerHTML = price.toFixed(2);
            selectedViewList.innerHTML = HTMLstr;

            if (seleted == 0) {
                foot.className = 'foot';
            }
        }
        // 计算单行价格
        function getSubtotal(tr) {
            var cells = tr.cells;
            var price = cells[2]; //单价
            var subtotal = cells[4]; //小计td
            var countInput = tr.getElementsByTagName('input')[1]; //数目input
            var span = tr.getElementsByTagName('span')[1]; //-号
            //写入HTML
            subtotal.innerHTML = (parseInt(countInput.value) * parseFloat(price.innerHTML)).toFixed(2);
            //如果数目只有一个，把-号去掉
            if (countInput.value == 1) {
                span.innerHTML = '';
            }else{
                span.innerHTML = '-';
            }
        }

        // 点击选择框
        for(var i = 0; i < selectInputs.length; i++ ){
            selectInputs[i].onclick = function () {
                if (this.className.indexOf('check-all') >= 0) { //如果是全选，则吧所有的选择框选中
                    for (var j = 0; j < selectInputs.length; j++) {
                        selectInputs[j].checked = this.checked;
                    }
                }
                if (!this.checked) { //只要有一个未勾选，则取消全选框的选中状态
                    for (var i = 0; i < checkAllInputs.length; i++) {
                        checkAllInputs[i].checked = false;
                    }
                }
                getTotal();//选完更新总计
            }
        }

        // 显示已选商品弹层
        selected.onclick = function () {
            if (selectedTotal.innerHTML != 0) {
                foot.className = (foot.className == 'foot' ? 'foot show' : 'foot');
            }
        }

        //已选商品弹层中的取消选择按钮
        selectedViewList.onclick = function (e) {
            var e = e || window.event;
            var el = e.srcElement;
            if (el.className=='del') {
                var input =  tr[el.getAttribute('index')].getElementsByTagName('input')[0]
                input.checked = false;
                input.onclick();
            }
        }

        //为每行元素添加事件
        for (var i = 0; i < tr.length; i++) {
            //将点击事件绑定到tr元素
            tr[i].onclick = function (e) {
                var e = e || window.event;
                var el = e.target || e.srcElement; //通过事件对象的target属性获取触发元素
                var cls = el.className; //触发元素的class
                var countInout = this.getElementsByTagName('input')[1]; // 数目input
                var value = parseInt(countInout.value); //数目
                //通过判断触发元素的class确定用户点击了哪个元素
                switch (cls) {
                    case 'add': //点击了加号
                        countInout.value = value + 1;
                        getSubtotal(this);
                        break;
                    case 'reduce': //点击了减号
                        if (value > 1) {
                            countInout.value = value - 1;
                            getSubtotal(this);
                        }
                        break;
                    case 'delete': //点击了删除
                        var conf = confirm('确定删除此商品吗？');
                        if (conf) {
                            this.parentNode.removeChild(this);
                        }
                        break;
                }
                getTotal();
            }
            // 给数目输入框绑定keyup事件
            tr[i].getElementsByTagName('input')[1].onkeyup = function () {
                var val = parseInt(this.value);
                if (isNaN(val) || val <= 0) {
                    val = 1;
                }
                if (this.value != val) {
                    this.value = val;
                }
                getSubtotal(this.parentNode.parentNode); //更新小计
                getTotal(); //更新总数
            }
        }
        // 点击全部删除
        deleteAll.onclick = function () {
            if (selectedTotal.innerHTML != 0) {
                var con = confirm('确定删除所选商品吗？'); //弹出确认框
                if (con) {
                    for (var i = 0; i < tr.length; i++) {
                        // 如果被选中，就删除相应的行
                        if (tr[i].getElementsByTagName('input')[0].checked) {
                            tr[i].parentNode.removeChild(tr[i]); // 删除相应节点
                            i--; //回退下标位置
                        }
                    }
                }
            } else {
                alert('请选择商品！');
            }
            getTotal(); //更新总数
        }
        console.log("\u767e\u5ea6\u641c\u7d22\u3010\u7d20\u6750\u5bb6\u56ed\u3011\u4e0b\u8f7d\u66f4\u591aJS\u7279\u6548\u4ee3\u7801");
        // 默认全选
        checkAllInputs[0].checked = true;
        checkAllInputs[0].onclick();
    }
</script>

</html>