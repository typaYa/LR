<?php
session_start();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/92ad0a40ce.js" crossorigin="anonymous"></script>

</head>
<style>

    *{
        margin: 0;
        padding: 0;
    }
    .infoBlock{
        width: 94%;

       margin-left: 3%;
        background-color: white;
    }
    .content{
        width: 94%;
        padding-top: 3%;

    }
    .nameDescription{
        display: flex;
    }
    .DescriptionMin{
        color: #afafaf;
        margin-left: 15px;
        font-size: 12px;
    }
    .DescriptionMinMini{
        margin-left: 7px;
        font-weight: 700;
        font-size: 12px;
    }
    .infoContent{
        display: flex;
    }
    .infoCall{
        display: flex;
    }
    .infoPayContent{
        border: 2px solid #e1e1e1;
     max-width: 70%
    }
    .btn-primary{
        font-weight: 700;
        color: black;
        background: white;
        border: none;
    }
    .btn-primary:hover{
        border: none;
        font-weight: 700;
        color: blue;
        background: white;
    }
    .btn-primary:before{
        border: none;
        border-bottom: 3px solid blue;
    }
    .btn-primary:focus{
        border: none;
        border-bottom: 3px solid blue;
        color: blue;
        background: white;
    }
    .card-body{
        max-width: 70%;
    }


     li{
        font-size: 12px;
    }

    .card-body p{
        font-size: 12px;
    }

    .CharacterMain{
        font-size: 17px;
    }
    .CharacterMin{

        margin-left: 200px;
    }
    .nav{
        padding: 3px;
        font-size: 12px;
    }
    .nav1{
        padding: 4px;
        margin-left: 13px;
        color: black;
    }
    .nav2{
        color: black;
        padding: 4px;
        margin-left: 13px;
    }
    .nav3{
        color: grey;
        padding: 6px;
        font-size: 10px;
    }
    .nav4{
        color: black;
        padding: 6px;
        font-size: 10px;
    }



</style>
<body style="background: #eeeefd">





