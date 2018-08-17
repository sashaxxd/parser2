<div class="admin-default-index">
    <h1> ПАНЕЛЬ АДМИНА</h1>
    <p>
       <?= 'Версия PHP ' . phpversion() ?><br>
    <div id='clock_txt' style="color: #696969; font-size: 30px; font-family: 'Roboto Medium';"> ТЕКУЩЕЕ ВРЕМЯ:</div>   <div id='clock' style="color: #18436E; font-size: 30px; font-family: 'Roboto Medium';"></div>
    <script>


        window.setInterval(
            function(){
                var d = new Date();
                document.getElementById("clock").innerHTML =     d.toLocaleTimeString();

            }
            , 1000);
    </script>
    </p>

        <h1>Инструкция по сайту</h1>
    <p>
        Нажимаем кнопку парсер, парсим нужную страницу - данные поступают в таблицу базы данных 'parsing'<br>
        Получаем файл excel редактируем как нам нужно и импортирум уже в другую таблицу базы данных 'products'<br>
        Что бы спарсить еще данные очищаем спаршенное.
    </p>
</div>
