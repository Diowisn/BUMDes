<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/about.css">
    <style>
        * {
        box-sizing: border-box;
        }

        body {
        margin: 0;
        }

        /* Create three equal colums that floats next to each other */
        .colum {
        float: left;
        width: 50%;
        padding-top: 0;
        padding-left: 100px;
        height: auto;
        }
        .colum img{
            height: auto;
            width: 550px;
        }

        /* Clear floats after the colums */
        .row2::after {
        content: "";
        display: table;
        clear: both;
        }

        /* Responsive layout - makes the three colums stack on top of each other instead of next to each other */
        @media screen and (max-width:600px) {
        .colum {
            width: 100%;
        }
        }
    </style>
</head>
<body>

    <header>
        <?php include_once('header.html')?>
    </header>

    <h1>BUMDes Sido Mukti Bendungan</h1>
    <div class="row2">
    <div class="colum">
        <img src="assets/img/AHU-01903.AH.01.33.TAHUN 2021-1.png" alt="">
    </div>
    
    <div class="colum">
        <img src="assets/img/pengajuan-nama-1.png" alt="">
    </div>
    </div>

    <footer>
        <?php include_once('footer.html')?>
    </footer>

</body>
</html>