<div class="container" style="min-width: 100%;margin: 0;padding: 0">
<div class="header" style="width:100%;background:white;display:flex; padding: 20px;border-top: 1px solid black;border-bottom: 1px solid #f3f3f3">
    <div class="headerIkon" style="">
        <svg width="250" height="27" viewBox="0 0 250 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.4493 0H0V3.36505H31.4493V0Z" fill="#2CCBD1"></path> <path d="M31.4493 5.91162H0V9.27667H31.4493V5.91162Z" fill="#2CCBD1"></path> <path d="M31.4493 11.8118H0V15.1882H31.4493V11.8118Z" fill="#2CCBD1"></path> <path d="M31.4493 17.7234H0V21.0998H31.4493V17.7234Z" fill="#2CCBD1"></path> <path d="M31.4493 23.635H0V27.0001H31.4493V23.635Z" fill="#2CCBD1"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M208.184 20.7019H199.588C199.994 20.1254 200.287 19.4774 200.452 18.792C200.641 18.0298 200.733 17.2467 200.725 16.4615V8.21935H208.184V20.7019ZM196.325 20.7019V25.0673H198.065V22.3503H210.049V25.0673H211.788V20.7019H209.923V6.5482H198.974V16.1772C198.99 17.0782 198.864 17.9761 198.599 18.8375C198.36 19.5731 197.909 20.2218 197.303 20.7019H196.325ZM191.777 16.7457H184.955L188.082 8.21935H188.65L191.777 16.7457ZM186.899 6.51409L181.055 22.3162H182.852L184.33 18.269H192.289L193.79 22.3162H195.597L189.719 6.51409H186.899ZM165.353 20.8951L165.49 22.5663C166.162 22.5311 166.821 22.3569 167.423 22.0547C167.939 21.7796 168.386 21.3909 168.73 20.9179C169.078 20.4171 169.325 19.8534 169.458 19.2581C169.614 18.5642 169.69 17.8548 169.685 17.1436V8.21935H177.144V22.3503H178.884V6.5482H167.946V16.7002C167.947 17.1902 167.921 17.6798 167.866 18.1667C167.83 18.6227 167.714 19.069 167.525 19.4855C167.349 19.8685 167.079 20.2009 166.74 20.4518C166.329 20.7268 165.848 20.8804 165.353 20.8951ZM152.357 6.5482V22.3503H154.086V14.9381H155.439L162.704 22.3503H165.092L156.905 14.0855L164.194 6.5482H161.92L155.507 13.2442H154.154V6.5482H152.357ZM142.261 22.5436H144.114C144.938 22.5586 145.761 22.4862 146.57 22.3276C147.166 22.2035 147.724 21.9384 148.196 21.5545C148.634 21.1775 148.951 20.679 149.106 20.1221C149.315 19.3831 149.411 18.6163 149.39 17.8484V16.8139H147.582C147.594 16.9425 147.594 17.0718 147.582 17.2004V17.5642C147.595 18.1299 147.538 18.6951 147.411 19.2467C147.319 19.6409 147.109 19.9976 146.809 20.2699C146.484 20.5389 146.09 20.7121 145.672 20.7701C145.096 20.8599 144.515 20.9017 143.932 20.8951H142.807C142.199 20.8979 141.592 20.8675 140.987 20.8042C140.471 20.7377 139.991 20.5018 139.623 20.1335C139.25 19.7691 139.013 19.2875 138.952 18.7692C138.877 18.0822 138.843 17.3913 138.85 16.7002V12.1528C138.843 11.4617 138.877 10.7708 138.952 10.0838C139.013 9.56555 139.25 9.08388 139.623 8.71956C140.007 8.38588 140.482 8.17587 140.987 8.11704C141.589 8.01908 142.197 7.96588 142.807 7.95788H144.023C144.59 7.95207 145.157 7.9939 145.717 8.08293C146.127 8.14867 146.516 8.30818 146.854 8.54904C147.145 8.80118 147.354 9.13334 147.457 9.50398C147.594 10.0152 147.655 10.5438 147.639 11.0728V11.5048H149.447V10.8568C149.467 10.1284 149.363 9.40181 149.14 8.70819C148.962 8.16944 148.635 7.69234 148.196 7.33262C147.719 6.9537 147.157 6.69622 146.559 6.5823C145.775 6.41131 144.973 6.3312 144.171 6.34356H142.318C141.483 6.32927 140.649 6.42482 139.839 6.62777C139.227 6.78942 138.667 7.10663 138.213 7.54862C137.777 8.01897 137.471 8.59502 137.326 9.21977C137.129 10.0538 137.037 10.9094 137.053 11.7663V17.1322C137.037 17.9891 137.129 18.8447 137.326 19.6787C137.471 20.3035 137.777 20.8795 138.213 21.3499C138.664 21.7957 139.225 22.1135 139.839 22.2707C140.646 22.4683 141.476 22.5601 142.306 22.5436H142.261ZM121.124 6.5482V22.3503H122.864V15.029H131.96V22.3503H133.699V6.5482H131.96V13.3692H122.864V6.5482H121.124ZM108.731 1.93262H107.878C107.876 2.71313 108.164 3.46669 108.685 4.04714C109.272 4.53608 110.027 4.77672 110.789 4.71788C111.556 4.77988 112.318 4.54371 112.915 4.05851C113.428 3.47009 113.708 2.71348 113.7 1.93262H112.835C112.83 2.15111 112.778 2.36589 112.682 2.56215C112.585 2.75841 112.448 2.93149 112.278 3.06946C111.832 3.34221 111.311 3.46934 110.789 3.43325C110.263 3.46798 109.739 3.34104 109.288 3.06946C109.117 2.93306 108.978 2.76031 108.882 2.5637C108.785 2.3671 108.734 2.15154 108.731 1.93262ZM104.285 6.5482V22.3503H106.98L115.553 8.21935V22.3503H117.292V6.5482H114.598L106.025 20.6564V6.5482H104.285ZM98.2819 16.7798H91.4599L94.5866 8.25346H95.1551L98.2819 16.7798ZM93.4155 6.5482L87.5486 22.3503H89.3678L90.8459 18.3031H98.8049L100.306 22.3503H102.114L96.2808 6.5482H93.4155ZM71.8808 20.8951L72.0173 22.5663C72.6745 22.5249 73.3165 22.3509 73.9047 22.0547C74.421 21.7796 74.868 21.3909 75.2122 20.9179C75.5603 20.4171 75.8075 19.8534 75.9399 19.2581C76.0959 18.5642 76.1722 17.8548 76.1673 17.1436V8.21935H83.626V22.3503H85.3656V6.5482H74.4732V16.7002C74.4759 17.1977 74.4493 17.695 74.3936 18.1895C74.3517 18.6445 74.2365 19.0899 74.0525 19.5082C73.8766 19.8913 73.6067 20.2236 73.268 20.4745C72.8532 20.7398 72.3731 20.8854 71.8808 20.8951ZM57.0999 6.5482V22.3503H58.8395V15.029H67.9355V22.3503H69.6751V6.5482H67.9014V13.3692H58.8054V6.5482H57.0999ZM46.5486 7.95788H47.5264C48.3109 7.95788 48.9931 7.95788 49.5616 8.04883C50.1214 8.11621 50.6482 8.34984 51.0738 8.71956C51.469 9.0638 51.7239 9.5412 51.7901 10.061C51.8861 10.754 51.9279 11.4534 51.9152 12.1528V16.7002C51.9252 17.3992 51.8872 18.0981 51.8015 18.792C51.7391 19.3041 51.4877 19.7744 51.0966 20.1107C50.662 20.4823 50.1286 20.7193 49.5616 20.7928C48.8858 20.8666 48.2062 20.9007 47.5264 20.8951H46.5486C45.8725 20.9008 45.1967 20.8666 44.5247 20.7928C43.961 20.7197 43.4311 20.4825 43.0011 20.1107C42.6091 19.7784 42.3539 19.3126 42.2848 18.8034C42.1836 18.107 42.138 17.4038 42.1484 16.7002V12.221C42.1384 11.5137 42.184 10.8067 42.2848 10.1065C42.3512 9.59314 42.6066 9.12294 43.0011 8.78777C43.4321 8.41952 43.962 8.18624 44.5247 8.11704C45.1949 8.01799 45.8711 7.96481 46.5486 7.95788ZM46.0483 22.5436H48.0494C48.9473 22.5636 49.8444 22.4758 50.7213 22.2821C51.3794 22.135 51.9872 21.8175 52.4837 21.3612C52.9463 20.9 53.2762 20.3228 53.4388 19.6901C53.6519 18.8546 53.7514 17.9942 53.7344 17.1322V11.7663C53.7519 10.8967 53.6525 10.0288 53.4388 9.18567C53.2797 8.55487 52.9492 7.9804 52.4837 7.52588C51.985 7.07508 51.3777 6.76167 50.7213 6.61641C49.8402 6.42402 48.9399 6.33248 48.038 6.34356H46.0483C45.1501 6.33175 44.2536 6.4233 43.3764 6.61641C42.7173 6.76088 42.1089 7.07879 41.614 7.53725C41.1411 7.99237 40.8062 8.57158 40.6476 9.20841C40.4282 10.0427 40.3287 10.904 40.3519 11.7663V17.1322C40.3287 17.9945 40.4282 18.8558 40.6476 19.6901C40.8084 20.326 41.1431 20.9046 41.614 21.3612C42.1089 21.8197 42.7173 22.1376 43.3764 22.2821C44.2532 22.4764 45.1504 22.5642 46.0483 22.5436Z" fill="#262526"></path></svg>
    </div>
    <div class="headerSearch" style=>
        <input type="text" style="height:2.8vw;padding:6px;width: 40vw;border: 1px solid #f3f3f3;" placeholder="Введите название или артикул товара, который вы ищите">
        <button style="border: 1px solid #f3f3f3;background: #f3f3f3;height: 3vw;width: 6vw;margin-left: -5px">Поиск <svg width="20px" height="20px" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.1434 8.57147C16.1434 12.7531 12.7535 16.1429 8.57171 16.1429C4.38994 16.1429 1 12.7531 1 8.57147C1 4.38989 4.38994 1 8.57171 1C12.7535 1 16.1434 4.38989 16.1434 8.57147Z" stroke-width="2" stroke="currentColor"></path> <path d="M20 19.9995L14.1665 14.1662" stroke-width="2" stroke="currentColor"></path></svg></button>
    </div>
    <div class="headerNav" style="display:flex;margin-left: 30px">
        <div>
        <a href="/favorite" class="carts mr-5 pt-1"><div class="flex flex-col"><div class="flex"><i style="margin-left: 24px;"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart" color="black"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></i> <div class="flex items-center space-x-1 text-blue-400 text-base font-bold transform -translate-x-8 -translate-y-5 2xl:-translate-y-6" style="margin-left: 10px;"><!----></div></div> <span>Избранное</span></div></a>
    </div>
        <div style="margin-left: 4px">
            <a href="/cart" class="carts mr-5 pt-1"><div class="flex flex-col"><div class="flex self-end"><!----> <div class="os-icon" style="width: 24px; color: inherit;"><svg width="28" height="24" viewBox="" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.93323 10H2.46655V14.1667M10.6888 15.8333H5.75545" stroke="#262526" stroke-width="2"></path> <path d="M18 13H28" stroke="#262526" stroke-width="2"></path> <path d="M18 0V17.5" stroke="#262526" stroke-width="2"></path> <path d="M17.089 15.8332C17.089 17.5948 15.6834 18.9998 13.9778 18.9998C12.2722 18.9998 10.8667 17.5948 10.8667 15.8332C10.8667 14.0716 12.2722 12.6665 13.9778 12.6665C15.6834 12.6665 17.089 14.0716 17.089 15.8332Z" stroke="#262526" stroke-width="2"></path> <path d="M5.5778 16.6666C5.5778 17.968 4.54042 18.9999 3.2889 18.9999C2.03739 18.9999 1 17.968 1 16.6666C1 15.3652 2.03739 14.3333 3.2889 14.3333C4.54042 14.3333 5.5778 15.3652 5.5778 16.6666Z" stroke="#262526" stroke-width="2"></path> <path d="M13.9778 12.5001L11.5112 1.66675H4.93335V10.0001L9.45559 12.5001H13.9778Z" stroke="#262526" stroke-width="2"></path></svg></div> <div class="flex items-center space-x-1 text-blue-400 text-base font-bold transform -translate-x-8 -translate-y-5 2xl:-translate-y-6" style="margin-left: 2px;"><div class="os-icon" style="width: 12px; color: inherit;"></div> <!----></div></div> <span class="cart__label">Корзина</span></div></a>
        </div>
    </div>
    <div class="headerReg"  style="display: flex;margin-left: ">
        <?php if (!isset($_SESSION['login'])){
            ?><a href="reg.php"><button style="max-height:2.8vw; background: #efefef;border: none;margin-left: 10px;">Регистрация</button></a><?php
        }
        else{
            ?> <a href="exit.php">Выход</a>  <?php
        }
        ?>
        <?php if (!isset($_SESSION['login'])){
            ?><a href="#" style="margin-left: 20px">Войти</a>
            <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.5 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.33331 14.1666L12.5 9.99998L8.33331 5.83331" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12.5 10H2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>

            <?php
            }
        else{
            ?> <p><?php echo $_SESSION['login']?></p>  <?php
        }
        ?>
        
    </div>
