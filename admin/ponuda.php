<?php require_once 'header.php'; ?>
<div class="container">
    <?php
    $naslov = $_POST['naslov'];
    $tip = $_POST['tip'];
    $address = $_POST['address'];
    ?>
    <div class="clearfix"><br/></div>
    <div class="form-group">
        <div style="text-align: center;">
            <p class="btn btn-danger btn-xs"><strong>ВАЖНО! </strong> Сликата треба да биде со димензии 1140x450px;</p>
        </div>
        <form id="file_attachment_slider" method="post" enctype="multipart/form-data" action="javascript:void(0);"
            autocomplete="on">
            <label><?php echo BROWSE; ?> </label><input type="file" name="browsed_file" id="browsed_file"
            class="btn btn-warning">
            <a href="javascript:void(0);" onclick="slider_form_script();" class="btn btn-info"
            required><?php echo UPLOAD; ?></a>
        </form>
        <form action="process/processponuda.php" method="post">
            <br/>
            <div id="vpb_upload_status"></div>
            <br/>
            <label for="naslov">Внесете наслов на "артиклот" (Село Небрегово, Манастир Св. Ѓорѓија,...):</label>
            <input type="text" name="naslov" class="form-control" id="naslov">
            <label for="date">Изберете датум кога е направен "артиклот" пр. 01/23/2014 (MM/DD/YYYY):</label>
            <input type="date" name="date" class="form-control" id="date">
            <label for="tip">Тип на "артиклот" (Известување, посети,...) :</label>
            <select name="tip" class="form-control" id="tip">
                <option value=""></option>
                <option value="Лето">Лето</option>
                <option value="Зима">Зима</option>
                <option value="Нова Година">Нова Година</option>
                <option value="Бањи">Wellnes & Spa</option>
                <option value="Шопинг тури">Шопинг тури</option>
                <option value="City Break">City Break</option>
                <option value="Крстарења">Крстарења</option>
                <option value="Далечни Патувања">Далечни Патувања</option>
                <option value="Индивидуални патувања">8-ми Март</option>
                <option value="Осигурување">Осигурување</option>
                <option value="Авио карти">Авио карти</option>
                <option value="rentacar">Рент а кар</option>
                <option value="Концерти">Концерти</option>
                
            </select>
            <br/>
            <label for="ostrov">Одбери остров;</label>
            <select name="ostrov" class="form-control" id="ostrov">
                <option value=""></option>
                <option value="Лефкада">Лефкада</option>
                <option value="Закинтос">Закинтос</option>
                <option value="Кефалонија">Кефалонија</option>
                <option value="Санторини">Санторини</option>
                <option value="Тасос">Крф</option>
                <option value="Евиа">Евиа</option>
                <option value="Крит">Крит</option>
                <option value="Малта">Малта</option>
                <option value="Кипар">Кипар</option>
                <option value="Палма ДЕ Мајорка">Палма ДЕ Мајорка</option>
            </select>
            <br>
            <label for="grad">Град</label>
            <select name="grad" class="form-control" id="grad">
                <option value=""></option>
                <option value="Афутос">Афитос</option>
                <option value="Неа Флогита">Неа Флогита</option>
                <option value="Неа Плагиа">Неа Плагиа</option>
                <option value="Калитеа">Калитеа</option>
                <option value="Полихроно">Полихроно</option>
                <option value="Ханиоти">Ханиоти</option>
                <option value="Пефкохори">Пефкохори</option>
                <option value="Никити">Никити</option>
                <option value="Торони">Торони</option>
                <option value="Каламитси">Каламитси</option>
                <option value="Сарти">Сарти</option>
                <option value="Уранополис">Уранополис</option>
                <option value="Неос Мармарис">Неос Мармарис</option>
                <option value="Неа Рода">Неа Рода</option>
                <option value="Јерисос">Јерисос</option>
                <option value="Паралија">Паралија</option>
                <option value="Олимпик Бич">Олимпик Бич</option>
                <option value="Лептокарија">Лептокарија</option>
                <option value="Неа Пори">Неа Пори</option>
                <option value="Лаганас">Лаганас</option>
                <option value="Тасос">Тасос</option>
                <option value="Агиос Никитас">Агиос Никитас</option>
                <option value="Никиана">Никиана</option>
                <option value="Катизма">Катизма</option>
                <option value="Нидри">Нидри</option>
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
                <option value="Истанбул">Истанбул</option>
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
                <option value="Белград">Белград</option>
                <option value="Минхен">Минхен</option>
                <option value="Краков">Краков</option>
                <option value="Москва">Москва</option>
                <option value="Лисабон">Лисабон</option>
                <option value="Атина">Атина</option>
                <option value="Сараево">Сараево</option>
                <option value="Киев">Киев</option>
                <option value="Варшава">Варшава</option>
                <option value="Дубровник">Дубровник</option>
                <option value="Фиренца">Фиренца</option>
                <option value="Ница">Ница</option>
                <option value="Лондон">Лондон</option>
                <option value="Амстердам">Амстердам</option>
                <option value="Брисел">Брисел</option>
                <option value="Осло">Осло</option>
                <option value="Анталија">Алтанија</option>
                <option value="Бодрум">Бодрум</option>
                <option value="Измир и Кушадаси">Измир и Кушадаси</option>
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
                <option value="Полска">Полска</option>
                <option value="Русија">Русија</option>
                <option value="Португалија">Португалија</option>
                <option value="Босна и Херцеговина">Босна и Херцеговина</option>
                <option value="Украина">Украина</option>
                <option value="Унгарија">Унгарија</option>
                <option value="Чешка">Чешка</option>
                <option value="Швајцарија">Швајцарија</option>
                <option value="Англија">Англија,</option>
                <option value="Белгија">Белгија</option>
                <option value="Норвешка">Норвешла</option>
                <option value="Шведска">Шведска</option>
                
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
            <label for="cena">Цена</label>
            <input type="text" name="cena" class="form-control" id="cena"/>
            <br>
            <label for="popust">Попуст</label>
            <input type="text" name="popust" class="form-control" id="popust"/>
            <br>
            <textarea class="ckeditor" name="rte"></textarea>
            <label for="youtube">Youtube Link</label>
            <input type="text" name="youtube" class="form-control" id="youtube"/>
            <div class="form-group">
                <label for="tags">Tags: </label>
                <input type="text" class="form-control" id="tags" data-role="tagsinput" name="keywords"
                value="page, static">
            </div>
            <div class="clearfix"><br/></div>
            <button type="submit" class="pull-right btn btn-success"><span class="glyphicon glyphicon-check"></span>
            Додади
            </button>
        </form>
    </div>
    <script>
    function slider_form_script() {
    //alert('COOL');
    $("#file_attachment_slider").vPB({
    url: 'vpb_small_image.php',
    beforeSubmit: function () {
    $("#vpb_upload_status").html('<div style="font-family: Verdana, Geneva, sans-serif; font-size:12px; color:black;" align="center">Please wait <img src="images/loadings.gif" align="absmiddle" title="Upload...."/></div><br clear="all">');
    },
    success: function (response) {
    $("#vpb_upload_status").hide().fadeIn('slow').html(response);
    }
    }).submit();
    }
    </script>
</div>
<?php require_once 'footer.php'; ?>