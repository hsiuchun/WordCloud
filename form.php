
<form action="submit.php" method="POST">
請輸入姓名<input type="text" placeholder="english only" name="username"><br/>
請輸入密碼<input type="password" name="pwd"><br/>
請添加檔案<input type="file"><br/>
<img src="https://www.nuk.edu.tw/var/file/0/1000/randimg/mobileadv_966_4222446_14648.jpg" alt="" width="300px" height="auto"><br/>
<input type="picture"><br/>
請選擇顏色<input type="color"><br/>
請選擇範圍<input type="range" min="0" max="100"><br/>
請選擇生日<input type="date"><br/>
請填入信箱<input type="email"><br/>
請選擇你的性別<br/>
<input type="radio" name="gender" value="M">Male<input type="radio" name="gender" value="F">female<br/>
<input type="checkbox" name="int1" value="movie" checked>movie
<input type="checkbox" name="int2" value="novel">novel
<input type="checkbox" name="int3" value="game">game
<input type="checkbox" name="int4" value="sleep">sleep
<input type="checkbox" name="int5" value="eat">eat<br/>



居住城市<select name="city" id="" mutiple>
    <option value="taipei">taipei</option>
    <option value="kaohsiung" selected>kaohsiung</option>
    <option value="tainan">tainan</option>
    <option value="taichung">taichung</option>
</select><br/>

建議<br/>
<textarea name="suggest" id="" cols="30" rows="10"></textarea>

<input type="submit"><input type="reset" value="Clear"><br/>
</form>