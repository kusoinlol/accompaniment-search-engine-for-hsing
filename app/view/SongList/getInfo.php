<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <!-- <script type="text/javascript" src="./SongList.js"></script> -->
        <title>歌曲查詢器</title>
    </head>
    <body>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
        ga('create', 'UA-74312450-1', 'auto');
        ga('send', 'pageview');
    </script>
    <style>
    div.loadingdiv{
        height:100%; //100%覆蓋網頁內容, 避免user在loading時進行其他操作
        width:100%;
        /*position:absolute;*/
        z-index:90; //須大於網頁內容
        top:-30px;
        left:100px;
        display:block; 
    }
    </style>
    <h1>伴唱機聯盟 伴唱歌曲搜尋器 (beta)</h1>
    <h3>目前歌曲總數: <label id="songCount"><?php echo $songCount; ?></label></h3>
    <h3>最後更新時間: <label id="updateTime"><?php echo $updateTime; ?></label>(每小時更新)</h3>
    <h3>完整歌單excel: <a href="" id="excel"><?php echo $excel; ?></a></h3>
    <img src = "pic/LINE.jpg" width="400px" height="400px"><br>
        搜尋條件(可輸入歌名或歌手，不支援多條件搜尋)<br>
        搜尋空白會顯示最新100筆(新到舊)<br><br>
        <input id="select_op";>
        <input type="button" value="伴唱聯盟查詢" onclick="check();">
        <input type="button" value="歡歌伴奏查詢" onclick="hsing();">
        <br />
        <br />
        快速選單
        <br>
        <br>
        <input type="button" value="點唱排行" onclick="ranking();">
        <input type="button" value="沒人要唱" onclick="nobody();">
        <input type="button" value="藍精靈" onclick="uploadMan('1457789');">
        <input type="button" value="小美" onclick="uploadMan('569261');">
        <input type="button" value="小舍" onclick="uploadMan('694589');">
        <br>
        <br>
        <input type="button" value="冰霜" onclick="uploadMan('859226');">
        <input type="button" value="Jin" onclick="uploadMan('294548');">
        <input type="button" value="靜萱" onclick="uploadMan('590415');">
        <input type="button" value="小楊民歌" onclick="uploadMan('1347676');">
        <input type="button" value="小志" onclick="uploadMan('1779303');">
        <input type="button" value="偉偉" onclick="uploadMan('2091009');">
        <br>
        <br>
        <input type="button" value="虛擬英文歌說故事" onclick="uploadMan('1893563');">
        <input type="button" value="安東尼洛" onclick="uploadMan('799472');">
        <input type="button" value="英文老歌伴唱" onclick="uploadMan('1760155');">
        <br>
        <br>
        Tips: <br>
        *搜尋以伴唱敘述為主，可使用關鍵字如：我是歌手<br>
        *空格視為字串的一部份。<br>
        *簡體字可能會搜尋不到。
        <br>
        <hr>
        <h3>↓↓↓↓如何快速的在歡歌找到需要的伴奏↓↓↓↓</h3>
        先透過歌單系統搜尋到想要的伴奏後，到歡歌查詢對應的歡歌歌名，查看合唱榜。<br>
        若是合唱榜找不到，則到歡歌加入對應的伴唱機，依照日期尋找。<br>
        <br>
        <hr>
        網站製作：安東尼 洛 (anthony@kusoinlol.com)
        <br>
        網站主機放在美國，若連線稍慢請耐心等待，謝謝。
        <br><br>
        回應訊息：
        <div class="loadingdiv" id="loading">
        <img class="loading" src="pic/720.gif" height="20px">
        </div>
        <br />
        <div id="message"></div>
    <script type="text/javascript">
    getCount();
    getUpdateTime();
    getFileName();
    document.getElementById("loading").style.display = "none";
    </script>
    </body>

</html>