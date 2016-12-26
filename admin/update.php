<?php require_once 'header.php'; ?>
<div class="clearfix"><br /></div>
<?php
$id = $_POST['id'];

$sql = mysqli_query($con, "SELECT * FROM tekst WHERE id = $id");
if (mysqli_connect_errno($con)) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
while ($row = mysqli_fetch_array($sql)) {
echo '

<div class="form-group">
    <form action="process/ponudaupdate.php" method="post" >
        
        <input type="hidden" name="id" value="' .$id.'" />
        
        <label for="naslov">Внесете наслов на "артиклот":</label>
        <input type="text" name="naslov" class="form-control" id="naslov" value="'.$row['title'].'">
        <label for="date">Изберете датум кога е направен "артиклот" пр. 01/23/2014 (MM/DD/YYYY):</label>
        <input type="date" name="date" class="form-control" id="date" value="'.$row['date'].'">
        <br/>
            <label for="ostrov">Одбери остров;</label>
            <select name="ostrov" class="form-control" id="ostrov">
                <option value=""></option>
                <option value="Скијатос">Скијатос</option>
                <option value="Скопелос">Скопелос</option>
                <option value="Крф">Крф</option>
                <option value="Афутос">Афитос</option>
            </select>
            <br>
            <label for="tip">Тип на "артиклот" (Известување, посети,...) :</label>
            <select name="tip" class="form-control" id="tip">
                <option value=""></option>
                <option value="Лето">Лето</option>
                <option value="Зима">Зима</option>
                <option value="Патувања">Патувања</option>
                <option value="Бањи">Бањи</option>
                <option value="Крстосувања">Крстосувања</option>
                <option value="Далечни дестинации">Далечни дестинации</option>
            </select>
            <br/>
            <label for="grad">Град</label>
            <select name="grad" class="form-control" id="grad">
                <option value=""></option>
                <option value="Неа Флогита">Неа Флогита</option>
                <option value="Неа Плагиа">Неа Плагиа</option>
                <option value="Калитеа">Калитеа</option>
                <option value="Полихроно">Полихроно</option>
                <option value="Ханиоти">Ханиоти</option>
                <option value="Перхохори">Перхохори</option>
                <option value="Никити">Никити</option>
                <option value="Торони">Торони</option>
                <option value="Каламици">Каламици</option>
                <option value="Сарти">Сарти</option>
                <option value="Уранополис">Уранополис</option>
                <option value="Неос Мармарис">Неос Мармарис</option>
                <option value="Неа Рода">Неа Рода</option>
                <option value="Јерисос">Јерисос</option>
                <option value="Лефкада">Лефкада</option>
                <option value="Паралија">Паралија</option>
                <option value="Олимпик Бич">Олимпик Бич</option>
                <option value="Лептокарија">Лептокарија</option>
                <option value="Неа Порли">Неа Порли</option>
                <option value="Лаганас">Лаганас</option>
                <option value="Кефалонија">Кефалонија</option>
                <option value="Тасос">Тасос</option>
                <option value="Агиос Никитас">Агиос Никитас</option>
                <option value="Никиана">Никиана</option>
                <option value="Катизна">Катизна</option>
                <option value="Нидри">Нидри</option>
                <option value="Евиа">Евиа</option>
                <option value="Пефки">Пефки</option>
                <option value="Парга">Парга</option>
                <option value="Сивота">Сивота</option>
                <option value="Врахос">Врахос</option>
                <option value="Канали">Канали</option>
                <option value="Касандра">Касандра</option>
                <option value="Ситонија">Ситонија</option>
                <option value="Хотели">Хотели</option>
                <option value="Атос">Атос</option>
                <option value="Копаоник">Копаоник</option>
                <option value="Златибор">Златибор</option>
                <option value="Банско">Банско</option>
                <option value="Боровец">Боровец</option>
                <option value="Пампорево">Пампорево</option>
                <option value="Сандански">Сандански</option>
                <option value="Истамбул">Истамбул</option>
                <option value="Софија">Софија</option>
                <option value="Блед">Блед</option>
                <option value="Виена">Виена</option>
                <option value="Братислава">Братислава</option>
                <option value="Букурешт">Букурешт</option>
                <option value="Милано">Милано</option>
                <option value="Верона">Верона</option>
                <option value="Солун">Солун</option>
                <option value="Барселона">Барселона</option>
                <option value="Париз">Париз</option>
                <option value="Стокхолм">Стокхолм</option>
                <option value="Рим">Рим</option>
                <option value="Венеција">Венеција</option>
                <option value="Амстердам">Амстердам</option>
                <option value="Брисел">Брисел</option>
                <option value="Берлин">Берлин</option>
                <option value="Копенхаген">Копенхаген</option>
                <option value="Дортмунд">Дортмунд</option>
            </select>
            <br/>
            <label for="drzava">Држава</label>
            <select name="drzava" class="form-control" id="drzava">
                <option value=""></option>
                <option value="Грција">Грција</option>
                <option value="Хрватска">Хрватска</option>
                <option value="Бугарија">Бугарија</option>
                <option value="Албанија">Албанија</option>
                <option value="Црна Гора">Црна Гора</option>
                <option value="Србија">Србија</option>
                <option value="Словенија">Словенија</option>
                <option value="Шпанија">Шпанија</option>
                <option value="Данска">Данска</option>
                <option value="Австрија">Австрија</option>
                <option value="Франција">Франција</option>
                <option value="Словачка">Словачка</option>
                <option value="Турција">Турција</option>
                <option value="Романија">Романија</option>
                <option value="Германија">Германија</option>
                <option value="Италија">Италија</option>
                <option value="Македонија">Македонија</option>
            </select>
            <br/>
            <label for="destinacii">Далечни дестинации</label>
            <select name="destinacii" class="form-control" id="destinacii">
                <option value=""></option>
                <option value="Тајланд">Тајланд</option>
                <option value="Малдиви">Малдиви</option>
                <option value="Шри ланка">Шри ланка</option>
                <option value="Индокина">Индокина</option>
                <option value="Филипини">Филипини</option>
                <option value="Африка">Африка</option>
                <option value="Куба">Куба</option>
                <option value="Маурициус">Маурициус</option>
                <option value="Израел">Израел</option>
                <option value="Индија">Индија</option>
                <option value="Јапонија">Јапонија</option>
                <option value="Мароко">Мароко</option>
            </select>
            <br>
        ';
        
        }
        ?>
        
    </select>
    <br />
    <?php
    $id = $_POST['id'];
    
    $sql = mysqli_query($con, "SELECT * FROM tekst WHERE id = $id");
    if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    while ($row = mysqli_fetch_array($sql)) {
    echo '
    <textarea class="ckeditor" name="rte">'.$row['rte'].'</textarea>
    <label for="youtube">Youtube Link</label>
    <input type="text" name="youtube" class="form-control" id="youtube" value="'.$row['youtube'].'"/><br>
    <label for="keywords">Keywords</label>
    <input type="text" class="form-control" id="tags" data-role="tagsinput" name="keywords" value="' . $row['keywords'] . '"/>
    <div class="clearfix"><br /></div>
    <button type="submit" class="pull-right btn btn-success"> <span class="glyphicon glyphicon-check"></span> Додади  </button>
</form>
</div>
';
}
?>
<?php require_once 'footer.php'; ?>