<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <style>
        body{
            padding:0;
            margin:0;
            background-image:url('assets/calculator.jpg');
            background-size:cover;
        }
        #calculator{
            background:#fff;
            position:absolute;
            left : 50%;
            top:50%;
            transform:translate(-50%,-60%);
            border-radius:4px;
            padding:20px 40px;
            box-shadow:2px 2px 10px 3px #aaa;
        }
        h1{
            text-align:center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        div{
            margin:10px 0;
        }
        button{
            padding:4px 10.5px;
            margin:0 2px;
            font-weight:600;
        }
        input[type=number] {
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #hasil{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        #container{
            text-align:center;
        }

        button{
            border: none;
            border-radius: 3px;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        button#tambah{
            background-color: #4CAF50;
        }
        button#kurang{
            background-color: #ed4a45;
        }
        button#kali{
            background-color: #45b5ed;
        }
        button#bagi{
            background-color: #d145ed;
        }
        button#modulus{
            background-color: #edc13e;
        }
    </style>
</head>
<body>

<div id="calculator">
    <h1>Kalkulator</h1>

<div id="container">
    <input type="number" id="value1" placeholder="Isi nilai pertama">
    <input type="number" id="value2" placeholder="Isi nilai kedua">

    <div>
        <button id="tambah" onclick="eksekusi('tambah')">+ Tambah</button>
        <button id="kurang" onclick="eksekusi('kurang')">- Kurang</button>
        <button id="kali" onclick="eksekusi('kali')">x Kali</button>
        <button id="bagi" onclick="eksekusi('bagi')">/ Bagi</button>
        <button id="modulus" onclick="eksekusi('modulus')">% Modulus</button>
    </div>

    <h3 id="hasil">Hasil : </h3>
</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script>
        var value1 = $('#value1');
        var value2 = $('#value2');
        var result;

        function eksekusi(status){
            if(status=='tambah'){
                result = parseInt(value1.val()) + parseInt(value2.val());
                $('#hasil').text('Hasil : ' + result);
            }else if(status=='kurang'){
                result = parseInt(value1.val()) - parseInt(value2.val());
                $('#hasil').text('Hasil : ' + result);
            }else if(status=='kali'){
                result = parseInt(value1.val()) * parseInt(value2.val());
                $('#hasil').text('Hasil : ' + result);
            }else if(status=='bagi'){
                result = parseInt(value1.val()) / parseInt(value2.val());
                $('#hasil').text('Hasil : ' + result);
            }else if(status=='modulus'){
                result = parseInt(value1.val()) % parseInt(value2.val());
                $('#hasil').text('Hasil : ' + result);
            }
        }
    </script>

</body>
</html>