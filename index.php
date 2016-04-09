<?php $_GET['p'] = realpath($path = __DIR__ . '/'. ($_GET['p'] ?? 'main') . '.php') !== false ? $_GET['p'] ?? 'main' : 'main'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Orange Management</title>
    <style type="text/css">
        html, body {
            height: 100%;
            padding: 0;
            margin: 0 auto;
            font-family: arial, serif;
            background: #fff;
            color: #000;
            line-height: 1.3em;
        }

        .grad {
            height: 5px;
            width: 100%;
        }

        .grad-main {
            background: #ffbf00; /* Old browsers */
            background: -moz-linear-gradient(left,  #ffbf00 0%, #a06114 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left,  #ffbf00 0%,#a06114 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right,  #ffbf00 0%,#a06114 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffbf00', endColorstr='#a06114',GradientType=1 ); /* IE6-9 */
        }

        .grad-people {
            background: #b103c4; /* Old browsers */
            background: -moz-linear-gradient(left, #b103c4 0%, #420049 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left, #b103c4 0%,#420049 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right, #b103c4 0%,#420049 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b103c4', endColorstr='#420049',GradientType=1 );
        }

        .grad-code {
            background: #0497f9; /* Old browsers */
            background: -moz-linear-gradient(left, #0497f9 0%, #001c9b 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left, #0497f9 0%,#001c9b 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right, #0497f9 0%,#001c9b 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0497f9', endColorstr='#001c9b',GradientType=1 );
        }

        .grad-docs {
            background: #ef0408; /* Old browsers */
            background: -moz-linear-gradient(left, #ef0408 0%, #5b0001 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left, #ef0408 0%,#5b0001 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right, #ef0408 0%,#5b0001 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ef0408', endColorstr='#5b0001',GradientType=1 );
        }

        .grad-positions {
            background: #6be004; /* Old browsers */
            background: -moz-linear-gradient(left, #6be004 0%, #0e5900 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left, #6be004 0%,#0e5900 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right, #6be004 0%,#0e5900 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6be004', endColorstr='#0e5900',GradientType=1 );
        }

        

        header {
            -webkit-box-shadow: inset 0 10px 10px -10px rgba(0,0,0,0.8);
            -moz-box-shadow: inset 0 10px 10px -10px rgba(0,0,0,0.8);
            box-shadow: inset 0 10px 10px -10px rgba(0,0,0,0.8);

            background: #2f2f2f;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
        }

        header img {
            float: left;
        }

        header h1 {
            text-shadow: 2px 2px #000;
        }

        #header-top {
            width: 100%;
            height: 110px;
            display: table;
        }

        #logo {
            display: table-cell;
            vertical-align: middle;
            width: 70px;
        }

        #logo img {
            margin-right: 10px;
        }

        #logo-name {
            display: table-cell;
            vertical-align: middle;
            font-size: 1.5em;
            font-weight: bold;
            text-shadow: 2px 2px rgba(0,0,0,0.1);
        }

        nav {
            display: table-cell;
            vertical-align: middle;
        }

        nav ul {
            float: right;
            list-style-type: none;
        }

        nav li {
            display: inline;
            margin-left: 10px;
            padding-bottom: 5px;
        }

        nav li:hover, nav li.active {
            border-bottom: 3px solid #ffbf00;
        }

        nav a {
            color: #4D4D4D;
            font-weight: bold;
            font-size: 1em;
        }

        nav a:hover, nav li.active a {
            color: #000;
        }

        .cont {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px 0 20px;
            box-sizing: border-box;
        }

        main {
            color: #4D4D4D;
            background: #fff;
            font-size: 1.3em;
            line-height: 1.7em;
        }

        main img {
            border: 1px solid #BFBFBF;
            background: #fff;
            pading: 5px;
        }

        main a {
            color: #ffbf00;
        }

        .center {
            margin: 0 auto;
            text-align: center;
        }

        footer {
            font-size: 0.9em;
            color: #fff;
            background: #2f2f2f;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
<div id="out">
    <?php include 'header.php'; ?>
    <main>
        <div class="cont">
            <?php include realpath($path = __DIR__ . '/'. $_GET['p'] . '.php'); ?>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</div>
</body>
</html>