</div>
<div class="nav" style="padding-left: 20px; background-color:white;border-bottom: 1px solid #f3f3f3;min-width: 100%">
    <div class="navContent" style="display: flex;justify-content: space-around">
        <span class="header-categories__button-menu"><div class="os-icon header-categories__icon" style="width: 19px; color: inherit;"><svg width="100%" height="100%" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.33333 2.5H2.5V8.33333H8.33333V2.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.5001 2.5H11.6667V8.33333H17.5001V2.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.5001 11.6667H11.6667V17.5H17.5001V11.6667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.33333 11.6667H2.5V17.5H8.33333V11.6667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></span>
        <a class="nav1" href="">Все категории</a>
        <a class="nav1" href="">Электрика</a>
        <a class="nav1" href="">Строительство и ремонт</a>
        <a class="nav1" href="">Дерево</a>
        <a class="nav1" href="">Метал</a>
        <a class="nav1" href="">Складское оборудование</a>
        <a class="nav1" href="">Химия, нефтепродукты, сырье</a>
    </div>
    <div class="navInfo" style="display: flex;margin-left: 12vw;text-align: end">
        <a class="nav2" href="">Поставщики</a>
        <a class="nav2" href="">О проекте</a>
        <a class="nav2" href="">Продавать</a>
        <a class="nav2" href="">Новости</a>
    </div>
