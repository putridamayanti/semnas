<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Laporan Provinsi</title>
<body>
<style type="text/css">
    #container {
        width: 300px;
        height: 550px;
        margin: auto;
        border: #ffffff 3px solid;
        padding: 70px;
        font-family: 'Roboto', sans-serif;
        background: url("/semnas/images/bg-kartu.png");
    }
    .heading {
        width: 100%;
        padding: 20px;
        text-align: center;
        color: #1d252e;
    }
    .content {
        width: 100%;
        margin-top: 50px;
    }
    .content table {
        width: 100%;
    }
</style>

<div id="container">
    <div class="heading">
        <h1>Kartu Peserta</h1>
        <h3>Seminar Nasional 2016</h3>
    </div>
    <div class="content">
        <table>
            <tr>
                <td>No Peserta</td>
                <td>:</td>
                <td>{{Auth::user()->id}}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{Auth::user()->name}}</td>
            </tr>
            <tr>
                <td>Instansi</td>
                <td>:</td>
                <td>{{Auth::user()->instansi}}</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>{{Auth::user()->jurusan}}</td>
            </tr>
        </table>
    </div>
</div>

</body>
</head>
</html>