<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="IMG/logo_black.png"/>
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
        @import url('https://fonts.googleapis.com/css?family=Montserrat');
        .menu{
            width: 100%;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            font-family: 'Roboto', sans-serif;
            background-color: dodgerblue;
            height: 120px;
        }
        .menu ul{
            list-style: none;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            width: 90%;
            margin-left: 5%;
            padding: 0px;
        }
        .menu ul li{
            width: auto;
            text-align: center;
            cursor: pointer;
            font-size: 20px;
            transition: all 0.5s;
        }
        .menu ul li:hover{
            height: auto;
            width: auto;
            font-size: 30px;
            transition: all 0.5s;
            background-color: darkorange;
            color: #FFF !important; 
            padding: 15px;
        }
        .menu ul li i{
            font-size: 50px;
        }
        .menu ul a{
            text-decoration: none;
            color: #000;
        }
    
    
    </style>
</head>
<div class="menu">
    <ul>
        <a href="home.php">
            <li id="index"><i class="fas fa-home"></i><br>Início</li>
        </a>
        <a href="pesquisa.php">
            <li id="pesquisa"><i class="fas fa-book"></i><br>Pesquisas</li>
        </a>
        <a href="projetos.php">
            <li id="projetos"><i class="fas fa-chart-pie"></i><br>Projetos</li>
        </a>
        <a href="">
            <li id="infescola"><i class="fas fa-chalkboard-teacher"></i><br>Inf. na Escola</li>
        </a>
        <a href="contato.php">
            <li id="contato"><i class="fas fa-phone"></i><br>Contato</li>
        </a>
    </ul>
</div>