</div>
<div class="navnav" style="padding-left: 20px;background-color:white;height: 2vw">

        <a class="nav3" href="">Главная</a>
        <a class="nav3" href="">Электрика</a>
        <a class="nav3" href="">Трансформаторы</a>
        <a class="nav3" href="">Трансформаторы прочие</a>
        <a class="nav3" href="">Schnield Electric</a>
        <a class="nav4" href="">Трансформатор напряжения Phaseo Optimum ABL6 230-400 В 1x230 В 630 ВA</a>
</div>
</div>
<div class="container1" style="min-width: 86%;margin-top: 50px">
<div class="infoBlock" >
    <div class="content" style="margin-left: 5%">
         <div class="name">
            <h4>Трансформатор напряжения Phaseo Optimum ABL6 230-400 В 1x230 В 630 ВA</h4>
         </div>
        <div class="nameDescription" style="margin: auto">
            <p class="DescriptionMin" style="margin: 0">Производитель:</p>
            <p class="DescriptionMinMini" ">Schneider Electric</p>
            <p class="DescriptionMin">Артикул:</p>
            <p class="DescriptionMinMini"> ABL6TS63U</p>
            <div style="display: flex">
            <p class="DescriptionMin"><a href="#">Отзывы 0</a></p>
                <div style="margin-left:10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                </div>
        </div>
        </div>
    </div>

    <div class="infoContent" style="margin-left: 5%">
        <div class="infoImg">
            <img src="https://img.onlinesklad.ru/300x300/26085.webp" data-v-54e2306a="">
        </div>
        <div class="infoContent">
            <div class="infoSpan">

            </div>
            <div class="infoBlock" style="margin-left: 100px">
                <h4 style="color:#afafaf;">Под заказ</h4>
                <p style="max-width: 70%">Компании из списка ниже могут поставить этот товар под заказ.
                    Свяжитесь с ними по указанным контактам.</p>
                <div class="infoCall">
                    <button style="border: none;padding: 13px 27px;font-weight: 700;font-size: 12px">Связаться</button>
                    <div class="like" style="padding-top: 8px;margin-left: 2vw"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg></a></div>
                </div>
                <div class="infoPayContent" style="margin-top: 30px">
                    <div style="display: flex">
                        <div style="margin: 9px"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                            </svg></div>
                        <div><p style="color: #afafaf;margin: 9px">Оплата картой</p></div>
                    </div>
                    <div style="display: flex">
                        <div style="margin: 9px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                            </svg>
                        </div>
                   <p style="color: #afafaf;margin: 9px">Счет на оплату</p>

                </div>
                    <div style="display: flex">
                        <div style="margin: 9px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield" viewBox="0 0 16 16">
                                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                            </svg>
                        </div>
                   <p style="color: #afafaf;margin: 9px">Безопасная сделка</p>
                </div>
                   <p style="font-size: 14px;margin: 9px">Трансформаторы серии Phaseo Optimum- это трансформаторы напряжения, защитные и изолирующие.</p>

                </div>

            </div>
        </div>
    </div>
