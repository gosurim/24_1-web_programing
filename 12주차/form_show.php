<!DOCTYPE html>
<head>
    <title>FROM 태그 예제: 회원등록</title>
</head>
<body>
    <h2>회원  등록 화면</h2><hr/>
    <form method="post" action="form.php"> <center>
        <table border=0 width="700" cellspacing="1" cellpadding =5>
            <tr>
                <td width="450" align="right">아이디: </td>
                <td width="330"><input type="text" name="id" size="10" maxlength="10"></td>
                
                <td width="200" align="right">성명: </td>
                <td width="300"><input type="text" name="name" size="10" maxlength="10"></td>
            </tr>
            <tr>
                <td width="450" align="right">비밀번호: </td>
                <td><input type="password" name="pw1" size="10" maxlength="10"></td>
                
                <td width="200" align="right">비밀번호 확인: </td>
                <td><input type="password" name="pw2" size="10" maxlength="10"></td>
            </tr>
            <tr>
                <td align="right">휴대폰: </td>
                <td><select name="p1">
                    <option value=" ">  </option>
                    <option value="010"> 010 </option>
                    <option value="011"> 011 </option>
                    <option value="016"> 016 </option>
                    <option value="017"> 017 </option>
                    <option value="019"> 019 </option>
                </select> - 
                <input type="text" name="p2" size="4" maxlength="4"> -
                <input type="text" name="p3" size="4" maxlength="4"> </td>
                <td align="right">성별: </td>
                <td><input type="radio" name="sex" value="남자" checked> 남 
                    <input type="radio" name="sex" value="여자"> 여 </td>
            </tr>
            <tr><td align="right">주소: </td>
                <td colspan="3"> <input type="text" size="62" name="addr"> </td>
            </tr>
            <tr><td align="right">남길 말: </td>
                <td colspan="3"> <textarea name="memo" size="8" cols="64"> </textarea></td>
            </tr>

        </table><br>
        <table border=0 width="800">
            <tr>
            <td align="center"><input type="submit" value="회원 등록"> &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="다시 작성">
            </td>
        </tr></table>
        <input type="hidden" name="thema" value="회원 등록 서식">
    </form>
</body>
</html>