<!--</div>-->
<div class="collapse1" style="margin-left: 5%;margin-top: 60px">
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
            Предложение поставщиков
        </a>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
            Описание товара
        </a>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
            Характеристика товара
        </a>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
            Под заказ
        </a>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
            Отзывы о товаре
        </a>
    </p>
    <div class="collapse" id="collapseExample1">
        <div class="card card-body">
            Некоторый заполнитель для компонента сворачивания. Эта панель по умолчанию скрыта, но открывается, когда пользователь активирует соответствующий триггер.
        </div>
    </div>
    <div class="collapse" id="collapseExample2">
        <div class="card card-body" >
            <p>Решения Phaseo становятся еще более компактными и простыми,предлагая 3 трансформатора для каждой среды.</p>
            <br>
            <p>Линейка Optimum - от 25 ВА до 2500 ВА - Одиночная обмотка</p>
            <ul>
           <li> Монтаж на панели (винт) или омега-направляющей (зависит от модели)</li>
           <li>Рабочая температура +50°C</li>
            </ul>
            <p>Применение</p>
            <ul>
                <li>Промышленность и строительная отрасль: простые машины, транспортировка, обработка, автомобилестроение и т. д.</li>
                <li>Электромагнитные клапаны, контакторы и т. д.</li>
            </ul>

        </div>
    </div>
    <div class="collapse" id="collapseExample3">
        <div class="card card-body" ">
            <div style="display:flex;">
            <p class="CharacterMain">Производитель</p><p class="CharacterMin">Schneider Electric</p>
            </div>
            <div style="display:flex;">
            <p class="CharacterMain">Тип изделия</p> <p class="CharacterMin">Трансформатор</p>
            </div>
                <div style="display:flex;">
            <p class="CharacterMain">Исполнение</p> <p class="CharacterMin">Защитный(-ая), Изолирующий(-ая)</p>
                </div>
                    <div style="display:flex;">
            <p class="CharacterMain">Модель</p> <p class="CharacterMin">ABL6, Phaseo, Phaseo Optimum</p>
                    </div>
                        <div style="display:flex;">
            <p class="CharacterMain">Номинальная мощность</p> <p class="CharacterMin">630</p>
                        </div>
                            <div style="display:flex;">
            <p class="CharacterMain">Количество фаз</p> <p class="CharacterMin">1</p>
                            </div>
                                <div style="display:flex;">
            <p class="CharacterMain">Входное напряжение</p> <p class="CharacterMin">230-400 В</p>
                                </div>
                                    <div style="display:flex;">
            <p class="CharacterMain">Выходное напряжение</p> <p class="CharacterMin">230 В</p>
                                    </div>
                                        <div style="display:flex;">
            <p class="CharacterMain">Степень защиты</p> <p class="CharacterMin">IP20</p>
                                        </div>
                                            <div style="display:flex;">
            <p class="CharacterMain">Частота</p> <p class="CharacterMin">47/63 Гц</p>
                                            </div>
                                                <div style="display:flex;">
            <p class="CharacterMain">Гарантия</p> <p class="CharacterMin">18 месяцев со дня ввода его в эксплуатацию, но не более 24 месяцев с даты поставки лет</p>
                                                </div>
            </div>
    </div>
    <div class="collapse" id="collapseExample4">
        <div class="card card-body">
        <p>Всего предложений:  2</p>

            <div style="display: flex">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.9974 18.3346C14.5998 18.3346 18.3307 14.6037 18.3307 10.0013C18.3307 5.39893 14.5998 1.66797 9.9974 1.66797C5.39502 1.66797 1.66406 5.39893 1.66406 10.0013C1.66406 14.6037 5.39502 18.3346 9.9974 18.3346Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10 6.66797V10.0013" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10 13.332H10.0083" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                <p style="font-size: 15px">Компании из списка ниже могут поставить этот товар под заказ. Свяжитесь с ними по указанным контактам.</p>
            </div>
            <p>Сортировка по:</p>
            <div style="display: flex">
            <a href="">
            <div style="display: flex">
               <p style="font-size: 15px">Продавец</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 4.16406V15.8307" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.8307 10L9.9974 15.8333L4.16406 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
        </a>
            <a href="">
            <div style="display: flex">
                <p style="font-size: 15px;margin-left: 20px">Рассположение</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 4.16406V15.8307" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.8307 10L9.9974 15.8333L4.16406 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
            </a>
            </div>
            <div style="border: 1px solid black">
                <a href="" style="padding: 5px"><h5 style="color: black;margin-left: 10px">ЭНЕРГЕТИЧЕСКАЯ КОМПАНИЯ СИЛОВЫЕ ТРАНСФОРМАТОРЫ, ООО</h5></a>
                <br>
                <p style="margin-left: 10px">Расположение: г Челябинск</p>
                <button style="background: white;border: 1px solid #e5e4e4;margin-left: 88%;margin-bottom: 10px;padding: 10px 5px">Связаться</button>
            </div>
            <div style="border: 1px solid black;margin-top: 20px">
                <a href="" style="padding: 5px"><h5 style="color: black;margin-left: 10px">ТАНДЕМЭНЕРГО, ООО</h5></a>
                <br>
                <p style="margin-left: 10px">Расположение: г Санкт-Петербург</p>
                <button style="background: white;border: 1px solid #e5e4e4;margin-left: 88%;margin-bottom: 10px;padding: 10px 5px">Связаться</button>
            </div>
        </div>
    </div>
    <div class="collapse" id="collapseExample5">
        <div class="card card-body" style="margin-bottom: 100px">
        <p>Всего отзывов:0</p>
            <br>
            <h5>Будьте первым, кто оставит отзыв!</h5>
            <br>
            <button style="width:12vw;height:3vw;border: 1px solid #ecebeb;background: white;">Оставить отзыв</button>
        </div>
    </div>
</div>
</div>
    <div class="end" style="background: white;display: flex;justify-content: space-around;margin-top: 50px;padding-bottom: 60px">
        <div style=";padding-top: 60px">
            <p style="padding: 5px" >Все категории</p>
            <ul style="list-style: none">
                <li style="padding: 5px"><a href="">Электрика</a></li>
                <li style="padding: 5px"><a href="">Дерево</a></li>
                <li style="padding: 5px"><a href="">Складское оборудование</a></li>
                <li style="padding: 5px"><a href="">Климат, водоснабжение</a></li>
                <li style="padding: 5px"><a href="">Инструменты</a></li>
                <li style="padding: 5px"><a href="">Электроника</a></li>
            </ul>
        </div>
        <div  style=";padding-top: 60px">
            <ul style="list-style: none">
                <br><br>
                <li style="padding: 5px"><a href="">Строительство и ремонт</a></li>
                <li style="padding: 5px"><a href="">Металл</a></li>
                <li style="padding: 5px"><a href="">Химия, нефтепродукты, сырье</a></li>
                <li style="padding: 5px"><a href="">Промышленное оборудование</a></li>
                <li style="padding: 5px"><a href="">Безопасность</a></li>
                <li style="padding: 5px"><a href="">Транспорт</a></li>
            </ul>
        </div>
        <div  style=";padding-top: 60px">
            <p style="padding: 5px" >Информация</p>
            <ul style="list-style: none">
                <li style="padding: 5px"><a href="">Поставщики</a></li>
                <li style="padding: 5px"><a href="">О проекте</a></li>
                <li style="padding: 5px"><a href="">Работа с Сайтом</a></li>
                <li style="padding: 5px"><a href="">Реквизиты ОНЛАЙНСКЛАД</a></li>
                <li style="padding: 5px"><a href="">Продавать</a></li>
                <li style="padding: 5px"><a href="">Новости</a></li>
            </ul>
        </div>
        <div  style=";padding-top: 60px">
            <p style="padding: 5px" >Контакты</p>
            <ul style="list-style: none">
                <li style="padding: 5px">Телефон <br><h6><a href="">8 800 550 67 61</a></h6></li>
                <li style="padding: 5px">Электронная почта для связи<a href=""><h6>mail@onlinesklad.ru</h6></a></li>
                <li style="padding: 5px"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fab fa-vk" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                    </svg> <i class="fab fa-vk fa-xl" "></i><i class="fa-brands fa-instagram fa-xl" style="margin-left: 0.3vw"></i></li>
            </ul>
        </div>
        <div style="display: flex">
            <div style="margin-left: 10px"></div>
            <div style="margin-left: 10px"></div>
            <div style="margin-left: 10px"></div>

        </div>
    </div>
<div class="footer" style="background: #0c0c31;display: flex">
    <div>
        <p style="color: white;font-size: 10px"><a href="" style="color: white">Пользовательское соглашение</a></p>
        <p style="color: white;font-size: 10px"><a href="" style="color: white">Политика обработки персональных данных</a></p>

    </div>
    <div style="margin-left: 70%">

        <br>
        <p style="color: white;font-size: 10px">© 2023 ООО "ОНЛАЙНСКЛАД"</p>
    </div>
</div>
</body>
</html>
